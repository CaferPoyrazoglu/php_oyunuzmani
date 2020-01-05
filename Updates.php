<?php include("Sayfalar/config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Güncelleme Notları</title>
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
        


    <h1> <center> <font size="30">Güncelleme Notları</font> </center></h1>
    
    
    

    
    
    
      <?php
        $listele = $db->query("SELECT * from updatenotes", PDO::FETCH_ASSOC);
            if($listele->rowCount()){
               foreach($listele as $list){?>

       
           <marquee><h1><?php echo $list["baslik"]; ?></h1><br></marquee>
           
           <?php echo $list["text"]; ?>
           
           


               <?php } } ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

                    
                    

            


    

                    
</body>

</html>