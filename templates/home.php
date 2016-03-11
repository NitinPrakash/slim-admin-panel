<?php include_once('head.php');?>

     <form class="form-signin" method="post" action="<?php echo SITEROOT.'/';?>">
          <div class="panel periodic-login">
              <span class="atomic-number"></span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol"><img src="assets/img/logo.png" /></h1>
                  <p class="atomic-mass"></p>
                  <p class="element-name">SEWA SANKALP</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" name="username" class="form-text" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" name="password" class="form-text" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
<!--                  <label class="pull-left" style="display:none">
                    <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>-->
                  <input type="submit" class="btn col-md-12" value="SignIn"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="<?php echo SITEROOT.'/forgot';?>">Forgot Password </a>                    
                </div>
          </div>
        </form>
        <?php    
        if($error){
              echo '<script type="text/javascript" defer>$(document).ready(function(){sweetAlert("Oops...","'.$error.'", "error");})</script>';
              unset($flash['error']);
        }?>    
<?php include_once('foot.php');?>