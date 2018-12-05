$(document).ready(function(){
    PopUpHide();
    AjaxUse(); 
    
    {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 500) {
               $('.anchor').show();
            } else {
                $('.anchor').hide();
            }
        });
        $(document).ready(function() {
                $('.anchor').hide();
            }
        );} /*Якорь*/
    
    $("#NewPostButton").click(PopUpShow);
    $("#CloseForm").click(PopUpHide);
    $("#idPostSend").click(function(){
        AjaxUse(1);
    });
});