<?php


error_reporting(E_ALL);
$app_path = dirname(__FILE__);

$app_url = dirname($_SERVER["SCRIPT_NAME"]) . '/index.php';


@session_start();


require_once($app_path . '/db_config.php');

$db = new mysqli(
    $db_config['host'],
    $db_config['username'],
    $db_config['password'],
    $db_config['database']
);



function redirect($loc)
{
    header('Location: ' . $loc);
    
    exit();
}



/*
var_dump($_SERVER);

die();
*/


$context = array();

function main()
{

    global $app_path, $current_action;

    
    
    
    $action = array(

        'dash'      => ['Dash', 'Dash.php'],
        'home'      => ['Dash', 'Dash.php'],
        
        'subscribe'      => ['Subscribe', 'News.php'],
        'subscribe2'      => ['Subscribe2', 'News.php'],
        
        'thanks'      => ['Thanks', 'News.php'],
        
        'unsubscribe'    => ['Unsubscribe', 'News.php'],
    );

    
    //if (!isset($_GET['action']) || !array_key_exists($_GET['action'], $action) )
    
    if (!isset($_GET['action']) || !isset($action[$_GET['action']]) ) {
        $_GET['action'] = 'dash';
    }
    
    
    require_once($app_path . '/Subs/' . $action[$_GET['action']][1]);
    
    
    $current_action = $_GET['action'];
    
    return $action[$_GET['action']][0];
    
}



call_user_func( main() );


require_once($app_path . '/layouts/index.template.php');

//if (isset($context['template'])) {
//    require_once($app_path . '/layouts/' . $context['template'] . '.template.php');
//}


main_above();

if (isset($context['template']))
{
    
    $f = 'template_' . $context['template'];
    $f();

}

main_belove();

