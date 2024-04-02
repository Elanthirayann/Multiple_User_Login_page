<?php
require 'config.php';

if(isset($_POST["submit"])) {
    $spv_name = $_POST["spv_name"];
    $district_name = $_POST["district_name"];
    $state_name = $_POST["state_name"];
    $farmer_name = $_POST["farmer_name"];
    $ppc_connected = $_POST["ppc_connected"];
    $cc_connected = $_POST["cc_connected"];
    $DOJ = $_POST["DOJ"];
    $email = $_POST["email"];
    $contact_number = $_POST["contact_number"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $duplicate = mysqli_query($conn, "SELECT * FROM mfp_farm WHERE username = '$username' OR email = '$email'");
    
    if(mysqli_num_rows($duplicate) > 0) {
        echo "<script>alert('Username or email is already taken');</script>";
    } else {
        if($password == $confirm_password) {
             $query = "INSERT INTO mfp_farm (spv_name, district_name, state_name, farmer_name, ppc_connected, cc_connected, DOJ, email, contact_number, username, password) VALUES ('$spv_name', '$district_name', '$state_name', '$farmer_name', '$ppc_connected', '$cc_connected', '$DOJ', '$email', '$contact_number', '$username', '$password')";
            if(mysqli_query($conn, $query)) {
                echo "<script>alert('Registration successful');</script>";
                header("Location: mfp_farm_login.php");
                exit();
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        } else {
            echo "<script>alert('Password does not match');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>framer Signup</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Datepicker CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <style>
        .container-box {
            border: 2px solid black;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 container-box">
                <h2 class="text-center mb-4">MFP Framer Signup</h2>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="spv_name">SPV Name:</label>
                        <input type="text" class="form-control" id="spv_name" name="spv_name" required>
                    </div>
                    <div class="form-group">
                        <label for="district_name">District Name:</label>
                        <select class="form-control" id="district_name" name="district_name" required>
              <option value="">Select District</option>
              <option value="Ariyalur">Ariyalur</option>
              <option value="Chengalpattu">Chengalpattu</option>
              <option value="Chennai">Chennai</option>
              <option value="Coimbatore">Coimbatore</option>
              <option value="Cuddalore">Cuddalore</option>
              <option value="Dharmapuri">Dharmapuri</option>
              <option value="Dindigul">Dindigul</option>
              <option value="Erode">Erode</option>
              <option value="Kallakurichi">Kallakurichi</option>
              <option value="Kanchipuram">Kanchipuram</option>
              <option value="Kanyakumari">Kanyakumari</option>
              <option value="Karur">Karur</option>
              <option value="Krishnagiri">Krishnagiri</option>
              <option value="Madurai">Madurai</option>
              <option value="Nagapattinam">Nagapattinam</option>
              <option value="Namakkal">Namakkal</option>
              <option value="Nilgiris">Nilgiris</option>
              <option value="Perambalur">Perambalur</option>
              <option value="Pudukkottai">Pudukkottai</option>
              <option value="Ramanathapuram">Ramanathapuram</option>
              <option value="Salem">Salem</option>
              <option value="Sivaganga">Sivaganga</option>
              <option value="Tenkasi">Tenkasi</option>
              <option value="Thanjavur">Thanjavur</option>
              <option value="Theni">Theni</option>
              <option value="Thoothukudi">Thoothukudi</option>
              <option value="Tiruchirappalli">Tiruchirappalli</option>
              <option value="Tirunelveli">Tirunelveli</option>
              <option value="Tirupathur">Tirupathur</option>
              <option value="Tiruppur">Tiruppur</option>
              <option value="Tiruvallur">Tiruvallur</option>
              <option value="Tiruvannamalai">Tiruvannamalai</option>
              <option value="Tiruvarur">Tiruvarur</option>
              <option value="Vellore">Vellore</option>
              <option value="Viluppuram">Viluppuram</option>
              <option value="Virudhunagar">Virudhunagar</option>
            </select>
                    </div>
                    <div class="form-group">
                        <label for="state_name">State Name:</label>
                        <select class="form-control" id="state_name" name="state_name" required>
              <!-- List of states in Tamil Nadu -->
              <option value="Tamil Nadu">Tamil Nadu</option>
            </select>
                    </div>
                    <div class="form-group">
                        <label for="farmer_name">Farmer Name:</label>
                        <input type="text" class="form-control" id="farmer_name" name="farmer_name">
                    </div>
                    <div class="form-group">
                        <label for="ppc_connected">Primary Processing Center (PPC) connected:</label>
                        <input type="text" class="form-control" id="ppc_connected" name="ppc_connected">
                    </div>
                    <div class="form-group">
                        <label for="cc_connected">Collection center (CC) connected:</label>
                        <input type="text" class="form-control" id="cc_connected" name="cc_connected">
                    </div>
                    <div class="form-group">
                        <label for="doj">DOJ in this MFP:</label>
                        <input type="date" class="form-control datepicker" id="DOJ" name="DOJ" placeholder="Select Date" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_number">Contact Number:</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="submit">Registration</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        // Initialize Bootstrap Datepicker
