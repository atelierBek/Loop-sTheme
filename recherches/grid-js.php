<html>
    <head>
	<link rel="stylesheet" href="grid.css" type="text/css">
    </head>
    <body>

    <div class="elem"></div>
    <div class="grid"></div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>


    <script>
	var docH = $(document).height();
	$('.grid').height(docH);
	var numbHor = docH/50;

	$blocGrid = $('.grid');
	var vertGrid = '';
	var horGrid = '';
	for(var y = 1; y < numbHor; y++) {
	    var martop = y*50;
	    var martopN = martop+5;
	    var numb = y;
	    vertGrid += '<hr style="height:1px; position:absolute; width:100%; background-color:red;margin-top:'+martop+'px" ><div class="unite_repereY" style="margin-top:'+martopN+'px;" > '+numb+'</div>';
	}
	for(var x = 1; x < 20; x++) {
	    var marleft = x*5;
	    var marleftN = marleft;
	    horGrid += '<hr class="hor" style="position:absolute; width:1px; background-color:red;margin-left:'+marleft+'%" ><div class="unite_repereX" style="margin-left:'+marleft+'%">'+x+'</div>';
}

    $blocGrid.html(horGrid+vertGrid);

    $('.hor').height(docH);
</script>

</body>
</html>
