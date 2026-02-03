<?php
/**
 * Export to PHP Array plugin for phpMyAdmin
 * @version 5.2.3
 */

/**
 * Database `biblio`
 */

/* `biblio`.`adherents` */
$adherents = array(
  array('id_adherent' => '1','nom' => 'Martin','prenom' => 'Laura','date_naissance' => '2003-08-12','date_adhesion' => '2023-01-10','adresse' => '15 rue des Fleurs','num_tel' => '0667854521','mail' => 'laura.martin@gmail.com'),
  array('id_adherent' => '2','nom' => 'Dupont','prenom' => 'Kevin','date_naissance' => '2001-11-02','date_adhesion' => '2022-03-25','adresse' => '10 rue Victor Hugo','num_tel' => '0678952334','mail' => 'kevin.dupont@gmail.com'),
  array('id_adherent' => '3','nom' => 'Bernard','prenom' => 'Sophie','date_naissance' => '1999-05-18','date_adhesion' => '2024-02-12','adresse' => '22 avenue des Lilas','num_tel' => '0756894412','mail' => 'sophie.bernard@hotmail.com'),
  array('id_adherent' => '4','nom' => 'Diallo','prenom' => 'Mamadou','date_naissance' => '2000-09-30','date_adhesion' => '2023-11-05','adresse' => '8 rue du Marché','num_tel' => '0698741256','mail' => 'mamadou.diallo@gmail.com'),
  array('id_adherent' => '5','nom' => 'Pereira','prenom' => 'Ana','date_naissance' => '2004-02-17','date_adhesion' => '2024-03-08','adresse' => '5 chemin du Canal','num_tel' => '0644782235','mail' => 'ana.pereira@yahoo.com')
);

/* `biblio`.`auteur` */
$auteur = array(
  array('id_auteur' => '1','nom' => 'Victor','prenom' => 'Hugo','date_naissance' => '1802-02-26'),
  array('id_auteur' => '2','nom' => 'J.K.','prenom' => 'Rowling','date_naissance' => '1965-07-31'),
  array('id_auteur' => '3','nom' => 'Emile','prenom' => 'Zola','date_naissance' => '1840-04-02'),
  array('id_auteur' => '4','nom' => 'George','prenom' => 'Orwell','date_naissance' => '1903-06-25'),
  array('id_auteur' => '5','nom' => 'Jane','prenom' => 'Austen','date_naissance' => '1775-12-16')
);

/* `biblio`.`emprunts` */
$emprunts = array(
  array('id_emprunt' => '2124904','date_emprunt' => '2025-12-05','duree' => '5','id_adherent' => '1','reference_livre' => '6644578'),
  array('id_emprunt' => '2784904','date_emprunt' => '2025-11-30','duree' => '10','id_adherent' => '4','reference_livre' => '7745123'),
  array('id_emprunt' => '4557899','date_emprunt' => '2025-12-02','duree' => '8','id_adherent' => '3','reference_livre' => '8896451')
);

/* `biblio`.`livres` */
$livres = array(
  array('reference_livre' => '3345789','nbre_pages' => '279','id_auteur' => '5','annee' => '1813-01-28','genre' => 'Romance','disponibilite' => '4','nbre_emprunts' => '3','etat' => 'Bon','nbre_exemplaire' => '6'),
  array('reference_livre' => '5523478','nbre_pages' => '328','id_auteur' => '4','annee' => '1949-06-08','genre' => 'Dystopie','disponibilite' => '1','nbre_emprunts' => '5','etat' => 'Moyen','nbre_exemplaire' => '2'),
  array('reference_livre' => '6644578','nbre_pages' => '396','id_auteur' => '1','annee' => '1804-01-01','genre' => 'Roman','disponibilite' => '5','nbre_emprunts' => '2','etat' => 'Neuf','nbre_exemplaire' => '7'),
  array('reference_livre' => '7745123','nbre_pages' => '420','id_auteur' => '2','annee' => '1997-06-26','genre' => 'Fantastique','disponibilite' => '3','nbre_emprunts' => '12','etat' => 'Bon','nbre_exemplaire' => '4'),
  array('reference_livre' => '8896451','nbre_pages' => '512','id_auteur' => '3','annee' => '1885-01-01','genre' => 'Roman naturaliste','disponibilite' => '2','nbre_emprunts' => '8','etat' => 'Très bon','nbre_exemplaire' => '3')
);