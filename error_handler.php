<?php 
	define('LIVE', TRUE);
	
	function my_error_handler($e_number,$e_message,$e_file,$e_line,$e_vars){
		$message="An error occured in script '$e_file' on line $e_line:$e_message\n ";
		$message .= print_r ($e_vars, 1);
		if (!LIVE) {
		echo '<pre>' . $message . "\n";
		debug_print_backtrace();
		echo '</pre><br />';
		} else {
		echo '<div class="error">
		Возможно,произошла техническая ошибка.Приносим извинения.</div><br />';
		}
	}
	set_error_handler('my_error_handler');
?>