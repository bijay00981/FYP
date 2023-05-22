  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Change Admin Password
            </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Change Admin Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
        <!-- Main content -->
<section class="content">
<div class="container-fluid">
       
<div class="card">
  
              <div class="card-header">
            
                <h3 class="card-title">Change Password</h3>

              </div>

              <form id="addnewservice" role="form" action="Resetpassword/resetpasswordsave" method="post" class="basicvalidation col-md-6">
                <div class="card-body">
       
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" required="true" id="password" name="password" placeholder="Enter Password">
                    <input type="checkbox" onclick="myFunction()">Show Password
                  </div>
                  <script>
                    function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
                    </script>
                   <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" required="true" id="cnfpassword" name="cnfpassword" placeholder="Enter Confirm Password">
                    <input type="checkbox" onclick="myFunction1()">Show Password
                  </div>
                  <script>
                    function myFunction1() {
  var x = document.getElementById("cnfpassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
                    </script>
              
                   <div id="password_submit" class="btn-block text-right mt-3">
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
</section>