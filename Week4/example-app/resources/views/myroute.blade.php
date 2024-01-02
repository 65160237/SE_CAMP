<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    body {
 background-image: url("paper.gif");
 background-color: #cccccc;
}
</style>
<head>
    <body>
        <center>
            <b>
            <?php $myinput; $length_number = 24; ?>
            <h1 clss >ตารางสูตรคูณแม่ <?php echo $myinput ?></h1>
            <div style="width: 500px; height: 600px; overflow-y: scroll;
            scrollbar-arrow-color:blue; scrollbar-face-color: #e7e7e7;
            scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:#888888">
                <table>
                    <?php
                    for ($j = 1; $j <= $length_number; $j++) {
                        echo "<tr><td>" . $myinput . ' x ' . $j . ' = ' . ($myinput * $j) . "<br><br>\n";
                    }
                    ?>
                </table>
            </div>
            </b>

        </center>
    </body>
</html>
