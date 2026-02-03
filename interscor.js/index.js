let a = prompt("Entrez le premier nombre");
let operation = prompt("Quelle operation voulez-vous effectuer ?(+,-,*,/)")
let b= prompt("Entrez le deuxieme nombre");

a= parseFloat(a);
b= parseFloat (b);




function additionner(a,b){
    let somme = a + b;
    return somme;

}
function multiplication(a,b){
    let somme = a * b;
    return somme;

}


function division(a,b){
    let somme = a / b;
    return somme;

}


function soustraction(a,b){
    let somme = a - b;
    return somme;

}



function calculer_somme(a,b){


    if(operation === "+"){

        let somme = additionner(a,b);
        document.writeln("La somme  est egale a "+somme);

    }else if (operation === "*"){
           let somme = multiplication(a,b);
        document.writeln("La somme  est egale a "+somme);
    }
    else if (operation === "/"){
           let somme = division(a,b);
        document.writeln("La somme  est egale a "+somme);
    }
    else if (operation === "-"){
           let somme = soustraction(a,b);
        document.writeln("La somme  est egale a "+somme);
    }else{
                document.writeln("opération invalide");
                return;
    }



}
calculer_somme(a,b);


/*
function verifierAge(){
    const age = document.getElementById("age").value;
    const p = document.getElementById("resultat");
    if(age<18){
    
p.textContent = "vous etes mineur";

        
}else if(age>=18 && age <= 99){ 

 p.textContent = "vous etes majeur"; 

}else{

p.textContent = "l'age saisi est incorrect";

}
}



 function verificationFormulaire(){

    const nom = document.getElementById("nom").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message");

    if(nom === "" || email == ""){
        message.textContent = "Veuillez remplir tout les champs obligatoire."
        message.style.border = "1px solid red"

}else{

    message.textContent = "Formulaire soumis avec succes !."
    message.style.border = "1px solid red"
}
}
*/