
document.addEventListener("DOMContentLoaded", function(){
    document.getElementById("form").addEventListener('submit', validateForm);
});

const inputs = document.querySelectorAll('form input');

const expressions = {
	user: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
	name: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
	password: /^.{4,12}$/, // 4 a 12 digitos.
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
	//tel: /^\d{7,14}$/ // 7 a 14 numeros.
}

function validateForm(event){
    event.preventDefault();
    let firstname = document.getElementById('firstname').value;
    if(firstname.length == 0) {
        alert("The input fields must not be empty")
        document.forms.firstname.focus();
    }
    else
        if(expressions.name()){
            alert("The input fields must not have other charaters")
            document.forms.lastname.focus();
        }
        return;

    let lastname = document.getElementById('lastname').value;
    if(lastname.length == 0) {
        alert("The input fields must not be empty")
        document.forms.lastname.focus();
    }
    else
        if(expressions.name()){
            alert("The input fields must not have other charaters")
            document.forms.lastname.focus();
        }
        return;

    let email = document.getElementById('email').value;
    if(email.length == 0) {
        alert("The input fields must not be empty")
        document.forms.email.focus();
    }
    else
        if(expressions.email()){
            alert("The input fields must not have other charaters")
            document.forms.email.focus();
        }
        return;

    let country = document.getElementById('country').value;
    if(country.length == 0) {
        alert("The input fields must not be empty")
        document.forms.country.focus();
        return;
    }

    let city = document.getElementById('city').value;
    if(city.length == 0) {
        alert("The input fields must not be empty")
        document.forms.city.focus();
        return;
    }

    let state = document.getElementById('state').value;
    if(state.length == 0) {
        alert("The input fields must not be empty")
        document.forms.state.focus();
        return;
    }

    let zip = document.getElementById('zip').value;
    if(zip.length == 0) {
        alert("The input fields must not be empty")
        document.forms.zip.focus();
        return;
    }

    let password = document.getElementById('password').value;
    if(password.length < 6){
        alert('The input fields must not be empty')
        document.forms.password.focus();
    }
    else
        if(expressions.password()){
            alert("The input fields must not have other charaters")
            document.forms.password.focus();
        }
        return;
    this.submit();
}