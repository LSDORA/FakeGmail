function changeSection(sectionName) {
    document.querySelectorAll('section').forEach(section => {
        section.style.zIndex = 1;
        section.style.display = 'none'
    });
    if (sectionName == 'create'){
    document.querySelector('.acceuil').style.zIndex = 5;
    document.querySelector('.acceuil').style.display = 'block';  
    }
    document.querySelector('.' + sectionName).style.zIndex = 5;
    document.querySelector('.' + sectionName).style.display = 'block';
    
    
}
function validerCompte() {
    var inputs = document.querySelectorAll('.createaccount input[required]');
    var isValid = true;

    inputs.forEach(function(input) {
        if (input.value.trim() === '') {
            isValid = false;
            input.classList.add('error');
        } else {
            input.classList.remove('error');
        }
    });

    var passwordInput = document.getElementById('password');
    var password = passwordInput.value.trim();

    var passwordErrorSpan = document.getElementById('passwordError');
    
    if (password.length < 8 ) {
        isValid = false;
        passwordInput.classList.add('error');
        passwordErrorSpan.textContent = "Utilisez 8 caractères ou plus pour votre mot de passe.";
    } else {
        passwordInput.classList.remove('error');
        passwordErrorSpan.textContent = "";
    }

    if (isValid) {
        changeSection('trlogin');
    }
}
