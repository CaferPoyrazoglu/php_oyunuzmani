<!DOCTYPE html>
<html>

<head>
    <title>Mesaj Sistemi</title>
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



        <div class="row">
            <div class="col-md-12">
                <h3>Mesajlar</h3>
                <hr />
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <table class="table table-condensed table-striped table-hover text-center">

                    <thead>
                        <tr>
                            <th class="text-center">Tarih</th>
                            <th class="text-center">Kimden</th>
                            <th class="text-center">Konu</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>

                    <tbody>

                        
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-right">
                                <br />
                                <br />
                                <a href="#" data-toggle="modal" data-target="#messagebox" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-plus"></span> Yeni Mesaj
                                </a>
                            </td>
                        </tr>
                    </tfoot>

                </table>

            </div>
        </div>

    </div>

    <div class="modal fade" id="messagebox" tabindex="-1" role="dialog" aria-labelledby="messagebox-label">
        <form action="#" method="post">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="messagebox-label">Yeni Mesaj</h4>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <div>
                                <select class="form-control valid" id="messageto" name="messageto">
                                    <option value="14">Genel</option>
                                    
                                </select>
                                <span class="field-validation-valid text-danger" data-valmsg-for="messageto" data-valmsg-replace="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" name="messagesubject" id="messagesubject" placeholder="Gönderilecek Kullanıcı Adı" class="form-control" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="messagesubject" id="messagesubject" placeholder="Konu" class="form-control" />
                        </div>

                        <div class="form-group">
                            <textarea cols="30" rows="5" name="messagebody" id="messagebody" placeholder="Mesajınızı buraya giriniz." class="form-control"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>

                        <button type="submit" class="btn btn-success" data-dismiss="modal">
                            <span class="glyphicon glyphicon-send"></span> Gönder
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>

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
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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