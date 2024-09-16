<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable Example</title>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-3 d-grid">
      <h2>Data</h2>
    </div>
    <div class="col-md-3 position-absolute top-4 start-50">
    <a href="add.php" class="btn btn-dark ">Add Data</a>
    </div>
    <div class="col-md-3 position-absolute top-4 end-0">
    <a href="" class="btn btn-dark ">Update Form</a>
    </div>
    
  </div>

 
    
    <!-- HTML Table -->
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>sn</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>email</th>
                <th>Date of Birth</th>
                <th>Password</th>
                <th>Address</th>
                <th>Image</th>
                <th rowspan="2">Action</th>
            </tr>
        </thead>
        <?php
        $i=1;
        $sql="SELECT * FROM employee";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){
?>
        <tbody>
            
            <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['mobile'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['dob'];?></td>
                <td><?php echo $row['password'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><img src="<?php echo "upload/".$row['image'];?>" height="100px" width="70px" ></td>
                <th>
                    <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">Update</a>
                    <a class="btn btn-primary" href="delete.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </th>
          <?php
        }
        ?>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
    </div>
    <!-- Initialize DataTables -->
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</body>

</html>