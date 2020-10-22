function validate_email(termsCheckBox){
    let form=document.getElementById("form");
    let email=document.getElementById("email").value;
    let errors=document.getElementById("errors"); 
                    

    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    let invalid_email="Please enter a valid email ";
    let columbia="We don't accept emails from Columbia ";
    let empty="Email box cannot be empty ";
    let not_checked="You must be agree with our terms of use "

    if (email.match(pattern) && termsCheckBox.checked){
        form.classList.remove("invalid");
        errors.innerHTML="";
        document.getElementById("subscribe").disabled = false;
                    
        }else if(!termsCheckBox.checked){
            form.classList.add("invalid");
            errors.innerHTML=not_checked
            document.getElementById("subscribe").disabled = true;
            }else if(!email.match(pattern)){
                form.classList.add("invalid");
                errors.innerHTML=invalid_email;
                 document.getElementById("subscribe").disabled = true;
            } 
            if(email==""){
                form.classList.add("invalid");
                errors.innerHTML=empty;
                document.getElementById("subscribe").disabled = true;
            }
            if (email.slice(-3)=='.co'){
                form.classList.add("invalid");
                errors.innerHTML=columbia;
                document.getElementById("subscribe").disabled = true;
            }
}