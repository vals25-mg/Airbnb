      <div class="container" id = "in-chf">
        <div class="row">
          <div class="row">
                <div class="col-md-11 offset-md-3" id="top">
                    <h3>Inscription</h3>
                </div>
          </div>
          <form action="inc/traitementInsc.php" method="post">
            <div class="col-md-12 offset-md-1">
              <input type="text" name="pseudo" class="field1" placeholder="Pseudo" required>
              <input type="email" name="email" class="field1" placeholder="Email" required>
              <input type="text" name="phone" class="field1" placeholder="Telephone" required>
              <input type="text" name="nationalite" class="field1" placeholder="Nationalite" required>
              <input type="password" name="pass" class="field1" placeholder="Mot de passe" required>
            </div>
            <div class="col-md-4 offset-md-4">
              <input class="btn btn-primary" type="submit" value="Confirmer" id="btn2"></form>
            </div>
        </div>
      </div>
    </form>
