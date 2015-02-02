<?php


function Dash()
{
    
    global $context, $app_path;
    
    
    $context['page_title'] = 'Dash';
    

    require_once($app_path . '/layouts/dash.template.php');
  
    $context['template'] = 'landingpage';
        
}

