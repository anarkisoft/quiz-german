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
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
        <div class="container">
            <div class="starter-template">
                <h1>Bootstrap starter template</h1>
                <!-- <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p> -->
                <div class="row">
                    <div class="col-md-12 left-aligned">
                        <h2>List group</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>List group  Basic Example</h2>
                        <ul class="list-group">
                            <li class="list-group-item">German</li>
                            <li class="list-group-item">Jairo</li>
                            <li class="list-group-item">Mary</li>
                            <li class="list-group-item">Marlon</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h2>List group  Badges</h2>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge">14</span>German
                            </li>
                            <li class="list-group-item">
                                <span class="badge">4</span>Jairo
                            </li>
                            <li class="list-group-item">
                                <span class="badge">7</span>Mary
                            </li>
                            <li class="list-group-item">
                                <span class="badge">10</span>Marlon
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>List group  Linked Items</h2>
                        <div class="list-group">
                            <a href="http://www.google.com" class="list-group-item active" target="_blank">Google</a>
                            <a href="http://www.facebook.com" class="list-group-item" target="_blank">Facebook</a>
                            <a href="http://www.twitter.com" class="list-group-item active" target="_blank">twitter</a>
                            <a href="http://www.ucatolica.edu.co" class="list-group-item" target="_blank">Universidad Catolica</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>List group  Disabled Items</h2>
                        <div class="list-group">
                            <a href="http://www.google.com" class="list-group-item disabled" target="_blank">Google</a>
                            <a href="http://www.facebook.com" class="list-group-item" target="_blank">Facebook</a>
                            <a href="http://www.twitter.com" class="list-group-item disabled" target="_blank">twitter</a>
                            <a href="http://www.ucatolica.edu.co" class="list-group-item" target="_blank">Universidad Catolica</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <h2>List Contextual classes</h2>
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">Eveto terminado</li>
                            <li class="list-group-item list-group-item-info">Eveto infomativo</li>
                            <li class="list-group-item list-group-item-warning">Eveto de alerta</li>
                            <li class="list-group-item list-group-item-danger">Eveto de error</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2>List Contextual classes</h2>
                        <div class="list-group">
                            <a href="http://www.google.com" class="list-group-item list-group-item-success" target="_blank">Eveto terminado</a>
                            <a href="http://www.facebook.com" class="list-group-item list-group-item-info" target="_blank">Eveto infomativo</a>
                            <a href="http://www.twitter.com" class="list-group-item list-group-item-warning" target="_blank">Eveto de alerta</a>
                            <a href="http://www.ucatolica.edu.co" class="list-group-item list-group-item-danger" target="_blank">Eveto de error</a>
                        </div> 
                    </div>
                    <div class="col-md-6">
                        <h2>List group  Custom content</h2>
                        <div class="list-group">
                            <a href="http://www.google.com" class="list-group-item active" target="_blank">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Parrafo list group</p>
                            </a>
                            <a href="http://www.facebook.com" class="list-group-item" target="_blank">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Parrafo list group</p>
                            </a>
                            <a href="http://www.twitter.com" class="list-group-item active" target="_blank">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Parrafo list group</p>
                            </a>
                            <a href="http://www.ucatolica.edu.co" class="list-group-item" target="_blank">
                                <h4 class="list-group-item-heading">List group item heading</h4>
                                <p class="list-group-item-text">Parrafo list group</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Table</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Table  Basic example</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        <strong>ID</strong>
                                    </td>
                                    <td>
                                        <strong>Nombre</strong>
                                    </td>
                                    <td>
                                        <strong>Facultad</strong>
                                    </td>
                                </tr>  
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>German Pinilla</td>
                                    <td>Sistemas</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jairo Bernal</td>
                                    <td>Electronica</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mary Celis</td>
                                    <td>Civil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h2>Table  Striped rows</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>
                                        <strong>ID</strong>
                                    </td>
                                    <td>
                                        <strong>Nombre</strong>
                                    </td>
                                    <td>
                                        <strong>Facultad</strong>
                                    </td>
                                </tr>  
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>German Pinilla</td>
                                    <td>Sistemas</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jairo Bernal</td>
                                    <td>Electronica</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mary Celis</td>
                                    <td>Civil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Table  Bordered table</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td>
                                        <strong>ID</strong>
                                    </td>
                                    <td>
                                        <strong>Nombre</strong>
                                    </td>
                                    <td>
                                        <strong>Facultad</strong>
                                    </td>
                                </tr>  
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>German Pinilla</td>
                                    <td>Sistemas</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jairo Bernal</td>
                                    <td>Electronica</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mary Celis</td>
                                    <td>Civil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h2>Table  Hover rows</h2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <td>
                                        <strong>ID</strong>
                                    </td>
                                    <td>
                                        <strong>Nombre</strong>
                                    </td>
                                    <td>
                                        <strong>Facultad</strong>
                                    </td>
                                </tr>  
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>German Pinilla</td>
                                    <td>Sistemas</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jairo Bernal</td>
                                    <td>Electronica</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mary Celis</td>
                                    <td>Civil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h2>Table  Condensed table</h2>
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td>
                                        <strong>ID</strong>
                                    </td>
                                    <td>
                                        <strong>Nombre</strong>
                                    </td>
                                    <td>
                                        <strong>Facultad</strong>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>German Pinilla</td>
                                    <td>Sistemas</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jairo Bernal</td>
                                    <td>Electronica</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mary Celis</td>
                                    <td>Civil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6">
                        <h2>Table  Contextual classes</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        <strong>ID</strong>
                                    </td>
                                    <td>
                                        <strong>Nombre</strong>
                                    </td>
                                    <td>
                                        <strong>Facultad</strong>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="active">
                                    <td>1</td>
                                    <td>German Pinilla</td>
                                    <td>Sistemas</td>
                                </tr>
                                <tr class="info">
                                    <td>2</td>
                                    <td>Jairo Bernal</td>
                                    <td>Electronica</td>
                                </tr>
                                <tr class="warning">
                                    <td>3</td>
                                    <td>Mary Celis</td>
                                    <td>Civil</td>
                                </tr>
                                <tr class="danger">
                                    <td>4</td>
                                    <td>Maroon Amaya</td>
                                    <td>Sicologia</td>
                                </tr>
                                <tr class="success">
                                    <td>5</td>
                                    <td>Omar Gomez</td>
                                    <td>Derecho</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h2>Navs</h2>                        
                    </div>
                    <div class="col-md-12">
                        <nav class="navbar navbar-inverse" role="navigation">
                            <div class="container">
                                
                            </div>
                        </nav>                       
                    </div>
                </div>


            </div>
        </div>
    </body>
    <script type="text/javascript" src="controller/js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="controller/framework/js/bootstrap.min.js"></script>
</html>
