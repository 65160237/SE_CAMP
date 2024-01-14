<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math</title>
    <link rel="stylesheet" href="mystylephp.css">
</head>
<style>
        h1 {
            font-family: "Georgia"
            font-size: 30pt;
            text-shadow: 5px 5px 5px #212121;
            color: black;
            margin-top: 10%;
        }
        body{

            background-image: url(https://i.pinimg.com/originals/99/21/de/9921de42ede13832ff5b845c71db8b44.gif);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        /* form{
            margin-top: 10%;
        } */

</style>
<body>
    <center>
        <h1>Multiplication Table</h1>
    <form method="post" action="/my-route">
        @csrf
        <input type="text" name ="multi_x">
        <button type="submit">ตกลง</button>
    </form>
    </center>
</body>
</html>
