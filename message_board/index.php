<html>
        <head>
            <title>Let's Talk</title>


        </head>

	<body>
	    <center>
                    <?php include("menu.php"); ?>
    

                    <h1>Add data</h1>
                    <form action="doAdd.php" method="POST">

                    <table width="400" border="0" cellpadding="4">
                        <tr>
                                <td align="right" style="font-size:40px">Title: </td>
                                <td><input type="text" name="title" style="font-size:30px"/></td>
                        </tr>

                        <tr>
                                <td align="right" style="font-size:40px">Name:  </td>
                                <td><input type='text' name='author'  style='font-size:40px;'autocomplete="on" /></td>
                                <td></td>
                        </tr>

                        <tr>
                                <td align="right" valign="top" style="font-size:40px">Data </td>
                                <td><textarea name="content" rows="5" cols="30" style="font-size:40px"></textarea></td>
                        </tr>

                        <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" value="Submit" style="width:200px; height:100px;font-size:40px; "/>&nbsp;&nbsp;
                                    <input type="reset" value="reset" style="width:200px; height:100px;font-size:40px; "/>
                                </td>

                        </tr>


                    </table>
                </form>
        </body>




</html>
