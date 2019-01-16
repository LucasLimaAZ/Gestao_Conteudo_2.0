$(function () {
		
    var filterList = {
    
        init: function () {

            $('#portfoliolist').mixItUp({
              selectors: {
              target: '.portfolio',
              filter: '.filter'	
          },
          load: {
            filter: '.com, .super, .carro, .con, .med'  
          }     
            });								
        
        }

    };
    
    filterList.init();
    
});	