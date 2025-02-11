<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <form class="col-md-6 p-4 rounded bg-dark shadow-lg" method="post" action="./server/request.php">
    
    <h3 class="text-center text-warning fw-bold mb-4">Ask a Question</h3>

    <div class="form-group">
      <label for="title" class="text-light font-weight-bold">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>

    <div class="form-group">
      <label for="discription" class="text-light font-weight-bold">Description</label>
      <textarea class="form-control" id="discription" name="discription" rows="4"></textarea>
    </div>

    <div class="form-group">
      <label for="category" class="text-light font-weight-bold">Category</label>
      <?php include('category.php'); ?>
    </div>

    <button type="submit" name="ask" class="btn btn-warning text-dark fw-bold px-4 py-2 w-100 mt-3">
      Submit
    </button>
  
  </form>
</div>
