<?php 
    require_once('conexao.php');

    $id = 0;
    $nome = '';
    $quantidade = 0;
    $NCM = '';
    $valor = 0;
    $ativo = 0;

    if (isset($_POST['id'])) {
        $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $quantidade = filter_input(INPUT_POST, "quantidade", FILTER_SANITIZE_NUMBER_INT);
        $NCM = filter_input(INPUT_POST, "NCM", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $valor = filter_input(INPUT_POST, "valor", FILTER_SANITIZE_NUMBER_FLOAT);
        $ativo = filter_input(INPUT_POST, "ativo", FILTER_SANITIZE_NUMBER_INT);

        if(!$id){
            $stm = $conect->prepare("INSERT INTO testephp.produtos (nome, quantidade, NCM, valor, ativo) VALUES(:nome, :quantidade,:NCM, :valor, :ativo)");
        }else{
            $stm = $conect->prepare("UPDATE produtos SET nome=:nome, quantidade=:quantidade, NCM=:NCM, valor=:valor, ativo=:ativo WHERE id=:id");
            $stm->bindValue(':id', $id);
        }
    

        $stm->bindValue(':nome', $nome);
        $stm->bindValue(':quantidade', $quantidade);
        $stm->bindValue('NCM', $NCM);
        $stm->bindValue('valor', $valor);
        $stm->bindValue('ativo', $ativo);
        $stm->execute();

        header('Location: index.php');
        exit;
    }

    if (isset($_GET['id'])){
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

        if(!$id){
            header('Location: index.php');
            exit;
        }

        $stm = $conect->prepare('SELECT * FROM testephp.produtos WHERE id=:id');
        $stm->bindValue('id', $id);
        $stm->execute();
        $result = $stm->fetch();

        if(!$result){
            header('Location: index.php');
            exit;
        }

        $nome = $result['nome'];
        $quantidade = $result['quantidade'];
        $NCM = $result['NCM'];
        $valor = $result['valor'];
        $ativo = $result['ativo'];
    }

    include_once('layout/_header.php');
?>

<div class="card mt-3">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5><?=$id?'Editar Produto' . $id:'Adicionar Produto' ?></h5>
    </div>
    <form method="post" autocomplete="off">   
    <div class="card-body">
        <input type="hidden" name="id" value="<?=$id?>" />
        <div class="form-group">
            <label for="nome">Produto</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?=$nome?>" required />
        </div>
        <div class="form-group">
            <label for="nome">Quantidade no Estoque</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade" value="<?=$quantidade?>" required />
        </div>
        <div class="form-group">
            <label for="nome">NCM</label>
            <input type="text" class="form-control" id="NCM" name="NCM" value="<?=$NCM?>" required />
        </div>
        <div class="form-group">
            <label for="nome">Valor do Produto</label>
            <input type="text" class="form-control" id="valor" name="valor" value="<?=$valor?>" required />
        </div>
        <div class="form-group">
            <label for="nome">Situacao</label>
            <select class="form-select" id="ativo" name="ativo">
                <option value = "1" <?= $ativo==1?'selected':'' ?>>Ativo</option>
                <option value = "0" <?= $ativo==0?'selected':'' ?>>Inativo</option>
            </select>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
        <a class="btn btn-primary" href="index.php">Voltar</a>
    </div>
    </form>
</div>

<?php 
include_once('layout/_footer.php');
?>
