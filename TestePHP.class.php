<?php

$testeObj = new TestePHP();

$testeObj->execExercicio1();
$testeObj->execExercicio2();
$testeObj->execExercicio3();
$testeObj->execExercicio4();

class TestePHP 
{
	public function execExercicio1()
	{
		echo '<strong>==== Exercício 1 ====</strong><br />';

		$dadosTeste01Array = array (3, 1, 2, 2, 4);
		$retorno = $this->exercicio1($dadosTeste01Array);

		var_dump($retorno);


		$dadosTeste02Array = array (8, 5, 5, 5, 5, 1, 1, 1, 4, 4);
		$retorno = $this->exercicio1($dadosTeste02Array);

		var_dump($retorno);


		$dadosTeste02Array = array (1, 2, 3, 7, 1, 8, 2);
		$retorno = $this->exercicio1($dadosTeste02Array);

		var_dump($retorno);

	}

	public function execExercicio2()
	{	
		echo '<br /><br /><strong>==== Exercício 2 ====</strong><br />';


		$retorno = $this->exercicio2(4);
		echo 'Caso de teste 01 => ' . $retorno . '<br />';

		$retorno = $this->exercicio2(5);
		echo 'Caso de teste 02 => ' . $retorno . '<br />';

		$retorno = $this->exercicio2(8);
		echo 'Caso de teste 03 => ' . $retorno . '<br />';

		$retorno = $this->exercicio2(1);
		echo 'Caso de teste 04 => ' . $retorno . '<br />';

		$retorno = $this->exercicio2(3);
		echo 'Caso de teste 05 => ' . $retorno . '<br />';

		$retorno = $this->exercicio2(10);
		echo 'Caso de teste 06 => ' . $retorno . '<br />';
	}

	public function execExercicio3()
	{

		echo '<br /><br /><strong>==== Exercício 3 ====</strong><br />';

		$dadosTeste03Array = 'aeiaaioooaauuaeiou';
		$retorno = $this->exercicio3($dadosTeste03Array);
		echo 'Caso de teste 01 => ' . $retorno . '<br />';
	

		$dadosTeste03Array = 'aeiaaioooaa';
		$retorno = $this->exercicio3($dadosTeste03Array);
		echo 'Caso de teste 02 => ' . $retorno . '<br />';

		$dadosTeste03Array = 'uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae';
		$retorno = $this->exercicio3($dadosTeste03Array);
		echo 'Caso de teste 03 => ' . $retorno . '<br />';

		$dadosTeste03Array = 'iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea
aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe
uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae';
		$retorno = $this->exercicio3($dadosTeste03Array);
		echo 'Caso de teste 04 => ' . $retorno . '<br />';

		$dadosTeste03Array = 'ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoee
uiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoa
eaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooa
iuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioi
ouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuue
oeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauaua
euaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauo
ooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu';
		$retorno = $this->exercicio3($dadosTeste03Array);
		echo 'Caso de teste 05 => ' . $retorno . '<br />';
	}

