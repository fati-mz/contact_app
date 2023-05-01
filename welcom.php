<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>My Contact</title>
</head>
<body style=" font-family: sans-serif">
  <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm p-3" >
  <!-- Container wrapper -->
  <div class="container-fluid" style="width: 77%;">
    <!-- Navbar brand -->
    <a class="navbar-brand text-danger" style="font-weight: bolder;" href="index.php">CONTACT APP</a>
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="fas fa-bars"></span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Right elements -->
      <div class="col-3 offset-9 ">
      <button type="button" class="btn btn-outline-secondary btn-lg px-3 me-2" data-toggle="modal" data-target="#exampleModalCenter">Login</button>
      <button type="button" class="btn btn-outline-primary btn-lg px-3 me-2" data-toggle="modal" data-target="#exampleModal">Register</button>  
      </div>
      <!-- Right elements -->
      
    </div>
    <!-- Collapsible wrapper -->

  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
     <!-- Modal Login -->
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle"><h2>Login</h2></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="signup-form">
    <form action="loginProcess.php" method="post">
		<p class="hint-text p-2">Enter your login details</p>
        <div class="form-group p-2">
        	<input type="email" class="form-control" id="email" name="email" placeholder="Email">
        </div>
		<div class="form-group p-2">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
		<div class="form-group p-2" >
            <button type="submit" name="login" class="btn btn-success">Login</button>
        </div>
    </form>
	<?php if (isset($_GET['error'])): ?>
	<div class="alert alert-danger mt-3" role="alert">
		Invalid email or password. Please try again.
	</div>
	<?php endif; ?>
</div>
      </div>
      <div class="modal-footer text-left" >
      <div >Don't have an account? <a href="register.php">Register Here</a></div>
      <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
<!-- Modal Login -->
<!-- Modal SignUp-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><h2>Register</h2></h5>
        <button type="button" class="close" name="save" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="signup-form">
    <form action="register.php" method="post" enctype="multipart/form-data">
		
		<p class="hint-text">Create your account</p>
        <div class="form-group p-2">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required"></div>
				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required"></div>
			</div>        	
        </div>
        <div class="form-group p-2">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group p-2">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group p-2">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
        <!-- <div class="form-group">
            <input type="file" name="file" required>
            <input type="submit" name="upload" value="Upload" class="btn">
        </div>         -->
        <div class="form-group p-2">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group p-2">
            <button type="submit" name="save" class="btn btn-success btn-block">Register Now</button>
        </div>
        
    </form>
	
</div>
      </div>
      <div class="modal-footer">
      <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
      </div>
    </div>
  </div>
</div>
<!-- Modal SignUp-->
<main>
    <div class="container py-5 mt-5" style="text-align: center " >
        <h1>Contact App</h1>
        <p class="lead p-2">Contact App gives you everything you need to organize your contacts easily.
        </p>
      </div>

    <div class="py-5" style="background-color:#f9fafb">
        <div class="container py-5 " style="background-color:#f9fafb">
            <div class="row">
              <div class="col-md-4">
                <h3>Data Protection</h3>
                <p>In the event of contact deletion or corruption, keep your contacts secure and unharmed across all of your connected accounts.</p>
              </div>
              <div class="col-md-4">
                <h3>Notes & Tags</h3>
                <p>Group, search, and filter your contacts using notes and tags.</p>
              </div>
              <div class="col-md-4">
                <h3>Birthday Reminders</h3>
                <p>Weekly notifications are sent to you, including birthday reminders.</p>
              </div>
            </div>
          </div>
    </div>

    <div class="py-5" >
        <h2 class="text-center p-5">Easy to try. Fair pricing to upgrade.</h2>
        <div class="container  text-center">
            <div class="card-deck">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                              <h4 class="my-0 font-weight-normal">Free</h4>
                            </div>
                            <div class="card-body">
                              <h1 class="card-title pricing-card-title">$0 <mdall class="text-muted">/ mo</mdall></h1>
                              <ul class="list-unstyled mt-3 mb-4">
                                <li>1,000 Contacts</li>
                                <li>Sync 1 Accounts</li>
                                <li>Basic Features</li>
                              </ul>
                              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                              <h4 class="my-0 font-weight-normal">Pro</h4>
                            </div>
                            <div class="card-body">
                              <h1 class="card-title pricing-card-title">$9 <mdall class="text-muted">/ mo</mdall></h1>
                              <ul class="list-unstyled mt-3 mb-4">
                                <li>25,000 Contacts</li>
                                <li>Sync 5 Accounts</li>
                                <li>Pro Features</li>
                              </ul>
                              <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                            </div>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <div class="card-header">
                              <h4 class="my-0 font-weight-normal">Enterprise</h4>
                            </div>
                            <div class="card-body">
                              <h1 class="card-title pricing-card-title">$15 <mdall class="text-muted">/ mo</mdall></h1>
                              <ul class="list-unstyled mt-3 mb-4">
                                <li>50,000 Contacts</li>
                                <li>Sync 7 Accounts</li>
                                <li>Advance Features
                                </li>
                              </ul>
                              <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="py-5" style="background-color:#435d7d ;color: #fff; ">
        <div style="text-align: center;" class="page-footer-co">
            <footer class="pt-4 ">
                <div class="row">
                  <div class="col-12 col-md" >
                    <a class="navbar-brand text-light" style="font-weight: bolder;" href="#">CONTACT APP</a>
                    <mdall class="d-block mb-3 text-muted">© 2017-2018</mdall>
                  </div>
                  <div class="col-6 col-md" style="text-align: left;">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-mdall">
                      <li><a class="text-muted" href="#">Cool stuff</a></li>
                      <li><a class="text-muted" href="#">Random feature</a></li>
                      <li><a class="text-muted" href="#">Team feature</a></li>
                      <li><a class="text-muted" href="#">Stuff for developers</a></li>
                      <li><a class="text-muted" href="#">Another one</a></li>
                      <li><a class="text-muted" href="#">Last time</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md" style="text-align: left;">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-mdall">
                      <li><a class="text-muted" href="#">Resource</a></li>
                      <li><a class="text-muted" href="#">Resource name</a></li>
                      <li><a class="text-muted" href="#">Another resource</a></li>
                      <li><a class="text-muted" href="#">Final resource</a></li>
                    </ul>
                  </div>
                  <div class="col-6 col-md " style="text-align: left;">
                    <h5>About</h5>
                    <ul class="list-unstyled text-mdall">
                      <li><a class="text-muted" href="#">Team</a></li>
                      <li><a class="text-muted" href="#">Locations</a></li>
                      <li><a class="text-muted" href="#">Privacy</a></li>
                      <li><a class="text-muted" href="#">Terms</a></li>
                    </ul>
                  </div>
                </div>
              </footer>
        </div>
    </div>
</main>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  $("form").submit(function(event) {
    var email = $("#email").val();
    var password = $("#password").val();
    if (!email || !password) {
      event.preventDefault();
      alert("Please enter your email and password.");
    }
  });
});
</script>
</body>
</html>