<!-- this is the loader function that extracats the array variables and store its contents to content variable -->
<?php
	function templateLoader($fileName, $ArrayTempVar){
		extract($ArrayTempVar);
		ob_start();
		require $fileName;
		$contents = ob_get_clean();
		return $contents;
	}
?>