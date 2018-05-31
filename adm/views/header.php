<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pagina administrador</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link type="text/css" href="assets/css/style.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style="font-family:rainbow bridge personal use ">EasyBarber</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-users fa-2x"></i>clientes<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?c=c&a=ac">Inserir</a>
                            </li>
                            <li>
                                <a href="?c=c&a=lc">listar</a>
                            </li>
                        </ul>
                      </li> 
                      <li>
                        <a href="#"><i class="fa fa-scissors fa-2x"></i>Serviços<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?c=s&a=as">inserir</a>
                            </li>
                            <li>
                                <a href="?c=s&a=ls">listar</a>
                            </li>
                        </ul>
                      </li>  
                      <li>
                        <a href="#"><i class="fa fa-child fa-2x"></i>Profissionais<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?c=p&a=ap">inserir</a>
                            </li>
                            <li>
                                <a href="?c=p&a=lp">listar</a>
                            </li>
                        </ul>
                      </li> 
                    <li>
                        <a href="#"><i class="fa fa-calendar fa-2x"></i>Agenda<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?c=g&a=ag">inserir</a>
                            </li>
                            <li>
                                <a href="?c=g&a=lg">listar</a>
                            </li>
                        </ul>
                      </li> 
                    <li>
                        <a href="#"><i class="fa fa-clock-o fa-2x"></i>Horários<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="?c=h&a=ah">inserir</a>
                            </li>
                            <li>
                                <a href="?c=h&a=lh">listar</a>
                            </li>
                        </ul>
                      </li> 
                
                  <li  >
                        <a  href="?c=m&a=sd"><i class="fa fa-sign-out fa-2x"></i> Sair</a>
                    </li>   
                </ul>
               
            </div>
        </nav> 
        <div id="page-wrapper" >
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">