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
<body style="background-color:#f7f7f7; font-family: 'Varela rounded', sans-serif;">


<?php 
require_once "nav.php";

?>


<main class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-title" style="background-color: #435d7d; color: #fff;">
                        <h2>Add New Contact</h2>
                    </div>
                    <div class="card-body ">
                        <form class="row col-md-12" method="post" action="insert.php">
    
                            <div class="form-group row m-3">
                              <label for="first_name" class="col-md-3 col-form-label">First Name</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control is-invalid" name="first_name" >
                                <div class="invalid-feedback">
                                  Please choose a username.
                                </div>
                              </div>
                            </div>
                            <div class="form-group row m-3">
                              <label for="last_name" class="col-md-3 col-form-label">Last Name</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="last_name" >
                              </div>
                            </div>
                            <div class="form-group row m-3">
                              <label for="email" class="col-md-3 col-form-label">Email</label>
                              <div class="col-md-9">
                                <input type="email" class="form-control " name="email" >
                              </div>
                            </div>
                            <div class="form-group row m-3">
                              <label for="phone" class="col-md-3 col-form-label">Phone</label>
                              <div class="col-md-9">
                                <input type="tel" maxlength="11" class="form-control" name="phone" >
                              </div>
                            </div>
                            <div class="form-group row m-3">
                              <label for="address" class="col-md-3 col-form-label">Address</label>
                              <div class="col-md-9">
                                <textarea class="form-control" name="address" rows="3"></textarea>
                              </div>
                              <div class="form-group row m-3 ">
                                <label for="company" class="col-md-3 col-form-lable">Company</label>
                                <div class="col-md-9 ">
                                  <select class="form-control" name="company">
                                    <option selected>Select Company ...</option>
                                    <option>Company One</option>
                                    <option>Company Two</option>
                                    <option>Company Three</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <hr class="m-0">  
                            <div class="form-group row m-3">
                              <div class="col-md-9 offset-md-3">
                                <button type="submit" class="btn btn-primary" name="save">Save</button>
                                <a href="index.php" class="btn btn-outline-secondary">Cancel</a>
                              </div>
                            </div>
                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</main>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>