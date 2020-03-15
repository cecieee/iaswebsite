<?php
    include 'logic.php';
    $data = getData();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IAS</title>

    <link rel="stylesheet" href="./assets/css/initialize.css">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/outside.css">
    <link rel="stylesheet" href="./assets/css/main.css">

</head>

<body>

    <section class="mobile-menu">

        <img class="close-btn" src="./assets/images/times-solid.svg" alt="close">

        <ul>
            <li class="active"><a href="#home">HOME</a></li>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#activities">ACTIVITIES</a></li>
            <li><a href="#gallery">GALLERY</a></li>
            <!-- <li><a href="#updates" class="scroll">UPDATES</a></li> -->
        </ul>
    </section>


    <!-- Home -->
    <section class="main" id="home">
        <header>
            <div class="row">
                <div class="logo col-md-3 col-sm-12">
                    <img src="./assets/images/logo.png" alt="logo">
                    <img class="menu" id="menu-btn" src="./assets/images/bars-solid.svg" alt="menu-button">
                </div>

                <div class="col-md-5"></div>

                <div class=" menu col-md-3">
                    <ul>
                        <li class="active"><a href="#home" class="scroll">HOME</a></li>
                        <li><a href="#about" class="scroll">ABOUT</a></li>
                        <li><a href="#activities" class="scroll">ACTIVITIES</a></li>
                        <li><a href="#gallery" class="scroll">GALLERY</a></li>
                        <!-- <li><a href="#updates" class="scroll">UPDATES</a></li> -->
                    </ul>
                </div>
            </div>
        </header>
        <section class="home container">
            <div class="row">
                <div class="content col-md-6 col-sm-6">
                    <h2><?= $data['heading']?></h2>
                    <p><?= $data['subHeading']?></p>
                    <a href="#about">
                        <div class="button">KNOW MORE</div>
                    </a>
                </div>
                <div class="image col-md-6 col-sm-6">
                    <img src="./assets/images/undraw_team_spirit_hrr4.svg">
                </div>
            </div>
        </section>
    </section>
    <!-- End Home -->

    <!-- About -->
    <section class="about container" id="about">
        <div class="row">
            <div class="col-md-12 heading">
                <h2>ABOUT US</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 about-image">
                <img src="./assets/images/undraw_active_options_8je6.svg" alt="">
            </div>
            <div class="content col-md-6">
                <p>
                    The Industry Applications Society, as a transnational organization, is interested in advancement of
                    the theory and practice of electrical and electronic engineering in the development, design,
                    manufacture and application of electrical systems, apparatus, devices and controls to the processes
                    and equipment of industry and commerce; promotion of safe, reliable and economic installations;</p>
                <p>
                    industry leadership in energy conservation and environmental, health, and safety issues; creation of
                    voluntary engineering standards and recommended practices; and the professional development of its
                    membership.
                </p>
            </div>
        </div>

    </section>
    <!-- End About -->

    <!-- Activities -->
    <section class="activities container" id="activities">
        <div class="blog-home2 py-5 upcoming">
            <div class="container">
                <!-- Row  -->
                <div class="row justify-content-center">
                    <!-- Column -->
                    <div class="col-md-8 text-center">
                        <h3 class="my-3 heading">UPCOMING EVENTS</h3>
                    </div>
                </div>
                <div class="row mt-4">
                    <!-- Column -->

                    <?php foreach($data['upcoming'] as $upcoming): ?>

                    <div class="col-md-4 on-hover">
                        <div class="card border-0 mb-4">
                            <a href="#"><img class="card-img-top"
                                    src="<?= $upcoming['image']?>"
                                    alt="wrappixel kit"></a>
                            <div
                                class="date-pos date p-2 d-inline-block text-center rounded text-white position-absolute">
                                <?= $upcoming['date'][0]?>
                                <span class="d-block"><?= $upcoming['date'][1]?></span></div>
                            <h5 class="act-heading font-weight-medium mt-3"><a href="#"
                                    class="text-decoration-none link"><?= $upcoming['title']?></a></h5>
                            <p class="act-content mt-3"><?= $upcoming['description']?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="blog-home2 py-5 past">
            <div class="container">
                <!-- Row  -->
                <div class="row justify-content-center">
                    <!-- Column -->
                    <div class="col-md-8 text-center">
                        <h3 class="my-3 heading">PAST EVENTS</h3>
                    </div>
                </div>
                <div class="row mt-4">
                    <!-- Column -->
                    <?php foreach($data['past'] as $past): ?>

                    <div class="col-md-4 on-hover">
                        <div class="card border-0 mb-4">
                            <a href="#"><img class="card-img-top"
                                    src="<?= $past['image']?>"
                                    alt="wrappixel kit"></a>
                            <div
                                class="date-pos date p-2 d-inline-block text-center rounded text-white position-absolute">
                                <?= $past['date'][0]?>
                                <span class="d-block"><?= $past['date'][1]?></span></div>
                            <h5 class="act-heading font-weight-medium mt-3"><a href="#"
                                    class="text-decoration-none link"><?= $past['title']?></a></h5>
                            <p class="act-content mt-3"><?= $past['description']?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
    <!-- End Activities -->

    <!-- Gallery -->
    <section class="gallery" id="gallery">
        <div class="container-fluid">
            <h2>GALLERY</h2>
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php for($i=0;$i<count($data['gallery']); $i++): ?>
                                <li data-target="#carouselExampleIndicators" data-slide-to="<?=$i?>" 
                                class="<?php echo $i==0 ? "active" : ""; ?>" ></li>
                            <?php endfor; ?>
                        </ol>
                        <div class="carousel-inner">

                            <?php foreach($data['gallery'] as $i => $gallery):?>

                            <div class="carousel-item <?php echo $i==0? "active": "" ?>">
                                <img class="d-block w-100" src="<?= $gallery['image'] ?>" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $gallery['caption']?></h5>
                                </div>
                            </div>

                            <?php endforeach;?>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Gallery -->

    <!-- Updates -->
    <!-- <section class="updates" id="updates"></section> -->
    <!-- End Updates -->

    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://cecieee.org/"> CEC IEEE</a>
        </div>
        <!-- Copyright -->

    </footer>


    <script src="./assets/js/jquery-3.4.1.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/smoothscroll.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>