<?php


$pods = new Pod('page_projet');
$pods->findRecords('id DESC', 10);

while ($pods->fetchRecord()) {

include 'css_generator.php';

echo '<style>';
css_generator($pods->get_field('titre_code'), 'titre');
echo '</style>';

    $titre = $pods->get_field('titre');

?>
    <div class="titre"><?php echo $titre; ?></div>	
<?php	
}
?>
