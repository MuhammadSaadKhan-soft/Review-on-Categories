<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <?php include('./client/commonFiles.php')?>
</head>
<body>

    <?php session_start();
     include('./client/header.php');
    
    ?>

    <?php if((isset($_GET['signup'])) && !isset($_SESSION['user']['name']))
  
    {
        include('./client/signup.php');
    }
    if((isset($_GET['login'])) && !isset($_SESSION['user']['name']))
    {
        include('./client/login.php');
    }
    else if(isset($_GET['ask'])){
        include('./client/ask.php');
     }
    else if(isset($_GET['q-id'])){
        $id=$_GET['q-id'];
        
        include('./client/question-details.php');
     }
    else if(isset($_GET['c_id'])){
        $id=$_GET['c_id'];
       include('./client/questions.php');
     }
    else if(isset($_GET['u_id'])){
        $uid=$_GET['u_id'];
        include('./client/questions.php');
    }
    else if(isset($_GET['latest'])){
        
        include('./client/questions.php');
    }
    else if(isset($_GET['search'])){
        $search=$_GET['search'];
        include('./client/questions.php');
    }
     else{
        include('./client/questions.php');
     }
     ?>
</body>
</html>