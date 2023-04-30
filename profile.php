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
  <!-- Navbar -->
  <?php require_once "nav.php"?>
<!-- Navbar -->


<main>
  <div class="container align-items-start col-9 mt-5">
    <div class="row ">
      <div class="col-md-3">

        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action disabled bg-light" tabindex="-1" aria-disabled="true">Settings</a>
          <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            Profile
          <a href="#" class="list-group-item list-group-item-action">Account</a>
          <a href="#" class="list-group-item list-group-item-action">Import & Export</a>
        </div>
      </div>
      <div class="col-md-9 ">
        <div class="card">
            <div class="card-header card-title p-3" style="background-color: #435d7d; color: #fff;">
                <strong>Edit Profile</strong>
            </div>
            <div class="card-body ">
                <form class="row col-md-12 ">
                  <div class="col-md-8 ">
                    <div class="mb-3">
                      <label for="first_name" class="form-label">First Name</label>
                      <input type="text" class="form-control is-invalid" id="first_name" >
                      <div class="invalid-feedback">Please choose a username.</div>
                    </div>
                    <div class="mb-3">
                      <label for="last_name" class="form-label">Last Name</label>
                      <input type="text" class="form-control " id="last_name" >
                    </div>
                    <div class="mb-3">
                      <label for="company" class="form-label">Company</label>
                      <input type="text" class="form-control " id="company" >
                    </div>
                    <div class="mb-3">
                      <label for="bio" class="form-label">Bio</label>
                      <textarea class="form-control" id="bio" rows="3"></textarea>
                    </div>
                  </div>

                  <div class="col-md-3 offset-1 ">
                    <div class="mb-3 ">
                      <label for="formFile" class="form-label">Profile picture</label>
                      <div class="mb-4 d-flex justify-content-center">
                          <img src="img/150x150.png" alt="example placeholder" style="width: 150px; border-radius: 5px;" />
                      </div>
                      <div class="d-flex justify-content-center">
                          <div class="btn btn-outline-secondary">
                              <label class="form-label m-1" for="customFile1">Select Image</label>
                              <input type="file" class="form-control d-none" id="customFile1" />
                          </div>
                      </div>
                  </div>
                </div>
                  
                    <hr class="m-0">  
                    <div class="form-group row m-3">
                      <div class="col-md-9 ">
                        <button type="submit" class="btn btn-success">Update Profile</button>
                      </div>
                    </div>
                  </form>

            </div>

        </div>
    </div>

      </div>
    </div>
  </div>


  
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</main>

</body>
</html>