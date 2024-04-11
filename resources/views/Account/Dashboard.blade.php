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
                        <a class="nav-link" href="Create">Create your blog </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bloglist">Edit Blog</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Logout">Logout</a>
                </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->

    @foreach($_blogposts as $key=> $co)
 
    <!-- Featured Posts Section -->
    <section class="featured-posts">
        <div class="container">
             <div class="row">
                <div class="col-lg-4">
                <a href="{{ route('userblog',$co->id) }}" style="text-decoration: none; color: inherit;">
                    <div class="card">
                        <img src="https://imgs.search.brave.com/uY1lpLzK5xgmBT-kNdW9qHAnd3acKAngYMZsOPPr88Y/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5ncmVhdGJpZ3Bo/b3RvZ3JhcGh5d29y/bGQuY29tL3dwLWNv/bnRlbnQvdXBsb2Fk/cy8yMDIyLzA0L3dv/bWVuLXBob3RvZ3Jh/cGhlci5qcGc" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">  <td>{{ $co->title }}</td></h5>
                         <p class="card-text"> <td>{{ $co->body }}</td>  </p>
                        </div>
                    </div>
                </div>

                </div>
            </div>               
        @endforeach
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
