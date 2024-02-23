<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Error! Whoops!</title>
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
            background-image: url("assets/BlueMosaik.png");
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

        h1 {
            font-size: 150px;
        }
    </style>
</head>

<body class="bg-baseColor">
<?php include "includes/header.php"?>

<main class="grid">

    <div class="whenInDoubt"></div>

    <div class="container-lg my-5">
        <div class="row mx-sm-auto text-center text-lg-start mt-lg-5">
            <div class="col-12 col-lg-10">
                <h1 class="text-textWhite text-uppercase">
                     <span class="fw-bold text-mainBlue">Whoops!</span> Something went wrong
                </h1>
            </div>
        </div>

        <div class="row mx-sm-auto text-center text-lg-start">
            <div class="col-12 col-lg-9">
                <h2 class="text-textWhite">Or the page you're looking for <strong>doesn't</strong> exist. </h2>
            </div>
        </div>
    </div>

</main>

<?php include "includes/footer.php"?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
