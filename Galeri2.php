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

        <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menulist" aria-expanded="false">
                            <span class="sr-only">Menü</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="HomePage.html">Oyun Uzmanı</a>
                    </div>
        
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="menulist">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="HomePage.html">Anasayfa</a>
                            </li>
                            <li>
                                <a href="Galeri.html">Galeri</a>
                            </li>
                            <li>
                                <a href="Updates.html">Güncelleme Notları</a>
                            </li>
                            <li>
                                <a href="Yardimlasma.html">Yardımlaşma</a>
                            </li>
                            <li>
                                <a href="hakkinda.html">Hakkında</a>
                            </li>
                            <li style="margin-top:10px;">
                                <form class="example" action="action_page.php">
                                    <input type="text" placeholder="Ara.." name="search">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                  </form>
                                  
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            
                            
                            
                            <li>
                                <a href="register.html">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;Kayıt Ol
                                </a>
        
                                
        
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-log-in"></span>&nbsp;Giriş
                                    <span class="badge">3</span>
                                    <span class="caret"></span>
                                </a>
        
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="Login.html"><img style="margin-left: -15px;margin-right: 8px; "src="/img/user.png" height="20" weight="20">Standart Giriş</a>
                                    </li>
                                    <li>
                                        <a href="Gglogin.html"><img style="margin-left: -15px;margin-right: 8px; "src="/img/search.png" height="20" weight="20">Google ile Giriş</a>
                                    </li>
                                    <li>
                                            <a href="Fblogin.html"><img style="margin-left: -15px;margin-right: 8px; "src="/img/facebook.png" height="20" weight="20">Facebook ile Giriş</a>
                                    </li>
                                    
                                </ul>
        
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-user"></span>&nbsp;Profil
                                    <span class="caret"></span>
                                </a>
        
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="myprofile.html">Profil Görüntüle</a>
                                    </li>
                                    
                                    
                                </ul>
        
                                
                            </li>
        
                            
        
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="glyphicon glyphicon-envelope"></span>&nbsp;Mesajlar
                                    <span class="badge">2</span>
                                    <span class="caret"></span>
                                </a>
        
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="message.html">Mesaj 1</a>
                                    </li>
                                    <li>
                                        <a href="message.html">Mesaj 2</a>
                                    </li>
                                    <li class="divider" role="separator"></li>
                                    <li>
                                        <a href="messages.html">Mesajlara Git</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="Login.html">
                                    <span class="glyphicon glyphicon-log-out"></span>&nbsp;Çıkış
                                </a>
                            </li>
                            <li>
                                
                                
        
                                
                                <li>
                                        <a href="">
                                            <img src="img/gecemodu.png" alt="" height="15" width="15">
                                        </a>
                                    </li>
                                    
                                </a>
                            </li>
        
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        

    <div class="modal fade" id="productinfo" tabindex="-1" role="dialog" aria-labelledby="productinfo-label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                
                <div class="modal-body">
                    <div class="row text-center">
                            <img src="http://placehold.it/570x600">
                        
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>

    <h1> <center> <font size="30">Galeri</font> </center></h1>

    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/480x280">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/300x150">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>

    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/300x150">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/300x150">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    
    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/300x150">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/300x150">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/300x150">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div class="col-md-3 col-sm-4 col-xs-12 ">
            <div class="thumbnail">
                <img src="http://placehold.it/300x150">
                <div class="caption text-center">
                    
                    
                    <p>
                       
                        </a>
                        <a href="#" data-toggle="modal" data-target="#productinfo" class="btn btn-info ">
                            <span class="glyphicon glyphicon"></span>&nbsp;Büyüt
                        </a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    
    
    
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