<?php
declare(strict_types=1);

$script = $_SERVER['SCRIPT_NAME'];

$config = [
    "title" => "Hello",
];

?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html lang="en" class="h-100" data-bs-theme="dark">
    <head>
        <?php include_once($root_dir."/_partials/_meta.html"); ?>
    </head>
    <body class="d-flex flex-column h-100">

        <?php include($root_dir."/_partials/_header.html"); ?>

        <!-- Begin page content -->
        <main class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Hello world from <?= $script ?></h1>
            <p class="lead">Pin a footer to the bottom of the viewport in desktop browsers with this custom HTML and CSS. A fixed navbar has been added with <code class="small">padding-top: 60px;</code> on the <code class="small">main &gt; .container</code>.</p>
        </div>
        </main>

        <?php include($root_dir."/_partials/_footer.html"); ?>

    </body>
</html>  

