<?php ob_start(); ?>
<?php
session_start();

// Check his status.
if (!empty($_SESSION['username'])) // he got it.
{
		header( 'Location: index1.php' ) ;
}
	$_SESSION['username']="";
	session_destroy();
?>
<html>
<head>
<script type="text/javascript">
        window.history.forward();
        function noBack()
        {
            window.history.forward();
        }
</SCRIPT>
</head>
<body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
</body>
</html>