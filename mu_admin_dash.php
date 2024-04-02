<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MU Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .form-group1 {
            display: flex;
            flex-direction: row;
            margin-right: 10px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .container {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MU ADMIN DASHBOARD</a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <form action="update.php" method="post">
                        <!-- Display MFP Details -->
                        <div class="mfp-details">
                            <h2>Add Details</h2>
                            <div class="form-group">
                                <label for="mfp_name">No.of Departments in the Manufacturing Unit (MU)</label>
                                <input type="text" class="form-control" name="Mu" id="Mu" placeholder="x">
                            </div>
                            <div class="form-group">
                                <label for="district">Enter the names of the departments in MU (x times)</label>
                                <input type="text" class="form-control" name="muxtimes" id="muxtimes" placeholder=" xtimes">
                            </div>
                            <div class="form-group">
                                <label for="state">No.of Employees attached to MU</label>
                                <input type="text" class="form-control" name="emp_mu" id="emp_mu" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="land">No.of Farmers attached to MU</label>
                                <input type="text" class="form-control" name="farm_mu" id="farm_mu" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="leasable">No.of Distributors/Retailers attached to MU</label>
                                <input type="text" class="form-control" name="ret_mu" id="ret_mu" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No.of central facilities  used by MU</label>
                                <input type="text" class="form-control" name="mua" id="mua" placeholder=" y">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Central facilities in MU(y times)</label>
                                <input type="text" class="form-control" name="mu_ytimes" id="mu_ytimes" placeholder="y times ">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No. of Processing facilities in MU</label>
                                <input type="text" class="form-control" name="mupf" id="mupf" placeholder="z">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Processing facilities used by MU  (z times) </label>
                                <input type="text" class="form-control" name="mupc" id="mupc" placeholder="z times">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Transport facilities details</label>
                                <input type="text" class="form-control" name="muppc" id="muppc" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No.of Primary Processing Centres(PPC) associated with MU</label>
                                <input type="text" class="form-control" name="mucc" id="mucc" placeholder="m">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Districts of the PPC associated with MU (m times)</label>
                                <input type="text" class="form-control" name="muccn" id="muccn" placeholder="m times">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No.of Collection Centres (CC) associated with MU</label>
                                <input type="text" class="form-control" name="muMFP" id="muMFP" placeholder=" n">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the names of the CC associated with MU (n times)</label>
                                <input type="text" class="form-control" name="ntimes" id="ntimes" placeholder="n time ">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Upload the Photo</label>
                                <input type="file" class="form-control" name="photo" id="photo" placeholder=" ">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <button class="btn btn-primary">Update</button>
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-primary">Display the assessment link</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
