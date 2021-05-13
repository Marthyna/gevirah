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
                <tr bgcolor=#2B3253><!--Cabeçalho-->
                    <td width="373" height="150"> 
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
                <tr><!--Banner--> 
                    <td colspan=3 width="100%" height="228" background=images/banner2.png></td>
                </tr>
                <tr><!--Corpo-->
                    <style> 
                        a{ 
                            color: white; 
                            text-decoration: none; /*tira o sublinhado*/

                        }
                        a:hover{ /*Estilização do link com mouse por cima*/
                            text-decoration: none;
                            color: #9da7d4;
                        }
                        #img{ /*Enquadra as imagens no tamanho indicado através do background-size */
                            width: 200px;
                            height: 200px;
                            background-size:cover;
                        }
                    </style>
                    <td colspan=3 width="100%" height="590">
                        <table border=0 height=100% width=100% align="left"> <!-- Tabela grande das opções para viajar (dentro da tabela da página inteira, na linha do corpo) -->
                            <tr>
                                <td bgcolor=#2B3253 align=center style="padding-left:10px" colspan=3>                                
                                    <h2><font face="Assistant" color=white>Planeje sua viagem de acordo com as opções desejadas:</font></h2>
                                </td> 
                            </tr>
                            <tr>
                                <td width=15%></td> <!--Coluna vazia para espaçar -->
                                <td style="padding-bottom:80px">
                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> <!-- Usa o que for clicado/digitado no formulário dentro da própria página -->
                                        <table border=0 height=100% width=100% align="center"> <!-- Tabela pequena das opções para viajar (dentro da tabela grande, na coluna do meio) -->
                                            <tr>
                                                <td colspan=4>
                                                    <div align="justify">
                                                        <h3><font size=4 face="Assistant">Para qual lugar deseja viajar?</font></h3>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr><!--Só pode marcar uma opção pois todas têm o mesmo nome, mas diferentes values-->
                                                <td><input type='radio' name='webmaster' value="florida"><font face="Assistant">Flórida:</font><div id="img" style="background-image: url(images/img-thing.jpg);"></div></td>
                                                <td><input type='radio' name='webmaster' value="canada"><font face="Assistant">Canadá:</font><div id="img" style="background-image: url(images/canada.jpg);"></div></td>
                                                <td><input type='radio' name='webmaster' value="japao"><font face="Assistant">Japão:</font><div id="img" style="background-image: url(images/japan.jpg);"></div></td>
                                                <td><input type='radio' name='webmaster' value="italia"><font face="Assistant">Itália:</font><div id="img" style="background-image: url(images/tuscany.jpg);"></div></td>
                                            </tr>
                                            <tr>
                                                <td colspan=4><h3><font size=4 face="Assistant">Forma de pagamento:</font></h3></td>
                                            </tr>
                                            <tr>
                                                <td colspan=4>                                                
                                                    <?php /*Aqui é estipulado o valor fixo de 25000 reais para qualquer viagem. Através do for, é usada uma variável de controle (j) para indicar
                                                            o número de parcelas e para dividir o valor fixo por este número de vezes. J inicia valendo 2 e a cada laço é somado 2, até chegar a 12*/
                                                    $valor = 25000;
                                                    $j=2;
                                                    for($i=0;$i<6;$i++){
                                                        echo "<input type='radio' name='preco'><font face='Assistant'>",$j," vezes de ",round($valor/$j)," reais</font><br>";
                                                        $j+=2;
                                                    }                                                
                                                    ?>
                                                    <br>
                                                    <input type=submit name="confirmar" value="Confirmar"> <!--Botão que acionará IF da parte em php-->
                                                </td>
                                            </tr>
                                            <?php
                                                date_default_timezone_set('America/Sao_Paulo'); //horário do fuso de São Paulo
                                                if(isset($_POST['confirmar'])){ // se o botão confirmar for clicado, serão mostradas as parte da Data de embarque da viagem e da Relação de hoteis filiados
                                                    echo"<tr><td colspan=4><h3><font size=4 face='Assistant'>Data de embarque:</font></h3></td></tr>
                                                    <tr>
                                                        <td colspan=4>";/*Aqui é estipulada a data atual já fixa*/
                                                            $atual = mktime(1,00,0,9,11,2017); 
                                                            if($_POST['webmaster']=='florida'){ // testa se a opção marcada tem nome igual ao indicado no IF
                                                                $embarque = mktime(1,00,0,12,1,2017); // para cada opção diferente é adicionado um número diferente de dias e meses 
                                                            }
                                                            if($_POST['webmaster']=='canada'){
                                                                $embarque = mktime(1,00,0,1,17,2018);
                                                            }
                                                            if($_POST['webmaster']=='japao'){
                                                                $embarque = mktime(1,00,0,10,9,2017);
                                                            }
                                                            if($_POST['webmaster']=='italia'){
                                                                $embarque = mktime(1,00,0,3,27,2018);                                                                
                                                            }
                                                        echo "<h4><font face='Assistant' size=3>Data Atual: ",date('d-m-y',$atual),"</font>";
                                                        echo "<font face='Assistant' size=3><br>Embarque: ",date('d-m-y',$embarque),"</font>";
                                                        $faltam = $embarque-$atual; // A váriavel guarda a diferença entre as duas datas, que será impressa depois, arredondada para cima
                                                        echo "<font face='Assistant' size=3><br>Faltam ",floor($faltam/(30*24*60*60))," meses e ",date('j',$faltam)," dias para seu embarque! Não perca tempo e compre já suas passagens!</font></h4>";
                                                        echo"</td>
                                                    </tr>";
                                                    
                                                    echo "<tr><td colspan=4><h3><font size=4 face='Assistant'>Relação de hotéis filiados:</font></h3></td></tr>";
                                                    $hotel[1]['Nome'] = 'Paradiso'; // Cria a matriz que guarda o Nome, estrelas e quartidade de cada quarto dos hoteis
                                                    $hotel[1]['Estrelas'] = 5;
                                                    $hotel[1]['Quartos']['Casal'] = 70;
                                                    $hotel[1]['Quartos']['Solteiro'] = 50;
                                                    $hotel[1]['Quartos']['Suíte'] = 30;

                                                    $hotel[2]['Nome'] = 'Palazzo';
                                                    $hotel[2]['Estrelas'] = 4;
                                                    $hotel[2]['Quartos']['Casal'] = 60;
                                                    $hotel[2]['Quartos']['Solteiro'] = 40;
                                                    $hotel[2]['Quartos']['Suíte'] = 10;

                                                    $hotel[3]['Nome'] = 'Palm Beach';
                                                    $hotel[3]['Estrelas'] = 3;
                                                    $hotel[3]['Quartos']['Casal'] = 35;
                                                    $hotel[3]['Quartos']['Solteiro'] = 20;
                                                    $hotel[3]['Quartos']['Suíte'] = 5;

                                                    $hotel[4]['Nome'] = 'Trinity';
                                                    $hotel[4]['Estrelas'] = 4;
                                                    $hotel[4]['Quartos']['Casal'] = 55;
                                                    $hotel[4]['Quartos']['Solteiro'] = 30;
                                                    $hotel[4]['Quartos']['Suíte'] = 20;
                                                    echo "<table border=0 width=30% height=100%>";/*Foi usada uma tabela para organizar os dados da matriz, onde Nome, Estrelas e Quartos são três linhas diferentes
                                                                                                    e Casal, Solteiro e Suíte estão na mesma linha*/
                                                    foreach ($hotel as $key1 => $aux1) { // key1 é o número do hotel (não impresso)
                                                        if(is_array($aux1)){ // testa se $aux é um vetor, se for, continuará percorrendo as demais posições da matriz                                                                   
                                                            foreach ($aux1 as $key2 => $aux2) { // key2 pode ser Nome, Estrelas ou Quartos 
                                                                echo "<tr><td><b><font face='Assistant' color=#32469b>",strtoupper($key2),":</font></b></td>";//Imprime o valor atual de $key2 (Nome, Estrelas ou Quartos) em letras maiúsculas
                                                                if(is_array($aux2)){ // Quando aux2 for um vetor (quando chegar em Quartos), continuará percorrendo as demais posições depois dele
                                                                    foreach ($aux2 as $key3 => $aux3) { // key3 pode ser Casal, Solteiro ou Suíte
                                                                        echo "<td><font face='Assistant'><b>",$key3,":</b> ", $aux3,"</font> "; // Imprime o valor atual de key3 e o número de quartos (aux3)                       
                                                                    }
                                                                }else {
                                                                    echo "<td><font face='Assistant'>$aux2</font></td> "; // $aux2 são os valores de Nome e Estrelas, impressos quando ainda não se chegou no índice Quartos (momento em que a condição do IF será cumprida)
                                                                }
                                                                echo "</td>";
                                                            }                                                            
                                                            echo "</tr>";
                                                        }
                                                    }                                                    
                                                }
                                            ?> 
                                        </table>
                                    </form>
                                </td>
                            </tr>
                        </table>                        
                    </td> 
                </tr>
                <tr bgcolor=#2B3253><!--Rodapé-->                    
                    <td width="731" height="150"></td>
                    <td width="496" height="150"></td>
                    <td width="373" height="150"> 
                        <div align="center" style="margin-left: 10px"><font color=#E6E6E6 face="Cinzel Decorative" size=6>Wanderlust</font></div>
                        <div align="center" style="margin-left: 8px"><font color=#E6E6E6 face="Assistant" size=3>Turismos e Viagens</font></div>
                    </td>
                </tr>                
            </table>
        </div>        
	</body> 
</html>