<!-- ADMIN LOGIN -->

<?php include('header.php');?>

  <div class="container" style="background-color: black;">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <p>username- aniket, password- password</p>
        <form id="login_form" method="post" action="loginCheck.php">
          <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input class="form-control" id="username" name="username" type="text" aria-describedby="usernameHelp" placeholder="Enter your username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember Password</label>
            </div>
          </div>
         <button class="btn btn-success">Login</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script>

    $(document).ready(function(){
      var login_form = $('#login_form');

      $('#submit').on('click',function(){
            
        $.ajax({
          type: login_form.attr('method'),
          url:  login_form.attr('action'),
          data: login_form.serialize(),
          success: function (data) {
                     // alert(data);
                      $('#login_form')[0].reset();
                  },
                 error: function (data) {
                    alert('An error occurred.');
                },
        });
      });
    });

  </script>
</body>

</html>
