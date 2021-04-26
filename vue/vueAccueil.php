<?php

//var_dump($_SESSION["test1"]);
if ($_SESSION["test1"] != null || $_SESSION["test1"] == true) {
?>
    <div class="login-form">
        <form action="./?action=logout" method="post">
            <div class="form-group">
                <h2 class="text-center">Bienvenue</h2>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log Out</button>
            </div>
        </form>
    </div>
<?php }
else {
      ?>

    <div class="login-form">
        <form action="./?action=accueil" method="post">
            <h2 class="text-center">Log in</h2>
            <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Log in</button>
            </div>
        </form>
    </div>
      <?php 
      }
