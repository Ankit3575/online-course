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
    <div class="container-fluid mb-3">
        <div class="row">
            <div class="header col-sm-12 text-align-center fs-6 fw-bold bg-danger ">
                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="home.php">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">LEARNATHON</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        COURSES
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">11-12 Commerce</a></li>
                                        <li><a class="dropdown-item" href="#">IPM|CLAT</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ABOUT</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-disabled="true">CONTACT</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <!-- slide img info -->
        <div class="slidevideo">
            <div class="row">
                <div class="col-sm-12">
                    <video loop="loop" controls muted autoplay>
                        <source src="image/thumbenail.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
        <!-- signup -->
        <div class="row">
            <div class="col-sm-4 ragister">
                <form action="logincode.php" method="post">
                    <h5 class="align-items-center text-center p-3 fs-5 ">Register today and take your
                        academics to the next level!</h5>
                    <div class="mb-3 opacity-75 ">
                        <label for="exampleInputName" class="form-label"></label>
                        <input type="text" class="form-control border border-white" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter Your Name" name="name">
                    </div>
                    <div class="mb-3 opacity-75 ">
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <input type="email" class="form-control border border-white" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="mb-3 opacity-75 ">
                        <label for="exampleInputEmail2" class="form-label"></label>
                        <input type="number" class="form-control border border-white" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="Enter Your Contact" name="contact">
                    </div>
                    <div class="mb-3 opacity-75 ">
                        <label for="exampleInputEmail3" class="form-label"></label>
                        <input type="text" class="form-control border border-white" id="exampleInputEmail3" aria-describedby="emailHelp" placeholder="Enter Your Course" name="course">
                    </div>
                    <div class="mb-3 opacity-75 ">
                        <label for="exampleInputEmail4" class="form-label"></label>
                        <input type="text" class="form-control border border-white" id="exampleInputEmail4" aria-describedby="emailHelp" placeholder="Enter Your Location" name="location">
                    </div>

                    <div class="mb-3 opacity-75">
                        <label for="exampleInputButton1" class="form-label"></label>
                        <input type="submit" class="form-control btn btn-warning  text-white border border-white" value="Request A CallBack" name="call">
                    </div>

                </form>
            </div>

        </div>

        <!-- main content -->
        <div class="main_content">
            <div class="row mt-4 text-center">
                <div class="col-sm-4 mb-3"></div>
                <div class="col-sm-4 mt-5 mb-3">
                    <h4>ABOUT ONLINE COURSE</h3>
                </div>
                <div class="col-sm-4 mb-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-2 "></div>
                <div class="col-sm-9 mt-3 mb-5">online education is a flexible and convenient method of learning that has grown in popularity in recent years. It provides students with a range of courses while sitting at their homes1. It has helped in achieving a balance between safety and education during the pandemic</div>
                <div class="col-sm-1 mb-3"></div>
            </div>
        </div>

        <div class="submain-content bg-white mb-3">
            <div class="row mt-5">
                <div class="col-sm-4 text-center">
                    <span class="et_pb_image_wrap "><img decoding="async" width="100" height="100" src="image/studenvector.png" alt="" title="Vector@3x" class="wp-image-2060" /></span>

                    <div class="value mt-3 fs-3" data-number-value="3000+" data-number-separator="">
                        3000+
                        <div class="percent">
                            <p><span class="percent-value"></span><span class="percent-sign"></span></p>
                        </div>
                        <h3 class="title">Students</h3>
                    </div>
                </div>
                <div class="col-sm-4 text-center">
                    <span class="et_pb_image_wrap"><img decoding="async" width="100" height="100" src="image/studen2vector.png" alt="" title="Vector@3x" class="wp-image-2055" /></span>

                    <div class="value mt-3 fs-3" data-number-value="14" data-number-separator="">
                        14
                        <div class="percent">
                            <p><span class="percent-value"></span><span class="percent-sign"></span></p>
                        </div>
                        <h3 class="title">Instructors</h3>
                    </div>
                </div>

                <div class="col-sm-4 text-center">
                    <span class="et_pb_image_wrap "><img decoding="async" loading="lazy" width="100" height="100" src="image/stsavevector.png" alt="" title="Vector@3x" class="wp-image-2063" /></span>

                    <div class="value mt-3  fs-3" data-number-value="18" data-number-separator="">
                        18
                        <div class="percent">
                            <p><span class="percent-value"></span><span class="percent-sign"></span></p>
                        </div>
                        <h3 class="title">Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row submain-contentrow mt-5 mb-4 p-2 ">
                <div class="col-sm-4 p-3  icon_content1 shadow position-relative">
                    <div class="icon_submain  position-absolute start-2">
                        <a href="#" class="text-decoration-none">
                            <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #f59780;
                                    }
                                </style>
                                <path d="M243.4 2.6l-224 96c-14 6-21.8 21-18.7 35.8S16.8 160 32 160v8c0 13.3 10.7 24 24 24H456c13.3 0 24-10.7 24-24v-8c15.2 0 28.3-10.7 31.3-25.6s-4.8-29.9-18.7-35.8l-224-96c-8-3.4-17.2-3.4-25.2 0zM128 224H64V420.3c-.6 .3-1.2 .7-1.8 1.1l-48 32c-11.7 7.8-17 22.4-12.9 35.9S17.9 512 32 512H480c14.1 0 26.5-9.2 30.6-22.7s-1.1-28.1-12.9-35.9l-48-32c-.6-.4-1.2-.7-1.8-1.1V224H384V416H344V224H280V416H232V224H168V416H128V224zM256 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64z" />
                            </svg>
                        </a>
                    </div>
                    <div class="blurb_container">
                        <h4 class="blurb_heading  text-decoration-none position-relative top-0 start-0">
                            <a href="#">On Campus Learning</a>
                        </h4>
                        <div class="blurb_description">
                            <p style="text-align: left;">Experience learning beyond classroom lecture, infused with personal attention,interaction and unique environment, a place you can call your own we ensure when you study with Gurukul.education, its a lifetime experience and a joyful one ! Our classroom learning experience is built not only to make you successful in the course you take but in the course of life !</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 p-4 icon_content2 shadow position-relative">
                    <div class="icon_submain position-absolute  start-2 ">
                        <a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" height="3em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <style>
                                    svg {
                                        fill: #d9598c;
                                    }
                                </style>
                                <path d="M128 32C92.7 32 64 60.7 64 96V352h64V96H512V352h64V96c0-35.3-28.7-64-64-64H128zM19.2 384C8.6 384 0 392.6 0 403.2C0 445.6 34.4 480 76.8 480H563.2c42.4 0 76.8-34.4 76.8-76.8c0-10.6-8.6-19.2-19.2-19.2H19.2z" />
                            </svg>
                        </a>
                    </div>
                    <div class="blurb_container">
                        <h4 class="blurb_heading2 position-relative top-0 start-0">
                            <a href="#">Online Learning</a>
                        </h4>
                        <div class="blurb_description lh-5">
                            <p>Find online classes a one-sided affair?<br />At Gurukul.education we put our teacher-student bond even to online education, where you are not just a subscriber; our teachers know who you are and what you need and are there to help your journey, making studying online an engaging, joyful &amp; memorable experience!</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- submain2 -->
        <div class="submain_content2 position-relative">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 mt-5 text-center">
                    <img decoding="async" loading="lazy" width="90" height="100" src="image/stsavevector.png" alt="" title="Vector@3x" class="align-items-center wp-image-2063" /></span>
                    <h3 class="text-center mt-3">Our Courses</h3>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10 p-2 lh-lg">
                    <p class="">Gurukul.education offers online & classroom tuitions for Professional Qualifications (ACCA, CIMA, CA, CFA, CFP), 11-12 Commerce CBSE/State Board, Entrance Preparation (MBA Entrance Exams - CAT/CET/CMAT, Undergrad Entrance Exams for BBA,BMS, Mass Communication, Hotel Management & CLAT/Law), and training sessions on Behavioural & Technical areas.
                        Offerings include face-to-face onsite and online classes, learning solutions.
                    </p>
                </div>
                <div class="col-sm-1"></div>
            </div>

            <div class="row mt-5  p-2">
                <div class="col-sm-12 d-flex flex-row  submain_content_card justify-content-space-evenly; p-3  position-relative ">
                    <div class="card" style="width: 25rem;">
                        <img src="image/Photo-Collage.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-3 p-2">11 - 12 commerece</p>
                            <a href="#"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem;">
                        <img src="image/Purple-Modern-Minimalist.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-3 p-2">IPM | BBA Entrence Preparation</p>
                            <a href="#"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem;">
                        <img src="image/Grey-minimalist-law-firm-service.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-3 p-2">CLAT | LAW Entrence Preparation</p>
                            <a href="#"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">

                <div class="col-sm-12 submain_content_card  d-flex p-3 mb-4">
                    <div class="card" style="width: 25rem;">
                        <img src="image/Photo-Collage.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-3 p-2 ">11 - 12 commerece</p>
                            <a href="#"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem;">
                        <img src="image/Purple-Modern-Minimalist.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-3 p-2">IPM | BBA Entrence Preparation</p>
                            <a href="#"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                    <div class="card" style="width: 25rem;">
                        <img src="image/Grey-minimalist-law-firm-service.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-title fs-3 p-2">CLAT | LAW Entrence Preparation</p>
                            <a href="#"><button class="btn btn-primary">Learn More</button></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- submain-content-3 -->

        <div class="submain_content3 bg-white mb-5">
            <div class="row">
                <div class="col-sm-5"></div>
                <div class="col-sm-2">
                    <h3 class="text-center">Success Stories</h3>
                </div>
                <div class="col-sm-5"></div>
            </div>

            <div class="row submain_content_3story mt-5 p-3">

                <div class="col-sm-5 submain-content3 p-4 shadow position-relative bg-warning">
                    <div class="submain3profile position-absolute start-2">
                        <a href="#" class="text-decoration-none">
                            <div id="profile"></div>
                        </a>
                    </div>
                    <div class="blurb_container">
                        <div class="blurb_description3 mb-3">
                            <p style="text-align: left;" class="lh-lg">
                                “I joined Gurukul for 12th boards and Mass Communication Entrance preparation. Faculties over here, with their knowledge and experience, guide us through the whole journey right from introducing the course, preparing for it, last moment revisions, till giving our best in the exams. You are always backed by the team here. Doubt solving sessions, debates, trips and events are add on's to explore the skills within you.”
                            </p>
                        </div>
                        <h4 class="blurb_heading3  text-decoration-none position-relative top-0 start-0">
                            <a href="#" class="text-decoration-none">On Campus Learning</a>
                        </h4>
                    </div>
                </div>

                <div class="col-sm-5 p-4 submain-content3 shadow position-relative bg-danger text-white">
                    <div class="submain3profile position-absolute  start-2 ">
                        <a href="#" class="text-decoration-none">
                            <div id="profile"></div>
                        </a>
                    </div>
                    <div class="blurb_container">
                        <div class="blurb_description3 lh-base">
                            <p class="lh-base">“Before joining here, I was a very quiet and shy person. I lacked communication and leadership skills. Gurukul.education provided me with enhancing these skills. Because of them, I was able to score 92% on my 12th Board. Learnathon provided me with people skills and event management. Toastmasters Club of Gurukul made me more confident in public speaking and thinking on my feet. At Gurukul, it is assured that the studies are not hampered due to these events. They make sure that the student is not only being taught the bookish knowledge but takes learning for a lifetime.”</p>
                        </div>
                    </div>
                    <h4 class="blurb_heading3 position-relative top--0 start-0">
                        <a href="#" class="text-decoration-none">Online Learning</a>
                    </h4>
                </div>

            </div>

            <div class="row mt-5 submain_content_3story p-3">

                <div class="col-sm-5 p-4 submain-content3 shadow position-relative bg-danger text-white">
                    <div class="submain3profile position-absolute  start-2 ">
                        <a href="#" class="text-decoration-none">
                            <div id="profile"></div>
                        </a>
                    </div>
                    <div class="blurb_container">
                        <div class="blurb_description3 lh-5">
                            <p class="lh-base">“Before joining here, I was a very quiet and shy person. I lacked communication and leadership skills. Gurukul.education provided me with enhancing these skills. Because of them, I was able to score 92% on my 12th Board. Learnathon provided me with people skills and event management. Toastmasters Club of Gurukul made me more confident in public speaking and thinking on my feet. At Gurukul, it is assured that the studies are not hampered due to these events. They make sure that the student is not only being taught the bookish knowledge but takes learning for a lifetime.”</p>
                        </div>
                    </div>
                    <h4 class="blurb_heading3 position-relative top-0 start-0">
                        <a href="#" class="text-decoration-none">Online Learning</a>
                    </h4>
                </div>


                <div class="col-sm-5 submain-content3 p-4 shadow position-relative bg-warning">
                    <div class="submain3profile position-absolute start-2">
                        <a href="#" class="text-decoration-none">
                            <div id="profile"></div>
                        </a>
                    </div>
                    <div class="blurb_container">
                        <div class="blurb_description3">
                            <p style="text-align: left;" class="lh-lg">
                                “I joined Gurukul for 12th boards and Mass Communication Entrance preparation. Faculties over here, with their knowledge and experience, guide us through the whole journey right from introducing the course, preparing for it, last moment revisions, till giving our best in the exams. You are always backed by the team here. Doubt solving sessions, debates, trips and events are add on's to explore the skills within you.”
                            </p>
                        </div>
                        <h4 class="blurb_heading3  text-decoration-none position-relative top-0 start-0">
                            <a href="#" class="text-decoration-none">On Campus Learning</a>
                        </h4>
                    </div>
                </div>

            </div>
        </div>

        <div class="row bg-white mt-5  p-4">
            <div class="col-sm-1"></div>
            <div class="col-sm-4">©copyright 2022 Gurukul.Education. All Rights Reserved.</div>
            <div class="col-sm-7"></div>
        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>