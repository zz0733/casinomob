function send_ajax(func,method,url,params={}){
    $.ajax({
        url: url,
        method: method,
        data: params,
        beforeSend: function(){
            $("#loading").show();
          },
        success: function(message) {
            if (typeof func === "function")
                func(message);
            else {
                swal({
                    title: "Success",
                    text: func,
                    icon: "success"
                }).then(function(){
                    window.location.reload();
                });
            }
        },
        error: function(message) {
            var msg = JSON.stringify(JSON.parse(message.responseText).errors);
            if(!msg)
                msg = JSON.stringify(JSON.parse(message.responseText).message);
            swal({
                title: "Failed.",
                text: msg,
                icon: "error",
                dangerMode:true,
                confirmButtonText: 'Got it!'
            }).then(function(){
                    window.location.reload();
                });
        }
    });
}
