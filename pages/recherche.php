<form action="./Accueil.php" method="get">
<input type="hidden" name="page" value="result.php">
    <div class="container" id = "search-chf">
      <div class="row">
        <div class="row">
              <div class="col-md-11" id="top">
                  <h3>Trouvez des hebergements</h3>
                  <h6>Decouvrez des logements entiers et des chambres privees pour tout type de voyage</h6>
              </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ADRESSE</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Tout afficher" name="adresse">
          </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">ARRIVEE</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="arrivee">
          </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">DEPART</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" name="depart">
          </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="adultes">
              <option selected>ADULTES</option>
              <?php for($i=1;$i<25;$i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="enfants">
              <option selected>ENFANTS</option>
              <?php for($i=0;$i<25;$i++) { ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
              <?php } ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="mb-3">
            <input type="submit" class="btn btn-danger" value="Rechercher" id="btn3">
          </div>
        </div>
      </div>
    </div>
</form>
