// Creates a demonstration grid in the background
var backgroundGrid = $('.background-grid');
var gridMarkup = '';
for ( var x = 1; x < 9; x++ ) {
  for ( var y = 1; y < 9; y++ ) {
    gridMarkup += '<div class="cell from-'+x+'-'+y+' to-'+x+'-'+y+'"><div class="cell-label">'+x+'-'+y+'</div></div>';
  };
};
backgroundGrid.html(gridMarkup);