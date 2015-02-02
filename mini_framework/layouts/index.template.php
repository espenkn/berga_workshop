<?php


function main_above()
{
    global $context, $current_action;
    
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
            <script src="vendor/jquery/jquery-2.1.3.min.js"></script>
            
            <!-- Latest compiled and minified JavaScript -->
            <script src="vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
        
        
            <style>
            
                body {
                    padding-top: 50px;
                }
                
                .starter-template {
                    padding: 40px 15px;
                    text-align: center;
                }
        
            </style>
            
        </head>
        <body>
        
        
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="?action=dash">Berga Workshop</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li ',( $current_action == 'home' ? 'class="active"' : ''),'><a href="?action=home">Home</a></li>
                        <li ',( $current_action == 'subscribe' ? 'class="active"' : ''),'><a href="?action=subscribe">Subscribe</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        
        <div class="container">
        
            
        
    ';
    
    
        
}



function main_belove()
{
    global $context;
    
    
    echo '
    
        </div><!-- /.container -->
    
        <div class="container">
            <footer class="footer">
                
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Berga Workshop</h3>
                    </div>
                    <div class="panel-body">
                
                        <p>Dette er morro</p>
                    </div>
                </div>
                
            </footer>
            
            </div>
            
        </body>
    </html>
    ';
    
    
}