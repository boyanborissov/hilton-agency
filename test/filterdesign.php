<form method='get' action="filter.php" class="pt-4 pb-2 d-flex justify-content-center h4">
      <!--Filter-->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <section class="col-12" id="fs_price_body">
        <div>
          <span class="heading">Price</span>
          <label class="form-label" for="rangePrice"></label>
          <div class="range">
            <input type="range" class="form-range" min="85000000" max="265000000" step="10000000" id="slider"/>
            <p class="text-center"><span id="price"></span> million$</p>
          </div>
            <div>
              <ul>
                <li>85 million$</li>
                <li>265 million$</li>
              </ul>
            </div>
          </div>
          </section>
            <div class="land mt-3">
              <span class="heading">Size</span>
              <div class="dropdown">
              <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Min Size
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">10000</a></li>
                    <li><a class="dropdown-item" href="#">15000</a></li>
                    <li><a class="dropdown-item" href="#">20000</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Max Size
                  </button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">30000</a></li>
                    <li><a class="dropdown-item" href="#">50000</a></li>
                    <li><a class="dropdown-item" href="#">110000</a></li>
                  </ul>
                </div>
              </div>
            <span class="heading">Location</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Beverly Hills" name="bevHillsCheckbox" id="Beverly Hills" <?php if(isset($_SESSION["isBevHillsChecked"])) { echo $_SESSION["isBevHillsChecked"]; } unset($_SESSION["isBevHillsChecked"]);?>>
                <label class="form-check-label" for="Beverly Hills">Beverly Hills</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bel Air" name="belAirCheckbox" id="Bel Air" <?php if(isset($_SESSION["isBelAirChecked"])) { echo $_SESSION["isBelAirChecked"]; } unset($_SESSION["isBelAirChecked"]);?>>
                <label class="form-check-label" for="Bel Air">Bel Air</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Hollmbly Hills" name="hollHillsCheckbox" id="Hollmbly Hills" <?php if(isset($_SESSION["isHollHillsChecked"])) { echo $_SESSION["isHollHillsChecked"]; } unset($_SESSION["isHollHillsChecked"]);?>>
                <label class="form-check-label" for="Holmbly Hills">Hollmbly Hills</label>
              </div>
            </div>
            <span class="heading">Beds</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="oneBedCheckbox" id="One" <?php if(isset($_SESSION["isOneBedChecked"])) { echo $_SESSION["isOneBedChecked"]; } unset($_SESSION["isOneBedChecked"]);?>>
                <label class="form-check-label" for="One">1</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" name="twoBedCheckbox" id="Two" <?php if(isset($_SESSION["isTwoBedChecked"])) { echo $_SESSION["isTwoBedChecked"]; } unset($_SESSION["isTwoBedChecked"]);?>>
                <label class="form-check-label" for="Two">2</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" name="threeBedCheckbox" id="Three" <?php if(isset($_SESSION["isThreeBedChecked"])) { echo $_SESSION["isThreeBedChecked"]; } unset($_SESSION["isThreeBedChecked"]);?>>
                <label class="form-check-label" for="Three">3</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" name="fourBedCheckbox" id="Four" <?php if(isset($_SESSION["isFourBedChecked"])) { echo $_SESSION["isFourBedChecked"]; } unset($_SESSION["isFourBedChecked"]);?>>
                <label class="form-check-label" for="Four">4</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="5" name="fiveBedCheckbox" id="Five" <?php if(isset($_SESSION["isFiveBedChecked"])) { echo $_SESSION["isFiveBedChecked"]; } unset($_SESSION["isFiveBedChecked"]);?>>
                <label class="form-check-label" for="Five">5+</label>
              </div>
            </div>

            <span class="heading">Bathrooms</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="oneBathroomCheckbox" id="One" <?php if(isset($_SESSION["isOneBathroomChecked"])) { echo $_SESSION["isOneBathroomChecked"]; } unset($_SESSION["isOneBathroomChecked"]);?>>
                <label class="form-check-label" for="One">1</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" name="twoBathroomCheckbox" id="Two" <?php if(isset($_SESSION["isTwoBathroomChecked"])) { echo $_SESSION["isTwoBathroomChecked"]; } unset($_SESSION["isTwoBathroomChecked"]);?>>
                <label class="form-check-label" for="Two">2</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" name="threeBathroomCheckbox" id="Three" <?php if(isset($_SESSION["isThreeBathroomChecked"])) { echo $_SESSION["isThreeBathroomChecked"]; } unset($_SESSION["isThreeBathroomChecked"]);?>>
                <label class="form-check-label" for="Three">3</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" name="fourBathroomCheckbox" id="Four" <?php if(isset($_SESSION["isFourBathroomChecked"])) { echo $_SESSION["isFourBathroomChecked"]; } unset($_SESSION["isFourBathroomChecked"]);?>>
                <label class="form-check-label" for="Four">4</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="5" name="fiveBathroomCheckbox" id="Five" <?php if(isset($_SESSION["isFiveBathroomChecked"])) { echo $_SESSION["isFiveBathroomChecked"]; } unset($_SESSION["isFiveBathroomChecked"]);?>>
                <label class="form-check-label" for="Five">5+</label>
              </div>
            </div>
            <span class="heading">Others</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Indoor Pool">
                <label class="form-check-label" for="Indoor Pool">Indoor Pool</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Outdoor Pool">
                <label class="form-check-label" for="Outdoor Pool">Outdoor Pool</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Sauna">
                <label class="form-check-label" for="Sauna">Sauna</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Massage room">
                <label class="form-check-label" for="Massage room">Massage room</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Wine cellar">
                <label class="form-check-label" for="Wine cellar">Wine cellar</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="Cinema">
                <label class="form-check-label" for="Cinema">Cinema</label>
              </div>
              <div class="form-check">
                <button type="submit" class="btn bg-primary btn-lg text-light">Filter</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>