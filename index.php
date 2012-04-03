 
<html>
 <head>
  <title>Loocid v1.0 - Simple Scrum and Kanban Tracking Tool</title>
		<link type="text/css" href="css/cupertino/jquery-ui-1.8.18.custom.css" rel="stylesheet" />	
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
	
		<style type="text/css">
		.myNewStyle {
		font-family: Verdana, Arial, Helvetica;
		font-weight: bold;
		color: #FF0000;
		}
		</style>


	<style>

	.draggable { width: 90px; height: 80px; padding: 5px; float: left; margin: 0 10px 10px 0; font-size: .9em; }
	.ui-widget-header p, .ui-widget-content p { margin: 0; }
	#snaptarget { height: 140px; }
	</style>
	<script>
	$(function() {
		$( "#draggable" ).draggable({ snap: true });
		$( "#draggable2" ).draggable({ snap: ".ui-widget-header" });
		$( "#draggable3" ).draggable({ snap: ".ui-widget-header", snapMode: "outer" });
		$( "#draggable4" ).draggable({ grid: [ 20,20 ] });
		$( "#draggable5" ).draggable({ grid: [ 80, 80 ] });
	});
	</script>
</head>
<body>

<p class=".myNewStyle">This is my styled text</p>

<form method="post" action="<?php echo $PHP_SELF;?>">
Name of Project: <input type="text" size="12" maxlength="12" name="frmPrjName"/>
</form>

<?PHP

$projectName = $_POST['frmPrjName'];
print("Your project name is ($projectName)");

?>


<br>
<hr>
<div class="demo">
<div id="snaptarget" class="ui-widget-header">
	<p>Task Board</p>
</div>

<br clear="both" />

<div id="draggable" class="draggable ui-widget-content">
	<p>Default (snap: true), snaps to all other draggable elements</p>
</div>

<div id="draggable2" class="draggable ui-widget-content">
	<p>I only snap to the big box</p>
</div>

<div id="draggable3" class="draggable ui-widget-content">
	<p>I only snap to the outer edges of the big box</p>
</div>

<div id="draggable4" class="draggable ui-widget-content">
	<p>I snap to a 20 x 20 grid</p>
</div>

<div id="draggable5" class="draggable ui-widget-content">
	<p>I snap to a 80 x 80 grid</p>
</div>

</div><!-- End demo -->
<br><br>
<br><br><br><br>
<div>
<hr />
Below is information for debugging and PHP validation:
<?php phpinfo(); ?>
</div>

</body>
</html>
