<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= "$name"; ?> Profile</title>
    <!-- Favicon -->
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/5/56/VfL_Wolfsburg_Logo.png" />
    <style>
        html,
        body {
            margin: 0;
            padding: 0;

            font-family: "Quicksand", sans-serif;

            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        header.nav-container {
            width: 100%;
            max-height: 1200px;
            padding-block: 1rem;
            margin-inline: auto;

            display: flex;
            justify-content: space-around;
            align-items: center;

            z-index: 9999;
        }

        header.nav-container .logo img {
            width: 150px;
        }

        header.nav-container .nav-list ul {
            padding-left: 0;
            display: flex;
            justify-content: center;
            gap: 2rem 1rem;
        }

        header.nav-container .nav-list li {
            list-style-type: none;
        }

        header.nav-container .nav-list li a {
            text-decoration: none;
            font-size: 1.05rem;
            font-weight: 500;
            color: black;

            transition: all 1s ease-in-out;

            padding: 0.5rem 1.5rem;
            border-radius: 999px;
        }

        header.nav-container .nav-list li:hover a {
            background-color: #49914d;
            color: white;
        }

        main {
            flex: 1;

            margin-inline: auto;
            padding: 2rem 4rem;
            width: 100%;
            max-width: 1200px;

            display: flex;
            align-items: center;
        }

        main .content {
            flex: 1;

            display: flex;
            align-items: center;
        }

        main .content .content-description {
            flex: 1 1;
        }

        main .content .content-description .title {
            margin-block: 1rem;
            font-size: 3.5rem;
        }

        main .content .content-description p {
            line-height: 1.7rem;
            font-size: 1.2rem;
        }

        main .content .content-description button {
            padding: 0.8rem 2.7rem;
            border: 3px solid transparent;
            border-radius: 999px;
            margin-block-start: 1rem;

            background-color: #49914d;

            font-family: "Quicksand", sans-serif;
            text-transform: uppercase;
            font-size: 1rem;
            font-weight: 700;
            color: white;

            cursor: pointer;
            transition: all 0.15s ease-in;
        }

        main .content .content-description button:hover {
            border: 3px solid #49914d;
            background-color: transparent;
            color: #49914d;
        }

        main .content .content-image {
            flex: 1;
            display: flex;
        }

        main .content .content-image img {
            width: 300px;
            min-width: 200px;
            margin: auto;
        }

        main aside {
            position: fixed;
            inset-block: 0;
            inset-inline-end: 0;
        }

        main aside .social-media {
            height: 100%;
            display: flex;
        }

        main aside .social-media ul {
            padding: 1.5rem 1rem;
            margin: auto;
            background-color: #2d3e50;
            border-radius: 12px 0 0 12px;

            display: flex;
            flex-flow: column nowrap;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
        }

        main aside .social-media li {
            list-style-type: none;
        }

        main aside .social-media li a {
            color: white;
            text-decoration: none;
            font-size: 1.5rem;

            transition: all 0.5s ease-in-out;
        }

        main aside .social-media li a:hover {
            color: #89b0d9;
        }

        /* Medium devices (768px dan di bawahnya) */
        @media screen and (max-width: 768px) {
            * {
                align-items: center;
            }

            header.nav-container {
                flex-direction: column;
            }

            header.nav-container .nav-list ul {
                flex-wrap: wrap;
                column-gap: 0.5rem;
            }

            main .content {
                flex-direction: column;
                gap: 2rem;
            }

            main .content .content-description .title {
                font-size: 3rem;
            }

            main .content .content-description p {
                font-size: 1rem;
            }

            main .content .content-image {
                order: -1;
            }
        }

        #logo-nav {
            width: 5vw;
            height: auto;
        }

        h1.title {
            color: #49914d;
        }

        pre {
            margin: 0;
            font-size: 1rem;
        }
    </style>
    <!-- CSS Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="nav-container">
        <div class="logo">
            <img id="logo-nav" src="img/avatar-duo.png" alt="Logo" />
        </div>
        <nav class="nav-list">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Tentang Aku</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content">
            <div class="content-description">
                <h1 class="title">
                    Hi,
                    <?= "$name"; ?>
                    disini🙌
                </h1>
                <pre>
<b>
Nama : Asep Dwi Saputra
NIM  : STI202102126
</b>
          </pre>
                <button>Lebih lanjut</button>
            </div>

            <div class="content-image">
                <img src="img/avatar-duo.png" alt="Picture Asep" />
            </div>
        </div>
    </main>
</body>

</html>