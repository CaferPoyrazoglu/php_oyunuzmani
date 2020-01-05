<?php include("Sayfalar/config.php"); ?>


<!DOCTYPE html>
<html>

<head>
    <title>Yardım</title>
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

        <img src="img/helpme.png" class="img-fluid" alt="lock" width="74" height="74">
        <h1>
            
                <center><b>Site Yönetimine Mesaj Gönder</b></center>
                <b><center><h4>Cevabınızı e-mail adresiniz üzerinden alacaksınız.</h4></center></b>
            
        </h1>

    </div>

    <br>
    


    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                <form action="#" method="post">
                    <div class="panel panel-default shadow">
                        
                        <div class="panel-body">

                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="E-Mail Adresiniz" class="form-control" />
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="text" name="baslik" id="baslik" placeholder="Başlık" class="form-control" />
                            </div>

                            <div class="form-group">
                            <textarea cols="30" rows="5" name="mesaj" id="mesaj" placeholder="Mesajınızı buraya giriniz." class="form-control"></textarea>
                        </div>

                            

                        </div>
                        
                        <div class="panel-footer text-right">
                            
                            <button type="input" name="gonderbtn" class="btn btn-success">
                                <span class=""></span> Gönder
                            </button>

                        </div>
                        
                        
                        
                        
                        
                        <script>
                            function myFunction3() {
                            alert("Mesajınız iletilmiştir. Devam etmek için 'Tamam' butonuna tıklayın.");
                            
                            
                        }
                        </script>
                        
                        
                        
                        
                        <?php

                                $email = addslashes(strip_tags(trim($_POST["email"])));
                                
                                $baslik = addslashes(strip_tags(trim($_POST["baslik"])));

                                $mesaj = addslashes(strip_tags(trim($_POST["mesaj"])));

                                


                                if(isset($_POST["gonderbtn"])){
                                    
                                            
                                        
                                                
                                                $add = $db->prepare("INSERT INTO yardimlasma1  (baslik,mesaj,email) values (?,?,?)");
                                                $add->execute(array($baslik, $mesaj, $email));
                                                
                                                
                                                header("Refresh:1; url=default.php");
                                                echo '<script type="text/javascript">', 'myFunction3();', '</script>';
  
                                }

                                ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true"
        data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="deleteModalTitle">Mesajı Sil</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 md-offset-1">
                            <center>
                                <span class="fa fa-trash text-danger fa-3x mr-2"></span>
                            </center>
                        </div>
                        <div class="col-md-7 text-center">
                            <p>Silmek istediğinize emin misiniz?</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        <span class="fa fa-check mr-2"></span>Hayır</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">
                        <span class="fa fa-close mr-2"></span>Evet</button>
                </div>
            </div>
        </div>
    </div>
    

    


</body>

</html>