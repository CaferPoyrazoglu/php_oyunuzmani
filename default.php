<?php

include("Sayfalar/config.php");



$ip = $_SERVER["REMOTE_ADDR"];


$p = " ";


// ip adresini kontrol etme işlemleri. İp adresi kayıtlı değil ise veritabanına kayıt etme işlemleri
$query = $db->query("SELECT * FROM ip WHERE ipadres = '{$ip}'")->fetch(PDO::FETCH_ASSOC);
if (!$query){

	$sorgu = $db->prepare("INSERT INTO ip SET ipadres=:ipadres, postid=:post_id");

	$sorgu->execute(array('ipadres' => $ip, 'post_id' => $p));

	if($sorgu) {
		//echo "oldu";
	}else {
		//echo "olmadı";
	}

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Oyun Uzmanı</title>
    
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/font-awesome.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <link href="Content/site.css" rel="stylesheet" />
    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php include("Sayfalar/nav.php"); ?>



    <div class="container">

        <div class="row">
            <div class="col-md-12">

                <div id="my-carousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#my-carousel" data-slide-to="1"></li>
                        <li data-target="#my-carousel" data-slide-to="2"></li>
                        <li data-target="#my-carousel" data-slide-to="3"></li>
                        
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img alt="First slide" src="img/ets2.png" style="width: 1200px; height: 500px;">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Second slide" src="img/blackwake.jpg" style="width: 1200px; height: 500px;">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Third slide" src="img/pubg.jpg" style="width: 1200px; height: 500px;">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="item">
                            <img alt="Third slide" src="img/lol.jpg" style="width: 1200px; height: 500px;">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    
                    <div id="browse_app">
                                
                                <a class="btn btn-large btn-info"  href="iletiOlustur.php"><span class="glyphicon glyphicon-plus"></span>   İleti Oluştur</a>
                                
                    </div>
                    
                </ol>
            </div>
        </div>

        <div class="row">
        <?php
        $listele = $db->query("SELECT * from post", PDO::FETCH_ASSOC);
            if($listele->rowCount()){
               foreach($listele as $list){?>
			
            <div class="col-md-3 col-sm-4 col-xs-12">
                <div class="thumbnail">
                    <img src= "<?php echo $list["resim"]; ?>">
                    <div class="caption">
                        <h3 class="text-center"><a href="ornekPost.php?id=<?php echo $list['id']; ?>"><?php echo $list["baslik"]; ?></a></h3>
                        <p class="text-justify"><?php echo $list["aciklama"]; ?></p>
                        <p>
                            
                          
                               
                            </a>
                        </p>
                    </div>
                </div>
            </div><?php
            
		}
	}
?>

            <div class="modal fade" id="productinfo" tabindex="-1" role="dialog" aria-labelledby="productinfo-label">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="productinfo-label">Özet Görünüm</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 mb-4 mt-4">
                                    <!-- Tek resim göstermek için -->
                                    <!-- <img src="http://placehold.it/350x230" class="img-thumbnail" alt=""> -->

                                    <!-- Carousel için -->
                                    <div id="product_carousel" class="carousel slide" data-ride="carousel">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#product_carousel" data-slide-to="0" class="active"></li>
                                                <li data-target="#product_carousel" data-slide-to="1"></li>
                                                <li data-target="#product_carousel" data-slide-to="2"></li>
                                                <li data-target="#product_carousel" data-slide-to="3"></li>
                                                <li data-target="#product_carousel" data-slide-to="4"></li>
                                            </ol>
                        
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active">
                                                    <img alt="First slide" src="http://placehold.it/350x250">
                                                </div>
                                                <div class="item">
                                                    <img alt="Second slide" src="http://placehold.it/350x250">
                                                </div>
                                                <div class="item">
                                                    <img alt="Third slide" src="http://placehold.it/350x250">
                                                </div>
                                                <div class="item">
                                                    <img alt="Third slide" src="http://placehold.it/350x250">
                                                </div>
                                                <div class="item">
                                                    <img alt="Third slide" src="http://placehold.it/350x250">
                                                </div>
                                            </div>
                        
                                            <!-- Controls -->
                                            <a class="left carousel-control" href="#product_carousel" role="button" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                        
                                            <a class="right carousel-control" href="#product_carousel" role="button" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-4 text-justify">
                                    <h3>Post</h3>
                                    <hr>
                                    <p>Tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod,
                                        iaculis eu lacus nunc mi elit, vehicula ut laoreet ac, aliquam sit amet justo nunc
                                        tempor, metus vel.
                                    </p>
                                    <p>Placerat suscipit, orci nisl iaculis eros, a tincidunt nisi odio eget lorem nulla condimentum
                                        tempor mattis ut vitae feugiat augue cras ut metus a risus iaculis scelerisque eu
                                        ac ante.</p>
                                    <p>Fusce non varius purus aenean nec magna felis fusce vestibulum velit mollis odio sollicitudin
                                        lacinia aliquam posuere, sapien elementum lobortis tincidunt, turpis dui ornare nisl,
                                        sollicitudin interdum turpis nunc eget.</p>
                                    <p class="text-right mt-4 mb-4">
                    
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            
                                
                                
                            </a>
                        </div>
                    </div>
                </div>
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