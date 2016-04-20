<?php

$pods = new Pod('page_projet');
$pods->findRecords('id DESC', 10);

while ($pods->fetchRecord()) {

include 'css_generator.php';

echo '<style>';

css_generator($pods->get_field('titre_code'), 'titre');
css_generator($pods->get_field('presentation_code'), 'presentation');
css_generator($pods->get_field('actualites_code'), 'actualites');
css_generator($pods->get_field('lequipe_code'), 'lequipe');
css_generator($pods->get_field('media'), 'media');
css_generator($pods->get_field('body_code'), 'body');


echo '</style>';

    $titre = $pods->get_field('titre');
    $presentation = $pods->get_field('presentation');
    $actualites = $pods->get_field('actualites');
    $lequipe = $pods->get_field('lequipe');
    $media = $pods->get_field('media');
    $grille = $pods->get_field('grille');


    if($titre){
	echo '<div class="titre" id="titre">'.$titre.'</div>';
    }
    if($presentation){
	echo '<div class="presentation">'.$presentation.'</div>';
    }
    if($actualites){
	echo '<div class="actualites">'.$actualites.'</div>';
    }
    if($lequipe){
	echo '<div class="lequipe">'.$lequipe.'</div>';
    }
    if($grille==1){
	echo '<div class="grid"></div>';
    }
}
?>
<canvas id="wave_bottom"></canvas>
<canvas id="wave_top"></canvas>
<!-- <canvas id="wave_left"></canvas>
<canvas id="wave_right"></canvas> -->

<!--script paper js -->
<script type="text/paperscript" src="<?php bloginfo('template_directory'); ?>/wave.js" canvas="wave_bottom"></script>
<script type="text/paperscript" src="<?php bloginfo('template_directory'); ?>/wave.js" canvas="wave_top"></script>
<script type="text/paperscript" src="<?php bloginfo('template_directory'); ?>/wave.js" canvas="wave_left"></script>
<script type="text/paperscript" src="<?php bloginfo('template_directory'); ?>/wave.js" canvas="wave_right"></script>
