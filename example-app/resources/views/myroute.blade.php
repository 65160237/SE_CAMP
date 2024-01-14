<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystylephp.css">
    <title>Multiplication Table</title>
    <style>
        body {
            background-image: url(https://i.pinimg.com/originals/54/a4/0d/54a40d0800b80ac4d28addeedd982d81.gif);
            background-color: #cccccc;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
        div{
            border: 10px solid black;
            color: white;
            background-color: #f9d4b4;
            background-size: 50%;
            background-image: url(https://i.pinimg.com/originals/9b/3d/fa/9b3dfa97c1220c958360ac6fc3c1b08a.gif);

        }

    </style>
</head>
<body>
    <center>
        <b>

            <?php $multi_x ; $length_number = 24; ?>
            <h1 clss ><marquee direction="left">ตารางสูตรคูณแม่ <?php echo $multi_x ?></marquee></h1>
            <div style="width: 500px; height: 600px;
            overflow-y: scroll;
            scrollbar-arrow-color:blue;
            scrollbar-face-color: #e7e7e7;
            scrollbar-3dlight-color: #a0a0a0;
            scrollbar-darkshadow-color:#888888">
                <table>
                    <?php
                    for ($j = 1; $j <= $length_number; $j++) {
                        echo "<tr><td>" . $multi_x . ' x ' . $j . ' = ' . ($multi_x * $j) . "<br><br>\n";
                    }
                    ?>
                </table>
            </div>
        </b>
        <br>
         <form method="post" action="/my-route">
            @csrf
            <input type="text" name ="multi_x">
            <button type="submit"  style="background-color:#f9d4b4; color:#3e2723;">ตกลง</button>
        </form>
        <br>
        <form method="post" action="/my-page">
            @csrf
            <button type="submit" name="back" style="background-color:#f9d4b4; color:#3e2723;">Back</button>
        </form>
</center>
</body>
</html>
