<!--
Nome do Programa: Trabalho 2º Trimestre
Data: 11/09/2017 
Nome: Marthyna Weber-->
<!DOCTYPE html>
<html>
	<head>
		<title>Wanderlust Turismo</title>
		<meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css?family=Amatica+SC|Assistant:200|Bungee+Shade|Cinzel+Decorative|Fjalla+One|Trochut" rel="stylesheet">
	</head>
	<body>
		<div align="center">
            <table border=0 bordercolor=black cellspacing=0 cellpadding=0 width=100% height=100%> <!--Tabela que engloba a página inteira-->
                <tr bgcolor=#2B3253>
                    <td width="373" height="150"> <!--Cabeçalho-->
                        <div align="center" style="margin-left: 10px"><font color=#E6E6E6 face="Cinzel Decorative" size=6>Wanderlust</font></div>
                        <div align="center" style="margin-left: 8px"><font color=#E6E6E6 face="Assistant" size=3>Turismos e Viagens</font></div>
                    </td>
                    <td width="731" height="150">
                        <table border=0 width=100% cellspacing=60> <!--Tabela do menu de opções-->
                            <tr>
                                <td><div align="center"><font size=5 color=#E6E6E6 face="Assistant"><a href="Home.html">Início</a></font></div></td> <!--Colunas da tabela do menu de opções (ou opções em si)-->
                                <td><div align="center"><font size=5 color=#E6E6E6 face="Assistant"><a href="Planeje.php">Planeje sua Viagem</a></font></div></td>
                                <td><div align="center"><font size=5 color=#E6E6E6 face="Assistant"><a href="Cadastro.html">Login e Cadastro</a></font></div></td>
                            </tr>
                        </table>
                    </td>
                    <td width="496" height="150"></td>
                </tr>
                <tr>
                    <td colspan=3 width="100%" height="228" background=images/banner2.png></td> <!--Banner-->
                </tr>
                <tr>
                    <td colspan=3 width="100%" height="590">
                        <table border=0 height=100% width=40% align="left" style="margin-left:30%">
                        <tr>
                            <td style="padding-bottom:350px">
                            <style> 
                                a{ /* Estlização do link */
                                    color: white; 
                                    text-decoration: none;
                                    font-family: "Assistant";
                                    font-weight: bold;

                                }
                                a:hover{ /*Estilização do link com mouse por cima*/
                                    text-decoration: none;
                                    color: #9da7d4;
                                }
                                .button { /*Estilização do botão*/
                                    background-color: #2B3253;
                                    border: none;
                                    color: white;
                                    padding: 15px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                }
                            </style>
                            <?php
                                date_default_timezone_set('America/Sao_Paulo'); // Seta o horário para o fuso de São Paulo
                                if (isset ($_POST['cadastrar'])){  /* se o botão de cadastro for clicado, na outra página, o programa imprime uma mensagem de confirmação de cadastro e mostra na tela o nome (nome+sobrenome) 
                                                                    email, data de nascimento e senha do user. Mostra também o botão que leva à Página Inicial*/
                                    echo 
                                    "<div align='center'>
                                        <h1>
                                            <font face='Assistant' color=#2B3253>Você foi cadastrado!
                                            </font>
                                        </h1>
                                    </div>
                                    <h3>
                                        <font face='Assistant' color=#000000>Nome: </font><font face='Assistant' color=dimgrey>",$_POST['nome']," ",$_POST['sobrenome'],"
                                        </font>
                                    </h3>
                                    <h3>
                                        <font face='Assistant' color=#000000>E-mail: </font><font face='Assistant' color=dimgrey>",$_POST['email'],"
                                        </font>
                                    </h3>
                                    <h3>
                                        <font face='Assistant' color=#000000>Data de Nascimento: </font><font face='Assistant' color=dimgrey>",$_POST['bday'],"
                                        </font>
                                    </h3>
                                    <h3>
                                        <font face='Assistant' color=#000000>Senha: </font><font face='Assistant' color=dimgrey>",$_POST['senha'],"
                                        </font>
                                    </h3>
                                    <div align=center><button class='button'><a href='Home.html'>Voltar à Página Inicial</a></button></div>
                                    ";
                                }
                            ?>
                            </td>
                        </tr>                        
                        </table>
                    </td> <!--Corpo-->
                </tr>
                <tr bgcolor=#2B3253>
                    
                    <td width="731" height="150"></td>
                    <td width="496" height="150"></td>
                    <td width="373" height="150"> <!--Cabeçalho-->
                        <div align="center" style="margin-left: 10px"><font color=#E6E6E6 face="Cinzel Decorative" size=6>Wanderlust</font></div>
                        <div align="center" style="margin-left: 8px"><font color=#E6E6E6 face="Assistant" size=3>Turismos e Viagens</font></div>
                    </td>
                </tr>                
            </table>
        </div>
        
	</body> 
</html>
