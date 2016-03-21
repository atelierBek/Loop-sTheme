<html>
  <head>
    <meta charset="utf-8"/>
    <link href="css/page.css" rel="stylesheet"/>
  </head>

  <body>
    <?php
    function grid($numb, $interligne, $color, $height){
      $i=0;
        while($i<$numb){
          $top=$i*$interligne;
          echo '<hr style="position:absolute; width:100%; background-color:'.$color.';margin-top:'.$top.'px; height:'.$height.'">';
          $i++;
        }
    }
     ?>

     <?php
     function grid_vert($numb, $interligne, $color, $height){
       $i=0;
         while($i<$numb){
           $top=$i*$interligne;
           echo '<hr style="position:absolute; height:100%; background-color:'.$color.';margin-top:0px;margin-left:'.$top.'px; width:'.$height.'">';
           $i++;
         }
     }
      ?>



<div class="bloc1">
    <?php  echo grid(600, '10%', '#1BD8BF', 1);?>
    <?php echo grid_vert(600, '10%', '#1BD8BF',1); ?>
</div>

<div class="bloc2">
    <div class="bloc2texte">
<!--  Loop-s se définit à la fois comme une boîte à outils, une compagnie d’arts vivants, une association d’éléments hétérogènes, une start-up du futur, une maison de production, une affaire de diversité et avant tout, une fabrique de rencontres. Notre travail se situe aux frontières de l’art, du journalisme et des sciences sociales et prend tour à tour la forme d’évènements, de performances ou de récits. Une attention particulière est donnée au contexte dans lequel s’élaborent nos projets. Notre travail prend source à travers deux principales lignes: interroger les mécanismes du capitalisme et rechercher la diversité culturelle et sociale. Le temps dédié à l’investigation sur le terrain et l’immersion dans le contexte de l’intervention sont deux points essentiels de notre démarche. Le travail de Loop-s se construit à travers l’altérité et la rencontre. Nous partons du postulat que la géographie de notre société semble composée de plusieurs îlots souvent déliés les uns des autres. Notre désir est de construire des liaisons, de faire rencontrer des mondes qui se côtoient sans se connaître. Notre moteur est d’interroger nos manières de communiquer en considérant leurs polysémies.-->
    </div>
    <?php  echo grid(4, 200, '#1BD8BF',100);?>
</div>

<div class="bloc3">
    <?php  echo grid(100, 100, '#1BD8BF', 5);?>
</div>

<div class="bloc4">
    <?php  echo grid(100, '10%', '#1BD8BF', 5);?>
    <?php echo grid_vert(600, '10%', '#1BD8BF',5); ?>
</div>

  </body>
</html>
