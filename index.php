<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Onilne Course -navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
            <div class="container-fluid ">
                <a class="navbar-brand" href="#">ONLINE COURSE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Courses
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Signup</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control border border-white me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
        <div class="container-fluid slidethumb" style="position: relative;">
            <div class="row">
                <video loop="loop" autoplay playsinline muted controls>
                    <source src="image/thumbenail.mp4" type="video/mp4">
                </video>
            </div>
            <div class="row">
                <div class="col-sm-8"></div>
                <div class="col-sm-4 ragister me-3">
                    <form action="" method="post">
                        <h4 class="align-items-center text-center p-3 fs-5 ">Register today and take your
                            academics to the next level!</h4>
                        <div class="mb-3 opacity-75 ">
                            <label for="exampleInputName" class="form-label"></label>
                            <input type="name" class="form-control border border-white" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Your Name">
                        </div>
                        <div class="mb-3 opacity-75 ">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input type="email" class="form-control border border-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                        </div>
                        <div class="mb-3 opacity-75 ">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input type="email" class="form-control border border-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Contact">
                        </div>
                        <div class="mb-3 opacity-75 ">
                            <label for="exampleInputEmail1" class="form-label"></label>
                            <input type="email" class="form-control border border-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Course">
                        </div>
                        <div class="mb-3 opacity-75 ">
                        <label for="exampleInputEmail1" class="form-label"></label>
                            <input type="email" class="form-control border border-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Course">
                        </div>

                        <div class="mb-3 opacity-75">
                        <label for="exampleInputButton1" class="form-label"></label>
                            <input type="submit" class="form-control btn btn-warning  text-white border border-white" value="Request A CallBack">
                        </div>

                    </form>
                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>