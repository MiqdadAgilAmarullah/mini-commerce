<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> TokoEmper.com</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="<?= base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="<?= base_url()?>assets/plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="<?= base_url()?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="<?= base_url()?>assets/css/demo/jasmine.css" rel="stylesheet">
        <!-- sweetalert -->
        <script src="<?= base_url()?>assets/js/sweetalert.min.js"></script>
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="<?= base_url()?>assets/plugins/pace/pace.min.css" rel="stylesheet">
        <script src="<?= base_url()?>assets/plugins/pace/pace.min.js"></script>
    </head>
    <body>
        <div id="container" class="effect mainnav-full">
            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand">
                            <i class="fa fa-cube brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">TokoEmper.com</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Messages Dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                <i class="fa fa-envelope fa-lg"></i>
                                <span class="badge badge-header badge-warning">9</span>
                                </a>
                                <!--Message dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md with-arrow">
                                    <div class="pad-all bord-btm">
                                       <div class="h4 text-muted text-thin mar-no">You have 3 messages.</div>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">

                                                        <div class="media-left">
                                                            <img src="<?=base_url()?>assets/img/av2.png" alt="Profile Picture" class="img-circle img-sm">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Andy sent you a message</div>
                                                            <small class="text-muted">15 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <img src="<?=base_url()?>assets/img/av4.png" alt="Profile Picture" class="img-circle img-sm">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Lucy sent you a message</div>
                                                            <small class="text-muted">30 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <img src="<?=base_url()?>assets/img/av3.png" alt="Profile Picture" class="img-circle img-sm">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Jackson sent you a message</div>
                                                            <small class="text-muted">40 minutes ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <img src="<?=base_url()?>assets/img/av6.png" alt="Profile Picture" class="img-circle img-sm">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Donna sent you a message</div>
                                                            <small class="text-muted">5 hours ago</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <img src="<?=base_url()?>assets/img/av4.png" alt="Profile Picture" class="img-circle img-sm">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Lucy sent you a message</div>
                                                            <small class="text-muted">Yesterday</small>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left">
                                                            <img src="<?=base_url()?>assets/img/av3.png" alt="Profile Picture" class="img-circle img-sm">
                                                        </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Jackson sent you a message</div>
                                                            <small class="text-muted">Yesterday</small>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-dark box-block">
                                        <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End message dropdown-->
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Language selector-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="<?= base_url()?>C_dashboard/cart" class="dropdown-toggle">
                                    <i class="fa fa-shopping-cart fa-lg"></i>
                                    <span class="badge badge-header badge-danger row-cart">0</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End language selector-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right">
                                    <img class="img-circle img-user media-object" src="<?=base_url()?>assets/img/av1.png" alt="Profile Picture">
                                    </span>
                                    <div class="username hidden-xs"><?php echo $this->session->userdata('nama'); ?></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">
                                    <!-- Dropdown heading  -->
                                    <div class="pad-all bord-btm">
                                        <p class="text-lg text-muted text-thin mar-btm">750Gb of 1,000Gb Used</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar" style="width: 70%;">
                                                <span class="sr-only">70%</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-user fa-fw fa-lg"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-envelope fa-fw fa-lg"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-gear fa-fw fa-lg"></i> Settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-question-circle fa-fw fa-lg"></i> Help
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-lock fa-fw fa-lg"></i> Lock screen
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Dropdown footer -->
                                    <div class="pad-all text-right">
                                        <a href="<?= base_url()?>C_auth/logout" class="btn btn-primary">
                                        <i class="fa fa-sign-out fa-fw"></i> Logout
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs">
                                <a id="demo-toggle-aside" href="#">
                                <i class="fa fa-navicon fa-lg"></i>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                    <nav class="navbar navbar-default megamenu">
                        <div class="navbar-header">
                            <button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle">
                            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- end navbar-header -->
                        <div id="defaultmenu" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <!-- list elements -->
                                <li class="dropdown megamenu-fw active">
                                    <a href="index" class="dropdown-toggle"> All</a>
                                    <!-- end drop down menu -->
                                </li>
                                <!-- end list elements -->
                                <!-- standard drop down -->
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> T-shirt <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Default Version</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Envato Sites</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#">Tuts+</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">PSD Tuts</a></li>
                                                        <li><a href="#">CODE Tuts</a></li>
                                                    </ul>
                                                </li>
                                                <!-- end dropdown-submenu -->
                                                <li><a href="#">We are Envato</a></li>
                                                <li><a href="#">Support Center</a></li>
                                            </ul>
                                            <!-- end dropdown-menu -->
                                        </li>
                                        <li><a href="#">PhotoDune</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Envato Sites</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#">Tuts+</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">PSD Tuts</a></li>
                                                        <li><a href="#">CODE Tuts</a></li>
                                                    </ul>
                                                </li>
                                                <!-- end dropdown-submenu -->
                                                <li><a href="#">We are Envato</a></li>
                                                <li><a href="#">Support Center</a></li>
                                            </ul>
                                            <!-- end dropdown-menu -->
                                        </li>
                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Creattica</a></li>
                                        <li><a href="#">Microlancer</a></li>
                                        <li><a href="#">ActiveDen</a></li>
                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <!-- list elements -->
                                <li class="dropdown megamenu-fw">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Pants <b class="caret"></b></a>
                                    <ul class="dropdown-menu fullwidth">
                                        <li class="megamenu-content withdesc">
                                            <div class="col-sm-2">
                                                <h3 class="title">Support</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 2</a></li>
                                                    <li><a href="#">Home Page 3</a></li>
                                                    <li><a href="#">Home Page 3</a></li>
                                                    <li><a href="#">Home Page 4</a></li>
                                                    <li><a href="#">Home Page 5</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Marketplace</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 6</a></li>
                                                    <li><a href="#">Home Page 7</a></li>
                                                    <li><a href="#">Home Page 8</a></li>
                                                    <li><a href="#">Home Page 9</a></li>
                                                    <li><a href="#">Home Page 10</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Tuts+ Sites</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 15</a></li>
                                                    <li><a href="#">Home Page 16</a></li>
                                                    <li><a href="#">Home Page 17</a></li>
                                                    <li><a href="#">Home Page 18</a></li>
                                                    <li><a href="#">Home Page 19</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Social</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 20</a></li>
                                                    <li><a href="#">Home Page 21</a></li>
                                                    <li><a href="#">Home Page 22</a></li>
                                                    <li><a href="#">Home Page 23</a></li>
                                                    <li><a href="#">Home Page 24</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Tuts+ Sites</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 15</a></li>
                                                    <li><a href="#">Home Page 16</a></li>
                                                    <li><a href="#">Home Page 17</a></li>
                                                    <li><a href="#">Home Page 18</a></li>
                                                    <li><a href="#">Home Page 19</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Social</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 20</a></li>
                                                    <li><a href="#">Home Page 21</a></li>
                                                    <li><a href="#">Home Page 22</a></li>
                                                    <li><a href="#">Home Page 23</a></li>
                                                    <li><a href="#">Home Page 24</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- end grid demo -->
                                    </ul>
                                    <!-- end drop down menu -->
                                </li>
                                <!-- end list elements -->
                                <!-- standard drop down -->
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Hat <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Default Version</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Envato Sites</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#">Tuts+</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">PSD Tuts</a></li>
                                                        <li><a href="#">CODE Tuts</a></li>
                                                    </ul>
                                                </li>
                                                <!-- end dropdown-submenu -->
                                                <li><a href="#">We are Envato</a></li>
                                                <li><a href="#">Support Center</a></li>
                                            </ul>
                                            <!-- end dropdown-menu -->
                                        </li>
                                        <li><a href="#">PhotoDune</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Envato Sites</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#">Tuts+</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">PSD Tuts</a></li>
                                                        <li><a href="#">CODE Tuts</a></li>
                                                    </ul>
                                                </li>
                                                <!-- end dropdown-submenu -->
                                                <li><a href="#">We are Envato</a></li>
                                                <li><a href="#">Support Center</a></li>
                                            </ul>
                                            <!-- end dropdown-menu -->
                                        </li>
                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Creattica</a></li>
                                        <li><a href="#">Microlancer</a></li>
                                        <li><a href="#">ActiveDen</a></li>
                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <!-- standard drop down -->
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Sandals & Shoes <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Default Version</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Envato Sites</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#">Tuts+</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">PSD Tuts</a></li>
                                                        <li><a href="#">CODE Tuts</a></li>
                                                    </ul>
                                                </li>
                                                <!-- end dropdown-submenu -->
                                                <li><a href="#">We are Envato</a></li>
                                                <li><a href="#">Support Center</a></li>
                                            </ul>
                                            <!-- end dropdown-menu -->
                                        </li>
                                        <li><a href="#">PhotoDune</a></li>
                                        <li class="dropdown-submenu">
                                            <a href="#">Envato Sites</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="#">Tuts+</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">PSD Tuts</a></li>
                                                        <li><a href="#">CODE Tuts</a></li>
                                                    </ul>
                                                </li>
                                                <!-- end dropdown-submenu -->
                                                <li><a href="#">We are Envato</a></li>
                                                <li><a href="#">Support Center</a></li>
                                            </ul>
                                            <!-- end dropdown-menu -->
                                        </li>
                                        <!-- end dropdown-submenu -->
                                        <li><a href="#">Creattica</a></li>
                                        <li><a href="#">Microlancer</a></li>
                                        <li><a href="#">ActiveDen</a></li>
                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                                <!-- list elements -->
                                <li class="dropdown megamenu-fw">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Accesories <b class="caret"></b></a>
                                    <ul class="dropdown-menu fullwidth">
                                        <li class="megamenu-content withdesc">
                                            <div class="col-sm-2">
                                                <h3 class="title">Support</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 2</a></li>
                                                    <li><a href="#">Home Page 3</a></li>
                                                    <li><a href="#">Home Page 3</a></li>
                                                    <li><a href="#">Home Page 4</a></li>
                                                    <li><a href="#">Home Page 5</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Marketplace</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 6</a></li>
                                                    <li><a href="#">Home Page 7</a></li>
                                                    <li><a href="#">Home Page 8</a></li>
                                                    <li><a href="#">Home Page 9</a></li>
                                                    <li><a href="#">Home Page 10</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Tuts+ Sites</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 15</a></li>
                                                    <li><a href="#">Home Page 16</a></li>
                                                    <li><a href="#">Home Page 17</a></li>
                                                    <li><a href="#">Home Page 18</a></li>
                                                    <li><a href="#">Home Page 19</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Social</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 20</a></li>
                                                    <li><a href="#">Home Page 21</a></li>
                                                    <li><a href="#">Home Page 22</a></li>
                                                    <li><a href="#">Home Page 23</a></li>
                                                    <li><a href="#">Home Page 24</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Tuts+ Sites</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 15</a></li>
                                                    <li><a href="#">Home Page 16</a></li>
                                                    <li><a href="#">Home Page 17</a></li>
                                                    <li><a href="#">Home Page 18</a></li>
                                                    <li><a href="#">Home Page 19</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-2">
                                                <h3 class="title">Social</h3>
                                                <ul>
                                                    <li><a href="#">Home Page 20</a></li>
                                                    <li><a href="#">Home Page 21</a></li>
                                                    <li><a href="#">Home Page 22</a></li>
                                                    <li><a href="#">Home Page 23</a></li>
                                                    <li><a href="#">Home Page 24</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- end grid demo -->
                                    </ul>
                                    <!-- end drop down menu -->
                                </li>
                                <!-- end list elements -->
                                <!-- standard drop down -->
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Sweater & Cardigans </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Default Version</a></li>
                                        <li><a href="#">Default Version</a></li>
                                        <li><a href="#">PhotoDune</a></li>
                                        <li><a href="#">Default Version</a></li>
                                    </ul>
                                    <!-- end dropdown-menu -->
                                </li>
                                <!-- end standard drop down -->
                            </ul>
                            <!-- end nav navbar-nav -->
                        </div>
                        <!-- end #navbar-collapse-1 -->
                    </nav>
                    <!-- end navbar navbar-default megamenu -->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <section id="content-container">
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content" style="margin-bottom:20px;">
                        <?php echo $contents ?>
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </section>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--ASIDE-->
                <!--===================================================-->
                <aside id="aside-container">
                    <div id="aside">
                        <div class="nano">
                            <div class="nano-content">
                                <!--Nav tabs-->
                                <!--================================-->
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="active">
                                        <a href="#demo-asd-tab-1" data-toggle="tab"> <i class="fa fa-comments"></i> </a>
                                    </li>
                                    <li>
                                        <a href="#demo-asd-tab-3" data-toggle="tab"> <i class="fa fa-wrench"></i> </a>
                                    </li>
                                </ul>
                                <!--================================-->
                                <!--End nav tabs-->
                                <!-- Tabs Content Start-->
                                <!--================================-->
                                <div class="tab-content">
                                    <!--First tab (Contact list)-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <div class="tab-pane fade in active" id="demo-asd-tab-1">
                                    </div>
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--End first tab (Contact list)-->
                                    <!--Second tab (Settings)-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <div class="tab-pane fade" id="demo-asd-tab-3">
                                        <ul class="list-group bg-trans">
                                            <li class="list-header">
                                                <h4 class="text-thin">Account Settings</h4>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                <p>Show my personal status</p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small> 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                <p>Show offline contact</p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small> 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox">
                                                </div>
                                                <p>Invisible mode </p>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small> 
                                            </li>
                                        </ul>
                                        <hr>
                                        <ul class="list-group bg-trans">
                                            <li class="list-header">
                                                <h4 class="text-thin">Public Settings</h4>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                Online status 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox">
                                                </div>
                                                Show offline contact 
                                            </li>
                                            <li class="list-group-item">
                                                <div class="pull-right">
                                                    <input class="demo-switch" type="checkbox" checked>
                                                </div>
                                                Show my device icon 
                                            </li>
                                        </ul>
                                        <hr>
                                        <h4 class="pad-hor text-thin">Task Progress</h4>
                                        <div class="pad-all">
                                            <p>Upgrade Progress</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                            </div>
                                            <small class="text-muted">15% Completed</small> 
                                        </div>
                                        <div class="pad-hor">
                                            <p>Database</p>
                                            <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                            </div>
                                            <small class="text-muted">17/23 Database</small> 
                                        </div>
                                    </div>
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--Second tab (Settings)-->
                                </div>
                                <!-- Tabs Content End -->
                                <!--================================-->
                            </div>
                        </div>
                    </div>
                </aside>
                <!--===================================================-->
                <!--END ASIDE-->
            </div>
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="<?= base_url()?>assets/js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="<?= base_url()?>assets/plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="<?= base_url()?>assets/js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="<?= base_url()?>assets/plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="<?= base_url()?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="<?= base_url()?>assets/plugins/screenfull/screenfull.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="<?= base_url()?>assets/js/demo/jasmine.js"></script>
    </body>
</html>

<!-- JAVASCRIPT -->
<!-- ================================ -->
    <script>
        setInterval(() => {
            $('.row-cart').load('<?php echo base_url()?>C_dashboard/load_row_cart');
        }, 1000);
    </script>
<!-- ================================ -->
<!-- JAVASCRIPT -->