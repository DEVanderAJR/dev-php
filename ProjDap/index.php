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


/* Enviando a requisição da URL via Curl*/
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_REFERER, true);
	
$body = curl_exec($ch);
#echo $url;
#echo $ch;
echo "<p class='letras'>".utf8_decode($body)."</p>";//fUNÇÃO PARA RETIRAR CARACTERES ILEGÍVEIS
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
#função contadora de primeira palavra;
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
#Variáveis													 #
#String recebe o texto do campo1;
#Define recebe o valor de incidÊncia de palavras
#Position_require recebe a posição da palavra digitada
# do campo Apartir de...
#Verificador indica se o campo [Apartir de] foi selecionado 
# Valor true = verdadeiro                                    #
#************************************************************#
O economista Steven Levitt e o jornalista Stephen J. Dubner estudam a rotina e os enigmas da vida real. Da trapaça à criminalidade, dos esportes à criação dos filhos. Com conclusões que viram de cabeça para baixo o senso comum, geralmente usando dados aparentemente inofensivos e fazendo perguntas simples nunca feitas. Daí surge o novo campo de estudo apresentado neste livro: freakonomics, obra iniciada dos conhecimentos dos atores ditados à cima.
Alonga metragem A Rede Social tem como palco
/*Declaração de Variáveis da função*/
$dir=0;	$espaco=0;	$recebe_string= " ";
#*******************************************************************#	
#$dir variável contadora;                                           #
#Se o campo foi 'checkado' é atribuido a posição do array para      
#a variável $dir, fazendo com que o as próximas instruções trabalhem
#com este novo valor atribuido.                                     #
#*******************************************************************#
	if($verificador==true)
	$dir=$position_require;	
	
/*Enquanto o número de espaços for diferente do que o requisitado o laço é executado*/
while ($define!=0)
{
#*************************************************************************#
#Condição que verifica se o fim do texto está próximo, e retorna ao invés #
#do total definido para o usuário, até a última palavra, para evitar erro!
#Testa se a posição em execução é maior igual ao tamanho limite da string #
#*************************************************************************#
if($dir>=strlen($string))
{
	echo mensagem(2);
				$caso=0;
#*********************************************************************************#
#Execute o laço enquanto a variável $caso diferente de zero. Condição esta        #
#que não vai deixar o laço entrar em loop infinito, pois ele faz com que		  
#seja atribuída á variavel recebe_string apenas as palavras antes do último espaço
#detectado, independente da quantidade de palavras por incidência escolhida pelo  
#usuário. 																		  #
#*********************************************************************************#
while ($caso!=0)
{
/*Atribuição da variável $String para a variável $recebe_string*/
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