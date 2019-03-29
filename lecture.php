
   <?php
//FAB
   $reponse = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 20');
   while ($donnees = $reponse->fetch())
   {
      echo "<tr>";
      echo " <td>" . $donnees ['Pseudo']. "</td>";
      echo " <td>" . $donnees ['Message']."</td>";
      echo " <td>" . $donnees ['Date']   ."</td>";
      echo "</tr>";
      
      
   }
   ?>
