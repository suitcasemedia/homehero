var Result = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        console.log('Result Created');
    };
    
    // ------------------------------------------------------------------------
    
    this.success = function(msg) {

        var dom = $("#success");
         if(typeof msg === 'undefined'){

dom.html('Success');

         }

        dom.html(msg).fadeIn() ;
        
        setTimeout(function(){
        dom.fadeOut();
}, 5000);
        
    };
    
    // ------------------------------------------------------------------------
    
    this.error = function(msg) {
         var dom = $("#error");

        if(typeof msg === 'undefined'){
            console.log('UNDEFINED');

 dom.html('Error') ;

        }

       dom.html(msg).fadeIn() ;

        setTimeout(function(){
        dom.fadeOut();
}, 5000);
        
    };
    
    // ------------------------------------------------------------------------
    
    this.__construct();
    
};


