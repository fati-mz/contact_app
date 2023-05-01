<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href='https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css'>
  <title>My Contact</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script>src='https://code.jquery.com/jquery-3.5.1.js'</script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

</head>
<body style="background-color:#f7f7f7; font-family: 'Varela rounded', sans-serif;">

<?php require_once "nav.php";
include_once 'database.php';?>


<main class=" m-auto p-5" style="width: 80%;">

  <!-- card body -->
  <div class="card">
    
    <!-- card header -->
    <div class="card-header " style="background-color: #435d7d;">
      <div class="d-flex justify-content-between">
        <h2 style="color: #fff;">All Contacts</h2>
        <div class="p-1 "><a href="form.php" class="btn btn-success "><i class="fa fa-plus-circle "></i> Add New</a></div>
      </div>
    </div>
    <!-- card header -->

    <!-- search and select -->
    <div class="d-flex justify-content-end p-3 pb-2 row">
      <select name="select_company" class="form-select " method="post" style="width: 25%;" aria-label="Default select example">
        <option selected>All Companies</option>
        <option value="1">Companiy One</option>
        <option value="2">Companiy Two</option>
        <option value="3">Companiy Three</option>
      </select>
      
        <form method="post" class="input-group " style="width: 30%;">
        <input name="search" type="search" class="form-control rounded" placeholder="Search ..." aria-label="Search" aria-describedby="search-addon" >
        <a href="index.php" title="Refresh The Page" class="btn btn-outline-secondary"  ><i class="fa fa-refresh" aria-hidden="true"></i></a>
        <button type="submit" class="btn btn-outline-secondary"  >search</button>
        </form>
    </div>
    <!-- search and select -->

    <hr>
    <script>
      function ConfirmDelete()
      {
        return confirm("Are you sure you want to delete your contact?");
      }
    </script>
    <?php

      if (isset($_GET['pageno'])) {
          $pageno = $_GET['pageno'];
      } else {
          $pageno = 1;
      }
      $no_of_records_per_page = 10;
      $offset = ($pageno-1) * $no_of_records_per_page;

    

      $total_pages_sql = "SELECT COUNT(*) FROM users";
      $result = mysqli_query($conn,$total_pages_sql);
      $total_rows = mysqli_fetch_array($result)[0];
      $total_pages = ceil($total_rows / $no_of_records_per_page);
      
      if (isset($_POST['search'])) {
        $Name = $_POST['search'];
        $sql = "SELECT * FROM users WHERE first_name LIKE '%$Name%' or email like '%$Name%' LIMIT $offset, $no_of_records_per_page";}
      
      elseif(isset($_POST['submit'])) {
        $var = $_POST['select_company'];
        $sql = "SELECT * FROM users WHERE company=$var  LIMIT $offset, $no_of_records_per_page";
      }
      else {
        $sql = "SELECT * FROM users LIMIT $offset, $no_of_records_per_page";
      }
      

      $res_data = mysqli_query($conn,$sql);
      echo ('<div class="table-responsive m-auto" style="width: 90%;">
                        <table class="table table-striped table-hover table-borderless" id="myTable">
                          <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">phone</th>
                            <th scope="col">Company</th>
                            <th scope="col">Actions</th>
                            </tr>
                          </thead>
                        <tbody id="myTable">'."\n");
      while($row = mysqli_fetch_array($res_data)){
        //here goes the data
        echo "<tr><td>";
        echo($row['id']);
        echo("</td><td>");
        echo($row['first_name']);
        echo("</td><td>");
        echo($row['last_name']);
        echo("</td><td>");
        echo($row['email']);
        echo("</td><td>");
        echo($row['phone']);
        echo("</td><td>");
        echo($row['company']);
        echo('<td >
                <a href="show.php?id='.$row["id"].'"
                class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                
                <a href="edit.php?id='.$row["id"].'" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                
                <a href="delete-process.php?id='.$row["id"].'" class="btn btn-sm btn-circle btn-outline-danger"
                 title="Delete" type="submit" value="Del" name="delete" onclick="ConfirmDelete()">
                 <i class="fa fa-times"></i></a></td>'
              );
        echo("</td></tr>\n");
        }
        echo "    </tbody>
                </table>
              </div>\n";

        mysqli_close($conn);
      ?>
      

    <!-- pagination -->

    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-center">
        <li class="page-item ">
          <a class="page-link" href="?pageno=1">First Page</a></li>

        <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>">
          <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
    
        <li class="page-item <?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
          <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        
        <li class="page-item ">
          <a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last Page</a>
        </li>
      </ul>
    </nav>
    <!-- pagination -->

  </div>
    <!-- card body -->

</main>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>