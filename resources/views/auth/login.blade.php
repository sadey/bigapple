<!DOCTYPE html>
<html lang="en-us">
<meta charset="utf-8" />
<head>
    <title>Bigatle Community</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <style>
        @import url("http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css");
        @import url("http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700");
        *{margin:0; padding:0}
        body{background:#ccc; font-family: 'Source Sans Pro', sans-serif}
        .form{width:400px; margin:0 auto; background:#c099c2; margin-top:150px}
        .header{height:44px; background:#862d7f}
        .header h2{height:44px; line-height:44px; color:#fff; text-align:center}
        .login{padding:0 20px}
        .login span.un{width:10%; text-align:center; color:#0C6; border-radius:3px 0 0 3px}
        .text{background:#fff; width:90%; border-radius:0 3px 3px 0; border:none; outline:none; color:#999; font-family: 'Source Sans Pro', sans-serif}
        .text,.login span.un{display:inline-block; vertical-align:top; height:40px; line-height:40px; background:#fff;}

        .btn{height:40px; border:none; background:#0C6; width:100%; outline:none; font-family: 'Source Sans Pro', sans-serif; font-size:20px; font-weight:bold; color:#eee; border-bottom:solid 3px #093; border-radius:3px; cursor:pointer}
        ul li{height:40px; margin:15px 0; list-style:none}
        .span{display:table; width:100%; font-size:14px;}
        .ch{display:inline-block; width:50%; color:#CCC}
        .ch a{color:#CCC; text-decoration:none}
        .ch:nth-child(2){text-align:right}
        /*social*/
        .social{height:30px; line-height:30px; display:table; width:100%}
        .social div{display:inline-block; width:42%; color:#eee; font-size:12px; text-align:center; border-radius:3px}
        .social div i.fa{font-size:16px; line-height:30px}
        .fb{background:#3B5A9A; border-bottom:solid 3px #036} .tw{background:#db4437; margin-left:16%; border-bottom:solid 3px red}
        /*bottom*/
        .sign{width:90%; padding:0 5%; height:50px; display:table; background:#862d7f}
        .sign div{display:inline-block; width:50%; line-height:50px; color:#ccc; font-size:14px}
        .up{text-align:right}
        .up a{display:block; background:#096; text-align:center; height:35px; line-height:35px; width:50%; font-size:16px; text-decoration:none; color:#eee; border-bottom:solid 3px #006633; border-radius:3px; font-weight:bold; margin-left:50%}
        @media(max-width:480px){ .form{width:100%}}
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">BIGATLE</a>
            </div>

            <div class="navbar-header page-scroll center hidden-xs hidden-md hidden-sm">
                <img style="text-align: center" class="logo" alt="Brand" src="img/logo.png">
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a id="ss" class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a id="ss" class="page-scroll" href="#portfolio">Blog</a>
                    </li>
                    <li>
                        <a id="ss" class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a id="ss" class="page-scroll" href="#">Sign In</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <div class="form">
        <div class="header"><h2>Sign In</h2></div>
        <div class="login">
            <form action="">
                <ul>
                    <li>
                        <span class="un"><i class="fa fa-user"></i></span><input type="text" required class="text" placeholder="User Name Or Email"/></li>
                    <li>
                        <span class="un"><i class="fa fa-lock"></i></span><input type="password" required class="text" placeholder="User Password"/></li>
                    <li>
                        <input type="submit" value="LOGIN" class="btn">
                    </li>
                    <li><div class="span"><span class="ch"><input type="checkbox" id="r"> <label for="r">Remember Me</label> </span> <span class="ch"><a href="#">Forgot Password?</a></span></div></li>
                </ul>
            </form>
            <div class="social">
                <a href="#"><div class="fb"><i class="fa fa-facebook-f"></i> &nbsp; Login With Facebook</div></a>
                <a href="#"><div class="tw"><i class="fa fa-google"></i> &nbsp;  Login With Google</div></a>
            </div>
        </div><br/>
        <div class="sign">
            <div class="need">Need new account ?</div>
            <div class="up"><a href="">How to join</a></div>
        </div>
    </div>
</body>
</html>