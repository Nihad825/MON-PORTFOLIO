function addition() {
  let a = Number(document.getElementById("t1").value);
  let b = Number(document.getElementById("t2").value);
  document.getElementById("resultat").value = a + b;
}

function soustraction() {
  let a = Number(document.getElementById("t1").value);
  let b = Number(document.getElementById("t2").value);
  document.getElementById("resultat").value = a - b;
}

function multiplication() {
  let a = Number(document.getElementById("t1").value);
  let b = Number(document.getElementById("t2").value);
  document.getElementById("resultat").value = a * b;
}

function division() {
  let a = Number(document.getElementById("t1").value);
  let b = Number(document.getElementById("t2").value);
  if (b === 0) {
    alert("Division par zéro impossible !");
  } else {
    document.getElementById("resultat").value = a / b;
  }
}

function pairImpair() {
  let result = Number(document.getElementById("resultat").value);
  if (isNaN(result)) {
    document.getElementById("parite").value = "Aucun résultat";
  } else if (result % 2 === 0) {
    document.getElementById("parite").value = "Pair";
  } else {
    document.getElementById("parite").value = "Impair";
  }
}

function reset() {
  document.getElementById("t1").value = "";
  document.getElementById("t2").value = "";
  document.getElementById("resultat").value = "";
  document.getElementById("parite").value = "";
}

function permute() {
    var a = document.getElementById("t1").value;
    var b = document.getElementById("t2").value;

    var x = a;
    a = b;
    b = x;

    document.getElementById("t1").value = a;
    document.getElementById("t2").value = b;
}
