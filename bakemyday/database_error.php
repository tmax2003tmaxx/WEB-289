<<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
    <div id="page">
        <div id="header">
            <h1>Database Connection</h1>
        </div>

        <div id="main">
            <h1>Database Error</h1>
            <p>There was an error connecting to the database.</p>
            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </div><!-- end main -->

        <div id="footer">
            <p class="copyright">
                &copy; <?php echo date("Y"); ?> 
            </p>
        </div>

    </div><!-- end page -->
</body>
</html>