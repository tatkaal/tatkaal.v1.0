<div class="header">
				  <ul>

				    	<?php
		if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
			echo "<li><a href='../public_html/index.php?id=&page=logout-template'>Logout</a></li>";
		}
		else{
			echo "<li><a href='../public_html/index.php?id=&page=login-template'>Login</a></li>";
		}
		echo "<li><a href='../public_html/index.php?id=&page=faq-template'>FAQs</a></li>";
		echo "<li><a href='../public_html/index.php?id=&page=contacts-template'>Contact Us</a></li>";
		echo "<li><a href='../public_html/index.php?id=&page=news-template'>News</a></li>";
		echo "<li><a href='../public_html/index.php?id=&page=about-template'>About Us</a></li>";
		echo "<li><a href='../public_html/index.php?id=&page=userindex-template'>Home</a></li>";
			?>
				  </ul>
</div>