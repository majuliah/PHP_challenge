<?php 

    $pdo = new PDO("mysql:dbname=testephp;host=localhost:3306","root", "banana666");
    $sql = $pdo->query('SELECT * FROM produtos');

    $dados = $sql -> fetchAll(pdo::FETCH_ASSOC); 

    echo'<pre>';
    print_r($dados);    

?>