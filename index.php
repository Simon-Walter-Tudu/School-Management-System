<?php include('includes/config.php') ?>
<?php include('header.php') ?>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
            </ul>
            <div class="dropdown">
                <?php if (isset($_SESSION['login'])) { ?>
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Account
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="/School Management System/Admin/dashboard.php">Dashboard</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                <?php } else { ?>
                    <a href="login.php" class="nav linl"><i class="fa fa-user mr-2"></i>login</a>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>
<div class="d-flex shadow" style="height:500px;background:linear-gradient(-45deg, navy 50%, transparent 50%)">
    <div class="container-fluid my-auto">
        <div class="row">
            <div class="col-lg-6 my-auto">
                <h1 class="display-3 font-weight-bold">Admission Open for 2022-2023</h1>
                <p>HURRT UP TO GET ADMITED</p>
                <a href="" class="btn btn-lg btn-primary">Call to Action</a>
            </div>
            <div class="col-lg-6">
                <div class="w-50 mx-auto card shadow-lg">
                    <div class="card-body">
                        <h1>Inquiry Form</h1>
                        <form action="" method="post" class="">
                            <div class="md-form">
                                <input type="text" id="form1" class="form-control" />
                                <label for="form1">Your Name</label>
                            </div>
                            <div class="md-form">
                                <input type="email" id="email" class="form-control" />
                                <label for="email">Your Email</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="mobile" class="form-control" />
                                <label for="mobile">Your Mobile</label>
                            </div>
                            <div class="md-form">
                                <input type="text" id="query" class="form-control" />
                                <label for="class">Your Query</label>
                            </div>
                            <button class='btn btn-dark btn-block'>Submit Form</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- About Us -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 py-5">
                <h2>About <br>
                    School Management System</h2>
                <div class="pr-5">
                    <p>The name of our school is Online School. It is one of the most reputed schools in the online. It was began in 1999. There are so many courses. There are 3500 students
                         and sixty-five teachers in our school. Our teachers are well qualified. They can teach students well. They act as their guides. The results of this school are satisfactory.
                    </p>

                </div>
                <a href="about-us.php" class="btn btn-secondary">Know More</a>
            </div>
            <div class="col-lg-6" style="background:url(./Document/img/Online.jpg)">

            </div>
        </div>
    </div>
</section>
<style>
    .course-image {
        height: 170px !important;
        object-fit: cover;
        object-position: center;
    }
</style>
<!-- Our Courses -->
<section class="py-5 bg-light">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Our Courses</h2>
        <p class="text-muted">WHAT YOU WANT TO LEARN JUST ENROLL IT AND START</p>
    </div>

    <div class="container">
        <div class="row">
            <?php
            $query = mysqli_query($db_conn, "SELECT * FROM courses ORDER BY id DESC LIMIT 0, 4");
            while ($course = mysqli_fetch_object($query)) { ?>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div>
                            <img src="./dist/uploads/<?= $course->image ?>" alt="" class="img-fluid rounded-top course-image">
                        </div>
                        <div class="card-body">
                            <b><?= $course->name ?></b>
                            <p class="card-text">
                                <b>Duration: </b> <?= $course->duration ?> <br>
                                <b>Price: </b> 4500/- Taka
                            </p>
                            <button class="btn btn-block btn-primary btn-sm">Enroll Now</button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Teachers -->
<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">Our Teachers</h2>
        <p class="text-muted">OUR BELOVED TEACHERS</p>
    </div>

    <div class="container">
        <div class="row">
            <?php for ($i = 0; $i < 8; $i++) { ?>
                <div class="col-lg-3 my-5">
                    <div class="card">
                        <div class="col-7 position-absolute" style="top:-50px">
                            <img src="./Document/img/Teachers.png" alt="" class="mw-100 border rounded-circle">
                        </div>
                        <div class="card-body pt-5 mt-4">
                            <h5 class="card-title mb-0">Teacher's Name</h5>
                            <p>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </p>
                            <p class="card-text">
                                <b>Courses: </b> 5 <br>
                                <b>Ratings: </b>
                            </p>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Achievement -->
<section class="py-5 text-white" style="background: #3923a7;">
    <div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>Achievements</h2>
                    <p>There are various kinds of achievements one may have. There are some examples of achievements like personal achievements, academic achievements, sports achievements etc. There are various roles in which one achieves something. Taking myself as an example it would be like my achievements as a teacher, my accomplishments as student in school, college or in personal life.
                    </p>

                    <img src="./Document/img/Course.jpg" alt="" class="img-fluid rounded">
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span>
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span>
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span>
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="border rounded">
                                <div class="card-body text-center">
                                    <span>
                                        <i class="bi bi-mortarboard-fill"></i>
                                    </span>
                                    <h2 class="my-2 font-weight-bold h1">334</h2>
                                    <hr class="border-warning">
                                    <h4>Graduates</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>

<!-- Testimonials -->
<section class="py-5">
    <div class="text-center mb-5">
        <h2 class="font-weight-bold">What People Says</h2>
        <p class="text-muted">I also find it very hard to find an ‘escape’ from school. Since it all takes place at my home, destressing has become more difficult because I feel like school is there with me the entire day. I really hope, in the near future, we will be returning to our school since I am not receiving the best education at home.</p>
        <p>- Simon Tudu</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium a numquam quae labore eveniet natus quod, tempora soluta dolorem cum molestias odit mollitia placeat quaerat ab accusamus corrupti inventore! A!
                    </div>
                </div>
                <div class="text-center mt-n2">
                    <img src="./Document/img/Teachers.png" alt="" class="rounded-circle border" width="100">
                    <h6 class="mb-0 font-weight-bold">Name of Candidates</h6>
                    <p><i>Designation</i></p>
                </div>
            </div>
            <div class="col-6">
                <div class="border rounded position-relative">
                    <div class="p-4 text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium a numquam quae labore eveniet natus quod, tempora soluta dolorem cum molestias odit mollitia placeat quaerat ab accusamus corrupti inventore! A!
                    </div>
                </div>
                <div class="text-center mt-n2">
                    <img src="./Document/img/Teachers.png" alt="" class="rounded-circle border" width="100">
                    <h6 class="mb-0 font-weight-bold">Name of Candidates</h6>
                    <p><i>Designation</i></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer style="background:url(./Document/img/Teachers.png)">
    <div class="py-5 text-white" style="background: #000000;">
        <div class="row">
            <div class="col-lg-4">
                <h5>Useful Links</h5>
                <ul class="fa-ul">
                    <li><i class="fa-li fa fa-angle-right"></i>List icons</li>
                    <li><i class="fa-li fa fa-angle-right"></i>can be used</li>
                    <li><i class="fa-li fa fa-angle-right"></i>as bullets</li>
                    <li><i class="fa-li fa fa-angle-right"></i>in lists</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <h5>Social Preference</h5>
                <div>
                    <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
                    </span>
                    <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-instagram fa-stack-1x fa-inverse text-dark"></i>
                    </span>
                    <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
                    </span>
                    <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
                    </span>
                    <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fab fa-youtube fa-stack-1x fa-inverse text-dark"></i>
                    </span>
                </div>
            </div>
            <div class="col-lg-3">
                <h5>Subscribe Now</h5>
                <form action="">
                    <div class="form-group">
                        <input type="email" id="email" class="form-control" placeholder="Your Email" />
                    </div>
                    <button class="btn btn-secondary btn-sm btn-block">Submit</button>
                </form>
            </div>
        </div>
    </div>
</footer>

<section class="py-2 bg-dark text-light">
    <div class="container-fluid">
        Copyright 2022-2022 All Rights Reserved. <a href="a" class="text-light"> School Management System</a>
    </div>
</section>

<?php include('footer.php') ?>