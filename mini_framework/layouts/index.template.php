<?php


function main_above()
{
    global $context;
    
    echo '
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8" />
            <title>',( isset($context['page_title']) ?  $context['page_title'] : 'Velkommen' ),'</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="vendor/bootstrap-3.3.2-dist/css/bootstrap.min.css">
        
        <!-- Optional theme -->
        <link rel="stylesheet" href="vendor/bootstrap-3.3.2-dist/css/bootstrap-theme.min.css">
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
        
        </head>
        <body>
    ';
    
    
        
}



function main_belove()
{
    global $context;
    
    
    echo '
            <footer>
                <p>Berga Workshop</p>
            </footer>
        </body>
    </html>
    ';
    
    
}