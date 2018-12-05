function AjaxUse(var1,file){
    $.ajax({
        url:file,
        data: {action: var1},
        type:"POST",
        success: funcS
    });
}
function funcS(data) {
    return(data);
}