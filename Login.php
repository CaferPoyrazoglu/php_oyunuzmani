<?php error_reporting(0); ob_start(); include("Sayfalar/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Standart Giriş</title>
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

        <img src="img/loginResim.png" class="img-fluid" alt="lock">
        <h1>
            
                <center><b>Oyun Uzmanı</b></center>
            
        </h1>

    </div>

    <br>
    
    
    
    
    
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                <form action="Login.php" method="post">
                    <div class="panel panel-default shadow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="text-center">
                                    
                                </div>
                                <div class="text-center">
                                    <h2>Standart Giriş</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">

                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="E-Mail Adresinizi Giriniz" class="form-control" />
                            </div>

                            <div class="form-group">
                                <input type="password" name="sifre" id="sifre" placeholder="Şifrenizi Giriniz" class="form-control" />
                            </div>

                            

                        </div>
                        
                        <div class="panel-footer text-right">
                           
                           
                           
                            
                            <button type="input" name="girisbtn" class="btn btn-success">
                                <span class=""></span> Giriş Yap
                            </button>

                        </div>
                        
                         
                        
                        
                        
                        
                        <script>
                            function myFunction() {
                            alert("Başarıyla giriş yaptınız. Devam etmek için 'Tamam' butonuna tıklayın.");
                            
                            
                        }
                        </script>
                        
                        
                        
                        
                        
                        
                        
                        
                        <?php

                                $email = addslashes(strip_tags(trim($_POST["email"])));

                                $sifre = addslashes(strip_tags(trim($_POST["sifre"])));

                                


                                if(isset($_POST["girisbtn"])){
                                     $query = $db->query("select * from kullanici where email = '{$email}' and sifre = '{$sifre}'")->fetch(PDO::FETCH_ASSOC);
                                     if ( $query ){
                                       
                                        
                                        session_start();
                                        $_SESSION['email']= $email;  // Initializing Session with value of PHP Variable
                                        
                                        
                                        header("Refresh:1; url=MyProfile.php");
                                        echo '<script type="text/javascript">', 'myFunction();', '</script>'
;

                                       


                                }
                                }
                                ?>
                                
                    </div>
                </form>

            </div>
        </div>
    </div>
                                       
                                       
                                       <div class="text-center">
                               <?php include("glog/index.php"); ?>
                            </div>
                                                 
    

</body>

</html>