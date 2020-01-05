<?php include("Sayfalar/config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Hakkında</title>
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
        
    <h1 class="hrYapisi"> <center> <font size="30">Hakkında</font> </center></h1>
    <hr>
    <div class="container">   
    <?php
        $listele = $db->query("SELECT * from hakkinda", PDO::FETCH_ASSOC);
            if($listele->rowCount()){
               foreach($listele as $list){?>

        <div class="row"> <!-- Hakkında -->
            <p class="hrYapisi">
               <?php echo $list["hakkinda"]; ?>
            </p>
           
        </div>
            <hr style="border-radius: 10px;">


            <div class="row">
                    <div class="col-sm-4">
                            <h1 class="hrYapisi"> <center> İletişim bilgileri</center></h1>
                            <br>
                            <img src="img/call-answer.png" height="36" width="36">+ <?php echo $list["telefon"]; ?>
                            <br><br>
                            <img src="img/e-mail-envelope.png" height="36" width="36"> <?php echo $list["email"]; ?>
                            <br><br>
                            <img src="img/address.png" height="36" width="36"> <?php echo $list["adres"]; ?>
                    </div>
                    <div class="col-sm-4">
                            <h1 class="hrYapisi"> <center> Kurucular</center></h1>
                            <br>
                            <ui>
                                <li>Hüseyin Berk Buğur</li>
                                <li>Cafer Erhan Poyrazoğlu</li>
                                <li>Hasan Basıcı</li>
                                <li>Salih Alper Aşkın</li>
                                <li>Burak Kaya</li>
                                
                                <br><br><br><br>
                            <b>Tüm Hakları Saklıdır. İzinsiz Kullanılamaz © Copyright 2019</b>

                            </ui>
                            
                    </div>
                    <div class="col-sm-4">
                            <iframe src="https://discordapp.com/widget?id=429765986871148546&theme=light" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
                            
                            
                        
                        </div>
                    

                  </div>


               <?php } } ?>
        
    </div>

<br><br><br><br><br><br><br>

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