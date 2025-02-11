<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 shadow-lg">
  <div class="container-fluid">
  <?php if(isset($_SESSION['user']) && isset($_SESSION['user']['name'])) { ?>
    <a class="navbar-brand fw-bold text-warning" href="/project">Review Questions </a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php } ?>
   
    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
      <ul class="navbar-nav gap-3">
        <?php if(isset($_SESSION['user']) && isset($_SESSION['user']['name'])) { ?>
          <li class="nav-item">
            <a class="nav-link text-light btn btn-outline-warning px-4 py-2" href="./server/request.php?logout=true">
              Logout (<?php echo ucfirst($_SESSION['user']['name']) ?>)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline px-4 py-2 hover-bg-dark text-light" href="?ask=true">Ask Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline px-4 py-2" href="?u_id=<?php echo $_SESSION['user']['user_id'] ?>">My Questions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline px-4 py-2" href="?latest=true">Latest Questions</a>
          </li>
        <?php } ?>

        <?php if(!isset($_SESSION['user']) && !isset($_SESSION['user']['name'])) { ?>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-primary px-4 py-2" href="?signup=true">Signup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn btn-outline-success px-4 py-2 ml-2" href="?login=true">Login</a>
          </li>
        <?php } ?>
      </ul>

      <form class="d-flex mt-3 mt-lg-0">
        <input class="form-control me-2 border-warning" type="search" name="search" placeholder="Search Question">
        <button class="btn btn-warning px-4 ml-1" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
