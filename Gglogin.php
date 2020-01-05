<?php error_reporting(0); ob_start(); include("Sayfalar/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Google ile Giriş Yap</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="Content/site.css" rel="stylesheet" />
    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
</head>

<body>

        <?php include("Sayfalar/nav.php"); ?> 




    <br>

    <div class="text-center">

        <img src="img/googleicon.png" class="img-fluid" alt="lock">
        <h1>
            
                <center><b>Oyun Uzmanı</b></center>
            
        </h1>

    </div>

    <br>
            <div class="text-center">
                
                <a href="https://accounts.google.com/o/oauth2/auth?response_type=code&redirect_uri=http%3A%2F%2Flocalhost%2Fglog%2F&client_id=695396298085-9jph6e4kupc2n5s2tpg8490njirkm88i.apps.googleusercontent.com&scope=https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&access_type=offline&approval_prompt=force"><img src="img/glogin.png" width="430" height="180" title="Fotoğrafı Büyüt" alt="Oyun Uzmanı"></a>
            
            </div>

        
    
    
    <br><br><br><br><br><br><br><br>

    <div class="well">
            <div class="row">
    
                <div class="col-md-12 text-center mt-2 mb-4">
                    <b><h2>Oyun Uzmanı</h2></b>
                </div>
    
                <div class="col-md-4 col-md-offset-4 text-center mb-4">
    
                    <a href="#" target="_blank" class="ml-2 mr-2">
                        <span class="fa fa-facebook-square fa-2x"></span>
                    </a>
    
                    <a href="#" target="_blank" class="ml-2 mr-2">
                        <span class="fa fa-instagram fa-2x text-danger"></span>
                    </a>
    
                    <a href="#" target="_blank" class="ml-2 mr-2">
                        <span class="fa fa-twitter-square fa-2x"></span>
                    </a>
    
                </div>
    
                <div class="col-md-6 col-md-offset-3 text-center mb-4">
                    <p>
                        <a href="mailto:mail@mailcom" class="btn btn-info btn-sm">
                            <span class="fa fa-at"></span>&nbsp;&nbsp;E-Posta Gönder
                        </a>
                    </p>
    
                    <p>
                        <hr> Tüm Hakları Saklıdır.&copy; 2019
                    </p>
                </div>
    
            </div>
        </div>
    


</body>

</html>