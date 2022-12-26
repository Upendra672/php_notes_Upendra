<?php
$insert = false;
$update = false;
$delete = false;
//connecting to the database
$servername = "localhost";
$username = "root";
$password = "";
$database = "inotes";

//create a connection 
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
  die("sorry we failed to connect:" . mysqli_connect_error());
}
/*else {
    echo "connection is successful";
}*/

//deleting records
if (isset($_GET['delete'])) {
  $srno = $_GET['delete'];
  $delete = true;
  $sql = "DELETE FROM `notes` WHERE `srno` = $srno";
  $result = mysqli_query($conn, $sql);
}


//updating records
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['srnoEdit'])) {
    // echo "yes";
    //update the record
    $srno = $_POST['srnoEdit'];
    $title = $_POST['titleEdit'];
    $description = $_POST['descriptionEdit'];

    $sql = "UPDATE `notes` SET `title` = '$title', `description` = '$description'  WHERE `notes`.`srno` = $srno";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $update = true;
    } else {
      echo "we could not update the record successfully";
    }
  }

  //inserting 
  $title = $_POST['title'];
  $description = $_POST['description'];

  $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";


  $result = mysqli_query($conn, $sql);

  //check for the data insertion in table creation scuccess
  if ($result) {
    // echo "The data is Inserted successfully";
    // echo "<br>";
    $insert = true;
  } else {
    echo "The Data is not Inserted successfully becuase of tis error ----->" . mysqli_error($conn);
    echo "<br>";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">


  <title> iNotes-Notes taking made easy</title>
</head>

<body>

  <!-- modal start  -->

  <!-- Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit this Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="./index.php" method="POST">
            <input type="hidden" name="srnoEdit" id="srnoEdit">
            <div class="form-group">
              <label for="title">Note Title</label>
              <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="notesedit" placeholder="iNote Title">
            </div>
            <div class="form-group">
              <label for='descriptionEdit'>Note Description</label>
              <textarea class="form-control" id='descriptionEdit' name='descriptionEdit' rows="3"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- modal end -->

  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="./index.php"><img src="./PHP-logo.svg.png" alt="logo" height="50px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
          Search
        </button>
      </form>
    </div>
  </nav>
  <!-- navbar end -->

  <!-- alert starts  -->
  <?php
  if ($insert) {
    echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong > Your note added successfully!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if ($delete) {
    echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong > Your note deleted successfully!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }
  ?>
  <?php
  if ($update) {
    echo " <div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!</strong > Your note updated successfully!
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";
  }
  ?>
  <!-- alert ends  -->

  <!-- form starts -->
  <div class="container my-4">
    <h2>Add a Note to iNotes</h2>
    <form action="./index.php" method="POST">
      <div class="form-group">
        <label for="title">Note Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="notes" placeholder="iNote Title">
      </div>
      <div class="form-group">
        <label for="description">Note Description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>
  <!-- form end -->

  <!-- tabel start  -->
  <div class="container my-4">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">S.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `notes`";
        $result = mysqli_query($conn, $sql);

        $num = mysqli_num_rows($result);
        $srno = 0;
        if ($num > 0) {

          while ($row =  mysqli_fetch_assoc($result)) {
            $srno = $srno + 1;
            echo
            "<tr>
            <th scope='row'>$srno</th>
            <td> " . $row['title'] . "</td>
            <td>" . $row['description'] . "</td>
            <td><button class='edit btn btn-sm btn-primary' id=" . $row['srno'] . ">Edit</button> <button class='delete btn btn-sm btn-primary' id=d" . $row['srno'] . ">Delete</button></td>
            </tr>";
          }
        }
        ?>
      </tbody>
    </table>
  </div>
  <hr>
  <!-- tabel ends  -->


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- datatable -->
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>

  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        srnoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        srno = e.target.id.substr(1);

        if (confirm("Are you sure you want to delete this note!")) {
          console.log("yes");
          window.location = `index.php?delete=${srno}`;
          // TODO: Create a form and use post request to submit a form
        } else {
          console.log("no");
        }
      })
    })
  </script>

</body>

</html>