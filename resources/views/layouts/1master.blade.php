<!DOCTYPE html>
<html>
<head>
    <title>ecommerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/b63bb1dcf5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="wrapper">
   {{-- Navigation--}}

<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Product" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>
    </div>
</nav>
   <!--- END NAV BAR-->

    <!--- Start Sidebar+ Content-->

<div class="container margintop20">

    <div class="row">
        <div class="col-md-4">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
        </div>
        <div class="col-md-8">
        <div class="widget">
           <h3>Featured Products</h3>
            <div class="row">
                <div class="col-md-3">

                    <div class="card" style="">
                        <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">price:5000TK</p>
                            <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="card" style="">
                        <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">price:5000TK</p>
                            <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="card" style="">
                        <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">price:5000TK</p>
                            <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="card" style="">
                        <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">price:5000TK</p>
                            <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">

                    <div class="card" style="">
                        <img class="card-img-top feature-img" src="{{asset('images/products/1.jpg')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Samsung</h4>
                            <p class="card-text">price:5000TK</p>
                            <a href="#" class="btn btn-outline-warning">Add to Cart</a>
                        </div>
                    </div>
                </div>




            </div>
        </div>

           <div class="widget">

           </div>
        </div>

    </div>

</div>


    <!--- End Sidebar+ Content-->

<footer class="footer-bottom">
    <p class="text-center">&copy! copy all rights reserve 2020| Ecommerce</p>
</footer>


</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
