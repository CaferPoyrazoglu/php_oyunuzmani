<?php include("Sayfalar/config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>İleti Oluştur</title>
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

<br>

    <div class="text-center">

        <img src="img/post.png" class="img-fluid" alt="lock" width="74" height="74">
        <hr>

    </div>

    <br>



        <div class="row ">
            <div class="col-md-12 ">



                <div class="text-center">
                    <h1>İleti Oluşturma Kuralları</h1>
                </div>
                <br>
                <h4>        Türkçe imla kurallarına uymayan, küçük harfle başlayan konu başlıkları ve cümleler silinecektir.

                    Mesaj yazarken sadece büyük Harf kullanmak bağırmak ve sayısızlık anlamına geleceği için cümlenizin
                    tamamını kesinlikle büyük harf kullanarak yazmayınız. Konu Başlıklarını Konunun içeriğini ifade
                    eden, özetleyen şekilde seçmeniz gerekmektedir. Konu ile Alakalı olmayan Başlıklar silinebilir. Buna
                    yapılan itirazlar gözönüne alınmayacaktır.</h4>


            </div>
        </div>

        <div class="text-center">
            <table class="tec">



        







            </table>
        </div>
        <hr>
        <tr>
            <td colspan="4" class="">

                <div class="caption text-center">
                    <div class="caption text-center">
                        <a href="#" data-toggle="modal" data-target="#messagebox" class="btn btn-success ">
                            <span class="glyphicon glyphicon-plus"></span> Yeni İleti Oluştur
                        </a>

                    </div>
                </div>


            </td>
        </tr>
        
        
        
        
        
        
        
        
        
        
        
        
        



    </div>

    <div class="modal fade" id="messagebox" tabindex="-1" role="dialog" aria-labelledby="messagebox-label">
        <form action="#" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="messagebox-label">Yeni İleti</h4>
                    </div>
                    <div class="modal-body">

                        

                        

                        <div class="form-group">
                            <input type="text" name="baslik" id="baslik" placeholder="Başlık"
                                class="form-control" />
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="resim" id="resim" placeholder="Resim URL"
                                class="form-control" />
                        </div>
                        

                        <div class="form-group">
                            <textarea cols="30" rows="5" name="aciklama" id="aciklama"
                                placeholder="Açıklamanızı buraya girin." class="form-control"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>

                        <button type="input" name="gonderbtn" class="btn btn-success">
                                <span class=""></span> Gönder
                            </button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <?php

                                $baslik = addslashes(strip_tags(trim($_POST["baslik"])));

                                $resim = addslashes(strip_tags(trim($_POST["resim"])));
                                
                                $aciklama = addslashes(strip_tags(trim($_POST["aciklama"])));

                                


                                if(isset($_POST["gonderbtn"])){
                                    
                                            
                                        
                                                
                                                $add = $db->prepare("INSERT INTO post (resim,baslik,aciklama) values (?,?,?)");
                                                $add->execute(array($resim, $baslik, $aciklama));
  
                                }

                                ?>



































    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle"
        aria-hidden="true" data-backdrop="static">
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