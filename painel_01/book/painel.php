<?php
require ('../_app/Config.inc.php');
$getexe = filter_input(INPUT_GET, 'exe', FILTER_DEFAULT);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrador</title>
        <link rel="stylesheet" href="_css/icons.css"/>
        <link rel="stylesheet" href="_css/style.css"/>
    </head>
    <body>
        <header>
            <ul class="main_header">
                <li><a href="painel.php?exe=mail"><i class="icon-mail"></i></a></li>
                <li><a href="painel.php?exe=usuario/profile"><i class="icon-config"></i></a></li>
            </ul>
            
            <nav class="main_aside">
                <header class="main_aside_header">
                    <div class="main_aside_logo"><img title="" alt="" src="_img/perfil.jpg"/></div>
                    <span class="name">Cristovão</span>
                </header>

                <ul class="main_aside_menu">
                    <li><a href="painel.php"><i class="icon icon-home"></i><span>Dashboard</span></a></li>
                    <li><a href="painel.php?exe=equipamento"><i class="icon icon-laptop"></i><span>Equipamento</span></a></li>
                    <li><a href="painel.php?exe=historico"><i class="icon icon-historico"></i><span>Historico</span></a></li>
                    <li><a href="painel.php?exe=laudo"><i class="icon icon-laudo"></i><span>Laudo</span></a></li>
                    <li><a href="painel.php?exe=cartao"><i class="icon icon-cartao"></i><span>Cartão</span></a></li>
                    <li><a href="painel.php"><i class="icon icon-sair"></i><span>Sair</span></a></li>
                </ul>
            </nav>
        </header>

        <main>
            <?php
            if (!empty($getexe)):
                $includepath = __DIR__ . '\\_system\\' . strip_tags(trim($getexe) . '.php');
            else:
                $includepath = __DIR__ . '\\_system\\home.php';
            endif;

            if (file_exists($includepath)):
                require_once ($includepath);
            else:
                echo "<div class=\"container notfound\">";
                WSErro("<b>Erro ao incluir tela:</b> Erro ao incluir o controller /{$getexe}.php!", WS_ERROR);
                echo "</div>";
            endif;
            ?>
        </main>

        <footer class="main_footer">
            <p>&COPY; CAMPUS Manutenção Lira - Todos os direitos reservados</p>
        </footer>
    </body>
</html>
