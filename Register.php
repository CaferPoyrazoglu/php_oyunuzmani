<?php error_reporting(0); ob_start(); include("Sayfalar/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Kayıt Ol</title>
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
        

    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                <form action="Register.php" method="post">
                    <div class="panel panel-default shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-4">
                                    <h3>
                                        <span class="fa fa-user-plus fa-3x"></span>
                                    </h3>
                                </div>
                                <div class="col-md-8 text-right">
                                    <h2>Kayıt Olma</h2>
                                    <small>Lütfen e-mail ve şifrenizi giriniz.</small>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">

                        <div class="form-group">
                            <input type="text" name="adi" id="ad" placeholder="Adınız" class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="soyadi" id="soyad" placeholder="Soyadınız" class="form-control" />
                        </div>
                        <br>
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" />
                            </div>

                            <div class="form-group">
                                <input type="password" name="password1" id="password1" placeholder="Şifre" class="form-control" />
                            </div>

                            <div class="form-group">
                                <input type="password" name="password2" id="password2" placeholder="Şifrenizi tekrar giriniz" class="form-control" />
                            </div>

                        </div>
                        
                        <div class="panel-footer text-right">
                            <a href="Login.html" class="btn btn-info">
                                <span class="glyphicon glyphicon-log-in"></span> Zaten Üyeliğim Var
                            </a>
                            <button type="input" name="kayitolbtn" class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-saved"></span> Kayıt ol
                            </button>

                        </div>
                        <?php
                                $ad = addslashes(strip_tags(trim($_POST["adi"])));

                                $soyadi = addslashes(strip_tags(trim($_POST["soyadi"])));

                                $email = addslashes(strip_tags(trim($_POST["email"])));

                                $password1 = addslashes(strip_tags(trim($_POST["password1"])));

                                $password2 = addslashes(strip_tags(trim($_POST["password2"])));


                                if(isset($_POST["kayitolbtn"])){
                                    if($email != "" && $password1 != "" && $password2 != "" && $ad != "" && $soyadi != "" ){
                                        if($password1 != $password2){ echo '<h4 class="text-danger">Şifreler uyumsuz.</h4>'; }else  {
                                    // kullanıcı adı kontrol
                                    $query = $db->query("SELECT * FROM kullanici WHERE email = '{$email}'")->fetch(PDO::FETCH_ASSOC);
                                    if ( $query ){
                                        echo '<h4 class="text-danger">Böyle bir email adresi var.</h4>';
                                    }else {
                                            
                                     if (strlen($password1) >= 6){
                                       if( strlen($password2) >= 6){



                                     
                                                //Ekleme işlemi
                                                $add = $db->prepare("INSERT INTO kullanici 
                                                    (email,sifre,sifretekrar,ad,soyadi)
                                                    values
                                                    ( ?,?,?,?,?)");
                                                $add->execute(array($email, $password1,$password2,$ad,$soyadi));
                                                if($add){
                                                   
                                                    echo '<h4 class="text-success">Başarı ile Kayıt oldunuz. Yönlendiriliyorsunuz.</h4>';
                                                    header("Refresh:2; url=Register.php");
                                                    

                                                }
                                                else {
                                                echo "Ekleme işlemi yaparken bir hata oluştu.";
                                                }
                                            }else {
                                               
                                                echo '<h4 class="text-danger">Şifre tekrar en az 6 karakter uzunluğunda olmalı.</h4>';
                                            }
                                            }
                                            else {
                                                echo '<h4 class="text-danger">Şifreniz en az 6 karakter uzunluğunda olmalı.</h4>';
                                            }
                                            
                                            }
                                        
                                        }

                                    }else {
                                    echo '<h4 class="text-danger">Lütfen boş alan bırakmayınız.</h4>';
                                    }
                                


                                }

                                ?>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br>
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