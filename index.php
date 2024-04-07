<?php 

    require_once('conexao.php');
    include_once('layout/_header.php');

    if(isset($_GET['excluir'])){
        $id = filter_input(INPUT_GET, 'excluir', FILTER_SANITIZE_NUMBER_INT);

        if($id){
            $conect->exec('DELETE FROM testephp.produtos WHERE id=' .$id);
        }
        header('Location: index.php');
        exit;
    }

    $results = $conect->query('SELECT * FROM produtos')
    // echo'<pre>';
    // print_r($dados);   
    //nome`, `quantidade`, `NCM`, `valor`, `ativo

?>

<div class="card mt-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Todos os Produtos</h5>
        <a class="btn btn-success" href="cadastro.php">Adicionar</a> 
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Quantidade Disponível</th>
                    <th>NCM</th>
                    <th>Valor</th>
                    <th>Ativo</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($results as $item): ?>
                    <tr>
                        <td><?= $item['nome'] ?></td>
                        <td><?= $item['quantidade'] ?></td>
                        <td><?= $item['NCM'] ?></td>
                        <td><?= $item['valor'] ?></td>
                        <td><?= $item['ativo'] ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="cadastro.php?id=<?= $item['id']?>">Editar</a>
                            <button class="btn btn-sm btn-danger" onclick="excluir(<?= $item['id']?>)">Remover</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>
</div>
<script>
    function excluir(id){
        if(confirm("Deseja excluir este produto?")){
            window.location.href = "index.php?excluir=" + id;
        }
    }
</script>



<?php 

include_once('layout/_footer.php');
?>

