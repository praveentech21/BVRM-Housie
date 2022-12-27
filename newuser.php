<?php
echo "Jai Sri Ram";
$con=new mysqli("43.250.40.60","bo_housie","bo_housie@421","srkr_housie");
if($con){
    echo "Ohm Namo Shivaya";
    if($sub=$_POST['submit']){
        $pid = $sub['pid'];
        $name = $sub['name'];
        $place = $sub['place'];
        $pin = $sub['pin'];
        $status = $sub['status'];
    }
}
?>
 <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
              <span class="padding-bottom--15">Creating New Account</span>
              <form id="stripe-login" action="newuser.php">
                <div class="field padding-bottom--24">
                  <label for="email">Phone Number</label>
                  <input type="tel" name="pid" required>
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Name Of the Player</label>
                  </div>
                  <input type="password" name="name">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">Address Of The Player</label>
                  </div>
                  <input type="password" name="place">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="password">SET A PIN</label>
                  </div>
                  <input type="password" name="pin">
                </div>
                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                  <label for="checkbox">
                    <input type="checkbox" name="status"> Activate
                  </label>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Submit">
                </div>
                <div class="field">
                  <a class="ssolink" href="#">BVRM ONLINE ANY THING IN BHIMAVARAM </a>
                </div>
              </form>
            </div>
          </div>