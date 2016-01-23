<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Mi sitio HTML5</title>
        <link rel="stylesheet" type="text/css" href="controller/framework/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="controller/framework/css/bootstrap-theme.min.css">
        <style>
            body {padding-top: 50px;}
            .starter-template {padding: 40px 15px; text-align: center;}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="starter-template">
                <h1>Quiz Bootstrap, HTML y Jquery</h1>
                <!-- <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p> -->
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered" >
                            <tbody>
                                <tr>
                                    <td>
                                        <img id="img1" src="controller/img/img1.jpg" alt="Disco 1" class="img-circle">
                                    </td>
                                    <td><img id="img2" src="controller/img/img2.jpg" alt="Disco 2" class="img-circle"></td>
                                    <td><img id="img3" src="controller/img/img3.jpg" alt="Disco 3" class="img-circle"></td>
                                </tr>
                                <tr>
                                    <td><img id="img4" src="controller/img/img4.jpg" alt="Disco 4" class="img-circle"></td>
                                    <td><img id="img5" src="controller/img/img5.jpg" alt="Disco 5" class="img-circle"></td>
                                    <td><img id="img6" src="controller/img/img1.jpg" alt="Disco 6" class="img-circle"></td>
                                </tr>
                                <tr>
                                    <td><img id="img7" src="controller/img/img2.jpg" alt="Disco 7" class="img-circle"></td>
                                    <td><img id="img8" src="controller/img/img3.jpg" alt="Disco 8" class="img-circle"></td>
                                    <td><img id="img9" src="controller/img/img4.jpg" alt="Disco 9" class="img-circle"></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>



        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                    </div>
                    <div class="modal-body" align="center">
                        <div class="row">
                            <img id="imgresp" src="" alt="img1" class="img-circle imgresp">
                        </div>
                        <div class="row">
                            <button type="button" id="viewDescription" class="btn btn-default">Ver descripcion</button>
                        </div>
                        <div class="row" id="descriptionDisc" style="display:none;">
                            <p>
                                Esta es la descripcion del <strong id="disc"></strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>       


    </body>
    <script type="text/javascript" src="controller/js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="controller/framework/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="controller/js/functions.js"></script>
</html>
