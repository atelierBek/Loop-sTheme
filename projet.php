<?php

$pods = new Pod('page_projet');
$pods->findRecords('id DESC', 10);

while ($pods->fetchRecord()) {

include 'css_generator.php';

echo '<style>


';
css_generator($pods->get_field('titre_code'), 'titre');
css_generator($pods->get_field('presentation_code'), 'presentation');
css_generator($pods->get_field('agenda_code'), 'agenda');
css_generator($pods->get_field('lequipe_code'), 'lequipe');


echo '</style>';

    $titre = $pods->get_field('titre');
    $presentation = $pods->get_field('presentation');
    $agenda = $pods->get_field('agenda');
    $lequipe = $pods->get_field('lequipe');

    if($titre){
	echo '<div class="titre">'.$titre.'</div>';
    }
    if($presentation){
	echo '<div class="presentation">'.$presentation.'</div>';
    }
    if($agenda){
	echo '<div class="agenda">'.$agenda.'</div>';
    }
    if($lequipe){
	echo '<div class="lequipe">'.$lequipe.'</div>';
    }
}
?>
