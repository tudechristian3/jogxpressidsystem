<body class=" sidebar-mini ">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <div class="wrapper ">
        <div class="sidebar" data-color="orange">

    <div class="logo">
        <a href="http://www.creative-tim.com/" class="simple-text logo-mini">
            CT
        </a>

        <a href="http://www.creative-tim.com/" class="simple-text logo-normal">
          Creative Tim
        </a>
        
        <div class="navbar-minimize">
          <button id="minimizeSidebar" class="btn btn-outline-white btn-icon btn-round">
              <i class="now-ui-icons text_align-center visible-on-sidebar-regular"></i>
              <i class="now-ui-icons design_bullet-list-67 visible-on-sidebar-mini"></i>
          </button>
  	    </div>
        
    </div>

    <div class="sidebar-wrapper" id="sidebar-wrapper">
        
        <div class="user">
            <div class="photo">
            <?php foreach($users as $u):?>
                            <?php if($u['username'] == $this->session->userdata('username')): ?>
                            <input type="hidden" class="user_id" value="<?php echo $u['user_id']; ?>">
                <img src="<?php echo base_url()?>assets/img/james.jpg" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                    <?php echo $u['name']; ?>
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="clearfix"></div>
                <?php endif; ?>    
                        <?php endforeach; ?>    
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini-icon">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('logout')?>">
                                <span class="sidebar-normal">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <ul class="nav">
              <li  class="active" >
                    <a href="dashboard.html">
                        <i class="now-ui-icons design_app"></i>
                      <p>Dashboard</p>
                    </a>
              </li>
        
              <li>
                    <a href="<?php echo base_url('employee')?>">
                        <i class="now-ui-icons users_circle-08"></i>
                      <p>Employee</p>
                    </a>
            </li>
        </ul>
    </div>
</div>


    <div class="main-panel" id="main-panel">
                <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
        <div class="navbar-wrapper">
      
			<div class="navbar-toggle">
				<button type="button" class="navbar-toggler">
					<span class="navbar-toggler-bar bar1"></span>
					<span class="navbar-toggler-bar bar2"></span>
					<span class="navbar-toggler-bar bar3"></span>
				</button>
			</div>
      
			<a class="navbar-brand" href="#pablo">Dashboard</a>
		</div>

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
			<span class="navbar-toggler-bar navbar-kebab"></span>
		</button>

	    <div class="collapse navbar-collapse justify-content-end" id="navigation">  
          <form>
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                        </div>
                    </div>
                </div>
            </form>
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#pablo">
                <i class="now-ui-icons media-2_sound-wave"></i>
                <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                </p>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="now-ui-icons location_world"></i>
                <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#pablo">
                <i class="now-ui-icons users_single-02"></i>
                <p>
                    <span class="d-lg-none d-md-block">Account</span>
                </p>
                </a>
            </li>
            </ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->