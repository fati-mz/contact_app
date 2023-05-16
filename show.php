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
// session_start();
require_once "nav.php";
include_once 'pdo.php';
// Display the user's information
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_assoc($result);
?>
<script>
      function ConfirmDelete()
      {
        return confirm("Are you sure you want to delete your contact?");
      }
    </script>

<main class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-header card-title" style="background-color: #435d7d; color: #fff;">
                        <h2>Add New Contact</h2>
                    </div>
                    <div class="card-body ">
                        <form class="row col-md-12">
    
                            <div class="form-group row m-3">
                                <label for="staticFName" class="col-md-3 col-form-label">First Name</label>
                                <div class="col-md-9">
                                  <input type="text" readonly class="form-control-plaintext text-muted" value="<?php echo $row["first_name"]?>">
                                </div>
                            </div>
                            <div class="form-group row m-3">
                                <label for="staticLName" class="col-md-3 col-form-label">Last Name</label>
                                <div class="col-md-9">
                                  <input type="text" readonly class="form-control-plaintext text-muted"  value="<?php echo $row["last_name"]?>">
                                </div>
                            </div>
                            <div class="form-group row m-3">
                                <label for="staticEmail" class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-9">
                                  <input type="text" readonly class="form-control-plaintext text-muted"value="<?php echo $row["email"]?>">
                                </div>
                            </div>
                            <div class="form-group row m-3">
                                <label for="staticPhone" class="col-md-3 col-form-label">Phone</label>
                                <div class="col-md-9">
                                  <input type="text" readonly class="form-control-plaintext text-muted" value="<?php echo $row["phone"]?>">
                                </div>
                            </div>
                            <div class="form-group row m-3">
                                <label for="staticAddress" class="col-md-3 col-form-label">Address</label>
                                <div class="col-md-9">
                                  <input type="text" readonly class="form-control-plaintext text-muted" value="<?php echo $row["address"]?>">
                                </div>
                            </div>
                              <div class="form-group row m-3 ">
                                <label for="staticCompany" class="col-md-3 col-form-label">Company</label>
                                <div class="col-md-9">
                                  <input type="text" readonly class="form-control-plaintext text-muted" value="<?php echo $row["company"]?>">
                                </div>
                              </div>
                            </div>
                            <hr class="m-0">  
                            <div class="form-group row m-3">
                              <div class="col-md-9 offset-md-3">
                                <a href="edit.php?id=<?php echo $_GET["id"]; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete-process.php?id=<?php echo $_GET["id"]; ?>" onclick="ConfirmDelete()" class="btn btn-outline-danger">Delete</a>
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