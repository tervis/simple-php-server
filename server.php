<?php
declare(strict_types=1);

set_time_limit(0); //Unlimited max execution time
date_default_timezone_set("Europe/Helsinki");

$root_dir = __DIR__.DIRECTORY_SEPARATOR.'src'; // files to serve

//$query = $_SERVER['QUERY_STRING'] ?: null; // Outputs: Query string or null

$script = rtrim($_SERVER['SCRIPT_NAME'],'/'); // Outputs: script name ie. "/hello" without trailing slash

$file = $root_dir.$script.'.php';


// router
if(file_exists($file)) {
    require $file;
} else {
    http_response_code(404);
    header('Content-type: text/html');

    // Generate standard 404 error page
    echo <<<HTML
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en">
    <head>
        <title>404 Not Found</title>
    </head>
    <body>
        <h1>Not Found</h1>
        <p>The requested URL ($script) was not found on this server.</p>
    </body>
</html>  
HTML;

}

exit;