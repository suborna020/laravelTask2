
$(window).on('load', function () {
    $(".modal-dialog").find("#cc").hide();
    jQuery('body').on('click','#text_cc', function(event) {        
        jQuery('#cc').toggle();
   });
   $(".modal-dialog").find("#bcc").hide();
    jQuery('body').on('click','#text_bcc', function(event) {        
        jQuery('#bcc').toggle();
   });
     
});