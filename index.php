<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Desafio Planus</title>
</head>
<body>
	<?php 
	
		$a =1; 
		$b =2;
		
		if ($a = 3){
			$b = 5;
		}
		
		echo "1º) a: ". $a ."<br/>". "b: ". $b."<br/>";
		
		$a2 = array(1,2,3,4,5,6);
		
		for($i = 0; $i < count($a2);  $i++){
			echo $a2[$i];
			
		}
		echo "2º) retirar o = da segunda condição do for";
		
		$a3 = 1; 
		$b1 = 2;
		
		function soma(){
			$b1 = $a3 + $b1;
		}
		
		soma();
		
		echo $b1."<br/>";
		echo "3º) 2 porque a varivel da função soma é de escopo local";
		
		$a4 = 1; 
		$b2 = 2;
		
		function soma2(){
			$b2 = $a4 + $b2;
		}
		
		$b2 = soma2();
		
		echo $b2."<br/>";
		echo "4º) 3 agora sim a variável foi invocada<br/>";
		
		$a5 = array(1,2,3.5,7.5);
		
		echo media($a5)."<br/>";
		
		function media($lista){
			$atual = 0;
			for($i = 0; $i < count($lista); $i++){
				$atual += $lista[$i];
			}
			return $atual / count($lista);
		}
		
		echo "5º) A resposta tinha que ser o valor atual <br/>";
		
		

	 ?>
	

	
</body>
</html>

