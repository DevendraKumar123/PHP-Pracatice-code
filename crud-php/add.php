<?php include "config.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data">
            <h2 class="text-center">Crud Opration</h2>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Mobile</label>
                    <input type="text" class="form-control" placeholder="Mobile" name="mobile">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group col-md-4">
                    <label for="dob">Enter Date of Birth:</label>
                    <input type="date" id="dob" name="dob" onchange="calculateAge()" class="form-control">
                    <!-- <label><span id="age"></span></label> -->
                    <!-- Hidden input to store age -->
                    <span id="age" class="label" style="color:red;"></span>
                    <input type="hidden" id="ageInput" name="age" >
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="pass1" name="pass1">
                </div>

            </div>
            <div class="form-group col-md-4">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" placeholder="1234 Main St" name="address">
            </div>
            <div class="form-group col-md-4">
                <label for="">Image</label>
                <input type="file" class="form-control" name="image" id="">
            </div>
            <div class="form-group col-md-4 mt-3">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>

        </form>
    </div>
    <script>
        function calculateAge() {
            var dob = document.getElementById('dob').value;
            if (dob === "") {
                document.getElementById('age').innerText = "";
                return;
            }

            var dobDate = new Date(dob);
            var today = new Date();

            var years = today.getFullYear() - dobDate.getFullYear();
            var months = today.getMonth() - dobDate.getMonth();
            var days = today.getDate() - dobDate.getDate();

            // Adjust for months and days
            if (days < 0) {
                months--;
                days += new Date(today.getFullYear(), today.getMonth(), 0).getDate(); // Get days in the previous month
            }

            if (months < 0) {
                years--;
                months += 12;
            }

            // Show calculated age
            document.getElementById('age').innerText = years + " years, " + months + " months, " + days + " days";
            
            // Set age in hidden field for form submission
            document.getElementById('ageInput').value = years + " years, " + months + " months, " + days + " days";
        }
    </script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    // print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['pass1'];
    $address = $_POST['address'];
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "upload/" . $image);
    $dob = $_POST['dob'];
    $sql = "INSERT INTO `employee`(`name`, `email`, `mobile`, `password`, `address`, `image`,`dob`) VALUES ('$name','$email','$mobile','$password','$address','$image','$dob')";
    $run = mysqli_query($conn, $sql);
    header("Location: index.php");

}
?>