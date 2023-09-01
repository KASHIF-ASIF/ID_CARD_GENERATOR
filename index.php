<?php include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- Bootstrap CSS (you can use a CDN or local file) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3><center>User Registration</center></h3>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="POST" action="process.php">
                            <div class="form-group">
                                <label for="id">ID</label>
                                <input type="text" class="form-control" id="id" name="id" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="text" class="form-control" id="dob" name="dob" required>
                            </div>
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input type="text" class="form-control" id="position" name="position" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" required>
                            </div>
                            <div class="form-group">
                                <label for="profileImage">Profile Image</label>
                                <input type="file" class="form-control-file" id="profileImage" name="profileImage" required>
                            </div><hr>
                            <center><button type="submit" class="btn btn-primary">Submit</button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br>
    <!-- Bootstrap JS (optional, for certain features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include'footer.php';
?>