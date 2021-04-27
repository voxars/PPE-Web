<h1>Ajouter un nouveau poste et l'installer dans une salle</h1>


<?php
    $form = new Form($_POST);
?>
    <form action="envoiePoste" method="post">
    <?php
        echo ('Numéro du poste:');
        echo $form->input('nPoste');
        echo ('Nom du poste:');
        echo $form->input('nomPoste');
        echo ('IP:');
        echo $form->input('indIP');
        echo ('AD:');
        echo $form->input('ad');
        echo ('Le type de poste:');
        echo $form->input('typePoste');
        echo ('Numero de la salle:');
        echo $form->input('nSalle');
        echo ('Nombre de Log:');
        echo $form->input('nbLog');

        echo $form->submit();
    ?>
    </form>
