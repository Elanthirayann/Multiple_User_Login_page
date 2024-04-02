<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOFPI Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
            .form-group1 {
            display: flex;
            flex-direction:row;
            margin-right:10px;
            justify-content: space-between;
        }
        
        /* Style for the navbar */
        .navbar {
            background-color: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
            padding: 15px 0;
            margin-bottom: 20px;
        }

        .navbar-brand {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar">
                    <h1 class="navbar-brand">MOFPI Admin Dashboard</h1>
                </nav>
        <div class="row">
            <div class="col-md-6">
                <div class="content">
                    <form action="update.php" method="post"> <!-- Assuming update.php handles form submission -->
                        <div class="form-group">
                            <label for="mfp_count">No. of Mega Food Parks (MFP)</label>
                            <input type="text" class="form-control" name="mfp_count" id="mfp_count" >
                        </div>
                        
                        <!-- Display MFP Details -->
                        <!-- Assuming x is the number of MFPs, you can repeat this section dynamically -->
                        <div class="mfp-details">
                            <h2>MFP Details</h2>
                            <div class="form-group">
                                <label for="mfp_name">MFP Name</label>
                                <input type="text" class="form-control" name="mfp_name[]" id="mfp_name" placeholder="Enter MFP Name">
                            </div>
                            <div class="form-group">
                                <label for="district">District</label>
                                <input type="text" class="form-control" name="district[]" id="district" placeholder="Enter District Name">
                            </div>
                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" name="state[]" id="state" placeholder="Enter State Name">
                            </div>
                            <div class="form-group">
                                <label for="land">Total Land Area</label>
                                <input type="text" class="form-control" name="land[]" id="land" placeholder="Total Land Area">
                            </div>
                            <div class="form-group">
                                <label for="leasable">Total Leasable Area</label>
                                <input type="text" class="form-control" name="leasable[]" id="leasable" placeholder="Total Leasable Area">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Total Vacant Area</label>
                                <input type="text" class="form-control" name="vacant[]" id="vacant" placeholder="Total Vacant Area">
                            </div>
                            <!-- Other details like Land Area, Leasable Area, Vacant Area, etc. -->
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <button class="btn btn-primary">Update</button>
                    <button class="btn btn-primary">View</button>
                </div>
                <br>
                <div class="form-group">
                    <label for="mfp_select">Select the MFP</label>
                    <select class="form-control" id="mfp_select">
                        <!-- Dynamically populated options -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_select">Select the Category</label>
                    <select class="form-control" id="category_select">
                        <!-- Dynamically populated options -->
                    </select>
                    <br>
                    <div class="form-group1">
                        <button class="btn btn-primary">View Details</button>
                        <button class="btn btn-success">Post Link to Dashboard</button>
                        <button class="btn btn-info">Post link to the Mobile number</button>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mfp_select">Select the MU</label>
                    <select class="form-control" id="mfp_select">
                        <!-- Dynamically populated options -->
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_select">Select the Category</label>
                    <select class="form-control" id="category_select">
                        <!-- Dynamically populated options -->
                    </select>
                    <br>
                    <div class="form-group1">
                        <button class="btn btn-primary">View Details</button>
                        <button class="btn btn-success">Post Link to Dashboard</button>
                        <button class="btn btn-info">Post link to the Mobile number</button>
                    </div>
                </div>
                <h2>View Assessment Data</h2>
                <div class="form-group">
                    <label for="link_sent_date">Date of the Link sent</label>
                    <input type="text" class="form-control" id="link_sent_date" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group">
                    <label for="category_select">Select the Category</label>
                    <select class="form-control" id="category_select">
                        <!-- Dynamically populated options -->
                    </select>
                    <button class="btn btn-primary">View</button>
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
