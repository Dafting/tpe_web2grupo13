<?php

class TableModel {

    private $database;

    public function __construct() {
        $this->database = new PDO('mysql:host=localhost;'.'dbname=db_sneakerfever;charset=utf8', 'root', '');
    }

    function getProductos() {
        $sql = "SELECT * FROM productos";
        $query = $this->database->prepare($sql);
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ); 
        return $productos;
    }

    function getVariantes() {
        $sql = "SELECT * FROM categorias";
        $query = $this->database->prepare($sql);
        $query->execute();
        $variantes = $query->fetchAll(PDO::FETCH_OBJ); 
        return $variantes;
    }
    
    function getVariante($id) {
        $sql = "SELECT * FROM variantes WHERE id=?";
        $query = $this->database->prepare($sql);
        $query->execute([$id]);
        $variante = $query->fetch(PDO::FETCH_OBJ);
        return $variante;
    }

    function getSingleProducto($id) {
        $sql = "SELECT * FROM productos WHERE id=?";
        $query = $this->database->prepare($sql);
        $query->execute([$id]);
        $producto = $query->fetch(PDO::FETCH_OBJ);
        return $producto;
    }

    function addProducto($modelo, $marca, $sku, $precio) {
        $query = $this->database->prepare('INSERT INTO productos(modelo, marca, sku, precio) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$modelo, $marca, $sku, $precio]);
        return $this->database->lastInsertId();
    }
    
    function addVariante($color, $talle, $stock) {
        $query = $this->database->prepare('INSERT INTO variantes(color, talle, stock) VALUES (?, ?, ?)');
        $query->execute([$color, $talle, $stock]);
        return $this->database->lastInsertId();
    }

    function modifyProducto($id, $modelo, $marca, $sku, $precio) {
        try{
            $this->database->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
            $query = $this->database->prepare('UPDATE productos SET id=?, modelo=?, marca=?, sku=?, precio=? WHERE id=?');
            $query->execute([$modelo, $marca, $sku, $precio, $id]);
        }
        catch (PDOException $err) {
            $err->getMessage();
            echo $err;
        }
    }    

    function modifyVariante($id, $descripcion) {
        try{
            $this->database->setAttribute(PDO::ERRMODE_EXCEPTION,PDO::ATTR_ERRMODE);
            $query = $this->database->prepare('UPDATE categorias SET descripcion=? WHERE id=?');
            $query->execute([$descripcion, $id]);
        }
        catch (PDOException $error) {
            $error->getMessage();
            echo $error;
        }
    }    

    function deleteProducto($id) {    
        $query = $this->database->prepare('DELETE FROM productos WHERE id=?');
        $query->execute([$id]);
    }

    function deleteVariante($id) {    
        $query = $this->database->prepare('DELETE FROM variantes WHERE id=?');
        $query->execute([$id]);
    }
    
}