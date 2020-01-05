<!DOCTYPE html>
<html>

<head>
    <title>Profilim</title>
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
        

    <!-- CTRL + SHIFT + W : Browser da sayfayı açar.. -->
    <!-- ALT + SHIFT + W : Seçileni element içine alır.. -->

    <div class="container">



        <div class="row">
            <div class="col-md-12">
                <h2>Profil Sayfası</h2>
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <center><img src="http://placehold.it/150x150" class="img-circle img-responsive img-thumbnail" /></center>
            </div>
            <div class="col-md-8 well">

                <div class="form-group">

                </div>

                <div class="form-group">
                    <label class="col-md-2 text-danger">Name : </label>
                    <label class="col-md-10">Cafer</label>
                </div>

                <div class="form-group">
                    <label class="col-md-2 text-danger">Surname : </label>
                    <label class="col-md-10">Poyrazoğlu</label>
                </div>

                <div class="form-group">
                    <label class="col-md-2 text-danger">E-Mail : </label>
                    <label class="col-md-10">cafererhan@gmail.com</label>
                </div>

                <div class="form-group">
                    <label class="col-md-2 text-danger">Bio : </label>
                    <label class="col-md-10">
                        Ipsum gravida vel pretium tellus tincidunt integer eu augue augue nunc elit dolor, luctus placerat scelerisque euismod, iaculis eu lacus nunc mi elit, vehicula ut.
                    </label>
                </div>
                <div class="form-group">
                    <label class="col-md-2 text-danger">Seviye : </label>
                    <label class="col-md-10">
                        General<a href="level.php"> Değiştir</a>
                    </label>
                </div>
                <div class="form-group">
                    <label class="col-md-2 text-danger">Rep Puanı : </label>
                    <label class="col-md-10">
                        25
                    </label>
                </div>
            </div>
        </div>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Button Hover Effect</title>
            <link rel="stylesheet" href="styles.css">
        </head>
        <body>
        
        <div class="wrapper">
          
          <div class="btn btn_2">
            <a href="">+REP</a>
          </div>
        </div>	
        
        </body>
        </html>
        <div class="row">
                
            <div class="col-md-10 col-md-offset-1 text-right">
                <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#messagebox">
                    <span class="glyphicon glyphicon-edit"></span> Edit
                </a>
                

                
            </div>
            <div class="col-md-12">
                &nbsp;
            </div>
        </div>
    </div>

    <div class="modal fade" id="messagebox" tabindex="-1" role="dialog" aria-labelledby="messagebox-label">
        <form action="#" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="messagebox-label">Profil Düzenle</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Ad" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="surname" id="surname" placeholder="Soyad" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input type="email" name="editemail" id="editemail" placeholder="E-Mail Adresi" class="form-control" />
                        </div>

                        <div class="form-group">
                            <textarea cols="30" rows="5" name="editbio" id="editbio" placeholder="Biyografi" class="form-control"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>

                        <button type="submit" class="btn btn-warning" data-dismiss="modal">
                            <span class="glyphicon glyphicon-floppy-save"></span> Kaydet
                        </button>
                    </div>
                </div>
            </div>
        </form>
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