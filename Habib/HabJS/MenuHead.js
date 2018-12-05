$(document).ready(function(){
    // $('#typeQuery').val('');
    $('#search').val('');
    
    $('#typeQuery').val(0);
    
    $('.list-1 li:not(:first-child)').on('click',function(event){
        $('#search').val(event.currentTarget.firstElementChild.textContent);
        $('#typeQuery').val(1);
        $('#searchForm').submit();
    });
});