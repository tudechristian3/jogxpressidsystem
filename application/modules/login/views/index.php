<body class="login-page sidebar-mini ">
      
      <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->    

<div class="wrapper wrapper-full-page ">
    <div class="full-page login-page section-image" filter-color="white">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <form class="form" method="post" action="<?php echo base_url('login/auth')?>">
                        <div class="card card-login card-plain">
                            <div class="card-header ">
                                <div class="logo-container">
                                    <img src="<?php echo base_url('assets')?>/img/jogXlogo.png" alt="">
                                </div>
                            </div>
                            <h6 class="center">ID System</h6>
                            <?php if(isset($msg)): ?>
                                <div class="form-group">
                                    <div class="alert alert-dismissible alert-danger">
                                        <button class="close" type="button" data-dismiss="alert">×</button>
                                        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php echo $msg; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="card-body ">
                                <div class="input-group no-border form-control-lg">
                                    <span class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                        </div>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Username" name="username">
                                    </div>

                                    <div class="input-group no-border form-control-lg">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <i class="now-ui-icons ui-1_lock-circle-open"></i>
                                        </div>
                                    </div>
                                    <input type="password" placeholder="Password" class="form-control" name="password">
                                    </div>
                                </div>

                                <div class="card-footer ">
                                    <!-- <a type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3">Login</a> -->
                                    <input type="submit" class="btn btn-primary btn-round btn-lg btn-block mb-3" value="Login">
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>