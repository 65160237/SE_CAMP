<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="mystylephp.Css">
    <style>
        div{
            border: 10px solid black;
            color: rgb(255, 255, 255);
            background-color: #F2E9D3;
            background-size: 110%;
            background-image: url(Screen);
    
        }

    </style>
</head>

<body>
    <center>
        <b>
        <?php $multi_x = 2; $length_number = 24; ?>
        <h1 clss >ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
        <div style="width: 500px; height: 600px; overflow-y: scroll; 
        scrollbar-arrow-color:blue; scrollbar-face-color: #e7e7e7; 
        scrollbar-3dlight-color: #a0a0a0; scrollbar-darkshadow-color:#888888">
            <table>
                <?php
                for ($j = 1; $j <= $length_number; $j++) {
                    echo "<tr><td>" . $multi_x . ' x ' . $j . ' = ' . ($multi_x * $j) . "<br><br>\n";
                }
                ?>
            </table>
        </div>
        </b>
    
    </center>
</body>
</html>
