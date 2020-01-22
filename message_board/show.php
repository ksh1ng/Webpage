<html>
        <head>
            <title>Let's Talk</title>
            <script>
                function dodel(id){
                    if (confirm("Sure?")){
                        window.location = "del.php?id=" + id;
                    }
                }
            </script>
        </head>
        <body>
            <center>
                    <h2>Let's Talk</h2>
                    <a href="index.php">Add data</a>
                    <a href="show.php">See</a>
                    <hr width="100%"/>

                    <h3>View Message</h3>
                    <table border="1" width="700" style="background-color:#D1BBFF;">
                        <tr>
                                <th>title</th>
                                <th>name</th>
                                <th>data</th>
                                <th>ip</th>
                                <th>timestamp</th>
                                <th>operation</th>
                        </tr>


                        <?php
                            $info = file_get_contents("message.txt");

                            // 取出內容最後的三個＠＠＠符號
                            $info = rtrim($info, "@");

                            if (strlen($info) >= 8){

                            $lylist = explode("@@@",$info);


                            foreach($lylist as $k=>$v){
                                $ly = explode("##", $v);
                                echo "<tr>";
                                echo "<td>{$ly[0]}</td>";
                                echo "<td>{$ly[1]}</td>";
                                echo "<td>{$ly[2]}</td>";
                                echo "<td>{$ly[3]}</td>";
                                echo "<td>".date("Y-m-d H:i:s", $ly[4]+8*3600)."</td>";
                                echo "<td><a href='javascript:dodel({$k})'><img src='trash.png' width='70px' height='30px' border='0'></a></td>";

                                echo "</tr>";


                            }

                        }
                        ?>
                    </table>

        </center>
        </body>

</html>
