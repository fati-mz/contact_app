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
include_once 'database.php';

// Check if the form has been submitted
if(isset($_POST['save'])) {
    mysqli_query($conn,"UPDATE users set first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', phone='" . $_POST['phone'] . "', address='" . $_POST['address'] . "', email='" . $_POST['email'] . "', company='" . $_POST['company'] . "' WHERE id='" . $_GET['id'] . "'");
    header("Location: index.php");
    exit();
}

// Display the user's information
$result = mysqli_query($conn,"SELECT * FROM users WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_assoc($result);

// Get the list of companies
$companies = mysqli_query($conn,"SELECT company FROM users");
?>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card">
        <div class="card-header" style="background-color: #435d7d; color: #fff;">
          <h4 class="card-title" >Edit Contact</h4>
        </div>
        <div class="card-body">
          <form method="post" action="#">
            <div class="form-group mb-3">
              <label for="first_name">First Name</label>
              <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $row['first_name']; ?>">
            </div>
            <div class="form-group mb-3">
              <label for="last_name">Last Name</label>
              <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $row['last_name']; ?>">
            </div>
            <div class="form-group mb-3">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone']; ?>">
            </div>
            <div class="form-group mb-3">
              <label for="address">Address</label>
              <textarea class="form-control" id="address" name="address" rows="3"><?php echo $row['address']; ?></textarea>
            </div>
            <div class="form-group mb-3">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group mb-3">
              <label for="company">Company</label>
              <select class="form-control" id="company" name="company">
                <?php while($company = mysqli_fetch_assoc($companies)): ?>
                  <option value="<?php echo $company['name']; ?>" <?php if($row['company'] == $company['company']) echo 'selected'; ?>><?php echo $company['name']; ?></option>
                <?php endwhile; ?>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" name="save"><i class="fa fa-save"></i> Save</button>
            <a href="index.php" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> Back to Contacts</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js" integrity="sha384-6aUncykCeu7rZ8JW5qx7YhZ6lduM7x5Xe1uV5v5F6UjV6Zd3hUgtV6UJbIxU3zEV" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-9WjDvM94TfT1JU5p6m5nBbZc6+Zz6J2/o9n7YP4M2MAKq3N6wv1wxWJ+RkNpLZjP" crossorigin="anonymous"></script>

</body>
</html>