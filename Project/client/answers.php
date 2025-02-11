<div class="container">
    <h4> Answer </h4>
  <?php
  $query = "select * from answers where question_id=$id";
  $row = $conn->query($query);
  foreach ($row as $value) {
    echo "<div><p>".$_SESSION['user']['name'].'==>'.$value['answer']."</p></div>";
  }
  ?>
</div>