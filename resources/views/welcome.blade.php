<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mail System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Montserrat front adding --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <style>
        * {
            margin: 0;
            padding: 0
        }

        body {
            height: 100%;
            width: 100%;
            font-family: 'Montserrat' !important;
            font-size: 12px;
        }


        .clo_1 {
            float: left;
            width: 60%;
            height: 100%;
            color: white;
            position: absolute;
            background-repeat: no-repeat, repeat;
            background-image: url("img/Path 424.svg");
            background-position-x: right;

        }

        .clo_1_sub {
            align-items: center;
            justify-content: center;
            width: 45%;
            text-align: center;
            margin: auto;
            margin-top: 70px;
            padding: 10px;
        }



        .clo_2 {
            float: right;
            width: 40%;
            height: 633px;
            color: black;
            height: 100%;
        }

        /* signin form  */
        form {
            margin: 50px;
            margin-top: 160px;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0px;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #213F7E;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .form_container {
            padding: 16px;
        }

        span.psw {
            padding-top: 16px;
        }

        a {
            color: black !important;
        }
    </style>
</head>

<body>
    <div class="container" id="parent_div">
        <div class="clo_1">
            <div class="clo_1_sub">

                <h1 style="font-size: 50px;">
                    <pre>Welcome to 
Name</pre>
                </h1><br><br>
                There are many variations of passages of Lorem Ipsum available.but the majority have suffered alteration
                in
                some form by injected humour , or randomised words which don't look even slightly believable.
                <div class="img_div" style="bottom: 0;right: 12px;position: absolute;">
                    <img src="img/Group 255.svg" alt="Snow" style="width:70%;">

                </div>

            </div>


        </div>
        <div class="clo_2">
            <form method="">

                <h2 style="text-align: center">SIGN IN</h2>
                <div class="form_container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button onclick="window.location.href='/home'" type="submit">SIGN IN</button>


                </div>

                <div class="container" style="text-align: center">
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>

        </div>
    </div>

</body>

</html>