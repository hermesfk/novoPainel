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
            } else {
                //MOSTRAR OS DADOS DO PRODUTO
                $idProdutoEditar = isset($_GET['id']);
                if ($idProdutoEditar) {
                    $resultDados = new conexao();
                    $dados = $resultDados->selecionaDados('SELECT * FROM produtos WHERE  id = ' . $idProdutoEditar);
                    include_once 'painel/paginas/produtos-editar.php';
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


