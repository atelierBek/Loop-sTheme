<?php


$pods = new Pod('page_projet');
$pods->findRecords('id DESC', 10);

while ($pods->fetchRecord()) {

include 'css_generator.php';

echo '<style>';
css_generator($pods->get_field('titre_code'), 'titre');
css_generator($pods->get_field('presentation_code'), 'presentation');
css_generator($pods->get_field('agenda_code'), 'agenda');
css_generator($pods->get_field('lequipe_code'), 'lequipe');


echo '</style>';

    $titre = $pods->get_field('titre');
    $presentation = $pods->get_field('presentation');
    $agenda = $pods->get_field('agenda');
    $lequipe = $pods->get_field('lequipe');


?>
    <div class="titre"><?php echo $titre; ?></div>
    <div class="presentation"><?php echo $presentation; ?></div>
    <div class="agenda"><?php echo $agenda; ?></div>
    <div class="lequipe"><?php echo $lequipe; ?></div>

<?php
}
?>
