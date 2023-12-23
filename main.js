
let userinput =document.querySelector("[name= 'firstname']")
let userloc =document.querySelector("[name= 'lastname']")
let useradress =document.querySelector("[name= 'Address']")
let userpho =document.querySelector("[name= 'phone']")
document.forms[0].onsubmit = function(e){

if(userinput.value !=="" && userinput.value.length <=10 ){
    uservalid =true;}

if(userloc.value !=="" ){
    userlocation=true;}

 if(useradress.value !=="" ){
        useradress =true;}

 if(userpho.value !=="" ){
        userphone =true;}

        if( uservalid===false ||  username ===false || userlocation===false  || userphone===false) {

        e.preventDufult();
    }
        let uservalid=false;
        let username =false;
        
        let userlocation =false;
        let userphone=false;
    }