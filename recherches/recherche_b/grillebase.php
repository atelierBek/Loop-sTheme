<html>
    <head>
    <style>
	body{
	    margin:0px;
      overflow: hidden;
      background-color: black;
	}
	.col1{
	    position:absolute;
	    overflow: hidden;
	    background:white;
	}
	.col2{
	    width:100px;
	    height:900px;
	    overflow: hidden;
	    float:left;
	    position:relative;
	}
	hr{
	    height: 1px;
	    padding: 0;
	    border: 0;
	}

	.vert{
	    background: red;
	    width:1px;

	}

  .texte{
    z-index: 10;
    position: absolute;

  }
    </style>

    </head>
    <body>
<?php
$col_width="20";
$col_height="20";
$col=['fond'=>'#E0E0E0', 'fond_div'=>'#F8F8F8','couche'=>'blue'];

    function grid($numb, $interline, $height, $color){
	$i=1;
	 while($i<$numb){
	    $top = $i*$interline;
	    echo '<hr style="height:'.$height.'px; position:absolute; width:100%; background-color:'.$color.';margin-top:'.$top.'px">';
	    $i++;
	}
    }


    function grid_vert($numb, $interline, $height, $color){

	$i=0;
	 while($i<$numb){
	    $top = $i*$interline;
	    echo '<hr style="height:100%; position:absolute; width:'.$height.'; margin-top:0px; background-color:'.$color.';margin-left:'.$top.'%">';
	    $i++;
	}
    }

    function bloc($top,$left,$width,$height, $trait, $color, $inter, $text, $classe){
	$top=$top*50;
	$left=$left*5;
	$width=$width*5;
	$height=$height*50;
	echo '<div class="col1" style="outline: '.$trait.'px solid '.$color.'; top:'.$top.'px;left:'.$left.'%;width:'.$width.'%;height:'.$height.'px">';
	if ($inter){
	    echo grid(100,$inter,$trait,$color);
	}

if ($text){
  echo '<div style="line-height:'.$inter.'px">'.$text.'</div>';
}
	echo '</div>';
    }
?>



<!--GRILLE DE FOND -->
<?php  echo grid_vert(40,'2.5%',1,$col['fond_div']); ?>
<?php  echo grid(40,25,1, $col['fond_div']); ?>
<?php  echo grid_vert(20,'5%',1, $col['fond']); ?>
<?php  echo grid(20,50,1,$col['fond']); ?>


<!--BLOC Top-left-width-height-épaisseurtrait-couleur-interlignage -->
<?php echo bloc(0.5,0.5,2,6, 1,'blue', 0, null);?>

<?php echo bloc(6.5,0.5,0.5,0.5, 1,'blue', 0,null);?>
<?php echo bloc(6.5,1,0.5,0.5, 1,'blue', 0,null);?>
<?php echo bloc(6.5,1.5,0.5,0.5, 1,'blue', 0,null);?>
<?php echo bloc(6.5,2,0.5,0.5, 1,'blue', 0,null);?>


<?php echo bloc(0.5,3,7,10, 1,'blue',40,null);?>

<?php echo bloc(0.5,10,4.5,10, 1,'blue',5,null);?>
<?php echo bloc(11,6.5,13,1.5, 1,'blue', 4,null);?>
<?php echo bloc(0.5,14.5,5,10, 1,'blue',70,null);?>

</body>
</html>
