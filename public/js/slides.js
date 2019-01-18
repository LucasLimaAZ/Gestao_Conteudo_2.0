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

function pegaId(objeto){

    var id = objeto.id;
    document.getElementById('slideEscolhido').innerHTML = id;
    document.getElementById('escolha').value = id;

}
