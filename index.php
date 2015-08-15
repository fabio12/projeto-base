<?php	ob_start();
	 	session_start();
		error_reporting(E_ALL | E_STRICT);//E_ALL | E_STRICT
		date_default_timezone_set ('America/Sao_Paulo');
		include('modules/autoload.php');
		include('modules/settings.php');
		$Security = new Security();
		$db = new DataBase(); //Faz a conexão com o banco de dados.
		$Tpl = new Tpl(); //Chama a classe template.

		switch($page)
		{
			
		default:
        $Tpl->open("templates/".TEMPLATE_DIR."/home.tpl.php");	
		break;	
		}
		
		// EXIBE O SITE
		$Tpl->show();  
		ob_end_flush();


?>