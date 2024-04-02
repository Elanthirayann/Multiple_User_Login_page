<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MFP Employee Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Remove border around the card */
        .card.no-border {
            border: none;
            box-shadow: none;
        }

        /* Align input fields to the right of the labels */
        .form-group label {
            display: inline-block;
            width: 180px; /* Adjust as needed */
            margin-bottom: 5px; /* Optional spacing between label and input */
        }

        .form-group input[type="checkbox"] {
            margin-top: 10px; /* Optional spacing for checkboxes */
        }

        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MFP Employee Dashboard</a>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card no-border">
                    <div class="card-body">
                        <h5 class="card-title">Add details</h5>
                        <form>
                            <div class="form-group">
                                <label for="employeeName">Employee Name:</label>
                                <input type="text" class="form-control" id="employeeName">
                            </div>
                            <div class="form-group">
                                <label for="dob">DOB:</label>
                                <input type="date" class="form-control" id="dob">
                            </div>
                            <div class="form-group">
                                <label for="qualification">Educational Qualification:</label>
                                <input type="text" class="form-control" id="qualification">
                            </div>
                            <div class="form-group">
                                <label for="salary">Current Salary (Rs):</label>
                                <input type="text" class="form-control" id="salary">
                            </div>
                            <div class="form-group">
                                <label for="address">Residential Address:</label>
                                <textarea class="form-control" id="address"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="aadhar">Aadhar Number:</label>
                                <input type="text" class="form-control" id="aadhar">
                            </div>
                            <div class="form-group">
                                <label for="spouse">Spouse/Parent Name:</label>
                                <input type="text" class="form-control" id="spouse">
                            </div>
                            <div class="form-group">
                                <label for="children">No. of Children:</label>
                                <input type="number" class="form-control" id="children">
                            </div>
                            <div class="form-group">
                                <label for="photo">Upload the Photo:</label>
                                <input type="file" class="form-control-file" id="photo">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content">
                    <button class="btn btn-primary">Update</button>
                    <button class="btn btn-primary">View</button>
                    <button class="btn btn-primary">Display the assessment link</button>
                </div>
                <br>
                <div class="form-group">
                    <label for="associatedMFP">Are you currently associated with this MFP?</label>
                    <input type="checkbox" id="associatedMFP">
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
