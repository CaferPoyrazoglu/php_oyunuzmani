<!DOCTYPE html>
<html>

<head>
    <title>Facebook ile Giriş Yap</title>
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

        <img src="img/fbicon.png" class="img-fluid" alt="lock">
        <h1>
            
                <center><b>Oyun Uzmanı</b></center>
            
        </h1>

    </div>

    <br>

    <div class="container text-center d-flex justify-content-center">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                <form>
                    <div class="panel panel-default shadow">
                        <div class="panel-heading text-center">
                            <div class="row">

                                <div class="col-md-12 text-mid">
                                    <h2>Giriş Yap</h2>
                                    <big>Lütfen Facebook mail adresinizi ve parolanızı giriniz.</big>
                                </div>
                            </div>

                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Parola"
                                    class="form-control">
                            </div>

                        </div>
                        <div class="panel-footer">

                            

                            
                            <a href="HomePage.html" class="btn btn-success">
                                Anasayfa
                            </a>

                            <a href="" class="btn btn-warning">
                                Parolamı Unuttum
                            </a>
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-log-in"></span> Giriş
                            </button>



                        </div>
                    </div>
                </form>

            </div>
        </div>
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