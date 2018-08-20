<?php
    require 'vendor\autoload.php';

    $bdd = new \app\database\Database();
    $req = $bdd->getPDO()->query('SELECT * FROM users');
    $datas = $req->fetchAll(PDO::FETCH_OBJ);
    foreach ($datas as $data) {
    var_dump($data);
    }
    return $datas;

