const addValidationListener = (field, validations,events = ["input", "invalid", "keyup"]) => {
    events.forEach((event) => {
        field.addEventListener(event, ({ target: field }) => {
          checkFieldValidity(field, validations);
        });
      });
  }
  
  
  const checkFieldValidity = (field, errMessages) => {
    const { validity } = field;
    console.log(validity)
    for (const key in validity) {
      if (validity[key]) {
        field.setCustomValidity(errMessages[key] || "");
        displayErrorMessage(field,field.validationMessage);
        break;
      }
    }
  };
  
  const displayErrorMessage  = (elem, message, timeout =  5000) => {
    if (!elem) {
      console.error('Element doesn\'t exist');
      return;
    }
    let errMessage;
    if (elem.nextElementSibling?.tagName === 'EM') {
      errMessage = elem.nextElementSibling;
      clearTimeout(errMessage.timeoutId);
    } else {
      errMessage = document.createElement("em");
      elem.insertAdjacentElement("afterend", errMessage);
    }
    errMessage.textContent = message;
    errMessage.setAttribute('role', 'alert');
    errMessage.timeoutId = setTimeout(() => { errMessage.remove(); }, timeout);
  }
  
  const handleForm = () => {
      const form = document.querySelector('form');
      const {
        email: emailField,
        password: passwordField,
        submit: submitInput
      } = form.elements;
  
    //Disable default validation popup
    form.setAttribute("novalidate", "");
  
    // Set events for validation
      addValidationListener(emailField, {
        valueMissing:"Il faut renseigner l'email !",
        patternMismatch:"Adresse email invalide, l'email doit se terminer par @ifapme.be",
      });
  
      addValidationListener(passwordField, {
        valueMissing:"Il faut renseigner le mot de passe !",
        tooShort: "Le mot de passe doit contenir au moins 6 caractères.",
      });
  
  
      form.addEventListener("submit", async (e) => {
        e.preventDefault();
        
        if (form.checkValidity()){
          try {
            //Envois du formulaire
            const response = await fetch(form.action, {
              method: 'POST',
              body: new FormData(form),
            });
            if (response.ok) {
              const result = await response.json();
              console.log(result);
              switch(result.status){
                case '200' : location.reload();break;
                case '503' : displayErrorMessage(submitInput,"Problème de connexion à la base de donnée");break;
                default: 
                  console.log(result.statusText);
              }
            } else {
              throw new Error(
                `Server responded with ${response.status}: ${response.statusText}`
              );
            }
          } catch (error) {
            console.log(error);
          }
        }
        else {
          // Re-enable form popup
          // form.reportValidity()
        }
      });
  }
  
    const run = () =>{
        handleForm();
    }
  
    //Run functions when DOM is fully loaded
    document.addEventListener("DOMContentLoaded",run)