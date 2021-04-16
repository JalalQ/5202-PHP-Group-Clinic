<?php
namespace WebApp2\ObjectManagers;

class AdminMail {

    public function content_inquiry($username, $replyMsg) {
        $reply= "<!DOCTYPE html>
<html lang='en'>
<head>

    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, viewport-fit=cover'>
    <meta name='reply to inquiry' description='QC/HC Reply to inquiry'>
    <meta http-equiv='X-UA-Compatible'' content='ie=edge'>
    <title>QC/HC - Reply to inquiry</title>

    <!-- Latest compiled and minified CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css' integrity='sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu' crossorigin='anonymous'>
    <script src='https://kit.fontawesome.com/c03ea9a48c.js' crossorigin='anonymous'></script>
    <!-- Style CSS -->
    <style type='text/css'>
        /*============= TOP BAR HEADER =============*/
        header
        {
            background-color: #276678!important;
            height: 7rem;
        }
        .logo {
        font-family: sans-serif;
            font-size: 40px;
            text-align: center;
            border: 4px white solid;
            border-radius: 12px;
            padding: 1rem;
        }
        nav a {
        color: white;
    }
        nav a:hover {
        color: gray;
    }
        .top-bar {
        background: #709fb0;
        height: 2.8rem;
            padding: 0.5rem 0;
        }
        nav{
        padding-top: 1rem;
            padding-left: 0.5em;

        }
        .content-wrapper{
        max-width: 1000px;
            margin: auto;
            padding: 0 10px 0 10px;
        }
        h1{
        color: #276678;
    }
        .info {
        font-weight: bold;
        }
    </style>
</head>
<body>
<header>
    <!--Navbar -->
    <nav class='navbar navbar-expand-lg navbar-dark cyan'>
        <a class='navbar-brand font-bold logo' href='http://localhost:8888/Web-App-2/index.php?page=home'>QC/HC</a>
    </nav>
    <!--/.Navbar -->
</header>
<main class='content-wrapper'>
    <h1>Reply to inquiry</h1>
    <p>Dear. $username</p>
    <p>$replyMsg</p>
    <p>Warm regards,</p>
    <p>QC/HC</p>
</main>
</body>
</html>";
        return $reply;
    }
}
