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
    
    
    
    $_SESSION['subscriber_errors'] = [];
    
    
    //var_dump($_POST);
    
    if (!isset($_POST['news_subscribe'])) {
        redirect($app_url . '?action=subscribe');
    }
    
    
    if (!isset($_POST['email']) || empty($_POST['email'])) {
        
        array_push($_SESSION['subscriber_errors'], 'Eposten var tom');
        
        redirect($app_url . '?action=subscribe');
    }
    
    
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))  {
        
        array_push($_SESSION['subscriber_errors'], 'Eposten var ugyldig');
        
        redirect($app_url . '?action=subscribe');
    }
    
    // alt ok
    
    
    
    $sql = "SELECT * FROM news_subscribers WHERE email = '{$_POST['email']}'";
    
    $result = $db->query($sql);
    
    
    if ($result->num_rows > 0) {
        
        array_push($_SESSION['subscriber_errors'], 'Epost er registert fra før');
     
        redirect($app_url . '?action=subscribe');
        
    }
    
    
    
    $sql = "INSERT INTO news_subscribers (email, reg_date, reg_ip)
            VALUES ('{$_POST['email']}', NOW(), '{$_SERVER['REMOTE_ADDR']}')";
            
            
    $db->query($sql);        
    
        
    if ($db->affected_rows > 0) {
        
        redirect($app_url . '?action=thanks');
        
    } else {
        array_push($_SESSION['subscriber_errors'], 'Noe gikk galt');
     
        redirect($app_url . '?action=subscribe');
    }
    
    
}




function Thanks()
{
    
    global $context, $app_path;
    
    
    $context['page_title'] = 'Takk skal du ha';
    

    require_once($app_path . '/layouts/news.template.php');
  
    $context['template'] = 'thanks';
}








