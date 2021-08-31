<?php

	include_once("minifier.php");

	$verificaTipoArquivo = readline("Escolha a opção:\n1 - JS \n2 - CSS\n");

	echo "\n";
		
	switch($verificaTipoArquivo)
	{
		case 1:
			$diretorioArquivo = readline("Insira o diretorio do arquivo: ");
			$nomeSaidaArquivo = readline("Insira o diretorio de saída: ");

			$js = array(
				$diretorioArquivo => $nomeSaidaArquivo,		
			);
			
			echo "\n";
			minifyJS($js);
		break;

		case 2:	
			$diretorioArquivo = readline("Insira o diretorio do arquivo: ");
			$nomeSaidaArquivo = readline("Insira o diretorio de saída: ");

			$css = array(
				$diretorioArquivo => $nomeSaidaArquivo		
			);

			echo "\n";
			minifyCSS($css);
		break;	
	}
?>