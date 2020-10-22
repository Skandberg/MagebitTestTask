const emailInput = document.getElementById('#email');
const termsCheckBox = document.getElementById('#terms');
const okButton = document.getElementsByClassName('.subscribe')
var  errors=[];
function validateEmail (){
    let mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(!emailInput.value.match(mailformat)){
        errors.push('Invalid email'); 
        alert('incorrect');      
    }
     
    
}
 function checkBoxTermsValidate (){
    if (!checkBox.checked){
        errors.push('You must agree with our terms of use');
        alert('Not checked');
    }

}

window.onload = validateEmail();
window.onload = checkBoxTermsValidate();

ReactDOM.render(errors, getElementsByClassName('.errors'));