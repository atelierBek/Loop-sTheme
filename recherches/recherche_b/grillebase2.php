<html>
    <head>
    <style>
	body{
	    margin:0px;
      background-color: black;
	}

@font-face {
  font-family: 'Manifont';
  src: url('css/ManifontGroteskBook-webfont.ttf');
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
    padding-left: 3px;
    padding-right: 3px;
    padding-top: 9px;
    font-size: 35;
    font-family: 'Manifont';
}

.texte:hover{
  color:blue;
}

.texte2{
  padding-left: 3px;
  padding-right: 3px;
  padding-top: 17px;
  font-size: 55;
  font-family: 'Manifont';
}

.texte3{
  padding-left: 3px;
  padding-right: 3px;
  padding-top: 2px;
  font-size: 12;
  font-family: 'Manifont';
}
.texte3:hover{
  color: white;
  background-color: black;
}

 .texte2:hover{
   color: white;
  background-color: blue;
}

.texte4{
  padding-left: 3px;
  padding-right: 3px;
  padding-top: 10px;
  font-size: 16;
  font-family: 'Manifont';
}

.texte5{
  padding-left: 3px;
  padding-right: 3px;
  padding-top: 8px;
  font-size: 70;
  font-family: 'Manifont';
}

    </style>

    </head>
    <body>
<?php
$text="Loop-s se définit à la fois comme une boîte à outils, une compagnie d’arts vivants, une association d’éléments hétérogènes, une start-up du futur, une maison de production, une affaire de diversité et avant tout, une fabrique de rencontres. Notre travail se situe aux frontières de l’art, du journalisme et des sciences sociales et prend tour à tour la forme d’évènements, de performances ou de récits. Une attention particulière est donnée au contexte dans lequel s’élaborent nos projets. Notre travail prend source à travers deux principales lignes: interroger les mécanismes du capitalisme et rechercher la diversité culturelle et sociale. Le temps dédié à l’investigation sur le terrain et l’immersion dans le contexte de l’intervention sont deux points essentiels de notre démarche. Le travail de Loop-s se construit à travers l’altérité et la rencontre. Nous partons du postulat que la géographie de notre société semble composée de plusieurs îlots souvent déliés les uns des autres. Notre désir est de construire des liaisons, de faire rencontrer des mondes qui se côtoient sans se connaître. Notre moteur est d’interroger nos manières de communiquer en considérant leurs polysémies.
Loop-s se définit à la fois comme une boîte à outils, une compagnie d’arts vivants, une association d’éléments hétérogènes, une start-up du futur, une maison de production, une affaire de diversité et avant tout, une fabrique de rencontres. Notre travail se situe aux frontières de l’art, du journalisme et des sciences sociales et prend tour à tour la forme d’évènements, de performances ou de récits. Une attention particulière est donnée au contexte dans lequel s’élaborent nos projets. Notre travail prend source à travers deux principales lignes: interroger les mécanismes du capitalisme et rechercher la diversité culturelle et sociale. Le temps dédié à l’investigation sur le terrain et l’immersion dans le contexte de l’intervention sont deux points essentiels de notre démarche. Le travail de Loop-s se construit à travers l’altérité et la rencontre. Nous partons du postulat que la géographie de notre société semble composée de plusieurs îlots souvent déliés les uns des autres. Notre désir est de construire des liaisons, de faire rencontrer des mondes qui se côtoient sans se connaître. Notre moteur est d’interroger nos manières de communiquer en considérant leurs polysémies.
Loop-s se définit à la fois comme une boîte à outils, une compagnie d’arts vivants, une association d’éléments hétérogènes, une start-up du futur, une maison de production, une affaire de diversité et avant tout, une fabrique de rencontres. Notre travail se situe aux frontières de l’art, du journalisme et des sciences sociales et prend tour à tour la forme d’évènements, de performances ou de récits. Une attention particulière est donnée au contexte dans lequel s’élaborent nos projets. Notre travail prend source à travers deux principales lignes: interroger les mécanismes du capitalisme et rechercher la diversité culturelle et sociale. Le temps dédié à l’investigation sur le terrain et l’immersion dans le contexte de l’intervention sont deux points essentiels de notre démarche. Le travail de Loop-s se construit à travers l’altérité et la rencontre. Nous partons du postulat que la géographie de notre société semble composée de plusieurs îlots souvent déliés les uns des autres. Notre désir est de construire des liaisons, de faire rencontrer des mondes qui se côtoient sans se connaître. Notre moteur est d’interroger nos manières de communiquer en considérant leurs polysémies.";
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
	echo '<div class="col1" style="outline: '.$trait.'px solid '.$color.'; top:'.$top.'px;left:'.$left.'%;width:'.$width.'%;min-height:'.$height.'px">';
	if ($inter){
	    echo grid(100,$inter,$trait,$color);
	}

if ($text){
  echo '<div class='.$classe.' style="line-height:'.$inter.'px">'.$text.'</div>';
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
<?php echo bloc(0.5,0.5,2,6, 1,'blue', 60, '17<br>/<br>02<br>/<br>16', 'texte5');?>

<?php echo bloc(6.5,0.5,0.5,0.5, 1,'blue', 0,'fr', 'texte4');?>
<?php echo bloc(6.5,1,0.5,0.5, 1,'blue', 0,'en', 'texte4');?>
<?php echo bloc(6.5,1.5,0.5,0.5, 1,'blue', 0,'nd', 'texte4');?>
<?php echo bloc(6.5,2,0.5,0.5, 1,'blue', 0,'fb', 'texte4');?>


<?php echo bloc(0.5,3,7,10, 1,'blue',40, $text,'texte');?>

<?php echo bloc(0.5,10,4.5,10, 1,'blue',10,$text,'texte3');?>
<?php echo bloc(11,6.5,13,1.5, 1,'blue', 4, null, null);?>
<?php echo bloc(0.5,14.5,5,10, 1,'blue',70,$text, 'texte2');?>

</body>
</html>
