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
        }

        body {
            height: 100%;
            width: 100%;
            font-family: 'Montserrat' !important;
            font-size: 12px;
            color: white;

        }


        .clo_1 {
            float: left;
            width: 50%;
            background-color: #213F7E;
            height: 633px;


        }

        .clo_1_sub {
            align-items: center;
            justify-content: center;
            width: 45%;
            text-align: center;
            margin: auto;
            margin-top: 200px;
            padding: 10px;
        }

        .clo_1_bottom {
            position: fixed;
            bottom: 12px;
            width: 40%;
            margin-left: 50px;

        }

        .clo_2 {
            float: left;
            width: 50%;
            background-color: #4195D1;
            height: 633px;
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
            color: white !important;
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

            </div>

            <div class="clo_1_bottom">
                <b>
                    <p>SKIP</p>
                    <p style="text-align: right;">NEXT</p>
                </b>

            </div>
        </div>
        <div class="clo_2">
            <form action="/action_page.php" method="post">

                <h2 style="text-align: center">SIGN IN</h2>
                <div class="form_container">
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button onclick="window.location.href='/home/dashboard'" type="submit">SIGN IN</button>


                </div>

                <div class="container" style="text-align: center">
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>

        </div>
    </div>

</body>

</html>