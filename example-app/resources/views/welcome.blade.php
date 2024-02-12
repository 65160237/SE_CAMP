{{-- <!doctype html>
<html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <h1 id="myh1">
    </h1>
    <button onclick="alert('Hello World!')">Click Me!</button>
    <input type="text" id="my_number" value="10">
    <button onclick="myFunction()">submit number</button>
    <br>
    <br>
    <button onclick="myFunction2()">submit my function2</button>
    <br>
    <table id="my_table">
        <thead>
            <tr>
                <td>#</td>
                <td>result</td>
            </tr>
        </thead>
        <tbody id="my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World - document.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("แม่สูตรคูณ")
            $('#my_number').val(24)
            // setInterval(() => {
            //     $('#myh1').after(`<h1 class="my_gen_number">setInterval</h1>`)
            // }, 2000);
        });

        function myFunction2() {
            // $($('#my_table').children()[1]).html("<tr><td>1</td><td>test</td></tr>")
            let my_number = parseInt($('#my_number').val())
            let my_code_tr = ``
            for (let i = 0; i < my_number; i++) {
                my_code_tr += `<tr><td>${i}</td><td>test</td></tr>`
            }
            $('#my_tbody').html(my_code_tr)
        }

        function myFunction() {
            let my_number = parseInt($('#my_number').val())
            for (let i = 0; i < my_number; i++) {
                $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
            }
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number')

            setTimeout(function() {
                $('.my_gen_number').each(function(index, val) {
                    $(val).remove();
                    //val.remove()
                })
            }, 2000);

        }
        console.log("Hello World!")
        let myval;
        console.log(typeof myval);
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2);
        myval3 = parseInt(myval) + myval2;
        console.log(myval3)
        myval3 = myval - myval2;
        console.log(myval3)
        myval3 = myval * myval2;
        console.log(myval3)
        myval3 = myval / myval2;
        console.log(myval3)
    </script>
    <script>
        let myval4 = [1, 2, 3, 4];

        myval4[5] = 5;
        myval4[6] = [6, 5, 4, 5]
        console.log(myval4)

        for (i = 0; i < myval4.length; i++) {
            console.log("in for", myval4[i])
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach", value, index)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        // php
        foreach($myval4 as $index => $value){

        }
        */
    </script>

</body>
</html> --}}



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript 101</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        #container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        button {
            padding: 10px;
            margin: 5px;
            border: none;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        #my_number {
            border: 1px solid #000;
            /* กำหนดเส้นขอบเป็นสีดำ */
            padding: 5px;
            /* เพิ่มระยะห่างระหว่างข้อความและขอบ */
            border-radius: 5px;
            /* ทำให้มีเส้นขอบโค้งเล็กน้อย */
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <center>
        <div id="container">
            <h1>ตารางสูตรคูณแม่</h1>
            <div>
                <label for="number">กรอกค่าตัวเลข : </label>
                <input type="text" id="my_number">
                <button id="summit">ตกลง</button>
                <button id="clear">ลบทิ้ง</button>
            </div>

            <div id="answer">
                <!-- Table will be generated here -->
            </div>
        </div>
    </center>
    <script>
        $(document).ready(function() {
            $("#summit").click(function() {
                var number = $("#my_number").val();
                if (number !== "" && !isNaN(number)) {
                    multi(parseInt(number));
                } else {
                    alert("ได้โปรดกรอกค่าที่เป็นตัวเลข");
                }
            });

            $("#clear").click(function() {
                clearTable();
            });

            function clearTable() {
                $("#my_number").val("");
                $("#answer").empty();
            }

            function multi(number) {
                var table = "<table><thead><tr><th>สูตรคูณแม่ " + number + "</th></tr></thead><tbody>";
                for (var i = 1; i <= 24; i++) {
                    table += "<tr><td>" + number + " x " + i + " = " + (number * i) + "</td></tr>";
                }
                table += "</tbody></table>";
                $("#answer").html(table);
            }
        });
    </script>
</body> --}}



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript 101</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <center>
        <h1> ตารางสูตรคูณแม่ </h1>
    </center>
    <center>
        <div>
            <label for="number">กรอกค่าตัวเลข : </label>
            <input type="text" id="my_number">
            <button id="summit">ตกลง</button>
            <button id="clear">ลบทิ้ง</button>
        </div>

        <div id="answer">
            <!-- Table will be generated here -->
        </div>
    </center>
    <script>
        $(document).ready(function() {
            $("#summit").click(function() {
                var number = $("#my_number").val();
                if (number !== "" && !isNaN(number)) {
                    multi(parseInt(number));
                } else {
                    alert("ได้โปรดกรอกค่าที่เป็นตัวเลข");
                }
            });

            $("#clear").click(function() {
                clearTable();
            });

            function clearTable() {
                $("#my_number").val("");
                $("#answer").empty();
            }

            function multi(number) {
                var table = "<tr><th>สูตรคูณแม่ " + number + "</th></tr>";
                for (var i = 1; i <= 24; i++) {
                    table += "<tr><td>" + number + " x " + i + " = " + (number * i) + "</td></tr>";
                }
                $("#answer").html(table);
            }
        });
    </script>


</body>

</html>
