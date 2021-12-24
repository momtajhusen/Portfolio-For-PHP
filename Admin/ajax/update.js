


  $(document).ready(function(){
    $("#join_form").submit(function(e){
      e.preventDefault();
 
      $.ajax({
        type : "POST",
        url : "php/update.php",
        data : new FormData(this),
        contentType : false,
        processData : false,
        catch : false,
        xhr : function(){
          var request = new XMLHttpRequest(); 
          request.upload.onprogress = function(e){
            var loaded = (e.loaded/1024/1024).toFixed(2);
            var total = (e.total/1024/1024).toFixed(2);
            var percentage = ((loaded*100)/total).toFixed(2);
            $(".form-progress-bar").css({
              width : percentage+"%",
            });

            $(".form-progress-percentage").html(percentage+"%");
          }
          return request;
        },
        success : function(response){
          alert(response);
        }
  
      });

    });
  });



  