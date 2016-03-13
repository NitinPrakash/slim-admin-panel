<?php 
        include_once('vendor/autoload.php');
	include_once('config.php');     
        
        $authenticate = function ($app) {
            return function () use ($app) {
                if (!isset($_SESSION['user'])) {
                    $_SESSION['urlRedirect'] = $app->request()->getPathInfo();
                    $app->flash('error', 'You are required to login!');
                    $app->redirect(SITEROOT.'/');
                }
            };
        };
        
        $app->hook('slim.before.dispatch', function() use ($app) { 
           $user = null;
           if (isset($_SESSION['user'])) {
              $user = $_SESSION['user'];
           }
           $app->view()->setData('user', $user);
        });
        
	$app->get('/', function() use( $app) { 
            $flash = $app->view()->getData('flash');
            $error = '';
            if (isset($flash['error'])) {
               $error = $flash['error'];
            }
            $app->render( 'home.php',['error'=>$error] );  
            
        }); 	
        
        $app->post('/', function() use( $app,$db ) {   
            
            $username = trim( $app->request()->post( 'username' ) );
            $password = md5( trim( $app->request()->post( 'password' ) ) );            
            
            $user = $db-> users() -> where('username',$username) -> where( 'pass_word = ?',$password ) ->fetch(); 
            
            if($user){
               $_SESSION['user'] = ['id'=> $user['id'],'email'=>$user['email'],'name'=>$user['name']];                
               $app->view()->setData('user', $user);
               //echo SITEROOT.'/dashboard';exit;
               $app->redirect(SITEROOT.'/dashboard'); 
            }else{
               $app->flash('error', 'Invalid user details. Please try again!'); '' ; 
               $app->redirect( SITEROOT.'/' ); 
            }            
        }); 
        
        $app->get('/dashboard',$authenticate( $app ), function () use ( $app,$db ) { 
            $app->render( 'dashboard.php' ); 
        });

        $app->get('/forgot', function() use( $app,$db ) { $app->render('forgot.php',['title'=>'Slim Test']); });
        
        $app->get("/logout", function () use ($app) {
            unset($_SESSION['user']);
            $app->flash('error', 'You are logged out!');
            $app->view()->setData('user', null);
            $app->redirect(SITEROOT.'/');
        });
	 
	$app->run();

?>
