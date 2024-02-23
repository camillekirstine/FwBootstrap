<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Projects</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">

    <meta name="robots" content="All">
    <meta name="author" content="Camille Kirstine">
    <meta name="copyright" content=" Camille Kirstine &copy; 2024 ">

    <link href="styles/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="styles/global.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">


    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background-image: url("assets/GridGraphics.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
            background-position-y: 60%;
        }

        @media (min-width: 60rem) {
            body {
                background-size: 60%;
                background-position: right;
                background-position-y: center;

            }
        }
    </style>
</head>

<body class="bg-baseColor">
<?php include "includes/header.php"?>

<main>

    <!-- LAYOUT FOR MOBILE -->
    <div class="container-fluid projectsMobile">
        <div class="row mb-4">
            <div class="col-12">
                <h1 class="text-mainGreen text-uppercase text-center text-lg-start fw-bold">Projects</h1>
            </div>
        </div>

        <div class="container row mx-auto">
            <div class="imgBox col-5 m-2">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay text-center">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-5 pt-3 text-textWhite text-uppercase fw-bold">project name</p>
                    </a>
                </div>
            </div>
            <div class="imgBox col-5 m-2">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay text-center">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-5 pt-3 text-textWhite text-uppercase fw-bold">project name</p>
                    </a>
                </div>
            </div>
            <div class="imgBox col-5 m-2">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay text-center">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-5 pt-3 text-textWhite text-uppercase fw-bold">project name</p>
                    </a>
                </div>
            </div>
            <div class="imgBox col-5 m-2">
                <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                <div class="overlay text-center">
                    <a class="text-decoration-none" href="projectDetail.php">
                        <p class="overlayTxt mx-auto mt-5 pt-3 text-textWhite text-uppercase fw-bold">project name</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <p class="text-textWhite text-center">
                    Through my journey through the field of <strong>Web Development</strong>, I’ve been part of various projects

                    Here you can browse through some of those <strong class="text-mainGreen">PROJECTS</strong>.
                </p>
            </div>
        </div>
    </div>

    <!-- LAYOUT FOR DESKTOP -->

    <div class="container-fluid projectsDesktop">
        <div class="row">
            <div class="col-5 mt-5 ps-5">
                <h1 class="text-mainGreen text-uppercase fw-bold">projects</h1>
                <p class="text-textWhite">
                    Through my journey through the field of <strong>Web Development</strong>, I’ve been part of various projects

                    Here you can browse through some of those <strong class="text-mainGreen">PROJECTS</strong>.
                </p>

            </div>

            <div class="col-7 pe-5">
                <div class="row mt-1 justify-content-center">
                    <div class="imgBox col-5 m-4">
                        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                        <div class="overlay text-center">
                            <a class="text-decoration-none" href="projectDetail.php">
                                <p class="overlayTxt mx-auto mt-5 pt-5 text-textWhite text-uppercase fw-bold">project name</p>
                            </a>
                        </div>
                    </div>
                    <div class="imgBox col-5 m-4">
                        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                        <div class="overlay text-center">
                            <a class="text-decoration-none" href="projectDetail.php">
                                <p class="overlayTxt mx-auto mt-5 pt-5 text-textWhite text-uppercase fw-bold">project name</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 justify-content-center">
                    <div class="imgBox col-5 m-4">
                        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                        <div class="overlay text-center">
                            <a class="text-decoration-none" href="projectDetail.php">
                                <p class="overlayTxt mx-auto mt-5 pt-5 text-textWhite text-uppercase fw-bold">project name</p>
                            </a>
                        </div>
                    </div>
                    <div class="imgBox col-5 m-4">
                        <img alt="placeholder for projects" class="placeholderImg" src="assets/placeholder.jpeg">
                        <div class="overlay text-center">
                            <a class="text-decoration-none" href="projectDetail.php">
                                <p class="overlayTxt mx-auto mt-5 pt-5 text-textWhite text-uppercase fw-bold">project name</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</main>

<?php include "includes/footer.php"?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>