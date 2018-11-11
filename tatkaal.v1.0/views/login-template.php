	<?php

	if (isset($_POST['submit'])) {
		 
		  $email = $_POST['email'];
		  var_dump($email);
    $password = sha1($_POST['password']);

		 $stmt = $userDBTable->find('email', $email);
    if(($email=='')){
      echo "<script type='text/javascript'>alert('Error: Invalid email:Field blank');</script>";
    }
    foreach ($stmt as $key) {
      if($key['password'] == $password){
        $_SESSION['loggedin'] = true;
        $_SESSION['id'] = $key['id'];
        $_SESSION['firstname'] = $key['firstname'];
     }
	}
}

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		var_dump($_SESSION['loggedin']);
		var_dump($_SESSION['id']);
		var_dump( $_SESSION['firstname']);
		session_unset();
		session_destroy();
		// header('location: ../public_html/index.php?page=userpage-template');
	?>
	
	<?php 
			}
			else {
				require '../controllers/loginForm.php';
	}
	?>