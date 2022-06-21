<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="/../frontend/images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Bostorek</title>

    <!-- bootstrap core css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- font awesome style -->
    <link href="/../frontend/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="/../frontend/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="/../frontend/css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/../">
                        <span>
                            Bostorek
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link pl-lg-0" href="/../">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="categories.html">Categories</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('blog.index') }}"> Blog <span class="sr-only">(current)</span> </a>
                            </li>
                            @if (!Auth::user())
                                <li class="nav-item">
                                    <a class="nav-link" href="login"> Log in </a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Profile
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item"
                                                href="{{ route('profile.show', Auth::user()->id) }}">Profile</a></li>
                                        <li><a class="dropdown-item" href="{{ route('blog.create') }}">Create Blog</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="/../logout">Log out</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                        <from class="search_form">
                            <input type="text" class="form-control" placeholder="Search here...">
                            <button class="" type="submit">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </button>
                        </from>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
    </div>



    <div class="container" style="margin-top: 10%; margin-bottom: 10%">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('message') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="card-body">
                        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="pb-4">
                                <p class="text-center fs-4 fw-bold">Create a Blog</p>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="JavaScript" value="">
                                <label for="title">Title</label>
                            </div>
                            <div class="form-floating mb-4">
                                <textarea class="form-control" placeholder="Leave a description" id="description" name="description"
                                    style="height: 100px"></textarea>
                                <label for="description">Description</label>
                            </div>
                            <code>
                                <div class="form-floating mb-4">
                                    <textarea class="form-control" placeholder="Leave a Code" id="code" name="code" style="height: 250px"></textarea>
                                    <label for="code">Code</label>
                                </div>
                            </code>
                            <div class="mb-4">
                                <label for="formFile" class="form-label">Upload Image</label>
                                <input class="form-control" type="file" id="image" name="image">
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary">Create Blog</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- info section -->

    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="info_detail">
                        <h4>
                            About Us
                        </h4>
                        <p>
                            Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos
                            atque asperiores incidunt vel voluptate iste
                        </p>
                        <div class="info_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="info_contact">
                        <h4>
                            Address
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="info_contact">
                        <h4>
                            Newsletter
                        </h4>
                        <form action="#">
                            <input type="text" placeholder="Enter email" />
                            <button type="submit">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info-col">
                    <div class="map_container">
                        <div class="map">
                            <div id="googleMap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="/../frontend/js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- custom js -->
    <script src="/../frontend/js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
