<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> E_commerce</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="<?php echo base_url()?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="<?php echo base_url()?>assets/plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="<?php echo base_url()?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="<?php echo base_url()?>assets/css/demo/jasmine.css" rel="stylesheet">
        <!-- sweet alert -->
        <script src="<?= base_url()?>assets/js/sweetalert.min.js"></script>
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="<?php echo base_url()?>assets/plugins/pace/pace.min.css" rel="stylesheet">
        <script src="<?php echo base_url()?>assets/plugins/pace/pace.min.js"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="cls-container"  >
            <!-- LOGIN FORM -->
            <!--===================================================-->
            <div class="lock-wrapper">
                <div class="panel lock-box">
                    <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
                    <h4> <span class="glyphicon glyphicon-shopping-cart"></span> TokoEmper.com</h4>
                    <p class="text-center">Please login to Access your Account</p>
                    <div class="row">
                            <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                <form id="login" method="post" class="form-inline" action="<?= base_url()?>C_auth/process">
                                <div class="text-left">
                                    <label class="text-muted">Email ID</label>
                                    <input id="signupInputEmail1" type="email" placeholder="Enter Email ID" class="form-control" name="email" required />
                                </div>
                                <div class="text-left">
                                    <label for="signupInputPassword" class="text-muted">Password</label>
                                    <input id="signupInputPasswordlogin" type="password" placeholder="Password" name="password" class="form-control lock-input" required />
                                </div>
                                <button type="submit" class="btn btn-block btn-primary">
                                Login
                                </button>
                                </form>
                                <button type="button" class="btn btn-block btn-default signup-login" data-toggle="modal" data-target="#exampleModal" style="margin-top:10px;">
                                Sign Up
                                </button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!-- END OF CONTAINER -->
        <!-- MODAL -->
        <!--===================================================-->
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- REGISTRATION FORM -->
                        <!--===================================================-->
                        <div class="lock-wrapper">
                            <div class="panel lock-box">
                                <div class="center"> <img alt="" src="img/user.png" class="img-circle"/> </div>
                                <h4> Hello User !</h4>
                                <p class="text-center">Please Create Your Account</p>
                                <div class="row">
                                    <form id="registration" method="post" class="form-inline" action="<?= base_url()?>C_auth/registry">
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div id="demo-error-container"></div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-left">
                                                <label for="signupInputName" class="control-label">Full Name</label>
                                                <input id="signupInputName" type="text" placeholder="Enter Full Name" minlength="5" class="form-control" name="name" required/>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-left">
                                                <label for="signupInputEmail" class="control-label">Email Address</label>
                                                <input id="signupInputEmail" type="email" placeholder="Enter Email Address" class="form-control" name="email" required/>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-left">
                                                <label for="signupInputPassword" class="control-label">Password</label>
                                                <input id="signupInputPassword" type="password" placeholder="Password" class="form-control lock-input" name="password" required/>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-left">
                                                <label for="signupInputRepassword" class="control-label">Retype Password</label>
                                                <input id="signupInputRepassword" type="password" placeholder="Retype Password" class="form-control lock-input" name="passconf" required/>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="text-left pad-btm">
                                                <label for="checkboxtickmark" class="form-checkbox form-icon control-label">
                                                <input id="checkboxtickmark" type="checkbox" name="agree" value="agree" >
                                                Agree with the terms and conditions 
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-block btn-primary signup-btn" >
                                        Sign In
                                        </button>
                                        <button type="submit" class="real" style="display:none">s</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!-- REGISTRATION FORM -->
                    </div>
                </div>
            </div>
        </div>
        <!--===================================================-->
        <!-- END OF MODAL -->

        <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="<?php echo base_url()?>assets/js/jquery-2.1.1.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="<?php echo base_url()?>assets/plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="<?php echo base_url()?>assets/js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="<?php echo base_url()?>assets/plugins/switchery/switchery.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="<?php echo base_url()?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Demo script [ DEMONSTRATION ]-->
        <script src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
    </body>
</html>




        <!--JAVASCRIPT-->
<!--=================================================-->
<script>
        $('#signupInputPassword').change(function(){
        var pass = $('#signupInputPassword').val();
        });
        $('#signupInputRepassword').change(function(){
        var passcon = $('#signupInputRepassword').val();
        });
        $(".signup-btn").click(function(){
        var passcon = $('#signupInputRepassword').val();
        var pass = $('#signupInputPassword').val();
                console.log(pass);
                if (pass == passcon ) {
                    $(".real").trigger("click");
                }
                else{
                    swal("password tidak sama");
                }
        });
</script>
<!--=================================================-->
<!--END JAVASCRIPT-->