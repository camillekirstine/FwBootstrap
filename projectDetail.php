<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Project Detail</title>
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
            background-position-y: 55%;
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
    <div class="container-fluid projectDetail detailMobile">
        <div class="row ">
            <div class="col-12 col-lg-5 mt-2 p-lg-5">
                <h1 class="text-mainGreen text-uppercase text-center text-lg-start fw-bold">Project name</h1>
            </div>

            <div class="col-12 col-lg-7 d-flex justify-content-center mt-5 mb-2">
                <img class="detailImg" alt="placeholder for project image" src="assets/placeholder.jpeg">
            </div>

            <div class="col-12 mt-5">
                <p class="text-textWhite small">
                    Project description; a possible way to describe the concept behind the project.
                    Here I can also describe what role I played in the development of the given product.
                </p>
                <p class="text-textWhite small">
                    <strong>Technologies used:</strong> List of technologies used to develop product
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid projectDetail detailDesktop">
        <div class="row ">
            <div class="col-lg-5 mt-2 p-lg-5">
                <h1 class="text-mainGreen text-uppercase text-center text-lg-start fw-bold">Project name</h1>
                <p class="text-textWhite small">
                    Project description; a possible way to describe the concept behind the project.
                    Here I can also describe what role I played in the development of the given product.
                </p>
                <p class="text-textWhite small">
                    <strong>Technologies used:</strong> List of technologies used to develop product
                </p>
            </div>

            <div class="col-12 col-lg-7 d-flex justify-content-center mt-5 mb-2">
                <img class="detailImg" alt="placeholder for project image" src="assets/placeholder.jpeg">
            </div>
        </div>
    </div>
</main>

<?php include "includes/footer.php"?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>