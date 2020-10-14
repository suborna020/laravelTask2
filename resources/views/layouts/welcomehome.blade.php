<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!------------------- bootrap start -------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!----------------------->
    <!----------mystyle sheet------------->
    <link href="/css/mywelcomestyle.css" rel=" stylesheet">
    {{-- Montserrat front adding --}}
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>


    <style>
        .clo_1 {
            background-repeat: no-repeat, repeat;
            background-image: url("img/Path 424.svg");
            background-position-x: right;

        }

    </style>
</head>
<body>
    <div class="parent_div" id="parent_div">
        <div class="my_content">

            <section class="" style="background-color:red;">
                <div class="clo_1">
                    <div class="clo_1_sub">

                        <h1 style="font-size: 50px;">
                            <div>
                                <h1>Welcome to</h1>
                            </div>
                            <div>
                                <h1>Name</h1>
                            </div>
                        </h1><br><br>
                        There are many variations of passages of Lorem Ipsum available.but the majority have suffered alteration
                        in
                        some form by injected humour , or randomised words which don't look even slightly believable.
                        <div class="img_div" style="bottom: 0;right: 12px;position: absolute;">
                            <img src="img/Group 255.svg" alt="Snow" style="width:70%;">

                        </div>

                    </div>


                </div>
                @yield('content')

            </section>
            <!-- /.content -->
        </div>


        <!-- /.content-wrapper -->


    </div>
    <script type="text/javascript">
    

    </script>
    <script src="/js/myjs.js"></script>
</body>
</html>
