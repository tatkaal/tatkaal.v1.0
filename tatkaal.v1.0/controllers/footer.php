<footer>
		&copy; Tatcall : Your solution to everything 
		<?php
			$init_year='2017';
			$cur_year=date("Y");
			if($init_year==$cur_year){
				echo date("Y");
			}
			else{
				echo $init_year.'-'.$cur_year;
			}
		?>
	</footer>