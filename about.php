<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css"> <!-- Adjust path as necessary -->
</head>

<body style="background-color:aqua;">
    <!-- Navigation Bar -->
    <!-- <nav class="navbar navbar-expand-lg" style="background-color: #BED7DC;">
        <div class="container" style="background-color: #FFCDEA;">
            <a class="navbar-brand" href="index.php"><h5 style="color:black;">ONLINE BOOK STORE</h5></a>
        </div>
    </nav> -->

    <!-- About Section -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Online Book Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0" style="float: right;margin-left: auto;margin-right: 0;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Store</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['user_id'])) { ?>
                                <a class="nav-link" href="admin.php">Admin</a>
                            <?php } else { ?>
                                <a class="nav-link" href="login.php">Login</a>
                            <?php } ?>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>About Us</h1>
                        <p>Welcome to our Online Book Store! We are passionate about connecting readers with their favorite books. Our mission is to provide a wide selection of books across various genres, ensuring there's something for everyone.</p>
                        <p>At our bookstore, we prioritize customer satisfaction and strive to create an enjoyable shopping experience. we've got you covered.</p>
                        <p>Our team is dedicated to promoting literacy and fostering a love for reading. We believe that books have the power to educate, inspire, and entertain, and we're committed to sharing that joy with our customers.</p>
                        <p>Thank you for choosing our Online Book Store. Happy reading!</p>
                        <p>For any inquiries, please feel free to contact us</p>
                    </div>
                    <div class="col-md-6">
                        <!-- Add an image related to your website or team -->
                        <img src="img/about-image.jpg" alt="About Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Footer Section -->
    <footer class="bg-dark text-white py-4" style="margin-bottom: 20px;">
        <div class="container text-center">
            <p>&copy; 2024 ONLINE BOOK STORE (MEESALA BHARATH SAI-21121A3337). All rights reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>