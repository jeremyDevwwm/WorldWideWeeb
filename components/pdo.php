<?php
    $error=null;
    try {

        $dbh = new PDO('mysql:host=localhost;dbname=WorldWideWeeb;', "root", "root",[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
        } catch (PDOException $e){
            $error= $e->getMessage();
        }
?>