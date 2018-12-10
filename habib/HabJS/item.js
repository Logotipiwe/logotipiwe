$("[name=buy1click]").on('click',function(e){
    e.currentTarget.parentElement.submit();
//    $.ajax("../php/PHPbuy1clisk.php",{
//        dataType: 'text',
//        method: 'POST',
//        data: ({BuyId: e.currentTarget.getAttribute('id')}),
//    })
})