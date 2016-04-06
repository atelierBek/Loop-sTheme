<?php

$date= date('h:i:s, j-m-u');

$save_name = $_POST['name'];

$fp = fopen( 'save/'.$save_name.'.xml', 'w');
fwrite($fp, '<theme>');
fwrite($fp, '<date>'.$date.'</date>');

foreach($_POST as $key => $val){
    fwrite($fp,'<'.$key.'>'.$val.'</'.$key.'>');
}

fwrite($fp, '</theme>');
fclose($fp);
?>
