<select class="form-control" id="category" name="category">
    <option value="">Select a Category</option>
    <?php
    include('./common/db.php');
    $query="select * from category";
    $result=$conn->query($query);
    foreach ($result as  $value) {
        $name=ucfirst($value['name']);
        $id=$value['id'];
        echo "<option value='$id'>$name</option>";
    }
?>
</select>