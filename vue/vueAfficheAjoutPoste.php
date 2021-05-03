<h1>Ajouter un nouveau poste et l'installer dans une salle</h1>


<form action="#" method="post">
    <div class="form-outline mb-4">
        <label class="form-label" name="nPoste" for="nPoste">Numéro du poste:</label>
        <input type="email" name="nPoste" id="nPoste" class="form-control" value="p"/>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" name="nomPoste" for="nomPoste">Nom du poste:</label>
        <input type="email" name="nomPoste" id="nomPoste" class="form-control" value="Poste "/>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" name="indIP" for="indIP">IP:</label>
        <select class="browser-default custom-select" name="indIP">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" name="ad" for="ad">AD:</label>
        <input type="email" name="ad" id="ad" class="form-control" maxlength="2" />
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" name="typePoste" for="typePoste">Le type de poste:</label>
        <select class="browser-default custom-select" name="typePoste">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" name="nSalle" for="nSalle">Numero de la salle:</label>
        <select class="browser-default custom-select" name="nSalle">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" name="nbLog" for="nbLog">Nombre de Log:</label>
        <select class="browser-default custom-select" name="nbLog">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
    </div>




    <button type="submit" class="btn btn-primary btn-block">Ajouter le poste</button>
</form>

