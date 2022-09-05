<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MovieTest extends TestCase
{
    /** @test */
    public function test_on_the_where()
    {
        echo '
        The business Team enjoy the movie upload feature this is "fast" as the file size is limited to 7MB, but as our business grow we would like
        to be able to upload to a size of 1GB, and the team would also like to improve the UX because at the moment we force the user to keep is web page live 
        to not interrupt the upload process.
        
        The business team want the following improvements:
        - upload max 1GB
        - the user should not wait until the process is finished
        - an email has to be sent when the 460p is available on the platform
        - an email has to be sent when everything has been processed
        - an email has to be sent to all Subscribers when everything has been processed
        
        Info:
        It does NOT need to work!
        Just create required file and do some comments inside to explain whats going on.
        Have a look to Actions/PostProcess.php to see how we do the trick.
        
        If you want to give some details on some process you can do it within the function below 
        e.g: explain that you need to create a table to store all format to be processed and check when its done to send the mail,
        this is just an idea I do not know myself how I should refactor this.
        ';
    }

    /** @test */
    public function test_response()
    {
        echo '
            ...
        ';
    }
}
