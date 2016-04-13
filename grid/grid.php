<html>
    <head>
	<link rel="stylesheet" href="grid.css" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    </head>
    <body class="body_grid">
	<div class="test" style="display:none">width:3;background:red;margin-top:4</div>
    <div class="footer">

	<div class="menu" id="menu_option"><p>OPTION</p></div>
	<div class="menu" id="menu_bloc"><p>BLOC</p></div>
	<div class="menu" id="menu_template"><p>TEMPLATE</p>
	    <form action="#" method="post">
		<select name="type">
		    <option>load a template</option>
		    <?php 
			$dir = opendir("save/"); 
			while($file = readdir($dir)) { 	
			?>
			    <option value="<?php echo $file;?>"><?php echo $file; ?></option>
			<?php
			 }
			closedir($dir); 
		    ?> 
		</select>
	    </form>
	</div>
    </div>


    <script type="text/javascript" src="grid.js"></script>
    <script>
		
	gridAll();


    </script>
    </body>

</html>

