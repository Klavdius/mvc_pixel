<?php
    if(!empty($_POST)){
        $bin = $_POST['textBin'];
        $dec = Start::bin($bin);
        echo $dec;

    }

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous">
    </script>
</head>
<form method="post" action="main.php">
<body>

<table>
    <div>
       <div class="player1">
           <div>1</div>
           <div>1</div>
           <div>1</div>
       </div>
        <div>
            <div>2</div>
            <div>2</div>
            <div>2</div>
        </div>
        <div>
            <div>3</div>
            <div>3</div>
            <div>3</div>
        </div>
        <div>
            <div>4</div>
            <div>4</div>
            <div>4</div>
        </div>
    </div>
    <hr>
    <div class="player2">
        <div>
            <div>5</div>
            <div>5</div>
            <div>5</div>
        </div>
        <div>
            <div>6</div>
            <div>6</div>
            <div>6</div>
        </div>
        <div>
            <div>7</div>
            <div>7</div>
            <div>7</div>
        </div>
        <div>
            <div>8</div>
            <div>8</div>
            <div>8</div>
        </div>
    </div>



</table>

</body>
</form>
</html>
