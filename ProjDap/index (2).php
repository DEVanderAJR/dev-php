<!DOCTYPE HTML>
<HTML>
	<HEADER>
<title>.:Detector de Pl�gios.:</title>	
<link rel='stylesheet' href='estiloplagio.css'>
	</HEADER>


<body id='corpo'>

<!--------------TITULO------------------------->
<h1 id='titulo'> Conhe�a o Detector de Pl�gios </h1>
<!---------------FIM TITULO-------------------->

<!-----------CENTRAL DE PESQUISA-------------->

<div id='coluna0'> <!----Coluna Principal---->

<!----------COLUNA MODULO--------------------->

<form name='modulos' action='' method='POST'>�  <!---A Definir o formul�rio de busca----->

<table id='coluna1'>
<th>Modulos de<br>Verifica��o</th>
<tr><td>
<input type='checkbox' name='web'>
Web
</input>
</td></tr>
<tr><td>
<input type='checkbox' name='computador'>
Computador
</input>
</td></tr>
<tr><td>
<input type='checkbox' name='copia'>
Copia
</input>
</td></tr>
<tr><td>
<input type='checkbox' name='arquivo'>
Arquivo
</input>
</td></tr>
</table>

<!----------FIM COLUNA MODULO--------------------->


<!---------COLUNA INCIDENCIA---------------------->

<table id='coluna2'>

<th>Incidencia de <br> Palavras</th>

<tr><td>

<!---form name='incidencia' action='' method='POST'--->

<input type='checkbox' name='total1'>
>5<20
</input>

</td></tr>

<tr><td>

<input type='checkbox' name='total2'>
>20<50
</input>
</td></tr>

<tr><td>

<input type='checkbox' name='total3'>
>50<100

</td></tr>

<tr><td>

<input type='checkbox' name='total4'>
>100<200
</input>
</td></tr>
</table>

<!---------FIM COLUNA INCIDENCIA---------------------->

<!---------COLUNA COMPLEXIDADE--------------------->

<table id='coluna3'>

<th>Complexidade de<br> Pesquisa</th>
<!----form name='pesquisa' action='' method='post'---->

<tr><td>

<input type='checkbox' name='rapida'>
Rapida
</input>

</td></tr>

<tr><td>

<input type='checkbox' name='intermediara'>
Intermediaria
</input>

</td></tr>

<tr><td>

<input type='checkbox' name='profunda'>
Profunda
</input>

</td></tr>

<tr><td>

<input type='checkbox' name='modular'>
Modular
</input>
</td></tr>


</table>


<!---------FIM COLUNA COMPLEXIDADE---------------->





</form> <!---FIM FORMUL�RIO----->


<!--------FIM CENTRAL DE PESQUISA----------------->
</div>
<!--------FIM CENTRAL DE PESQUISA----------------->

<!--------COLUNAS DE MENUS - ESQUERDO-------------->

<div id='interacao1>

</div>

<div id='menu'>

</div>

<div id='redesocial'>

</div>

<!--------COLUNAS DE MENUS - ESQUERDO-------------->

<!--------ENTRAR COM L�GICA DO SISTEMA----------------->

                      <?PHP $texto='Saiba o que Espera este Detector';
                      echo $texto;

//colocar os campos primeiramente, pr�ximo passo

                      ?>
</body>
</html>					