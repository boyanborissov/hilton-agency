<form method='get' action="filter.php" class="pt-4 pb-2 d-flex justify-content-center h4">
      <!--Filter-->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title fs-2" id="offcanvasExampleLabel">Filter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <section class="col-12" id="fs_price_body">
          </section>
            <div>
              <span class="heading ">Size</span>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label class="form-label fs-6" for="minSize">Min Size</label>
                  <select class="form-select" name="minSize" id="minSize">
                    <option value="">Select Min Size</option>
                    <option value="10000">10,000 sqft</option>
                    <option value="15000">15,000 sqft</option>
                    <option value="20000">20,000 sqft</option>
                  </select>
                </div>
                <div class="col-md-6">
                  <label class="form-label fs-6" for="maxSize">Max Size</label>
                  <select class="form-select" name="maxSize" id="maxSize">
                    <option value="">Select Max Size</option>
                    <option value="30000">30,000 sqft</option>
                    <option value="50000">50,000 sqft</option>
                    <option value="110000">110,000 sqft</option>
                  </select>
                </div>
              </div>
            </div>
            <span class="heading">Location</span>
            <div class="contents  mb-3">
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
              <div class="contents mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="5-9" name="beds[]" id="One" <?php if(isset($_SESSION["isOneBedChecked"])) { echo $_SESSION["isOneBedChecked"]; } unset($_SESSION["isOneBedChecked"]);?>>
                  <label class="form-check-label" for="One">5-9</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="10-14" name="beds[]" id="Two" <?php if(isset($_SESSION["isTwoBedChecked"])) { echo $_SESSION["isTwoBedChecked"]; } unset($_SESSION["isTwoBedChecked"]);?>>
                  <label class="form-check-label" for="Two">10-19</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="20-24" name="beds[]" id="Three" <?php if(isset($_SESSION["isFourBedChecked"])) { echo $_SESSION["isFourBedChecked"]; } unset($_SESSION["isFourBedChecked"]);?>>
                  <label class="form-check-label" for="Four">20-24</label>
                </div>
              </div>
            <span class="heading">Bathrooms</span>
            <div class="contents">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" name="baths[]" id="One" <?php if(isset($_SESSION["isOneBathroomChecked"])) { echo $_SESSION["isOneBathroomChecked"]; } unset($_SESSION["isOneBathroomChecked"]);?>>
                <label class="form-check-label" for="One">10-14</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="2" name="baths[]" id="Two" <?php if(isset($_SESSION["isTwoBathroomChecked"])) { echo $_SESSION["isTwoBathroomChecked"]; } unset($_SESSION["isTwoBathroomChecked"]);?>>
                <label class="form-check-label" for="Two">15-19</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="3" name="baths[]" id="Three" <?php if(isset($_SESSION["isThreeBathroomChecked"])) { echo $_SESSION["isThreeBathroomChecked"]; } unset($_SESSION["isThreeBathroomChecked"]);?>>
                <label class="form-check-label" for="Three">20-24</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="4" name="baths[]" id="Four" <?php if(isset($_SESSION["isFourBathroomChecked"])) { echo $_SESSION["isFourBathroomChecked"]; } unset($_SESSION["isFourBathroomChecked"]);?>>
                <label class="form-check-label" for="Four">24+</label>
              </div>
            </div>
            <div class="contents">
              <div class="form-check">
              <div class="d-flex justify-content-center mt-2">
                <button type="submit" class="btn bg-dark text-center btn-lg text-light">Filter</button>
              </div>
              </div>
            </div>
        </div>
      </div>
    </form>
    <script>
  var slider = document.getElementById("slider");
  var price = document.getElementById("price");

  // Convert the value of the slider from dollars to millions of dollars and display it
  price.innerHTML = (slider.value / 1000000) + " million";

  // Update the value of the slider when it is moved and display the new value in millions of dollars
  slider.oninput = function() {
    price.innerHTML = (this.value / 1000000) + " million";
  }
</script>