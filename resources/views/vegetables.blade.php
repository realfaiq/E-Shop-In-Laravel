<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <!-- Navbar -->
    <navbar class="navbar navbar-expand-md navbar-dark p-3" id="nav">
        <div class="container">
            <a href="{{route('index')}}" class="navbar-brand">
                <i class="fas fa-shopping-cart"></i> E-Shop
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="./img/Flag.png" class="img-fluid margin d-lg-block d-none" height="70px" width="70px">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link text-primary ml-3 button" data-toggle="modal" data-target="#registerModal">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-primary ml-3 button" data-toggle="modal" data-target="#signinModal">Sign In</a>
                    </li>

                </div>
            </div>

        </div>
    </navbar>
    
    <!-- Categories -->
    <div class="pb-2 m-0 navbar-dark" id="nav">
        <div class="container">
            <div class="m-0 d-flex">
                <div class="Clothes text-white mr-2" id="cat">
                    <a href="{{route('index')}}" id="dect" class="text-white"><i class="fas fa-tshirt"></i> Clothes</a>
                </div>

                <div class="Tech text-white mr-2" id="cat">
                    <a href="{{route('technology')}}" id="dect" class="text-white"><i class="fas fa-laptop"></i> Technology</a>
                </div>

                <div class="Tech text-white mr-2" id="cat">
                    <a href="{{route('pets')}}" id="dect" class="text-white"><i class="fas fa-paw"></i> Pets</a>
                </div>

                <div class="Tech text-white mr-2" id="cat-active">
                    <a href="{{route('vegetables')}}" class="text-white" id="dect"><i class="fas fa-lemon"></i> Vegetables</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Text Content -->
    <div class="m-0 navbar-dark pb-5 pt-5" id="nav">
        <div class="container text-white">
            <strong><h2>Now Shop from the Comfort of Your Bed..</h2></strong>
            <h5>Hurry Up Grab Your Phone and Shop..</h5>
        </div>
    </div>
    
    <!-- Text Center -->
    <!-- <h3 class="text-center mt-2">Shop Now</h3> -->

    <!-- Shopping Items -->
    <div class="d-md-flex mt-4 container">
        <div class="card mr-5" style="width: 18rem">
            <img src="./img//vegetables/veg-1.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Tomatoes</h5>
                <p class="card-text">Fresh and Healthy Tomatoes to make your day</p>
                <a href="#" class="btn btn-primary">$45 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-2.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Onions</h5>
                <p class="card-text">Fresh and Healthy Onions that can make your day with a bang!</p>
                <a href="#" class="btn btn-primary">$42 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-3.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Red Carrots</h5>
                <p class="card-text">Fresh and Healthy Carrots to make your day with delicious taste</p>
                <a href="#" class="btn btn-primary">$50 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-4.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Coriander</h5>
                <p class="card-text">Fresh and Healthy Coriander to make your day</p>
                <a href="#" class="btn btn-primary">$56 Add to Cart</a>
            </div>
        </div>
    </div>

    <div class="d-md-flex mt-5 container">
        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-5.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Potatoes</h5>
                <p class="card-text">Fresh and Healthy Potatoes to make your day</p>
                <a href="#" class="btn btn-primary">$63 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-6.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Broccoli</h5>
                <p class="card-text">Fresh and Healthy Broccoli to make your day fantastic</p>
                <a href="#" class="btn btn-primary">$70 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-7.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Bringles</h5>
                <p class="card-text">Fresh and Healthy Bringles to make your day fantastic</p>
                <a href="#" class="btn btn-primary">$71 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-8.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Lady Finger</h5>
                <p class="card-text">Fresh and Healthy Lady Finger to make your day Awesome</p>
                <a href="#" class="btn btn-primary">$77 Add to Cart</a>
            </div>
        </div>
    </div>

    <div class="d-md-flex mt-5 container">
        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-9.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Red Chilli</h5>
                <p class="card-text">Fresh and Healthy Red Chillies to make your day</p>
                <a href="#" class="btn btn-primary">$85 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-10.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Green Chillies</h5>
                <p class="card-text">Fresh and Healthy Green Chillies to make your day</p>
                <a href="#" class="btn btn-primary">$80 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-11.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Black Pepper</h5>
                <p class="card-text">Fresh and Healthy Black Pepper to make your day</p>
                <a href="#" class="btn btn-primary">$79 Add to Cart</a>
            </div>
        </div>

        <div class="card mr-5" style="width: 18rem">
            <img src="./img/vegetables/veg-12.jpg" height="40%" alt="" class="card-img-top" alt="Card Img Top">
            <div class="card-body">
                <h5 class="card-title">Sea Salt</h5>
                <p class="card-text">Fresh and Healthy Sea Salt to make your day</p>
                <a href="#" class="btn btn-primary">$84 Add to Cart</a>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="container mt-5">
        <div class="d-md-flex container mt-5 text-muted">
            <div class="about p-2 mr-5">
                <h3>About Us</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae repellat magni inventore suscipit distinctio expedita in quos facere quibusdam cum adipisci debitis iure nam, corporis nemo dolorem rerum a cumque?</p>
            </div>

            <div class="categories p-2 mr-5">
                <h3>Categories</h3>
                <ul class="p-0 m-0">
                    <li class="list-item"><a class="text-muted" href="{{route('index')}}">Clothes</a></li>
                    <li class="list-item"><a class="text-muted" href="{{route('technology')}}">Technology</a></li>
                    <li class="list-item"><a class="text-muted" href="{{route('pets')}}">Pets</a></li>
                    <li class="list-item"><a class="text-muted" href="{{route('vegetables')}}">Vegetables</a></li>
                </ul>
            </div>

            <div class="quicklinks p-2">
                <h3>Quick Links</h3>
                <ul class="p-0 m-0">
                    <li class="list-item"><a class="text-muted" href="contact.html">Contact Us</a></li>
                    <li class="list-item"><a class="text-muted" href="privacy.html">Privacy Policy</a></li>
                    <li class="list-item"><a class="text-muted" href="{{route('index')}}">E-Shop</a></li>
                </ul>
            </div>

        </div>
        <hr class="new text-muted">
        <p class="text-muted">Copyright &copy; 2022 All Rights Reserved E-Shop</p>
    </footer>
    
    <!-- Modals -->
    <!-- Register Modal -->
    <div class="modal fade" id="registerModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Register Now</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" placeholder="Full Name" class="form-control mb-2">

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="yourname@gmail.com" class="form-control mb-2">

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control mb-2">

                    </form>
                    <a href="#" class="btn btn-primary btn-block">Register</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sign In Modal -->
    <div class="modal fade" id="signinModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">Already Have An Account? Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span class="text-white">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-group">

                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="yourname@gmail.com" class="form-control mb-2">

                        <label for="password">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control mb-2">

                    </form>
                    <a href="#" class="btn btn-primary btn-block">Sign In</a>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>