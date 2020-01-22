<html>
        <head>
            <title>Let's Talk</title>
        </head>
        <body>
            <center>
                    <?php include("menu.php") ?>

                    <h3>Add data</h3>
                    <?php
                    $title = strip_tags($_POST["title"]);
                    $author = strip_tags($_POST["author"]);
                    $content = strip_tags($_POST["content"]);
                    $ip = $_SERVER["REMOTE_ADDR"];
                    $addtime = time();

                    $ly = "{$title}##{$author}##{$content}##{$ip}##{$addtime}@@@";
                    //echo $ly;




                    $info = file_get_contents("message.txt");
                    file_put_contents("message.txt", $info.$ly);


                    echo "Success!";

                 ?>

        </center>
        </body>

</html>
