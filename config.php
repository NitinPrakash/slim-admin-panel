<?php 
    //session_start();
    $app = new \Slim\Slim();
    $app->add(new \Slim\Middleware\SessionCookie(array('secret' => 'slimadmin')));
	 
    $REQUEST = $app->request();
    $pdo = new PDO("mysql:host=localhost;dbname=slim_admin", 'root', '123456');
    
    define( 'SITENAME','Slim Admin' );
    define( 'SITEROOT',$REQUEST->getRootUri() );
    define( 'RESOURCEURI',$REQUEST->getResourceUri() );
    define( 'BASE_URL','http://loaclhost/slim-admin-panel' );
        
    $array_resource_uri = explode( '/',RESOURCEURI );
    $base_file = empty($array_resource_uri[1])?'home':$array_resource_uri[1];
    
    $host = $_SERVER['HTTP_HOST'];
    
    define( 'BASEFILE',$base_file );
    define( 'HOST',$host );            
    
    $db = new NotORM($pdo);        
    //$home_settings = ['plugins'=>['inline']];        
      
?>