<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            height: 3000px;
        }

        .container {
            width: 80%;
            margin: 0 auto !important;
        }
        /* ШАПКА (HEADER)*/
        header {
            padding: 15px 0;
            background-color: #96CDD9;
            font-size: 30px;
            font-family: monospace;

        }

        .header-nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;

        }

        .logo {
            display: flex;
            align-items: center;

        }

        nav a {
            padding: 0 10px;
        }

        .header-nav img {
            width: 40px;
            padding: 15px
        }

        section {
            box-sizing: border-box;
        }
        /* MAIN */

        .block-hero {
            margin-top: 50px;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            font-size: 30px;
            font-style:italic;


        }
        .block {
            background-image:url("https://plus.unsplash.com/premium_photo-1685809052743-b26f9ebfa789?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHw3N3x8fGVufDB8fHx8fA%3D%3D");
            display: flex;
            background-repeat: no-repeat;
            margin: 50px;
            height: 200px;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px ;

        }
        .spanish {
            background-color: white;
            padding: 20px;
        }
        .spanish span a {
            color: black;
            text-decoration: none;
        }

        .main-text {
            font-size: 40px;
            margin-left: 20px;
        }
        /*    show */

        .grid {
            display: flex;

            align-items: center;
            flex-direction: column;
        }
        .populars_post {
            background-color:#96CDD9 ;
            margin-top: 50px;
            display: flex;
            justify-content:center;
            align-content: center;

            width: 1300px;

            border-radius: 30px;
        }


        .popular_block_1 img {
            margin: 50px;
            height: 500px;
            width: 400px;
            border-radius: 30px;
        }
        .popular_block_2{
            display: flex;
            align-items: center;

        }
        .popular_block_2 p {
            font-size: 24px;
            color: white;
        }
    /*    CREATE POST*/
        .form-reg {

            padding-top: 20px;
            background-color: bisque;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 150px;

        }
        .form-reg label  {

            font-size: 20px;

        }
        .form-reg input {
            width: 60%;
            margin: 20px 0;
        padding:10px 70px;
        }
        .form-reg select{
            margin: 15px 0;
        }
        .form-reg button {
            padding: 10px 30px;
            border-radius: 15%;
            background-color: aqua;
            margin-bottom: 20px;
        }

    </style>
</head>
<body>
<header>
    <div class="header-nav">
        <div class="logo">
            <img src="https://www.svgrepo.com/show/478768/blog-writing.svg" alt="logo">
            <span>Blog</span>
        </div>
        <nav>
            <a>blog</a>
            <a>category</a>
            <a>tags</a>
            <a>about</a>
        </nav>
        <div class="links">
            <a>Вход</a>
            <a>Регистрация</a>
        </div>
    </div>
</header>
@yield('content')
<footer>

</footer>
</body>
</html>
