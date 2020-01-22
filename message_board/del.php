<html>
        <head>
            <title>Let's Talk</title>
        </head>
        <body>
            <center>
                    <?php include("menu.php") ?>

                    <h3>Delete Message</h3>



                        <?php
                            $id = $_GET["id"];

                            $info = file_get_contents("message.txt");

                            $lylist = explode("@@@", $info);

                            // delete specified message
                            unset($lylist[$id]);

                            $new_info = implode("@@@", $lylist);
                            file_put_contents("message.txt", $new_info);

                            echo "success"
                        ?>
                    </table>

        </center>
        </body>

</html>
