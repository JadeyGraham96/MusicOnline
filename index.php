<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../PHP Site/styles.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <!-- Header with navbar -->
    <header>
        <nav id="navbar-header" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <img id="headerLogo" src="../PHP Site/images/musiconline.png" alt="People make Glasgow Logo"
                aria-hidden="false">
            <!-- screenreader reads alt text, not aria-hidden as the image can be clearly described and provides some kind of information to the user -->

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- navbar links right aligned using margin left auto -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">HOME |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">GENRES |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">ARTISTS |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">SONGS |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">DECADES |</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">COMMUNITY</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Main content area -->
    <main data-spy="scroll" data-target="#navbar-header" data-offset="0">
        <!-- section hero image -->
        <section>

            <!-- Video by Nicholas Hawkes from Pexels -->
            <!-- Jumbotron code from https://codepen.io/JacobLett/pen/LmWvLZ -->
            <!-- Jumbotron hidden from screenreaders -->
            <div class="jumbotron jumbotron-fluid" aria-hidden="true">

                <video autoplay muted loop id="heroVideo"
                    poster="media/Art_developers_images/images/Kelvingrove/KVG_exterior1.jpg">
                    <source src="../PHP Site/video/Pexels Videos 2691.mp4" type="video/mp4">
                </video>

                <div class="jumbotronContainer">
                    <div>
                        <img class="w3-animate-left" src="../PHP Site/images/logo.png"
                            alt="Discover Glasgow Logo">
                    </div>
                    <!-- Hero text on jumbotron -->
                    <div class="hero">
                        <span>FINDING YOUR FAVOURITE SOUND!</span> 
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.jumbotron -->   

        <!-- Sticky scroll to top button -->
        <button type="button" class="btn btn-info" id="toTopBtn"><svg xmlns="http://www.w3.org/2000/svg" height="24px"
                viewBox="0 0 24 24" width="24px" fill="#FFFFFF">
                <path d="M0 0h24v24H0V0z" fill="none" />
                <path d="M4 12l1.41 1.41L11 7.83V20h2V7.83l5.58 5.59L20 12l-8-8-8 8z" />
            </svg></button>

    </main>
    <footer>
        <span>JADE GRAHAM 2021&copy;</span>
        </nav>
    </footer>

    <!--  Bootstrap 4.6 Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>
</html>