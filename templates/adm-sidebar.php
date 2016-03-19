<!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">               
<!--              <div class="opener-left-menu is-open">                  
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>-->
                <a href="<?php echo SITEROOT.'/';?>" class="navbar-brand"> 
                 <b><?php echo SITENAME;?></b>
                </a>

<!--              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>-->

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span><?php echo 'Nitin Prakash';// $_SESSION['user']['name'] ;?></span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="assets/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="href="<?php echo SITEROOT.'/profile';?>""><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="href="<?php echo SITEROOT.'/calendar';?>""><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li><a href="<?php echo SITEROOT.'/logout';?>"><span class="fa fa-power-off "></span> Logout</a></li>
                  </ul>
                </li>
                <li>&nbsp;</li>
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->
      
      <!-- start:Left Menu -->
            <div id="left-menu">
              <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <li class="time">
                      <h1 class="animated fadeInLeft">21:00</h1>
                      <p class="animated fadeInRight">Sat,October 1st 2029</p>
                    </li>
                    <li class="active ripple">
                      <a href="<?php echo SITEROOT.'/dashboard';?>" class="nav-header"><span class="fa-home fa"></span> Dashboard  </a>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-phone fa"></span> Connections
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="<?php echo SITEROOT.'/contacts';?>">Contacts</a></li>
                        <li><a href="<?php echo SITEROOT.'/contact_add';?>">Add Contact</a></li>                        
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-map-marker fa"></span> Locations
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="<?php echo SITEROOT.'/cities';?>">Cities</a></li>                        
                      </ul>
                    </li>
                    <li class="ripple">
                      <a class="tree-toggle nav-header">
                        <span class="fa-building fa"></span> Schools
                        <span class="fa-angle-right fa right-arrow text-right"></span>
                      </a>
                      <ul class="nav nav-list tree">
                        <li><a href="<?php echo SITEROOT.'/schools';?>">Institutes</a></li>
                        <li><a href="<?php echo SITEROOT.'/school_add';?>">Add School</a></li>
                      </ul>
                    </li>                    
                  </ul>
                </div>
            </div>
          <!-- end: Left Menu -->

