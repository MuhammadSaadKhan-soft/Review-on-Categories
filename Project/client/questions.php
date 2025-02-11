<div class="container mt-5">
    <div class="row">
        
        <!-- Questions Section -->
        <div class="col-md-8">
            <h4 class="text-warning fw-bold mb-4">Questions</h4>
            <?php
            include('./common/db.php');

            if (isset($_GET['c_id'])) {
                $query = "SELECT * FROM questions WHERE category_id=$id";
            } else if (isset($_GET['u_id'])) {
                $query = "SELECT * FROM questions WHERE user_id=$uid";
            } else if (isset($_GET['latest'])) {
                $query = "SELECT * FROM questions ORDER BY id DESC";
            } else if (isset($_GET['search'])) {
                $query = "SELECT * FROM questions WHERE `title` LIKE '%$search%'";
            } else {
                $query = "SELECT * FROM questions";
            }

            $result = $conn->query($query);

            foreach ($result as $row) {
                $data = $row['title'];
                $id = $row['id'];

                echo '<div class="mb-3">
                <div class="border p-3 rounded shadow-sm bg-dark">
                    <h5 class="text-light">
                        <a href="?q-id=' . $id . '" class="text-warning text-decoration-none">' . $data . '</a>
                    </h5>';
                    
                // Show delete button if user is viewing their own questions
                if (isset($_GET['u_id'])) {
                    echo "<div class='d-flex justify-content-end'>
                            <a class='btn btn-danger text-light fw-bold mt-n4' href='./server/request.php?delete=$id'>DELETE</a>
                          </div>";
                }

                echo '</div>
            </div>';
            }
            ?>
        </div>

        <!-- Categories Section -->
        <div class="col-md-4">
            <h4 class="text-warning fw-bold mb-4">Categories</h4>
            <div class="bg-dark p-3 rounded shadow-sm">
                <?php include('categorylist.php'); ?>
            </div>
        </div>

    </div>
</div>
