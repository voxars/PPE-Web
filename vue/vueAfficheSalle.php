<?php
  // var_dump($ports);
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
        <td><?= $port->getNSalle() ?></td>
        <td><?= $port->getNomSalle() ?></td>
        <td><?= $port->getNbPoste() ?></td>
        <td><?= $port->getIndIP() ?></td>
        <td><?= $port->getDisabled() ?></td>
        <td><?= $port->getArea_id() ?></td>
        <td><?= $port->getRoom_name() ?></td>
        <td><?= $port->getDescription() ?></td>
        <td><?= $port->getCapacity() ?></td>
      </tr>
    <?php
    }
    ?>

    </tbody>
  </table>
