<div class="container">
    <?php
    include('./common/db.php');
    $query="select * from category";
    $result=$conn->query($query);

    foreach ($result as  $value) {
        $name=$value['name'];
        $id=$value['id'];
        echo "<div class='mb-3 bg-dark'><div class='border p-2 rounded shadow-sm bg-dark'>
        <h6 id='$id'  ><a class='text-warning ' href='?c_id=$id'>  $name  </a></h6>
          </div></div>";
    }

?>
</div>