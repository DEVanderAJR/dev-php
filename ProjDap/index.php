http://search.msn.com/results.asp?ba=(0.0)0&co=(0.10)4.1..2.1.4.1&FORM=MSNH&RS=CHECKED&q=$q&v=1

$url = "http://ajax.googleapis.com/ajax/services/search/web?v=2.0&hl=pt-br&cr=countryBR&q=$campo_sub_parte";//API DO GOOGLE

http://ww4.unianhanguera.edu.br/servicos/aluno/login.php

trim($campo_sub_parte);chop($campo_sub_parte);
echo "<p class='letras'>".$campo_sub_parte."</p>";
$campo_sub_parte=str_replace(" ","+",$campo_sub_parte);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, true);


/* Enviando a requisi��o da URL via Curl*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, true);
	
$body = curl_exec($ch);
#echo $url;
#echo $ch;
echo "<p class='letras'>".utf8_decode($body)."</p>";//fUN��O PARA RETIRAR CARACTERES ILEG�VEIS
curl_close($ch);
//Processando a string Json
 $json = json_decode($body);
#Error de objeto e classe echo @$json;
//Array com os resultados
$array[] = $json->responseData->results;

.letras{
  
  /*TEXTO*/

text-align:justify;
color:#000;
text-transform:;
font-family:"comic sans", Time, serif;
font-size: 14px;
text-decoration: none;

background-color: #fff;
















#*************************************#
#fun��o contadora de primeira palavra;
#*************************************#
function contadora($string, $cont)
{
	$x=0;
while($string[$x]!=" ")
{
/*TEXTO*/

text-align:justify;
color:#000;
text-transform:;
font-family:"Arial", Time, serif;
font-size: 12px;

text-decoration: none;
	$x++;
}
return --$x;
}
                   ?>
</body>
</html>?>
	http://api.bing.net/json.aspx?AppId= YOUR_APPID &Version=2.2&Market=en-US&Query=testign&Sources=web+spell&Web.Count= 1		
function separadora_palavras($string,$define,$position_require,$verificador)
{
#************************************************************#
#Vari�veis													 #
#String recebe o texto do campo1;
#Define recebe o valor de incid�ncia de palavras
#Position_require recebe a posi��o da palavra digitada
# do campo Apartir de...
#Verificador indica se o campo [Apartir de] foi selecionado 
# Valor true = verdadeiro                                    #
#************************************************************#
O economista Steven Levitt e o jornalista Stephen J. Dubner estudam a rotina e os enigmas da vida real. Da trapa�a � criminalidade, dos esportes � cria��o dos filhos. Com conclus�es que viram de cabe�a para baixo o senso comum, geralmente usando dados aparentemente inofensivos e fazendo perguntas simples nunca feitas. Da� surge o novo campo de estudo apresentado neste livro: freakonomics, obra iniciada dos conhecimentos dos atores ditados � cima.
Alonga metragem A Rede Social tem como palco
/*Declara��o de Vari�veis da fun��o*/
$dir=0;	$espaco=0;	$recebe_string= " ";
#*******************************************************************#	
#$dir vari�vel contadora;                                           #
#Se o campo foi 'checkado' � atribuido a posi��o do array para      
#a vari�vel $dir, fazendo com que o as pr�ximas instru��es trabalhem
#com este novo valor atribuido.                                     #
#*******************************************************************#
	if($verificador==true)
	$dir=$position_require;	
	
/*Enquanto o n�mero de espa�os for diferente do que o requisitado o la�o � executado*/
while ($define!=0)
{
#*************************************************************************#
#Condi��o que verifica se o fim do texto est� pr�ximo, e retorna ao inv�s #
#do total definido para o usu�rio, at� a �ltima palavra, para evitar erro!
#Testa se a posi��o em execu��o � maior igual ao tamanho limite da string #
#*************************************************************************#
if($dir>=strlen($string))
{
	echo mensagem(2);
				$caso=0;
#*********************************************************************************#
#Execute o la�o enquanto a vari�vel $caso diferente de zero. Condi��o esta        #
#que n�o vai deixar o la�o entrar em loop infinito, pois ele faz com que		  
#seja atribu�da � variavel recebe_string apenas as palavras antes do �ltimo espa�o
#detectado, independente da quantidade de palavras por incid�ncia escolhida pelo  
#usu�rio. 																		  #
#*********************************************************************************#
while ($caso!=0)
{
/*Atribui��o da vari�vel $String para a vari�vel $recebe_string*/
		@$recebe_string[$dir] = @$string[$dir];	
		#
		if(@$string[$dir] == " ")
		--$caso;
		--$dir;
	
}
return $recebe_string;			
}
	
	/*converte uma string para array[];*/	
	//str_split($recebe_string);
	$recebe_string[$dir] = $string[$dir];
	
	if($string[$dir] == " ")
	--$define;	
	++$dir;
	
}
return $recebe_string;
}