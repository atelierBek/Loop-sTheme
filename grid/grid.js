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

