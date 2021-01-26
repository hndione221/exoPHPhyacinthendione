// exo 7  //
<form action="page7.php" method="POST">
<div>
    <input type="text" id="m" name="Mat" placeholder="votre matricule ?" required/>
    <label for="m"> MATRICULE </label>
    <input type="text" id="n" name="nom" placeholder="votre NOM ?" required/>
    <label for="n"> NOM </label>
    <input type="text" id="p" name="prenom" placeholder="votre PRENOM ?" required/>
    <label for="p"> PRENOM </label>
    <br><br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</form>
<table border = "1px" cellspacing= 0 style="margin-top: 50px; margin-bottom: 50px;">
      <thead>
        <tr>  
             <th style="padding: 7px;">num fonction</th>
             <th style="padding: 7px;">nom fonction</th>
             <th style="padding: 7px;">designation fonction</th>
        </tr>   
      </thead>";
<?php
while (isset($_POST['envoyer'])){
      if (isset($_POST['envoyer'])){
          echo "<tbody>
                <tr>
                <td style='padding: 7px;'>{$res["nomE"]}</td>
                <td style='padding: 7px;'> {$res["prenomE"]}</td>
                <td style='padding: 7px;'>{$res["MatE"]}</td>
                </tr>
                </tbody>
               ";
      };
    };

    echo" </table>";
    // exo 11//
    <form action="page11.php" method="POST">
<div>
    <input type="text" id="m" name="Mat" placeholder="votre matricule ?" required/>
    <label for="m"> MATRICULE </label>
    <input type="text" id="n" name="nom" placeholder="votre NOM ?" required/>
    <label for="n"> NOM </label>
    <input type="text" id="p" name="prenom" placeholder="votre PRENOM ?" required/>
    <label for="p"> PRENOM </label>
    <br><br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</form>


<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mat=$_POST['Mat'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
 
$sql="INSERT  INTO  Employés(nomE, prenomE , MatE) VALUES ($nom, $prenom,$mat)";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
      $requete="SELECT nomE, prenomE , MatE FROM Employés";
      echo"
    <table border = 1px cellspacing= 0 style='margin-top: 50px; margin-bottom: 50px;'>
      <thead>
        <tr>  
             <th style='padding: 7px>nom Employé</th>
             <th style='padding: 7px>prenom Employé</th>
             <th style='padding: 7px>matricule Employé</th>
        </tr>   
      </thead>";
      while ($res = mysqli_fetch_array($requete)){
          echo "<tbody>
                <tr>
                <td style='padding: 7px;'>{$res["nomE"]}</td>
                <td style='padding: 7px;'> {$res["prenomE"]}</td>
                <td style='padding: 7px;'>{$res["MatE"]}</td>
                </tr>
                </tbody>
               ";
      };
      echo" </table>";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
};
// exo 12//
<form action="page11.php" method="POST">
<div>
    <input type="number" id="b" name="num" placeholder="numero de la fonction  ?" required/>
    <label for="b"> numero fonction  </label>
    <input type="text" id="c" name="nom" placeholder=" NOM de la fonction?" required/>
    <label for="c"> NOM </label>
    <input type="text" id="d" name="desgn" placeholder=" Designation de la fonction  ?" required/>
    <label for="d"> DESIGNATION </label>
    <br><br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</form>

<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
$num=$_POST['num'];
$nom=$_POST['nom'];
$design=$_POST['desgn'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
 
$sql = "INSERT INTO Fonction (numf , nom, design) VALUES ($num,$nom,$design)";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
      $afficher="SELECT numf , nom , design from Fonction";
      while ($res = mysqli_fetch_array($afficher)){
            echo "{$res['numf']}
                  {$res['nom']}
                  {$res['design']}
                  ";
        };
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
};
//exo13//
<form action="page13.php" method="POST">
<div>
    <input type="text" id="matricule" name="Matricule" placeholder="votre matricule ?" required/>
    <label for="matricule"> MATRICULE RECHERCHE </label>
    <br><br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</form>


<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
$matricule=$_POST['Matricule'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
 // requete sql
$sql="SELECT nomE, prenomE , MatE FROM Employés where MatE = $matricule";
if (mysqli_query($conn, $sql)) {
      echo "Employé existe ";
// affichage dans un tableau 
      echo"
    <table border = 1px cellspacing= 0 style='margin-top: 50px; margin-bottom: 50px;'>
      <thead>
        <tr>  
             <th style='padding: 7px;'>nom Employé</th>
             <th style='padding: 7px;'>prenom Employé</th>
             <th style='padding: 7px;'>matricule Employé</th>
        </tr>   
      </thead>";
      while ($res = mysqli_fetch_array($sql)){
          echo "<tbody>
                <tr>
                <td style='padding: 7px;'>{$res["nomE"]}</td>
                <td style='padding: 7px;'> {$res["prenomE"]}</td>
                <td style='padding: 7px;'>{$res["MatE"]}</td>
                </tr>
                </tbody>
               ";
      };
      echo" </table>";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
};
//exo15//
<form action="page15.php" method="POST">
<div>
    <input type="text" id="m" name="Mat" placeholder="votre matricule ?" required/>
    <label for="m"> MATRICULE </label>
    <input type="text" id="n" name="nom" placeholder="votre NOM ?" required/>
    <label for="n"> NOM </label>
    <input type="text" id="p" name="prenom" placeholder="votre PRENOM ?" required/>
    <label for="p"> PRENOM </label>
    <br><br>
    <input type="submit" name="envoyer " value="enregistrer" >
</div>
</form>


<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$username = "u000000001_user";
$password = "MotDePasse";
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mat=$_POST['Mat'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 
echo "Connexion réussie";
 
$sql="INSERT  INTO  Employés(nomE, prenomE , MatE) VALUES ($nom, $prenom,$mat)";
if (mysqli_query($conn, $sql)) {
      echo "Nouveau enregistrement créé avec succès";
      $requete="SELECT nomE, prenomE , MatE FROM Employés";
      $modifier="UPDATE Employés SET nomE='RASSOUM' WHERE MatE=1"; 
      $supprimer="DELETE nomE FROM Employés  where nomE='rassoul' ";
      echo"
      <table border = 1px cellspacing= 0 style='margin-top: 50px; margin-bottom: 50px;'>
        <thead>
          <tr style=' background-color: cyan;'>  
               <th style='padding: 7px;'>nom Employé</th>
               <th style='padding: 7px;'>prenom Employé</th>
               <th style='padding: 7px;'>matricule Employé</th>
               <th style='padding: 7px;'>modifier</th>
               <th style='padding: 7px;'>supprimer</th>

          </tr>   
        </thead>";
        while ($res = mysqli_fetch_array($requete)){
            echo "<tbody>
                  <tr style=' background-color: silver;'>
                  <td style='padding: 7px;'>{$res["nomE"]}</td>
                  <td style='padding: 7px;'> {$res["prenomE"]}</td>
                  <td style='padding: 7px;'>{$res["MatE"]}</td>
                  <td style='padding: 7px;'>$modifier</td>
                  <td style='padding: 7px;'>$supprimer</td>
                  </tr>
                  </tbody>
                 ";
        };
        echo" </table>";
} else {
      echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
};
//exo17//
<?php
$servername = "mysql.hostinger.fr";
$database = "u000000001_nom";
$login = "u000000001_user";
$password = "MotDePasse";
// Create connection
$conn = mysqli_connect($servername, $login, $password, $database);
header('Location: menu.php');
exit();
// Check connection
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
};
 



