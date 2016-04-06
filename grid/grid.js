var button = [];
    button[0] = ['grid', 'grid on', 'option'];
    button[1] = ['title', 'title', 'bloc'];
    button[2] = ['presentation', 'presentation', 'bloc'];
    button[3] = ['calendrier', 'calendrier', 'bloc'];
    button[4] = ['resetAll', 'reset all', 'option'];
// A D D _ WINDOW FOR BLOC
function addWind(bloc){
    $('body').prepend('<div class="windParam windParam_'+bloc+'" ></div>');
    $('.windParam_'+bloc).append('<h3>'+bloc+'<br>--</h3>');
    $('.windParam_'+bloc).append('<div style="width:100%"><button class="btn" id="btn_'+bloc+'" OnClick="depla(\''+bloc+'\',\'on\')" >on</button></div>');
    $('.windParam_'+bloc).append('<textarea rows="20" cols="30" class="editor editor_'+bloc+'"></textarea>');
    $('.windParam_'+bloc).append('<button rows="20" class="btn" onClick="Reset(\''+bloc+'\',\'code\');">reset style</button>');
    $('.windParam_'+bloc).append('<br> text<br><textarea rows="10" cols="30" class="text text_'+bloc+'">'+bloc+'</textarea>');
    $('.windParam_'+bloc).append('<button rows="20" class="btn" onClick="Reset(\''+bloc+'\',\'text\');">reset text</button>');
    //return i;
}


$('#menu_template').append('<form class="form_save" ></form>');

for(var i = 0; i < button.length; i++){
    if(button[i][2]=='option'){
	$('#menu_option').append('<button class="btn btn_'+button[i][0]+'" OnClick="actBtn(\''+button[i][0]+'\')" >'+button[i][1]+'</button><hr>');
    }else if(button[i][2]=='bloc'){
	$('#menu_bloc').append('<button class="btn btn_'+button[i][0]+'" OnClick="actBtn(\''+button[i][0]+'\')" >'+button[i][1]+'</button><hr>'); 
	$('body').prepend('<div class="bloc '+button[i][0]+'" ></div>');  
	$('.form_save').append('<textarea style="display:none" id="saveT_'+button[i][0]+'"></textarea>');
	$('.form_save').append('<textarea style="display:none" id="saveC_'+button[i][0]+'"></textarea>');
    }
    addWind(button[i][0]);	
}


$('.form_save').append('<input type="text" id="save_name" >');
$('.form_save').append('<button class="btn" type="button" onClick="submitdata();">Save</button>');
$('.bloc').hide();
$('.windParam').hide();




// CREATION DE LA GRILLE
function grid(){
    
    baliseGrid = document.createElement('div');
    baliseGrid.className = 'grid';
    document.body.appendChild(baliseGrid);
    
var docH = $(document).height();
    $('.grid').height(docH);
    var numbHor = docH/50;

    $blocGrid = $('.grid');
    var vertGrid = '';
    var horGrid = '';
    var Div_vertGrid= '';
    for(var y = 1; y < numbHor; y++) {
	var height = 50; 
	var martop = y*height;
	var Div = 4;
	var martopN = martop+5;
	var numb = y;
	    vertGrid += '<hr style="height:1px; position:absolute; width:100%; background-color:red;margin-top:'+martop+'px" ><div class="unite_repereY" style="margin-top:'+martopN+'px" > '+numb+'</div>';
	
	for(var i = 0; i < Div; i++) {
	    var Div_height = height/Div;   
	    var martopD = martop+(i*Div_height);
	    Div_vertGrid += '<hr style="height:1px; position:absolute; width:100%; background-color:rgba(0, 0, 255, 0.1);margin-top:'+martopD+'px" >';
	}
	}
    for(var x = 1; x < 20; x++) {
	var marleft = x*5;
	var marleftN = marleft;
	horGrid += '<hr class="hor" style="position:absolute; width:1px; background-color:red;margin-left:'+marleft+'%" ><div class="unite_repereX" style="margin-left:'+marleft+'%">'+x+'</div>';
}
    $blocGrid.html(Div_vertGrid+horGrid+vertGrid);
    $('.hor').height(docH);
}

function gridAll(){
    grid();

}

