
let names=document.getElementById('Name');
let passw=document.getElementById('Passw');
let numb=document.getElementById('Number');
function validate(){
    let naml=names.value;
    let passl=passw.value; 
    let numl=numb.value;
    if(naml.length>3 && numl.length==10 && passl.length==8 ){
        return true;  
    }
    else{
        return false;
    }
    
}