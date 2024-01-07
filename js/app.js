function changeSection(sectionName) {
    document.querySelectorAll('section').forEach(section => {
        section.style.zIndex = 1;
        section.style.opacity = 0;
    });
    document.querySelector('.' + sectionName).style.zIndex = 5;
    document.querySelector('.' + sectionName).style.opacity = 1;
}

function submitForm(event) {
    event.preventDefault();

    // Récupérer les données du formulaire
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var prénom = document.getElementById('prénom').value;
    var nom = document.getElementById('nom').value;

    // Appeler la fonction PHP pour envoyer l'e-mail
    sendEmail(prénom,nom,email, password);
}

function sendEmail(prénom,nom, email, password) {
    // Utiliser une requête AJAX pour appeler le script PHP
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "send_email.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Gérer la réponse si nécessaire
            console.log(xhr.responseText);
        }
    };
    xhr.send("prénom=" + prénom +"nom=" + nom + "&email=" + email + "&password=" + password);
}
