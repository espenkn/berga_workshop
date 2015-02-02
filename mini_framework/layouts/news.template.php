<?php



function template_subscribe()
{
    echo '
    <div class="starter-template">
        <h1>Subscribe</h1>
    </div>';
    
    
    echo '<p>Venligst abobner på vårt nyhetsbrev</p>';
    
    
    if (isset($_SESSION['subscriber_errors']) && !empty($_SESSION['subscriber_errors']))
    {
        
        foreach($_SESSION['subscriber_errors'] as $error)
        {
            echo '
            <div class="alert alert-danger" role="alert">
                <p>',$error,'</p>
            </div>';
        }
        
        //$_SESSION['subscriber_errors'] = [];
    
    }
    
    
    
    echo '
    <form action="?action=subscribe2" method="post" style="margin-bottom: 2rem">
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="Enter email">
        </div>
       
        <!-- <button type="submit" class="btn btn-default">Meld deg på</button> -->
        <input type="submit"  class="btn btn-default" name="news_subscribe" value="Meld deg på" />
    </form>';

    
    //echo '&nbsp;';
}


function template_unsubscribe()
{
    echo '
    <div class="starter-template">
        <h1>Unsubscibe</h1>
    </div>';
    
    
    echo '<p>Her kan du melde deg av</p>';
}


function template_thanks()
{
    echo '
    <div class="starter-template">
        <h1>Takk for at du meldte deg på</h1>
    </div>';
    

}