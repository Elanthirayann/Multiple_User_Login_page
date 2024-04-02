<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MFP Dashboard</title>
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
            width: 300px; /* Adjust as needed */
            margin-bottom: 5px; /* Optional spacing between label and input */
        }

        .form-group input[type="checkbox"] {
            margin-top: 10px; /* Optional spacing for checkboxes */
        }

        .button-group {
            display: flex;
            justify-content: space-around;
        }

        .button-group button {
            flex: 1;
            margin-left: 5px;
            margin-right: 5px;
        }

        .button-group button:last-child {
            margin-right: 0; /* No margin for the last button */
        }

        .navbar-brand {
            font-weight: bold;
        }
        *{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">MFP Admin Dashboard</a>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card no-border">
                    <div class="card-body">
                        <h5 class="card-title">Add details</h5>
                        <form>
                            <div class="form-group">
                                <label for="employeeName">No.of Departments in the Central processing Centre (CPC)</label>
                                <input type="text" class="form-control" id="employeeName" placeholder="x">
                            </div>
                            <div class="form-group">
                                <label for="district">Enter the names of the departments in CPC (x times)</label>
                                <input type="text" class="form-control" id="district" placeholder=" xtimes">
                            </div>
                            <div class="form-group">
                                <label for="state">No.of Employees attached to CPC</label>
                                <input type="text" class="form-control" id="state" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="land">No.of Farmers attached to CPC</label>
                                <input type="text" class="form-control" id="land" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="leasable">No.of Distributors/Retailers attached to CPC</label>
                                <input type="text" class="form-control" id="leasable" placeholder=" ">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No.of central facilities available in CPC</label>
                                <input type="text" class="form-control" id="vacant" placeholder=" y">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Central facilities in CPC  (y times)</label>
                                <input type="text" class="form-control" id="vacant" placeholder="y times ">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Transport facilities details</label>
                                <input type="text" class="form-control" id="vacant" placeholder="a">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No.of Primary Processing Centres(PPC)</label>
                                <input type="text" class="form-control" id="vacant" placeholder="m">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Districts of the PPC (m times)</label>
                                <input type="text" class="form-control" id="vacant" placeholder="m times">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No.of Collection Centres (CC)</label>
                                <input type="text" class="form-control" id="vacant" placeholder="n">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the names of the CC (n times)</label>
                                <input type="text" class="form-control" id="vacant" placeholder="n times">
                            </div>
                            <div class="form-group">
                                <label for="vacant">No.of Manufacturing Units in the MFP</label>
                                <input type="text" class="form-control" id="vacant" placeholder=" p">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Enter the Manufacturing Units (p times)</label>
                                <input type="text" class="form-control" id="vacant" placeholder="p time ">
                            </div>
                            <div class="form-group">
                                <label for="vacant">Upload the Photo</label>
                                <input type="file" class="form-control-file" id="vacant">
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
