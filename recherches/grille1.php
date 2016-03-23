
<html>
    <head>
<link rel="stylesheet" href="css.css" type="text/css">
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
    function bloc($top,$left,$width,$height, $trait, $color, $inter, $text, $class){
	$top=$top*50;
	$left=$left*5;
	$width=$width*5;
	$height=$height*50;
	echo '<div class="col1" style="outline: '.$trait.'px solid '.$color.'; top:'.$top.'px;left:'.$left.'%;width:'.$width.'%;min-height:'.$height.'px">';
	if ($inter){
	    echo grid(100,$inter,$trait,$color);
	}
	if ($text){
	echo '	<div class="'.$class.'" style="line-height:'.$inter.'px;">'.$text.'</div>';
	}
	echo '</div>';
    }
?>

<!--GRILLE DE FOND -->
<?php  echo grid_vert(40,'2.5%',1,$col[fond_div]); ?>
<?php  echo grid(40,25,1, $col[fond_div]); ?>
<?php  echo grid_vert(20,'5%',1, $col[fond]); ?>
<?php  echo grid(20,50,1,$col[fond]); ?>
<?php include'bloc.php'; ?>
<!--BLOC
bloc(top, left, width, height, trait, couleur, interlignage)
-->

</body>

</html>

