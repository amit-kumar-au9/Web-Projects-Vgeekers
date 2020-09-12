<?php 
	
	$getToken = base64_decode($_GET['token']);
    
	echo"<object data='notes/".$getToken."#page=2' type='application/pdf' width='100%' height='100%'>";	

?>
