<h1>Ajouter un nouveau poste et l'installer dans une salle</h1>

<!-- <form method="post" id="saisie">

    <div class="col-md-3">
        <label for="nom">Numéro du Poste:</label>
        <textarea rows="1" class="form-control form-control-lg" id="numPoste" name="nom" onkeyup="/*confirmeNom();*/" required></textarea>
        <span id="statusNom"></span>
    </div>

    <div class="col-md-3">
        <label for="nom">Nom du Poste:</label>
        <textarea rows="1" class="form-control form-control-lg" id="nom" name="nom" onkeyup="/*confirmeNom();*/" required></textarea>
        <span id="statusNom"></span>
    </div>

    <div class="col-md-3">
        <label for="nom">IP:</label>
        <textarea rows="1" class="form-control form-control-lg" id="nom" name="nom" onkeyup="/*confirmeNom();*/" required></textarea>
        <span id="statusNom"></span>
    </div>

    <div class="col-md-3">
        <label for="nom">AD</label>
        <textarea rows="1" class="form-control form-control-lg" id="nom" name="nom" onkeyup="/*confirmeNom();*/" required></textarea>
        <span id="statusNom"></span>
    </div>

    <div class="col-md-3">
        <label for="nom">Type du Poste</label>
        <textarea rows="1" class="form-control form-control-lg" id="nom" name="nom" onkeyup="/*confirmeNom();*/" required></textarea>
        <span id="statusNom"></span>
    </div>

    <div class="col-md-3">
        <label for="nom">Numéro de la salle</label>
        <textarea rows="1" class="form-control form-control-lg" id="nom" name="nom" onkeyup="/*confirmeNom();*/" required></textarea>
        <span id="statusNom"></span>
    </div>

    <div class="col-md-3">
        <label for="nom">Nb Log</label>
        <textarea rows="1" class="form-control form-control-lg" id="nom" name="nom" onkeyup="/*confirmeNom();*/" required></textarea>
        <span id="statusNom"></span>
    </div>

    <div class="row">
        <button type="submit" class="btn btn-primary btn-block" >Ajouter le poste</button>
    </div>
</form> -->

<?php
    $form = new Form($_POST);
?>
    <form action="#" method="post">
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