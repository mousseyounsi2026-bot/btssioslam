<?php
//informations de l'etudiant
$nom="Amine";
$age=20;
$formation="Developpeur web";

//Liste des competences
$competences=[
    "HTML",
    "CSS",
    "PHP",
    "Mysql",
    "java",
    "android"
];
//tableau des resultats
$resultats=[
    ["matiere"=>"HTML", "note"=>0],
    ["matiere"=>"CSS", "note"=>5],
    ["matiere"=>"PHP", "note"=>7],
    ["matiere"=>"Mysql", "note"=>16],
    ["matiere"=>"java", "note"=>18],
];
//Calcul de la moyenne
$total=0;
foreach($resultats as $resultat){
    $total=$total+$resultat["note"];
}
$nombreDeNotes=count($resultats);
$moyenne=$total/$nombreDeNotes;

?>

<!-- Indique que le document utilise HTML5 -->
<!DOCTYPE html>
<!-- Balise principale qui contient toute la page -->
<html lang="fr">
<!-- Contient les informations techniques de la page -->
<head>
<!-- Définit l'encodage des caractères en UTF-8 -->
    <meta charset="UTF-8">
<!-- Définit le titre affiché dans l'onglet -->
    <title>Présentation d'un étudiant</title>
<!-- Relie la page au fichier CSS -->
    <link rel="stylesheet" href="css/style.css">
<!-- Ferme la partie technique -->
</head>
<!-- Contient tout le contenu visible de la page -->
<body>
<!-- H1 signifie Heading 1 : titre principal -->
    <h1>Fiche de l'étudiant</h1>
<!-- H2 signifie Heading 2 : sous-titre -->
    <h2>Présentation</h2>
<!-- P signifie Paragraph : paragraphe de texte -->
    <p>Nom : <?php echo $nom; ?><p>
<!-- P affiche ici l'age dans un paragraphe -->
    <p>Age :  <?php echo $age; ?></p>
<!-- P affiche ici la formation -->
    <p>Formation : <?php echo $formation;  ?></p>
<!-- H2 crée une nouvelle section -->
    <h2>Compétences</h2>
<!-- UL signifie Unordered List : liste non numerotee -->
    <ul>
      <?php foreach ($competences as $competence)  { ?>
        <li><?php echo $competence;  ?></li>
      <?php } ?>
    </ul>
<!-- H2 crée la section des resultats -->
    <h2>Résultats</h2>
<!-- TABLE cree un tableau -->
    <table>
<!-- TR signifie Table Row : ligne du tableau -->
        <tr>
<!-- TH signifie Table Header : cellule d'en-tete -->
            <th>Matière</th>
<!-- TH cree une deuxieme cellule d'en-tete -->
            <th>Note</th>
<!-- Ferme la ligne du tableau -->
</tr>
       <?php foreach($resultats as $resultat) { ?>
        <tr>
            <td><?php echo $resultat["matiere"];  ?></td>
            <td><?php echo $resultat["note"];  ?></td>
        </tr>
        <?php }?>
<!-- Ferme le tableau -->
</table>
<h2>Moyenne</h2>
<p>Moyenne: <?php echo $moyenne; ?></p>
<h2>Resultat</p>
<?php if($moyenne>=10) { ?>
     <p>Admis</p>
<?php } else { ?>
     <p>non Admis</p>
<?php } ?>
<!-- Ferme la partie visible de la page -->
</body>
<!-- Ferme le document HTML -->
</html>