	public function execExercicio4()
	{
		echo '<br /><br /><strong>==== Exercício 4 ====</strong><br />';

		$parte1Array      = array(1, 2, 100);
		$parte2Array      = array(2, 5, 100);
		$parte3Array      = array(3, 4, 100);
		$dadosTeste4Array = array($parte1Array, $parte2Array, $parte3Array);

		$retorno = $this->exercicio4($dadosTeste4Array);
		echo 'Caso de teste 01 => ' . $retorno . '<br />';

		
		$parte1Array      = array(2, 3, 603);
		$parte2Array      = array(1, 1, 286);
		$parte3Array      = array(4, 4, 882);
		$dadosTeste4Array = array($parte1Array, $parte2Array, $parte3Array);
				
		$retorno = $this->exercicio4($dadosTeste4Array);
		echo 'Caso de teste 02 => ' . $retorno . '<br />';


		$parte1Array  = array(29, 40, 787);
		$parte2Array  = array(9, 26, 219);
		$parte3Array  = array(21, 31, 214);
		$parte4Array  = array(8, 22, 719);
		$parte5Array  = array(15, 23, 102);
		$parte6Array  = array(11, 24, 83);
		$parte7Array  = array(14, 22, 321);
		$parte8Array  = array(5, 22, 300);
		$parte9Array  = array(11, 30, 832);
		$parte10Array = array(5, 25, 29);
		$parte11Array = array(16, 24, 577);
		$parte12Array = array(3, 10, 905);
		$parte13Array = array(15, 22, 335);
		$parte14Array = array(29, 35, 254);
		$parte15Array = array(9, 20, 20);
		$parte16Array = array(33, 34, 351);
		$parte17Array = array(30, 38, 564);
		$parte18Array = array(11, 31, 969);
		$parte19Array = array(3, 32, 11);
		$parte20Array = array(29, 35, 267);
		$parte21Array = array(4, 24, 531);
		$parte22Array = array(1, 38, 892);
		$parte23Array = array(12, 18, 825);
		$parte24Array = array(25, 32, 99);
		$parte25Array = array(3, 39, 107);
		$parte26Array = array(12, 37, 131);
		$parte27Array = array(3, 26, 640);
		$parte28Array = array(8, 39, 483);
		$parte29Array = array(8, 11, 194);
		$parte30Array = array(12, 37, 502);

		$dadosTeste4Array = array($parte1Array, $parte2Array, $parte3Array, $parte4Array, $parte5Array, $parte6Array, $parte7Array, $parte8Array, $parte9Array, $parte10Array, $parte11Array, $parte12Array, $parte13Array, $parte14Array, $parte15Array, $parte16Array, $parte17Array, $parte18Array, $parte19Array, $parte20Array, $parte21Array, $parte22Array, $parte23Array, $parte24Array, $parte25Array, $parte26Array, $parte27Array, $parte28Array, $parte29Array, $parte30Array);
				
		$retorno = $this->exercicio4($dadosTeste4Array);
		echo 'Caso de teste 03 => ' . $retorno . '<br />';


		$parte1Array  = array(19, 28, 419);
		$parte2Array  = array(4, 23, 680);
		$parte3Array  = array(5, 6, 907);
		$parte4Array  = array(19, 33, 582);
		$parte5Array  = array(5, 9, 880);
		$parte6Array  = array(10, 13, 438);
		$parte7Array  = array(21, 39, 294);
		$parte8Array  = array(13, 18, 678);
		$parte9Array  = array(12, 26, 528);
		$parte10Array = array(15, 30, 261);
		$parte11Array = array(8, 9, 48);
		$parte12Array = array(21, 23, 131);
		$parte13Array = array(20, 21, 7);
		$parte14Array = array(13, 40, 65);
		$parte15Array = array(13, 23, 901);
		$parte16Array = array(15, 15, 914);
		$parte17Array = array(14, 35, 704);
		$parte18Array = array(20, 39, 522);
		$parte19Array = array(10, 18, 379);
		$parte20Array = array(16, 27, 8);
		$parte21Array = array(25, 40, 536);
		$parte22Array = array(5, 9, 190);
		$parte23Array = array(17, 20, 809);
		$parte24Array = array(8, 20, 453);
		$parte25Array = array(22, 37, 298);
		$parte26Array = array(19, 37, 112);
		$parte27Array = array(2, 5, 186);
		$parte28Array = array(21, 29, 184);
		$parte29Array = array(23, 30, 625);
		$parte30Array = array(2, 8, 960);

		$dadosTeste4Array = array($parte1Array, $parte2Array, $parte3Array, $parte4Array, $parte5Array, $parte6Array, $parte7Array, $parte8Array, $parte9Array, $parte10Array, $parte11Array, $parte12Array, $parte13Array, $parte14Array, $parte15Array, $parte16Array, $parte17Array, $parte18Array, $parte19Array, $parte20Array, $parte21Array, $parte22Array, $parte23Array, $parte24Array, $parte25Array, $parte26Array, $parte27Array, $parte28Array, $parte29Array, $parte30Array);
				
		$retorno = $this->exercicio4($dadosTeste4Array);
		echo 'Caso de teste 04 => ' . $retorno . '<br />';

	}

