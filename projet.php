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
css_generator($pods->get_field('body_code'), 'body_code');
css_generator($pods->get_field('media'), 'media');


echo '</style>';

    $titre = $pods->get_field('titre');
    $presentation = $pods->get_field('presentation');
    $actualites = $pods->get_field('actualites');
    $lequipe = $pods->get_field('lequipe');
    $body_code = $pods->get_field('body_code');
    $media = $pods->get_field('media');

?>
    <div class="titre"><?php echo $titre; ?></div>
    <div class="presentation"><?php echo $presentation; ?></div>
    <div class="actualites"><?php echo $actualites; ?></div>
    <div class="lequipe"><?php echo $lequipe; ?></div>
    <div class="body_code"><?php echo $body_code; ?></div>
    <div class="media"><?php echo $media; ?></div>

<?php
}
?>
