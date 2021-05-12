<?php

function bdd_delete(string $query, array $params = []): int
{

    $host_name = 'localhost';
    $database = 'gestion_salle_srv';
    $user_name = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host_name; dbname=$database; charset=utf8mb4", $user_name, $password);
    } catch (PDOException $ex) {
        die('Error : ' . $ex->getMessage());
    }

    if ($params) {
        $req = $db->prepare($query);
        $req->execute($params);
    } else {
        $req = $db->query($query);
    }

    $deleted = $req->rowCount();

    return $deleted;
}

function bdd_insert(string $query, array $params = []): int
{

    $host_name = 'localhost';
    $database = 'gestion_salle_srv';
    $user_name = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host_name; dbname=$database; charset=utf8mb4", $user_name, $password);
    } catch (PDOException $ex) {
        die('Error : ' . $ex->getMessage());
    }

    if ($params) {
        $req = $db->prepare($query);
        $req->execute($params);
    } else {
        $req = $db->query($query);
    }


    $inserted = $req->rowCount();

    return $inserted;
}

function bdd_select(string $query, array $params = [])
{

    $host_name = 'localhost';
    $database = 'gestion_salle_srv';
    $user_name = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host_name; dbname=$database; charset=utf8mb4", $user_name, $password);
    } catch (PDOException $ex) {
        die('Error : ' . $ex->getMessage());
    }

    if ($params) {
        $req = $db->prepare($query);
        $req->execute($params);
    } else {
        $req = $db->query($query);
    }

    $data = $req->fetchAll();

    return $data;
}

function bdd_select_nofetch(string $query, array $params = [])
{

    $host_name = 'localhost';
    $database = 'gestion_salle_srv';
    $user_name = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host_name; dbname=$database; charset=utf8mb4", $user_name, $password);
    } catch (PDOException $ex) {
        die('Error : ' . $ex->getMessage());
    }

    if ($params) {
        $req = $db->prepare($query);
        $req->execute($params);
    } else {
        $req = $db->query($query);
    }

    return $req;
}

function bdd_update(string $query, array $params = []): int
{

    $host_name = 'localhost';
    $database = 'gestion_salle_srv';
    $user_name = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host_name; dbname=$database; charset=utf8mb4", $user_name, $password);
    } catch (PDOException $ex) {
        die('Error : ' . $ex->getMessage());
    }

    if ($params) {
        $req = $db->prepare($query);
        $req->execute($params);
    } elseif ($params and $bind) {
        $req = $db->prepare($query);
        $req->execute($params);
    } else {
        $req = $db->query($query);
    }

    $updated = $req->rowCount();

    return $updated;
}


?>
