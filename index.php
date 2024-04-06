<?php 

    require_once('conexao.php');
;
    $sql = $conect->query('SELECT * FROM produtos');

    $dados = $sql -> fetchAll(pdo::FETCH_ASSOC); 

    echo'<pre>';
    print_r($dados);   

?>