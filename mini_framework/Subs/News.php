<?php


function Subscribe()
{
    
    global $context, $app_path;
    
    
    $context['page_title'] = 'Subscribe';
    

    require_once($app_path . '/layouts/news.template.php');
  
    $context['template'] = 'subscribe';
        
}



function Unsubscribe()
{
    
    global $context, $app_path;
    
    
    $context['page_title'] = 'Unsubscribe';
    

    require_once($app_path . '/layouts/news.template.php');
  
    $context['template'] = 'unsubscribe';
        
}

function Subscribe2()
{
    global $context, $app_path, $db;
    
    //var_dump($_POST);
    
    if (!isset($_POST['news_subscribe'])) {
        header('Location: ' . $_SERVER["SCRIPT_NAME"]);
    }
    
    
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))  {
        header('Location: ' . $_SERVER["SCRIPT_NAME"] );
    }
    
    // alt ok
    
    
    
    $sql = "SELECT * FROM news_subscribers WHERE email = '{$_POST['email']}'";
    
    $result = $db->query($sql);
    
    
    if ($result->num_rows > 0) {
        die('Epost er registert fra før');
    }
    
    
    
    $sql = "INSERT INTO news_subscribers (email, reg_date, reg_ip)
            VALUES ('{$_POST['email']}', NOW(), '{$_SERVER['REMOTE_ADDR']}')";
            
            
    $db->query($sql);        
    
        
    if ($db->affected_rows > 0) {
        die('Epost ble registert');
    } else {
        die('Noe gikk galt');
    }
    
    
}













