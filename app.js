document.querySelector('.ExpSubmit').addEventListener("click", ExpPost); 

function ExpPost(){
   post("post.php",{
       table:"Experience",
       Annee_Debut:document.querySelector('#ExpAnneDebut').value,
       Annee_Fin:document.querySelector('#ExpAnneFin').value,
       Institution:document.querySelector('#ExpInstitution').value,
       Poste:document.querySelector('#ExpPoste').value,
       Description:document.querySelector('#ExpDescription').value,
       id:getUrlVars()["id"]
   })
}

function post(path, params, method='post') {

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    const form = document.createElement('form');
    form.method = method;
    form.action = path;
  
    for (const key in params) {
      if (params.hasOwnProperty(key)) {
        const hiddenField = document.createElement('input');
        hiddenField.type = 'hidden';
        hiddenField.name = key;
        hiddenField.value = params[key];
  
        form.appendChild(hiddenField);
      }
    }
  
    document.body.appendChild(form);
    form.submit();
  }

  function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}