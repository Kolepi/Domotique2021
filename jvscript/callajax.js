$("#connection_2").on("click", function(){ //CONNEXION
    call("../php/connexion.php", {
      "username": $("#username").val(),
      "password" : $("#password").val()
    }, (reponse)=>{
      if(reponse === true){
        toastr.options.onHidden = function() { location.href = 'dashboard.html'; };
        toastr.success("Connexion réussie. Chargement...");
      }
      else if(reponse === false){
        toastr.error("Identifiant et/ou mot de passe erronés");
      }
    })
  })

$(".inscription_2").on("click",function(){
  if ($("#password_signup").val() == $("#password_repeat_signup").val()) {
    call("../php/inscription.php", {
      "username": $("#login_signup").val(),
      "email": $("#email_signup").val(),
      "password": $("#password_signup").val(),
    }, (reponse) => {
      toastr.success("Inscription réussie");

    });
  }
  else toastr.error("Vérifiez vos mot de passe");

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