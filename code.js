$(document).ready(function(){
    

    $(document).on('click',".add-to-cart",(function(e){
           e.preventDefault();
        
        
            
           var id= $(this).closest("div")[0].id;
          
           $.post( "cart.php", { name:id },function(data) {
            $('#cart').html(data);
         } );
    }));

    $(document).on('click',".delete",(function(e){
        e.preventDefault();
     
     
         
        var id= $(this).closest("tr").children().first().text();
      
        $.post( "delete.php", { name:id },function(data) {
            $('#cart').html(data);
         } );
       
        
 }));
        
    


});