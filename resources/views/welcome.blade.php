<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Ambition Blog Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .welcome-section {
            padding: 100px 0;
            background-color: #f8f9fa;
        }
        .featured-posts {
            padding: 50px 0;
        }
        .card {
            margin-bottom: 30px;
        }
        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 50px 0;
        }
        .footer h5 {
            color: #ffffff;
        }
        .footer p {
            margin-bottom: 0;
        }
        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }
        .footer ul li a {
            color: #ffffff;
            text-decoration: none;
        }
        .footer ul li a:hover {
            color: #f8f9fa;
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Blogpost Website</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Register">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="display-4">Welcome to Ambition Blog Post</h1>
                    <p class="lead">Welcome to Postify, your go-to destination for inspiration, insight, and everything in between. Here, we strive to ignite your curiosity, spark your creativity, and empower you to navigate life's myriad experiences with confidence and clarity. Whether you're seeking practical advice, thought-provoking perspectives, or simply a dose of motivation, you'll find it all within our digital haven. Join our community of like-minded individuals as we embark on a journey of growth, learning, and discovery together. Welcome aboard!</p>
                    <a href="#" class="btn btn-success btn-lg">Sign up today</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Posts Section -->
    <section class="featured-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/uY1lpLzK5xgmBT-kNdW9qHAnd3acKAngYMZsOPPr88Y/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5ncmVhdGJpZ3Bo/b3RvZ3JhcGh5d29y/bGQuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIyLzA0L3dv/bWVuLXBob3RvZ3Jh/cGhlci5qcGc" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Featured Post 1</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/vHAkZ0FCMV2F6s8NGiUjQdEHShp7yZGhsvTlyqLXFAg/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93ZWIt/aW1hZ2VzLnBpeHBh/LmNvbS80T2hIZG9Y/WWtJWFI0RDFyQTlU/UGc5clhxdmlFUkhm/eHAwVUJpdjZiRXlr/L3JzOmZpdDoxMjAw/OjAvcTo4MC9hSFIw/Y0hNNkx5OXdhWGh3/WVdOdmJTMXBiV2N1/Y0dsNGNHRXVZMjl0/TDJOdmJTOWhjblJw/WTJ4bGN5OHhOVEUy/TlRVek56TXdMWE5v/ZFhSMFpYSnpkRzlq/YTE4ME1qazJNekV3/TVRVdWFuQm4" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Featured Post 2</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/o_D_lrTi0mOEzv13DFt-Xs6nkgIZ8BSWPCLibvwlQFU/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMtZ2xvYmFsLndl/YnNpdGUtZmlsZXMu/Y29tLzY0NjdkOTY0/MDBlODRmMzA3ZTIx/OTZlZi82NDY3ZDk2/NDAwZTg0ZjMwN2Uy/MWE4YzlfQmVzdCUy/MFBob3RvZ3JhcGh5/JTIwQmxvZ3MlMjAt/JTIwV3JhcGJvb2sl/MjAtJTIwQWdvcmEl/MjBHYWxsZXJ5Lmpw/ZWc" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Featured Post 3</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h5>About Us</h5>
                    <p>Save time and start writing Blog .</p>
                </div>
                <div class="col-lg-4">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled">
                        <li>Address: Duwakot-02, Bhaktapur, Nepal</li>
                        <li>Phone: +9779860846143</li>
                        <li>Email: kusalsuwal5@gmail.com</li>
                    </ul>
                </div>
                <div class="col-lg-4">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>&copy; 2024 Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
