
<h1><?= $titre ?></h1>
<?php
  //var_dump($salles);
foreach ($salles as $salle) {
?>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Liste des postes <?= $salle->GetNSalle() ?> </h5>
            <p class="card-text">
            <ul>
                <li><?= $salle->getRoom_name() ?></li>
                <li><?= $salle->getNbPoste() ?></li>
                <li><?= $salle->getIndIP() ?></li>
                <li><?= $areas[$salle->getArea_id()]->GetArea_name() ?></li>
                <li><?= $salle->getCapacity() ?></li>
            </ul>
            <br>
            <?php foreach($postes as $poste)
            {
                if($salle->GetNSalle()==$poste->GetNSalle())
                {?>
                    <ul>
                        <li><?= $poste->GetNPoste()?></li>
                    </ul>

                    <?php
                }
            }?>
            </p>
        </div>
    </div>
<?php
}
?>
