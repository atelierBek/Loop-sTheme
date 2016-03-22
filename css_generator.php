<?php
function css_generator($code, $class){
    $code = str_replace(" ", "", $code);
    $code = explode(";", $code);
    $count_code = count($code);
    $css_code = [];
    for($i = 0; $i < $count_code; $i++) {
	$split_css = explode(':', $code[$i]);
	$css_code += [ "$split_css[0]" => "$split_css[1]" ];
    }
    echo '.'.$class.'{';

    if($css_code['color']){
	echo ' color:'.$css_code['color'].';';
    }else{}
    
    if($css_code['width']){
	$width = $css_code['width']*5;
	    	
	echo ' width:'.$width.'%;';
    }else{}

    if($css_code['height']){
	$height = $css_code['height']*50;	    	
	echo ' height:'.$height.'px;';
    }else{}

    if($css_code['top']){
	$top = $css_code['top']*50;	    	
	echo ' top:'.$top.'px;';
    }else{}
	
    if($css_code['left']){
	$left = $css_code['left']*5;	    	
	echo ' left:'.$left.'%;';
    }else{}

    if($css_code['font-size']){
	echo ' font-size:'.$css_code['font-size'].'px;';
    }else{}

    if($css_code['fixed']== 'true'){
	echo ' position:fixed;';
    }else{
	echo ' position:absolute;';
    }
    if($css_code['background']){
	echo ' background:'.$css_code['background'].';'; 
    }else{}

    if($css_code['padding']){
	echo ' padding:'.$css_code['padding'].'px;';
    }else{
	echo ' padding:3px;';
    }

    echo '}';
}
?>
