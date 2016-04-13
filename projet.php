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

	echo '<div class="presentation" >'.$presentation.'</div>';
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

<canvas></canvas>
<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/grid/grid.js">
</script>-->




<script>

var Fonts = ["Inknut", "autopia"];
var titre = document.getElementById("titre");

titre.addEventListener("mouseover", changeFonts);

function changeFonts() {

 for (var i = 0; i < 2; i++) {

    // titre.style.fontFamily=Fonts[i];
     console.log(i);

 }

 //setInterval(changeFonts, 1000);

}

</script>

<!-- <script type="text/javascript">
$(".titre").hover( function () {
    console.log('salut');
    $(".titre").transition({ 'font-size': '40px' }, 100);
    $(".titre").transition({ 'font-size': '12px' }, 100);
});
</script> -->
