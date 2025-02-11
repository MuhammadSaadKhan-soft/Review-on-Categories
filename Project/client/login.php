<div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
  <div class="col-md-6">
    
   
    <h2 class="text-center text-warning bg-dark py-3 rounded shadow-sm">
      Review on Categories
    </h2>
    
    <form method="post" action="./server/request.php" class="p-4 rounded bg-dark shadow-lg">
     
      <div class="form-group">
        <label for="email" class="text-warning font-weight-bold">Email address</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
      </div>
      
      <div class="form-group">
        <label for="password" class="text-warning font-weight-bold">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      
      <button type="submit" name="login" class="btn btn-warning text-dark px-4 py-2 font-weight-bold">
        Submit
      </button>
    </form>
    
  </div>
</div>
