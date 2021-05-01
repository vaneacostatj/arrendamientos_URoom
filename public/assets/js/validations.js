document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("form-validate").addEventListener('submit', validateForm);
});

const inputs = document.querySelectorAll('#form-validate input');

const expressions = {
    user: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    name: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    password: /^.{4,12}$/, // 4 a 12 digitos.
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    //tel: /^\d{7,14}$/ // 7 a 14 numeros.
}


function validateForm(event) {
    event.preventDefault();
    let firstname = document.getElementById('firstname').value;
    if (firstname.length == 0) {
        alert("The firstname field must not be empty")
        document.form-validate.firstname.focus();
        return;
    } else
    if (firstname.length != expressions.name.test()) {
        alert("The firstname field must not have other charaters")
        document.form-validate.lastname.focus();
        return;
    }



    let lastname = document.getElementById('lastname').value;
    if (lastname.length == 0) {
        alert("The lastname field must not be empty")
        document.form-validate.lastname.focus();
        return;
    } else
    if (lastname.length == expressions.name.test()) {
        alert("The lastname field must not have other charaters")
        document.form-validate.lastname.focus();
        return;
    }


    let email = document.getElementById('email').value;
    if (email.length == 0) {
        alert("The email field must not be empty")
        document.form-validate.email.focus();
        return;
    } else
    if (email.length == expressions.email.test()) {
        alert("The email field must not have other charaters")
        document.form-validate.email.focus();
        return;
    }


    let country = document.getElementById('country').value;
    if (country.length == "") {
        alert("The Country field must not be empty")
        document.form-validate.country.focus();
        return;
    }

    let state = document.getElementById('state').value;
    if (state.length == "") {
        alert("The State field must not be empty")
        document.form-validate.state.focus();
        return;
    }

    let city = document.getElementById('city').value;
    if (city.length == "") {
        alert("The City field must not be empty")
        document.form-validate.city.focus();
        return;
    }

    let user = document.getElementById('user').value;
    if (user.length == 0) {
        alert("The user field must not be empty")
        document.form-validate.user.focus();
        return;
    } else
    if (user.length == expressions.user.test()) {
        alert("The user field must not have other charaters")
        document.form-validate.user.focus();
        return;
    }

    let password = document.getElementById('password').value;
    if (password.length < 6) {
        alert('The password field must not be empty and need have more of six charateres')
        document.form-validate.password.focus();
        return;
    } else
    if (password.length == expressions.password.test()) {
        alert("The password field must not have other charaters")
        document.form-validate.password.focus();
        return;
    }

    let rol = document.getElementById('rol').value;
    if (rol.length == "") {
        alert("The rol field must not be empty")
        document.form-validate.rol.focus();
        return;
    }

    let zip = document.getElementById('zip').value;
    if (zip.length == 0) {
        alert("The zip field must not be empty")
        document.form-validate.zip.focus();
        return;
    } else
    if (zip.length > 4) {
        alert("Zip field must not be more of four characteres")
        document.form-validate.zip.focus();
        return;
    }

    if(checkbox != document.getElementById('check').checked) {
        alert('The checkbox fields has not selected')
        return;
    }

    this.submit();
}


/* inputs.forEach((input)=>{
    input.addEventListener('keyup', validateForm);
    input.addEventListener('blur', validateForm);
}); */


/* export default function containerValidations(){
    const $form = document.querySelector(".container"),
    $inputs = document.querySelectorAll(".container[required]");

    console.log($inputs);

    $inputs.forEach((input)=>{
        const $span = document.createElement("span");
        $span.id = input.name;
        $span.textContent = input.title;
        $span.classList.add("contact-form-error", "none");
        input.insertAdjacentElement("afterend", $span);
    });

    document.addEventListener("keyup",(e) = > {
        if(e.target.matches(".con"))
    })
} */