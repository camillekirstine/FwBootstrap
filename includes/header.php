<head>
    <style>
        nav {
            margin: 5px;
        }

        .nav-links {
            font-weight: bold;
            padding: 5px;
            margin: auto;
            text-transform: uppercase;
            text-align: end;
        }

        .navlinksmobile {
            display: none;
        }

        #about:active, #about:focus, #about:hover {
            color: #0468BE !important;
        }

        #projects:active, #projects:focus, #projects:hover {
            color: #038C34 !important;
        }

        #contact:active, #contact:focus, #contact:hover {
            color: #F2293B !important;
        }
        #logo {
            height: 10vh;
        }



        @media (max-width: 60rem) {

            .nav-links {
                display: none;
            }

            .navlinksmobile {
                display: block;
                font-weight: bold;
                padding: 10px;
                margin: auto;
                text-transform: uppercase;
                text-align: center;
            }

            #logo {
                width: 90vw;
                margin: auto;
                height: auto;
            }

        }

    </style>
</head>

<nav>
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-lg-2 logoimage">
                <a href="index.php"><img id="logo" alt="Logotext" src="assets/CamilleKirstineLogo.png"></a>
            </div>

            <div class="col-lg-10 pe-5 nav-links">
                <a id="about" class="text-textWhite text-decoration-none p-3" href="index.php">about</a>
                <a id="projects" class="text-textWhite text-decoration-none p-3" href="projects.php">projects</a>
                <a id="contact" class="text-textWhite text-decoration-none p-3" href="contact.php">contact</a>
            </div>
        </div>

        <div class="row navlinksmobile">
            <a id="about" class="text-textWhite text-decoration-none p-3" href="index.php">about</a>
            <a id="projects" class="text-textWhite text-decoration-none p-3" href="projects.php">projects</a>
            <a id="contact" class="text-textWhite text-decoration-none p-3" href="contact.php">contact</a>
        </div>

    </div>
</nav>
