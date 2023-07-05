
const password = document.getElementById('password');
const confirmPassword = document.getElementById('confirmPassword');
const userForm = document.getElementById('userForm');

const passwordVerification = (event)=>{
    event.preventDefault();
    if (password.value!=confirmPassword.value){
        document.getElementById('confirmPasswordError').innerHTML='Les mots de passe ne correspondent pas'
    }
}
userForm.addEventListener('submit',passwordVerification)
