<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php 
			/**
			* Página de acceso principal
			*
			* Se incluye el resultado de la llamada a los principales métodos de clase sin formato
			* 
			* @package TIR
			* @license http://creativecommons.org/license/by-sa/4.0/legalcode Creative 
			* Commons 4.0
			* @author Teresa Iglesias Rodríguez
			* @version 1.0
			*/
			require_once 'clase.php';
				
			$obj = new Clase("valorPublico", "valorPrivado");
			
			echo "<div>CONSTANTE: " . $obj::CONSTANTE . "</div>";
			echo "<div>VARIABLE PÚBLICA: " . $obj->variablePublica . "</div>";
			echo "<div>VARIABLE PRIVADA: " . $obj->getVariablePrivada() . "</div>";
			echo "<div>ES PALÍNDROMO (ANA): " . ($obj->esPalindromo('ANA') ? "Sí" : "No") . "</div>";
			echo "<div>ES PALÍNDROMO (NOA): " . ($obj->esPalindromo('NOA') ? "Sí" : "No") . "</div>";
			echo "<div>ES PRIMO (13): " . ($obj->esPrimo(13) ? "Sí" : "No") . "</div>";
			echo "<div>ES PRIMO (6): " . ($obj->esPrimo(6) ? "Sí" : "No") . "</div>";
			echo "<div>MAYOR (5, 7): " . $obj->devolverMayor(5, 7) . "</div>";
			echo "<div>ECUACIÓN ( 2X - 10 = 0 ): " . $obj->resolverEcuacionPrimerGrado(2, -10) . "</div>";
			echo "<div>ES BISIESTO (2016): " . ($obj->esBisiesto(2016) ? "Sí" : "No") . "</div>";
			echo "<div>ES BISIESTO (2018): " . ($obj->esBisiesto(2018) ? "Sí" : "No") . "</div>";
            
        ?>
    </body>
</html>