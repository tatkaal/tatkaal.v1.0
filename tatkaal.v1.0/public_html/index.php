<!-- this page directs the other pages to its required destination by taking its id and page name from the url -->
<?php
  session_start();
  require '../models/template_loader.php';
  require '../controllers/createTable.php';

   $templateVar = ['catDBTable'=>$catDBTable, 'userDBTable'=>$userDBTable,'probcatDBTable'=>$probcatDBTable];

  if(isset($_GET['page'])){
    if(($_GET['page']=='')||($_GET['page']=='deals')){
      if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {$class='admin';}
      else{$class = 'cols';}
      // class is set to cols if the pagename is deals
    
      $class = 'cols';
      
      $contents = templateLoader('../views/showDetail-template.php',$templateVar);
    }
    else{
      if($_GET['page']=='userindex-template'){
        $class = 'cols';
      }
        else{
          // class name is set to admin if the page name is not userindex
          $class = 'admin';
        }
      
      $pageName = $_GET['page'];
       
      $contents = templateLoader('../views/'.$pageName.'.php',$templateVar);
    }
    
  }
  else{
    $pageName = 'userindex-template';
    
      $class = 'cols';
    $contents = templateLoader('../views/'.$pageName.'.php',$templateVar);
  }
  
  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {$title="Admin";require '../controllers/layout.php';}
  else{$title="Home"; require '../controllers/layout.php';}
?>


