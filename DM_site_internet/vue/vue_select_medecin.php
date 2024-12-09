<br>
<h3>Liste des Médecins </h3>
<div class="container">
<table class="table table-hover table-sm">
<thead>
    <tr>
      
      <td scope="col">ID medecin  </td>
      <td scope="col">Adresse</td>
      <td scope="col">Téléphone</td>
      <td scope="col">Spécialité</td>
      <td scope="col">Email</td>
      <td scope="col">Opération</td>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach ($lesMedecins as $unMedecin) {
            echo"<tr>";
            
            echo"<td>".$unMedecin['IDM']."</td>";
            echo"<td>".$unMedecin['adresse']."</td>";
            echo"<td>".$unMedecin['telephone']."</td>";
            echo"<td>".$unMedecin['specialite']."</td>";
            echo"<td>".$unMedecin['email']."</td>";

            echo "<td>";
            echo "<a 
            href ='index.php?page=2&action=supp&idmedecin=".
                $unMedecin['idmedecin']."'><img src='images/supp.png' height='50' witdh='50'> </a>";

                echo "<a 
                href ='index.php?page=2&action=edite&idmedecin=".
                $unMedecin['idmedecin']."'><img src='images/edite.png' height='50' witdh='50'> </a>";

            echo "</td>";

            echo"</tr>";
        }
    ?>
    </tbody>
</table>