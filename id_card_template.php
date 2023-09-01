<?php
include'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <!-- Bootstrap CSS (you can use a CDN or local file) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Additional CSS styles here */
        .id-card {
            background: linear-gradient(135deg, #1c87c9 0%, #39c1e6 100%);
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            color: white; /* Text color */
        }
        .user-photo {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #00a8cc; /* Attractive Blue Color */
        }
        .user-details {
            margin-top: 20px;
            padding: 10px;
            text-align: left; /* Align user details to the left */
        }
        .user-details p {
            font-size: 16px;
            margin: 5px 0;
        }
        .user-details strong.value {
            font-weight: bold; /* Bold text */
        }
        #downloadButton {
            margin-top: 20px;
            background-color: #00a8cc; /* Attractive Blue Color */
            border: none;
        }
        #downloadButton:hover {
            background-color: #007f99; /* Slightly Darker Blue on Hover */
        }
        #det p {
            font-weight: bolder;
            color: black;
        }
        #det strong {
            font-weight: bold;
            color: white;
        }
        #cen_con {
            margin-left: 0;
            overflow-y: auto; /* Add scroll when content exceeds screen height */
            max-height: 100vh; /* Set maximum height to viewport height */
        }
    </style>
</head>
<body>
    <div class="container" id="cen_con">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 col-lg-4">
                <div class="card id-card">
                    <h3 class="mt-3">Internee.pk</h3>
                    <center> <img src="<?php echo $photoFilePath; ?>" alt="User Photo" class="user-photo" id="profileimg"></center>
                    <div class="user-details" id="det">
                        <p>ID: <strong class="value"><?php echo $id; ?></strong></p>
                        <p>Name: <strong class="value"><?php echo $name; ?></strong></p>
                        <p>Date of Birth: <strong class="value"><?php echo $dob; ?></strong></p>
                        <p>Position: <strong class="value"><?php echo $position; ?></strong></p>
                        <p>Email: <strong class="value"><?php echo $email; ?></strong></p>
                        <p>Phone: <strong class="value"><?php echo $phone; ?></strong></p>
                    </div>
                </div>
                <!-- Move the button outside the ID card --><hr>
                <div class="text-center mt-3">
                    <button id="downloadButton" class="btn btn-light" style="color: white; font-weight: bold;">Download ID Card</button>
                </div>
            </div>
        </div>
    </div><hr><br><br><br>
    <!-- Bootstrap JS (optional, for certain features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- dom-to-image library script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    
    <script>
        // JavaScript to capture and download the ID card as an image
        document.getElementById("downloadButton").addEventListener("click", function() {
            const cardElement = document.querySelector(".id-card");
            
            domtoimage.toJpeg(cardElement)
                .then(function(dataUrl) {
                    // Create a link element to download the image
                    const downloadLink = document.createElement("a");
                    downloadLink.href = dataUrl;
                    downloadLink.download = "id_card.jpg";
                    
                    // Trigger a click event to download the image
                    downloadLink.click();
                })
                .catch(function(error) {
                    console.error("Error capturing image:", error);
                });
        });
    </script>
</body>
</html>
<?php
include'footer.php';
?>