<?php include("Sayfalar/config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Galeri</title>
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
      
      
      
      
      
        

    
    <h1> <center> <font size="30">Galeri</font> </center></h1>

      <?php
        $listele = $db->query("SELECT * from galeri", PDO::FETCH_ASSOC);
            if($listele->rowCount()){
               foreach($listele as $list){?>

         
            
               
            
           <!--<img src="<?php echo $list["fotourl"]; ?>" href="<?php echo $list["fotourl"]; ?>" height="280" width="480">-->
       
       
       <a href="<?php echo $list["fotourl"]; ?>"><img src=" <?php echo $list["fotourl"]; ?>" width="480" height="280" title="Fotoğrafı Büyüt" alt="Oyun Uzmanı"></a>
            


           


               <?php } } ?>
    
    
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