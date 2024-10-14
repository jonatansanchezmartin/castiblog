function checkLogin(){
    let emailLogin = document.getElementById("emailLogin").value; 
    let passwordLogin = document.getElementById("passwordLogin").value;
    let errors = false;

    // const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // if(!emailLogin){
    //      let emptyEmail = document.getElementById("emailLoginEmptyError");
    //       emptyEmail.style.color = "red";
    //       emptyEmail.style.display = "block";
    //      errors = true;        
    // }else if(!emailPattern.test(emailLogin)){
    //      let invalidEmail = document.getElementById("emailLoginInvalidError");
    //      invalidEmail.style.color = "red";
    //      invalidEmail.style.display = "block";
    //      errors = true;
    // }

    // if(!passwordLogin){
    //      let errorPassword = document.getElementById("passwordEmailError");
    //      errorPassword.style.color = "red";
    //      errorPassword.style.display = "block";
    //      errors = true;
    // }

    if(errors===false){
        const form = document.getElementById('loginForm');
        form.submit();
    }

}


function checkRegister(){
    let email = document.getElementById("emailRegister").value; 
    let password = document.getElementById("passwordRegister").value;
    let name = document.getElementById("nameRegister").value;
    let lastName = document.getElementById("lastNameRegister").value;
    let errors = false;

    if(!name){
         let nameErrors = document.getElementById("nameErrors");
         nameErrors.innerHTML = "";
         const nameErrorMessage = document.createElement('span');
         nameErrorMessage.textContent = 'El nombre está vacío';
         nameErrorMessage.style.color = 'red';
         nameErrors.append(nameErrorMessage);
         errors = true;
    }

     if(!lastName){
         let lastNameErrors = document.getElementById("lastNameErrors");
         lastNameErrors.innerHTML = "";
         const lastNameErrorMessage = document.createElement('span'); 
         lastNameErrorMessage.textContent = 'El apellido está vacío';
         lastNameErrorMessage.style.color = 'red';
         lastNameErrors.append(lastNameErrorMessage);
         errors = true;
    }

    if(!password){
        let passwordErrors = document.getElementById("passwordErrors");
        passwordErrors.innerHTML = "";
        const passwordErrorMessage = document.createElement('span'); 
        passwordErrorMessage.textContent = 'El password está vacío';
        passwordErrorMessage.style.color = "red";
        passwordErrors.append(passwordErrorMessage);
        errors = true;
   }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let emailErrors = document.getElementById("emailErrors");
        
    if(!email){
        emailErrors.innerHTML = "";
        const emailErrorMessage = document.createElement('span');
        emailErrorMessage.textContent = 'El email está vacío';
        emailErrorMessage.style.color = "red";
        emailErrors.append(emailErrorMessage);
        errors = true;        
     }else if(!emailPattern.test(email)){
        emailErrors.innerHTML = "";
        const emailErrorMessage = document.createElement('span');
        emailErrorMessage.textContent = 'El email tiene un error';
        emailErrorMessage.style.color = "red"
        emailErrors.append(emailErrorMessage); 
        errors = true;
     }

    if(errors===false){
        const form = document.getElementById('registerForm');
        form.submit();
    }
}