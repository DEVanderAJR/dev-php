<!DOCTYPE HTML>
<HTML>
	<HEADER>
<title>.:Detector de Plágios.:</title>	
<link rel='stylesheet' href='estiloplagio.css'>
	</HEADER>
<body id='corpo'>

<!--------------TITULO------------------------->
<h1> Conheça o Detector de Plágios </h1>
<!---------------FIM TITULO-------------------->

<!-----------CENTRAL DE PESQUISA-------------->



<!----------COLUNA MODULO--------------------->

<table id='verificacao'>

<th>Modulos de<br>Verificação</th>

<tr><td>
<form name='modulos' action='' method='POST'>    <!---A Definir o formulário de busca----->

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

</form>
</td></tr>



<!----------FIM COLUNA MODULO--------------------->


<!---------COLUNA INCIDENCIA---------------------->



<th>Incidencia de <br> Palavras</th>

<tr><td>

<form name='incidencia' action='' method='POST'>

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

</form>



<!---------FIM COLUNA INCIDENCIA---------------------->

<!---------COLUNA COMPLEXIDADE--------------------->



<th>Complexidade de<br> Pesquisa</th>
<form name='pesquisa' action='' method='post'>

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
</form>

</table>


<!---------FIM COLUNA COMPLEXIDADE---------------->



<!--------FIM CENTRAL DE PESQUISA--------</div>--------->


                      <?PHP $texto='Saiba o que Espera este Detector';
                      echo $texto;

//colocar os campos primeiramente, próximo passo

                      ?>
</body>
</html>					