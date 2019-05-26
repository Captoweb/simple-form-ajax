<?php

$data = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
    
];

$pdo = new PDO('mysql:host=localhost;dbname=uzbekajax', 'root', '');
$sql = "INSERT INTO posts (title, content) VALUES (:title, :content)";
$stmt = $pdo->prepare($sql);

$res = $stmt->execute($data);

var_dump($res);

