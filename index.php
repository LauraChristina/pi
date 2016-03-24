<?php
include ('dados.php');
if (isset($_POST['btn_send'])) {
	
	if (isset($logins[$_POST['login']])) {
		
		if ($logins[$_POST['login']] == $_POST['senha']) {
			
			include('../templates/admin_tpl.php');
			
		} else {
					$msg = 'Usuário ou Senha Inválidos';
					include('../templates/login_tpl.php');		
				
	}
	
	} else {
				$msg = 'Usuário ou Senha Inválidos';
				include('../templates/login_tpl.php');		
						
	}
	
} else {
	
	include('../templates/login_tpl.php');	
	
}
?>