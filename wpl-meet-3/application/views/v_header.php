<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Berita Kami</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" />

    <!-- Icon di Judul Tab -->
    <link rel="icon" href="assets/asepbelajar.jpg" />

    <!-- CSS -->
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
</head>

<body>
    <header>
        <h1>Berita Kami</h1>
        <nav>
            <ul>
                <li>
                    <a href="index.html"><b>BERANDA</b></a>
                </li>
                <li>
                    <a href="jelajahi.html"><b>JELAJAHI</b></a>
                </li>
                <li>
                    <a href="jelajahi.html"><b>TENTANG</b></a>
                </li>
            </ul>
        </nav>
    </header>