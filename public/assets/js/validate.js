function validateProperty(){
    let Document = document.getElementById('inputDocument').value;
    let city = document.getElementById('inputCity').value;
    let country = document.getElementById('inputCountry').value;
    let Address = document.getElementById('inputAddress').value;
    let Rooms = document.getElementById('inputRooms').value;
    let Bathrooms = document.getElementById('inputBathrooms').value;
    let WetArea = document.getElementById('inputWetArea').value;
    let Gas = document.getElementById('inputGas').value;
    let Zip = document.getElementById('inputZip').value;
    let Location = document.getElementById('inputLocation').value;
    let Value = document.getElementById('inputValue').value;
    let photos = document.getElementById('photos').value;


   
    if(Document === ""){
        alert("must fill the field Document")
        return false;
    }
    if(city === ""){
        alert("must fill the field city")
        return false;
    }
    if(country === "" ){
        alert("must fill the field country")
        return false;
    }
    if(Address === "" ){
        alert("must fill the field Address")
        return false;
    }
    if(Rooms === "" ){
        alert("must fill the field Rooms")
        return false;
    }
    if(Bathrooms === "" ){
        alert("must fill the field Bathrooms")
        return false;
    }
    if(WetArea === "" ){
        alert("must fill the field WetArea")
        return false;
    }
    if(Gas === "" ){
        alert("must fill the field Gas")
        return false;
    }
    if(Zip === "" ){
        alert("must fill the field Zip")
        return false;
    }
    if(Location === "" ){
        alert("must fill the field Location")
        return false;
    }
    if(Value === "" ){
        alert("must fill the field Value")
        return false;
    }
    if(photos === "" ){
        alert("must fill the field photos")
        return false;
    }
}