<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Кривой MVC</title>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
    <script type="text/javascript">
        // return a random integer between 0 and number
        function random(number) {

            return Math.floor( Math.random()*(number+1) );
        };

        // show random quote
        $(document).ready(function() {

            var quotes = $('.quote');
            quotes.hide();

            var qlen = quotes.length; //document.write( random(qlen-1) );
            $( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
        });
    </script>
</head>
<body>
<div id="wrapper">
    <br id="header">
        <a href="main">Главная страница</a> </br>
        <a href="sword">Первый игрок</a></br>
        <a href="def">Второй игрок</a></br>
        <a href="deck">Калода карт</a> </br>

    </div>
    <div id="page">
        <div id="sidebar">
            <div class="side-box">

            </div>
            <div class="side-box">

            </div>
        </div>
        <div id="content">
            <div class="box">

                <?php include 'application/views/'.$content_view; ?>





            </div>
            <br class="clearfix" />
        </div>
        <br class="clearfix" />
    </div>
    <div id="page-bottom">

        <div id="page-bottom-content">
            <h3>О MVC</h3>
            <p>
                Что-то о MVC и как же сложно это писать
            </p>
        </div>
        <br class="clearfix" />
    </div>
</div>
<div id="footer">
    <a href="/">кривой MVC</a>
</div>
</body>
</html>