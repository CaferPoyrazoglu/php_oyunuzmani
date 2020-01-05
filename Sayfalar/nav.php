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
                <a class="navbar-brand" href="default.php">Oyun Uzmanı</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="menulist">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="Galeri.php">Galeri</a>
                    </li>
                    <li>
                        <a href="Updates.php">Güncelleme Notları</a>
                    </li>
                    <li>
                        <a href="Yardimlasma.php">Yardım</a>
                    </li>
                    <li>
                        <a href="hakkinda.php">Hakkında</a>
                    </li>
                    <li style="margin-top:10px;">
                        <form class="example" action="aramasonuc.php" method="get">
                            <input type="text" placeholder="Ara.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                          
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    
                    
                    
                    <li>
                        <a href="Register.php">
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
                                <a href="Login.php"><img style="margin-left: -15px;margin-right: 8px; "src="/img/user.png" height="20" weight="20">Standart Giriş</a>
                            </li>
                            <li>
                                <a href="Gglogin.php"><img style="margin-left: -15px;margin-right: 8px; "src="/img/search.png" height="20" weight="20">Google ile Giriş</a>
                            </li>
                            <li>
                                    <a href="Fblogin.php"><img style="margin-left: -15px;margin-right: 8px; "src="/img/facebook.png" height="20" weight="20">Facebook ile Giriş</a>
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
                                <a href="MyProfile.php">Profil Görüntüle</a>
                            </li>
                            
                            
                        </ul>

                        
                    </li>

                    

                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-envelope"></span>&nbsp;Mesajlar
                            <span class="badge"></span>
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="msg.php">Mesajlara Git</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Login.php">
                            <span class="glyphicon glyphicon-log-out"></span>&nbsp;Çıkış
                        </a>
                    </li>
                    <li>
                        
                        

                        
                        <li>
                                <a href="">
                                    <img src="img/gecemodu.png" alt="" onmouseout="myFunction()" height="15" width="15">
                                    
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
    
    
    <script>
                            function myFunction() {
                            
                            
                            
                            
                            document.body.style.backgroundImage = "url('img/image.jpg')"
                            
                            
                        }
                        </script>