	private function exercicio1($dadosArray)
	{
		$repeticoesArray = array_count_values($dadosArray);

		asort($repeticoesArray);

		$repeticoesArray2 = array();

		foreach ($repeticoesArray as $key => $valor) {			
			$repeticoesArray2[$valor][] = $key;
		}

		foreach ($repeticoesArray2 as $key => $valor) {			
			sort($repeticoesArray2[$key]);
		}

		$resultadoArray = array();

		foreach ($repeticoesArray2 as $key => $valorArray) {	

			$tempArray = array();

			for($i = 0; $i < $key; $i++) {
				
				foreach($valorArray as $valor) {
					$tempArray[] = $valor;
				}					
			}

			sort($tempArray);	

			foreach($tempArray as $temp) {
				$resultadoArray[] = $temp;		
			}
		}

		return $resultadoArray;
	}

	private function exercicio2($quantidade)
	{

		$sequencia  = '';
		$anterior   = 1;
		$anterior2  = 0;

		if ($quantidade == 0 || $quantidade == 1) {
			$sequencia = '0';
		}
		else {

			$sequencia = '0, 1';

			for($i = 0; $i < $quantidade; $i++) {
				
				if ($i > 1) {
					$prox = $anterior + $anterior2;

					$sequencia = $sequencia . ', ' . $prox;

					$anterior2 = $anterior;
					$anterior  = $prox;

				}				
			}
		}

		return $sequencia;
			
	}

	private function exercicio3($string)
	{
		$stringArray = str_split($string);
		$soma        = 0;
		$completo    = true;

		if ( !in_array("a", $stringArray) && !in_array("A", $stringArray)) { 
			$completo = false;
		}

		if ( !in_array("e", $stringArray) && !in_array("E", $stringArray)) { 
			$completo = false;
		}

		if ( !in_array("i", $stringArray) && !in_array("I", $stringArray)) { 
			$completo = false;
		}

		if ( !in_array("o", $stringArray) && !in_array("O", $stringArray)) { 
			$completo = false;
		}

		if ( !in_array("u", $stringArray) && !in_array("U", $stringArray)) { 
			$completo = false;
		}

		if ( $completo == true ) {

			$letraGuia = '1';
			for($i = 0; $i < count($stringArray); $i++) {

				if (strtolower($stringArray[$i]) == 'a' && ($letraGuia == '1' || $letraGuia == 'a') ) {
					$soma++;
					$letraGuia = 'a';
					continue;
				}

				if (strtolower($stringArray[$i]) == 'e' && ($letraGuia == 'a' || $letraGuia == 'e') ) {
					$soma++;
					$letraGuia = 'e';				
					continue;
				}

				if (strtolower($stringArray[$i]) == 'i' && ($letraGuia == 'e' || $letraGuia == 'i') ) {
					$soma++;			
					$letraGuia = 'i';
					continue;
				}

				if (strtolower($stringArray[$i]) == 'o' && ($letraGuia == 'i' || $letraGuia == 'o') ) {
					$soma++;			
					$letraGuia = 'o';
					continue;
				}

				if (strtolower($stringArray[$i]) == 'u' && ($letraGuia == 'o' || $letraGuia == 'u') ) {
					$soma++;			
					$letraGuia = 'u';
					continue;
				}

			}		
		}
		
		return $soma;
	}

	private function exercicio4($dadosEntradaArray)
	{	
		$arrayResult = array();
		$fimArray    = array();
		$maiorIndice = 0;

		foreach($dadosEntradaArray as $key => $dadosArray) {
			$fimArray[] = $dadosArray[1];			
		}

		$maiorIndice = max($fimArray);

		for($i = 1; $i <= $maiorIndice; $i++) {
			$arrayResult[$i] = 0;
		}	

		foreach($dadosEntradaArray as $key => $dadosArray) {

			$inicio = $dadosArray[0];
			$fim    = $dadosArray[1];
			$somar  = $dadosArray[2];

			for($i = 1; $i <= $maiorIndice; $i++) {

				if($i >= $inicio && $i <= $fim) {
					$arrayResult[$i] = $arrayResult[$i] + $somar;
				}
			}
		}
		
		$maior = max($arrayResult);

		return $maior;		
	}
}