<div class="container-fluid bg-dark text-white min-vh-100 py-5">
    <h4 class="text-warning fw-bold text-center p-3 rounded shadow">Question</h4>
    <div class="row">
       
        <div class="col-md-8 mt-4">
            <?php
            include('./common/db.php');
            $query = "SELECT * FROM questions WHERE id = $id";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();
            $c_id = $row['category_id'];
            echo "<h4 class='text-warning fw-bold'>" . $row['title'] . "</h4>";
            echo "<p class='bg-secondary text-white p-3 rounded'>" . $row['discription'] . "</p>";
            include('answers.php');
            ?>
            <form action="./server/request.php" method="post" class="mt-4 p-4 bg-secondary rounded shadow">
                <input type="hidden" name="question_id" value="<?php echo $id ?>">
                <textarea name="answer" class="form-control bg-dark text-white border-0 p-2" placeholder="Your answer..."></textarea>
                <button class="btn btn-warning mt-3 w-100 fw-bold">Write Your Answer</button>
            </form>
        </div>

        <div class="col-md-4 mt-4">
            <?php
                $select1="SELECT name FROM category WHERE id=$c_id";
                $row1=$conn->query($select1);
                $result=$row1->fetch_assoc();
                $category_name= ucfirst($result['name']);
                
                echo "<div class='bg-secondary text-warning p-3 rounded shadow'><h4>$category_name</h4></div>";
            ?>
            <div class="mt-3 bg-secondary p-3 rounded shadow">
                <?php 
                  $select="SELECT * FROM questions WHERE category_id=$c_id AND id!=$id";
                  $row=$conn->query($select);
                  
                  foreach ($row as  $value) {
                    $title=$value['title'];
                    $id=$value['id'];
                    echo "<div class='border-bottom p-2'><h5><a href='?q-id=$id' class='text-white fw-bold text-decoration-none'>$title</a></h5></div>";
                  }
                ?>
            </div>
        </div>
    </div>
</div>
