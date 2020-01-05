<?php include("Sayfalar/config.php"); ?>


<!DOCTYPE html>
<html>

<head>
    <title>Seviye Sistemi</title>
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
   <div class="text-center">

        <img src="img/rank.png" class="img-fluid" alt="lock" width="74" height="74">
        <h1>
            <center><b>Kullanıcı Seviyesini Değiştir</b></center>
                <b><center><h4>Sadece adminler kullanıcı seviyesini değiştirebilir.</h4></center></b>
                
            
        </h1>

    </div>

    <br>     


    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

                <form action="level.php" method="post">
                    <div class="panel panel-default shadow">
                        
                        <div class="panel-body">

                            
                            <div class="form-group">
                                <input type="email" name="yemail" id="yemail" placeholder="Yetkili E-Mail Adresi" class="form-control" />
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="password" name="ysifre" id="ysifre" placeholder="Yetkili Şifresi" class="form-control" />
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="emailt" name="kemail" id="kemail" placeholder="Seviyesi değiştirelecek kullanıcının E-Mail adresi" class="form-control" />
                            </div>

                            <div class="form-group">
                                <input type="text" name="klevel" id="klevel" placeholder="Yeni kullanıcı Seviyesi" class="form-control" />
                            </div>

                            

                        </div>
                        
                        <div class="panel-footer text-right">
                            
                            <button type="input" name="dgstrbtn" class="btn btn-success">
                                <span class=""></span> Değiştir
                            </button>


                        </div>
                        
                        <?php

                                $yemail = addslashes(strip_tags(trim($_POST["yemail"])));

                                $ysifre = addslashes(strip_tags(trim($_POST["ysifre"])));
                                
                                $kemail = addslashes(strip_tags(trim($_POST["kemail"])));
                                
                                $klevel = addslashes(strip_tags(trim($_POST["klevel"])));

                                


                                if(isset($_POST["dgstrbtn"])){
                                    
                                            
                                            
                                            
                                            
                                            
                                            
                                        $query = $db->query("select * from kullanici where email = '{$yemail}' and sifre = '{$ysifre}' and level = 'admin' ")->fetch(PDO::FETCH_ASSOC);
                                                
                                                if ( $query ){
                                       
                                                            
                                                        $query = $db->query("UPDATE kullanici SET level= '{$klevel}' WHERE email= '{$kemail}'");
    
                                                
                                                            


                                }
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
  
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