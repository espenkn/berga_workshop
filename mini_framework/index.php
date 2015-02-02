<?php


error_reporting(E_ALL);


$app_path = dirname(__FILE__);

$context = array();

function main()
{

    global $app_path;

    
    
    
    $action = array(

        'dash'      => ['Dash', 'Dash.php'],
        'home'      => ['Dash', 'Dash.php'],
        'login'     => ['Login', 'Loginout.php'],
        'logout'    => ['Logout', 'Loginout.php'],
    );

    
    //if (!isset($_GET['action']) || !array_key_exists($_GET['action'], $action) )
    
    if (!isset($_GET['action']) || !isset($action[$_GET['action']]) ) {
        $_GET['action'] = 'dash';
    }
    
    
    require_once($app_path . '/Subs/' . $action[$_GET['action']][1]);
    
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
    
    $context['template']();

}

main_belove();

