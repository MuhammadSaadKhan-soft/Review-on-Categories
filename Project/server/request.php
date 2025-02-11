<?php
session_start();
 include('../common/db.php');  

if (isset($_POST['signup'])) {
   $username=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $user=$conn->prepare("insert into `users`
    (`id`,`name`,`email`,`password`)
    values(NULL,'$username','$email','$password');
    ");
   $result=$user->execute();
   echo $user->insert_id;
   if($result){
    
    $_SESSION['user']=["name"=>$username,"email"=>$email,"user_id"=>$user->insert_id];
    header("location: /project");
   }else{
    echo "new user not registered!";
   }
}
else if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="select * from users where email='$email' and password='$password'";
    $result=$conn->query($query);
   
    if($result->num_rows==1){
        foreach($result as $row){
            $username=$row['name'];
          
        }
        $_SESSION['user']=["name"=>$username,"email"=>$email,"user_id" => $row['id']];
        header("location: /project");
    }
   
}
else if(isset($_GET['logout'])){
      session_unset();
      session_destroy();
      header("Location: /project"); // Redirect to home or login page
}
else if(isset($_POST['ask'])){
    if (!isset($_SESSION['user']['user_id'])) {
        echo "User not logged in!";
        exit;
    }
    $title=$_POST['title'];
    $discription=$_POST['discription'];
    $category_id=$_POST['category'];
    $user_id=$_SESSION['user']['user_id'];
    $question=$conn->prepare("insert into `questions`
     (`title`,`discription`,`category_id`,`user_id`)
     values('$title','$discription','$category_id','$user_id');
     ");
    $result=$question->execute();
   
    if($result){
     
 
     header("location: /project");
    }else{
     echo "question not added to database also!";
    }
}
else if(isset($_POST['answer'])){
    $answer=$_POST['answer'];
    $question_id=$_POST['question_id'];
    $user_id=$_SESSION['user']['user_id'];
    $query1 = $conn->prepare("INSERT INTO `answers` (`answer`, `question_id`, `user_id`) VALUES ('$answer', '$question_id', '$user_id')");

    $result1=$query1->execute();
    if($result1){
        
    } header("location: /project/?q-id=$question_id");
}
else if(isset($_GET['delete'])){
      $qid=$_GET['delete'];
      $query="delete from questions where id=$qid";
      $ready=$conn->prepare($query);
      $result=$ready->execute();
      if($result){
        header("location:/project");
      }
      


}
else{
 echo "question not added to database also!";
}






?>
