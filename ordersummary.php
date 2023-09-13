<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bg-red {
            background-color: #E50914 !important;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            padding: 20px; 
        }


        .summary-container {
            max-width: 800px; 
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            border-radius: 5px;
            text-align: center;
        }

        .form-group label {
            color: #fff;
        }

    </style>
</head>
<body>
    
    <div class="summary-container mt-5">
        <h2>Order Summary</h2>
        <p>Customer Name: <?php echo $_POST['customerName']; ?></p>
        <p>Gender: <?php echo $_POST['gender']; ?></p>
        <p>Age: <?php echo $_POST['age']; ?></p>
        <p>Address: <?php echo $_POST['address']; ?></p>
        <p>Cinema to Watch: <?php echo $_POST['cinema']; ?></p>
        <p>Number of Tickets: <?php echo $_POST['numTickets']; ?></p>
        <p>Add Ons (optional): <?php echo $_POST['addons']; ?></p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mqqft2x_Aa4" title="THE BATMAN – Main Trailer" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <a href="index.html" class="btn btn-primary mt-3">Back to Page 1</a>
    </div>

    <footer class="mt-5 text-center">
        &copy; 2023 FlepFlip Theater
    </footer>
</body>
</html>
