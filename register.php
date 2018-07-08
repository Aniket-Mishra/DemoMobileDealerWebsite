<?php include('header.php');?>

<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form id="reg" method="post" action="Registration-backend.php">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="FirstName" name="FirstName" type="text" aria-describedby="nameHelp" placeholder="Enter first name" required>
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" id="LastName" name="LastName" type="text" aria-describedby="nameHelp" placeholder="Enter last name" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="InputEmail" name="InputEmail" type="email" aria-describedby="emailHelp" placeholder="Enter email" required>
          </div>
          <div class="form-group">
            <label for="exampleInputUserName">User Name</label>
            <input class="form-control" id="UserName" name="UserName" type="text" aria-describedby="usernameHelp" placeholder="Enter User Name" required>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" id="Password" name="Password" type="password" placeholder="Password" required>
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="ConfirmPassword" name="ConfirmPassword" type="password" placeholder="Confirm password" required>
              </div>
            </div>
          </div>
            <button type="button" class="btn btn-primary btn-block" id="submit">Signup</button><br>
            <button type="reset" class="btn btn-primary btn-block">Cancel</button><br>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
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
      var reg = $('#reg');

      $('#submit').on('click',function(){
            
        $.ajax({
          type: reg.attr('method'),
          url:  reg.attr('action'),
          data: reg.serialize(),
          success: function (data) {
                    alert(data);
                      $('#reg')[0].reset();
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
