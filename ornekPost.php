<?php 

error_reporting(0);

include("Sayfalar/config.php"); 

$ip = $_SERVER["REMOTE_ADDR"];
$post_id = htmlspecialchars(htmlentities(strip_tags(trim($_GET["id"]))));

$varmi = false;


$iList = $db->query("SELECT * FROM ip WHERE ipadres = '{$ip}'")->fetch(PDO::FETCH_ASSOC);
if ( $iList ){

    // veritabanındaki post_id sütunundaki verileri parçalama işlemi.
    $data = array_map('trim',explode(",",$iList["postid"]));

    
    // yeni post_id'yi data kuyruğuna ekleme işlemleri
    $total_id = array(); 
    $total_id[] = $data;
    array_push($total_id[0], $post_id); 
    $imp_data =  implode(",",$total_id[0]); 

    
    // post_id kontrol işlemi
    for($say = 0; $say < count($data); $say++){
        // echo $data[$say];
        if($post_id == $data[$say]){

            // echo "var";
            $varmi = true;
            break;

        }else if($post_id != $data[$say]){

            // echo "yok";
            $varmi = false;
        }

    }

    // post_id update işlemi
    if($varmi == false){

        $duzenle = $db->prepare("UPDATE ip set  
            postid=?
            where ipadres=?
            ");
        $duzenle->execute(array($imp_data, $ip));
        $islem = $duzenle->fetch(); 

        if(isset($islem))
        {
            // echo "post_id eklendi.";
         

            $view = $db->prepare("UPDATE post SET view = view +1 WHERE id=?");
            $view->execute(array($post_id));
            

        }else {
            // echo "böyle bir post_id zaten var.";
        }

    }

}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Örnek Post</title>
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
    <h1>
        <center>
            <font size="30">Örnek Post Sayfası</font>
        </center>
    </h1>
    <hr>

    <div>

        <?php 
        
        $id = $_GET['id']; 

        $listele = $db->query("SELECT * from post where id='{$id}'", PDO::FETCH_ASSOC);
            if($listele->rowCount()){
               foreach($listele as $list){

                $view = $list["view"];
        
        ?>

        <div class="col-md-2 col-sm-2 col-xs-6 ">
            <div class="thumbnail">
                <img src="<?php echo $list["resim"]; ?>">
                <div class="caption text-center">


                    <p>



                    </p>
                </div>
            </div>
        </div>

    

    <div class="container">
        <h3 class="text-center"><a href="#"><?php echo $list["baslik"]; ?></a></h3>
        <p><?php echo $list["aciklama"]; ?></p>
        <hr>


    </div>

               <?php } } ?>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <p style="border-style:solid;border-color:darkred;color: darkred;">Görüntülenme sayısı: <?php echo $view; ?> </p>
            </div>
            
        <head>
               
                <meta charset="UTF-8">
                <title>Button Hover Effect</title>
                <link rel="stylesheet" href="styles.css">
            </head>
            <body>
                    <div class= text-right>
            <div class="wrapper">
              <div class="btn btn_1">
                  <right>
                <a href="">Favori</a>
                
              
              </div>
            
            </div>	
        </div>
                            <!DOCTYPE HTML>

                <!DOCTYPE html>
                
<html lang="en">
    



</body>
</html>

<html lang="en-US">

<head>

	<meta charset="UTF-8">

	<title>UstaDerslik</title>

	<link rel="stylesheet" href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

	<script type="text/javascript">

		$(function(){

			var kontrol=0;



			$("#yildiz i").mouseover(function(){

					var index=$(this).index();

					$("#yildiz i").css("color","#000")

					

					for(i=index;i>=0;i--){

						$("#yildiz i:eq("+i+")").css("color","#15d4f5");

					}

			})



			$("#yildiz i").mouseout(function(){

				if(kontrol==0){

					$("#yildiz i").css("color","#000");

				}

			})



			$("#yildiz i").click(function(){

				var index=$(this).index()+1;

				kontrol=1;

				alert(index+" yıldız verdiniz.");

			})

		})

	</script>

	<style type="text/css">

		#yildiz{font-size:30px;}

	</style>

</head>

<body>

	

<div id="yildiz">

    <i class="fa fa-star"></i>

    <i class="fa fa-star"></i>

    <i class="fa fa-star"></i>

    <i class="fa fa-star"></i>

    <i class="fa fa-star"></i>

</div>


	

</body>

</html>
            </div>
        </div>
    </div>
</div>
           

    <div class="container">
        
        

        <div class="row">
            <div class="">
                

                <form action="#" method="post">
                    <div class="panel panel-default shadow">
                        
                        <div class="panel-body">
                            
                            <div class="panel-heading">
                            
                            <h2>Yorumlar</h2>
                            <h6><?php echo $list["yorum"]; ?></h6>
                            
                             </div>
                            <hr>
                            <h5>Doğrulama kodu: <b><?php echo $id; ?></b></h5>
                            
                            <div class="form-group">
                                <input type="text" name="id5" id="id5" placeholder="Doğrulama kodunu buraya girin" class="form-control" />
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="text" name="adsoyad1" id="adsoyad1" placeholder="Ad Soyad" class="form-control" />
                            </div>
                            
                            
                           
                            
                            
                            <div class="form-group">
                            <textarea cols="30" rows="5" name="yorum1" id="yorum1" placeholder="Yorumunuzu buraya giriniz." class="form-control"></textarea>
                        </div>

                           

                            

                        </div>
                        
                        <div class="panel-footer text-right">
                            
                            <button type="input" name="dgstrbtn" class="btn btn-success">
                                <span class=""></span> Yorum Yap
                            </button>


                        </div>
                        </div>
                       
                       
                       
                       
                        <?php
                                    

                                $adsoyad1 = addslashes(strip_tags(trim($_POST["adsoyad1"])));

                                $yorum1 = addslashes(strip_tags(trim($_POST["yorum1"])));
                                
                                $id5 = addslashes(strip_tags(trim($_POST["id5"])));
                            
                                
                               

                                


                                if(isset($_POST["dgstrbtn"])){
                                   
                                                        
                                                        
 
                                                        $query = $db->query("UPDATE post SET yorum = '<h3><b>{$adsoyad1}</b>: {$yorum1}' where id = '{$id5}</h3>'", PDO::FETCH_ASSOC);
                                                        header("Refresh:1");
    
                  
  
                                }

                                ?>
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               
               

               
               














</body>

</html>