function checkLogin(){
    let emailLogin = document.getElementById("emailLogin").value; 
    let passwordLogin = document.getElementById("passwordLogin").value;

    // const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    // if(!emailLogin){
    //     let emptyEmail = document.getElementById("emailLoginEmptyError");
    //      emptyEmail.style.color = "red";
    //      emptyEmail.style.display = "block";
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


}


function checkRegister(){
    let email = document.getElementById("emailRegister").value; 
    let password = document.getElementById("passwordRegister").value;
    let name = document.getElementById("nameRegister").value;
    let lastName = document.getElementById("lastNameRegister").value;
    let errors = false;

    if(!name){
         let nameErrors = document.getElementById("nameErrors");
         const nameErrorMessage = document.createElement('span');
         nameErrorMessage.textContent = 'El nombre está vacío2';
         nameErrorMessage.style.color = 'red';
         nameErrors.append(nameErrorMessage);
         errors = true;
    }

     if(!lastName){
         let lastNamErrors = document.getElementById("lastNameErrors");
         const lastNameErrorMessage = document.createElement('span'); 
         lastNameErrorMessage.textContent = 'El apellido está vacío2';
         lastNameErrorMessage.style.color = 'red';
         lastNameErrors.append(lastNameErrorMessage);
         errors = true;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if(!email){
        let emptyEmail = document.getElementById("emailEmptyError");
        emptyEmail.style.color = "red";
        emptyEmail.style.display = "block";
        errors = true;        
    }else if(!emailPattern.test(email)){
        let invalidEmail = document.getElementById("emailInvalidError");
            invalidEmail.style.color = "red";
            invalidEmail.style.display = "block";
            errors = true;
    }

     if(!password){
         let errorPassword = document.getElementById("passwordError");
         errorPassword.style.color = "red";
         errorPassword.style.display = "block";
         errors = true;
    }

    if(errors===false){
        const form = document.getElementById('registerForm');
        form.submit();
    }
}