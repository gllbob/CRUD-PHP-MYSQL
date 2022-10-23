<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
    
    <style>/* Style do Icone Menu */
        .material-symbols-outlined {
        padding: 5px;
        float: left;
        font-size: 7vh;
        font-variation-settings:
        'FILL' 0,
        'wght' 400,
        'GRAD' 0,
        'opsz' 48
        }
    </style>

</head>

<body>
    <nav>
        <div onclick="clickMenu()"><span class="material-symbols-outlined"><!-- Icone Menu -->
            menu_open
        </span></div><!-- Icone Menu -->
        <div><h1><a href="">CRUD</a></h1></div>
        <div class="menu" id="itens"><!-- Menu -->
            <ul>
                <li><a href="?page">Inicio</a></li>
                <li><a href="?page=lista">Lista de Usuários</a></li>
                <li><a href="?page=novo">Adicionar Usuários</a></li>
            </ul>
        </div><!-- Menu -->
    </nav>

    <div class="clear"></div>

    <article>
        <center>
            <?php // Chama e exibi Scripts localizados fora deste arquivo por meio do include.
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case 'novo':
                        include("novo-usuario.php");
                        break;
                    case 'lista':
                        include("lista-usuario.php");
                        break;
                    case 'salvar':
                        include("salvar-usuario.php");
                        break;
                    case 'editar':
                        include("editar-usuario.php");
                        break;    
                    default:
                        print "<h2>Bem vindos!</h2>";
                        print  "<p>Este projeto é um CRUD simpes feito maioritariamente em PHP que interage com banco de dados responsavel por permitir adicionar, ver, editar e excluir dados do banco de dados!</p>";
                        break;
                }
            ?>
        </center>
    </article>

    <script>// Script em JavaScript responsável pelo funcionamento do MENU retrátil.
        function clickMenu() {
            if (itens.style.display == 'block') {
                itens.style.display = 'none'
            } else {
                itens.style.display = 'block'
            }
        }
    </script>
</body>
</html>