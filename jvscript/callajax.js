
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