function actBtn(option){
    var BtnId = $('.btn_'+option);

    if(option == 'grid'){
	if(BtnId.html() == 'grid on'){
	    $('.grid').toggle('fast');
	    $('.windParam').hide('fast');
	    BtnId.html('grid off');
	}else{
	    $('.grid').toggle('fast');
	    //$('.windParam').show('fast');
	    BtnId.html('grid on');
	}
    }else if(option=='resetAll'){
	if(confirm("reset all?")){
	    for(var i = 0; i < button.length; i++){	
		if(button[i][2]=='bloc'){
		    Reset(button[i][0], 'all');
	    }	
	}
	}
    }else{
	var bloc = option;
	$('.windParam').hide();
	$('.windParam_'+bloc).toggle('fast');
    }
    
}

function depla(bloc, param, val){
    if(param=='on'){
	$('.'+bloc).toggle();
    }
    if(param == 'width'){
	valOld = $('.'+bloc).width() / $('.'+bloc).parent().width() * 100;;
	valNew = Math.round(valOld)+(val*5);
	$('.'+bloc).width(valNew+'%');
    }
}

// E D I T O R --

function SendValue(bloc,type){
    if(type=='code'){
	var value = $('.editor_'+bloc).val();
	$('#saveC_'+bloc).html(value);
	value = value.replace(/\n/g, '');
	value = value.replace(/ /g, '');
	value = value.split(";");
	for(var i=0; i < value.length; i++){
	    valueDiv = value[i].split(':');
	    if(valueDiv[0] == 'width' || valueDiv[0] == 'margin-left'){
		var unite = '%';
		var valueFin = valueDiv[1]*5;	
	    }else if(valueDiv[0] == 'height' || valueDiv[0] == 'margin-top' || valueDiv[0] == 'line-height'){
		var unite = 'px';
		var valueFin = valueDiv[1]*50;	
	    }else{
		var unite = '';
		var valueFin = valueDiv[1];	
	    }
	$('.'+bloc).css(valueDiv[0], valueFin+''+unite);  
	}
    }else if(type=='text'){
	var value = $('.text_'+bloc).val().replace(/\n/g, '<br/>');
	$('#saveT_'+bloc).html(value);
	$('.'+bloc).html(value);
    }
}


function edit(bloc){

    $('.editor_'+bloc).keyup(function() {
	SendValue(bloc, 'code');
    });

    $('.text_'+bloc).keyup(function(){
    	SendValue(bloc, 'text');
    });
}

for(var i=1; i<button.length; i++){
    edit(button[i][0]);
    SendValue(button[i][0],'text');
}

// S U B M I T

function submitdata() {
    var saveC = [];
    var saveT = [];
    var save_name = document.getElementById("save_name").value;i
    var dataString = [];
    dataString = 'name=' + save_name;
    alert(save_name);
    for(var i = 1; i < button.length; i ++){
        saveC[button[i][0]] = document.getElementById("saveC_"+button[i][0]).innerHTML;
        saveT[button[i][0]] = document.getElementById("saveT_"+button[i][0]).innerHTML;
    alert(saveC[button[i][0]]+' et '+saveT[button[i][0]]);
    dataString += '&'+button[i][0]+'C='+saveC[button[i][0]]+'&'+button[i][0]+'T='+saveT[button[i][0]];  
    
    }
	if (save_name == '') {
	    alert("Vous n'avez pas indiqué un nom au model");
	} 
	else {
	    // AJAX code to submit form.
	    $.ajax({
	    type: "POST",
	    url: "submit.php",
	    data: dataString,
	    cache: false,
	    success: function(html) {
		alert("coool");
		$('#msg').html(html);
		//$('#msg').hide();
	    }

	    });
	    }
	    return false;
}

// I N T E R F A C E

var menu = [];
menu[1] = 'blocs';


$('.footer').mouseover(function(){
    $(this).height('auto', 'fast');   
});
$('.footer').mouseout(function(){
    $(this).height('20px');
});

// REMOVE WIND

function Reset(bloc,type){
    if(type=='code' || type=='all'){
	$('.editor_'+bloc).val('');
	$('.'+bloc).remove();
	$('body').prepend('<div class="bloc '+bloc+'" ></div>');
	$('.'+bloc).hide();
	SendValue(bloc,'code');
	SendValue(bloc,'text');
    }
    if(type=='text' || type=='all'){
	$('.text_'+bloc).val('');
	SendValue(bloc,'text');
    }
    edit(bloc);
}


