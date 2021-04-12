$("#connection_2").on("click", function(){
    call("connexion.php", {"login": $("#username").val(), "password" : $("#password").val()}, (reponse)=>{
      if(reponse === true){
        console.log("connexion");
      }
      else if(reponse === false){
        console.log("non");
      }
    })
  })
  
  
  function call (url, parameters = [], callback = false, callbackAlways = false) { 
      var response = null;
      $.ajax({
        url: url,
        type: 'post',
        data: parameters,
        cache: false,
        success: function (obj) {
          try {
            response = obj;
            callback && callback(response);
          } catch (e) {
            console.error("Une erreur est survenue", e, obj);
          }
        },
        async: (typeof callback == "function"),
        complete: function(xhr,textStatus)  {
          callbackAlways && callbackAlways(xhr,textStatus);
        },
        error: function (xhr, desc, err) {
          console.error(xhr, err);
        }
      });
  
      return response;
    }