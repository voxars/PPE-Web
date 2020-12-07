<?php
  var_dump($salles);
?>

  <h1><?= $titre ?></h1>
  <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">nom</th>
            <th scope="col">nom</th>
            <th scope="col">nom</th>
            <th scope="col">nom</th>
            <th scope="col">nom</th>
            <th scope="col">nom</th>
            <th scope="col">nom</th>
            <th scope="col">nom</th>
          </tr>
        </thead>
        <tbody>
      
    <?php
    foreach ($salles as $salle){
    ?> 
      <tr>
        <td><?= $salle->getNSalle() ?></td>
        <td><?= $salle->getNomSalle() ?></td>
        <td><?= $salle->getNbPoste() ?></td>
        <td><?= $salle->getIndIP() ?></td>
        <td><?= $salle->getDisabled() ?></td>
        <td><?= $salle->getArea_id() ?></td>
        <td><?= $salle->getRoom_name() ?></td>
        <td><?= $salle->getDescription() ?></td>
        <td><?= $salle->getCapacity() ?></td>
      </tr>
    <?php
    }
    ?>

    </tbody>
  </table>

