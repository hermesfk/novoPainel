<?php

include_once 'painel/db/conexao.php';
include_once 'painel/helper/funcoes.php';

$pg = isset($_GET['pg']);

if ($pg) {
    //existe
    switch ($_GET['pg']) {

        case 'inicio':
            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/dashboard.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos':

            //Fazer uma consulta no banco e disponibilizar os 
            //$pessoa = new pessoas ();
            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-item':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE  id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/produtos-item.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'produtos-editar':

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //FUNÇÃO PARA ATUALIZAÇÃO DO USUÁRIO
                //pegando as variaveis via post  
                $id = $_POST ['id'];
                $nome = $_POST ['nome'];
                $tipo = $_POST ['tipo'];
                $valor = $_POST ['valor'];

                //TRATANDO OS DADOSENVIADOS 
                $parametros = array(
                    ':id' => $id,
                    ':nome' => $nome,
                    ':tipo' => $tipo,
                    ':valor' => $valor
                );
                //fazendo a atualizacao eno banco
                $atualizarProduto = new conexao();
                $atualizarProduto->intervencaoNoBanco(''
                        . 'UPADATE produtos SET'
                        . 'nome = :nome,'
                        . 'tipo = :tipo,'
                        . 'WHERE id = :id', $parametros
                );
                header('Location: ?pg=produtos');
            } else {
                //MOSTRAR OS DADOS DO PRODUTO
                $idProdutoEditar = isset($_GET['id']);
                if ($idProdutoEditar) {
                    $resultDados = new conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE  id = ' . $_GET['id']);
                    include_once 'painel/paginas/produtos-editar.php';
                } else {
                    echo 'variavel não definida';
                }
            }

            include_once 'painel/paginas/includes/footer.php';

            break;

        case 'servicos':
            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM servicos');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicos-item':
            $id = $_GET ['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM servicos WHERE  id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/servicos-item.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'servicos-editar':

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                //FUNÇÃO PARA ATUALIZAÇÃO DO PRODUTO
                //pegando as variaveis via post  
                $nome = $_POST ['nome'];
                $tipo = $_POST ['tipo'];
                $valor = $_POST ['valor'];

                //TRATANDO OS DADOSENVIADOS 
                $parametros = array(
                    'nome' => $nome,
                    'tipo' => $tipo,
                    'valor' => $valor
                );
                //FAZENDO ATUALIZAÇÃO NO BANCO
                $atualizarproduto = new conexao();
                $atualizarproduto->intervencaoNoBanco($query, $parameters);
            } else {
                //MOSTRAR OS DADOS DO PRODUTO
                $idServicosEditar = isset($_GET['id']);
                if ($idServicosEditarEditar) {
                    $resultDados = new conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM '
                            . 'servicos WHERE  id = ' . $_GET['id']);
                    include_once 'painel/paginas/servicos-editar.php';
                } else {
                    echo 'variavel não definida';
                }
            }
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/includes/footer.php';

            break;




        case 'contato':
            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato');

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'contato-visualizar':

            $id = $_GET['id'];

            $resultDados = new conexao();
            $dados = $resultDados->selecionaDados('SELECT * FROM contato WHERE  id = ' . $id);

            include_once 'painel/paginas/includes/header.php';
            include_once 'painel/paginas/includes/menus.php';
            include_once 'painel/paginas/contato-visualizar.php';
            include_once 'painel/paginas/includes/footer.php';
            break;

        case 'login':
            include_once 'painel/paginas/acesso/login.php';
            break;

        case 'dashboard':
            //Página inicial do Painel Adm           
            if (verificaLogin()) {

                include_once 'painel/paginas/includes/header.php';
                include_once 'painel/paginas/includes/menus.php';
                include_once 'painel/paginas/dashboard.php';
                include_once 'painel/paginas/includes/footer.php';
            } else {
                echo 'Login ou senha inválidos.';
            }
            break;

        default:
            include_once 'painel/paginas/dashboard.php';
            break;
    }
} else {
    //não existe
    include_once 'painel/paginas/dashboard.php';
}


