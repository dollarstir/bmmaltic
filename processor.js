$(function(){

    $(".mess").on('submit', function(e){
        e.preventDefault();
        var data = {
            url: 'processor.php?action=send',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success: function(data){
               alert(data);
                
            }
        };
        $.ajax(data);



    })

    $(".request").on('submit', function(e){
        e.preventDefault();
        var data = {
            url: 'processor.php?action=request',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success: function(data){
               alert(data);
                
            }
        };
        $.ajax(data);



    })
  $(".newsletter").on('submit', function(e){
        e.preventDefault();
        var data = {
            url: 'processor.php?action=newsletter',
            type: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            cache: false,
            success: function(data){
               alert(data);
                
            }
        };
        $.ajax(data);
  })

})