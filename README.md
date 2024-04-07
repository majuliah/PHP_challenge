Você foi designado para desenvolver um sistema de gerenciamento de produtos para uma empresa. O sistema precisa ser capaz de realizar operações básicas de CRUD (Create, Read, Update, Delete) sobre os dados dos produtos armazenados em um banco de dados MySQL. O desenvolvimento deve ser feito utilizando PHP para o backend, MySQL para o banco de dados e Bootstrap CSS para o frontend.
 
A tabela de produtos, a ser utilizada no desenvolvimento do sistema, possui os seguintes campos:
 
 id: Identificador único do produto (chave primária).
 nome: Nome do produto.
 quantidade: Quantidade disponível em estoque.
 NCM: Nomenclatura Comum do Mercosul do produto.
 valor: Valor unitário do produto.
 ativo: Indicador se o produto está ativo (1 para ativo, 0 para inativo).
 
 
Telas:
1. Incluir Produto:
 
Criar um formulário HTML para inserir os dados do produto: nome, quantidade, NCM, valor e ativo.
Validar os dados do formulário antes de enviar para o servidor.
Usar PHP para conectar ao banco de dados MySQL e inserir os dados na tabela produtos.
Exibir uma mensagem de sucesso ou erro ao usuário após a inclusão do produto.
 
2. Listar Produtos:
 
Usar PHP para consultar a tabela produtos e recuperar todos os registros.
Exibir os produtos em uma tabela HTML com as seguintes colunas: nome, quantidade, NCM, valor e ativo.
Incluir links para visualizar detalhes, editar ou excluir cada produto.
 
3. Detalhes do Produto:
 
Usar PHP para recuperar os detalhes de um produto específico da tabela produtos com base no ID.
Exibir os detalhes do produto em um layout organizado, incluindo nome, quantidade, NCM, valor e ativo.
 
4. Editar Produto:
 
Usar PHP para recuperar os dados de um produto específico da tabela produtos com base no ID.
Exibir um formulário HTML pré-preenchido com os dados do produto.
Validar os dados do formulário antes de enviar para o servidor.
Usar PHP para atualizar os dados do produto na tabela produtos.
Exibir uma mensagem de sucesso ou erro ao usuário após a edição do produto.
 
5. Excluir Produto:
 
Usar PHP para excluir um produto da tabela produtos com base no ID.
Exibir uma mensagem de confirmação ao usuário antes de excluir o produto.
Exibir uma mensagem de sucesso ou erro ao usuário após a exclusão do produto.
 
 
Banco de Dados (MySQL):
Aqui está a estrutura da tabela de produtos que você deve usar:
sql
CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    NCM VARCHAR(20) NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    ativo TINYINT(1) NOT NULL
);
