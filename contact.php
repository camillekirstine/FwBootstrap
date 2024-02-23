<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Camille Kirstine - Contact</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">

    <meta name="robots" content="All">
    <meta name="author" content="Camille Kirstine">
    <meta name="copyright" content=" Camille Kirstine &copy; 2024 ">

    <link href="styles/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="styles/global.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.typekit.net/wtu5hgz.css">
    <script src="https://kit.fontawesome.com/f5df81b727.js" crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            background-image: url("assets/RedMosaik.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
        }

        @media (min-width: 60rem) {
            body {
                background-size: 60%;
                background-position: right;
            }
        }
    </style>
</head>

<body class="bg-baseColor">
<?php include "includes/header.php" ?>

<main>

    <div class="whenInDoubt"></div>  <!-- div to adjust placement of content on mobile -->

    <div class="container-lg my-5">
        <div class="row mx-sm-auto text-center text-lg-start mt-lg-5">
            <div class="col-12 col-lg-8">
                <h1 id="contactHeading" class="text-textWhite text-uppercase">
                    Want to get in <span class="fw-bold text-mainRed">contact</span>?
                </h1>
            </div>
        </div>

        <div class="row mx-sm-auto text-start text-lg-start">
            <div class="col-12 col-lg-8">
                <h2 id="contactSub" class="text-textWhite">
                    There’s <strong>multiple ways</strong> to get in contact with me, so feel free to use
                    to one that <strong>suits you</strong> best
                </h2>
                <p id="contactP" class="text-textWhite pt-3">
                    E-mail me at <strong>camille@camillekirstine.com</strong><br>
                    Or if you want to read more and get my contact information, you can
                    <a class="text-textWhite text-decoration-none fw-bolder" href="assets/camillekirstineCV.pdf" download><strong>download my CV</strong></a>
                </p>
            </div>
        </div>

        <div class="row contactLinks mt-lg-5">
            <div class="col-6 col-lg-4 text-end">
                <a class=" text-mainRed" href="https://www.linkedin.com/in/camillekirstinelarsson/">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
            <div class="col-6 col-lg-4 text-start text-mainRed">
                <a class=" text-mainRed" href="https://github.com/camillekirstine">
                    <i class="fa-brands fa-square-github"></i>
                </a>
            </div>
        </div>
    </div>

</main>

<?php include "includes/footer.php" ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
