using Systeme.ComponentModel;

//les attributs de la classe ou les propriétés//
//l'accessibilité des attributs peut etre public ou private ou protected//
//si elles sont public elles sont ccessible de l'exterieur de la class (partout ds le projet)//
//si elles son private elles sont accessible uniquement dans la classe ou suelement si y'a une heritage//
//dans une classe deriver//
//si elles sont protected elles sont accessible dans la classse et dans les classes dériver//

class Perosnne
{
    int age;
    string nom;
    float taille; 
    string prenom; 
    int poids;
}

//methodes elle represente un comportement ou une acitvité metier ou action//

//Si vous voulez testez la classe personne faite le decommentaire//

//le constructeur doit tjrs avoir le meme nom de la classe//

public Personne (string nom, string prenom, int age, float taille, int poids)
{
    this.nom = nom;
    this.prenom = prenom;
    this.age = age;
    this.taille = taille;
    this.poids = poids; 
}

//this = reference a l'objet courant de la classe// 


