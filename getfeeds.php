<?php 

include 'twiter/src/twitter.class.php';


 $twitter = new Twitter('Consumer API keys ', 'Consumer secret key ', 'Access token', 'Access token secret');

        $twit_statuses = $twitter->load(Twitter::ME);

        echo "<pre>";
        print_r($twit_statuses);
        echo "</pre>";

?>
