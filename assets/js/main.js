let isChecked = false;

let agreement = document.getElementById("flexSwitchCheckChecked").addEventListener('click', toggle);
let submitBtn = document.getElementById("register-btn");

function toggle(){
    isChecked = !isChecked;

    if(isChecked){
        submitBtn.disabled = false;
    }else{
        submitBtn.disabled = true;
    }
}