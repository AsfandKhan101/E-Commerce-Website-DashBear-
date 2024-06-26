<?php
/* registration_form.php
This page displays a registration form for users.
*/
session_start();
include("../common/header.html");
?>

<!DOCTYPE html>
<html lang="en">
<body class="body w3-auto">

<header class="w3-container">
    <div class="w3-border w3-border-black w3-light-grey">
        <?php include("../common/banner.php"); ?>
        <?php include("../common/menus.html"); ?>
    </div>
</header>

<main class="w3-container">
    <article class="w3-container w3-border-left w3-border-right w3-border-black w3-light-grey">
        <h4 class="w3-center"><strong>Registration Form</strong></h4>
        <h5 class="w3-center">(sorry, but only Canadian residents for the moment)</h5>
        <p class="error w3-center">Each * denotes a required field.</p>
        <form id="registrationForm" action="scripts/formRegistrationResponse.php" method="post" autocomplete="on">
            <div class="w3-row w3-section">
                <div class="w3-quarter w3-container">
                    Salutation:
                </div>
                <div class="w3-threequarter w3-container">
                    <select name="salutation" style="width: 25%" required>
                        <option value="" selected disabled hidden>Choose one</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Dr.">Dr.</option>
                    </select>
                    <span class="w3-text-red">*</span>
                </div>
            </div>
            <!-- Rest of the form fields -->
            <!-- Your form fields go here -->
            <div class="w3-row">
          <div class="w3-quarter w3-container">
            First Name:
          </div>
          <div class="w3-threequarter w3-container">
            <input type="text" name="firstName" required
                   style="width: 80%;"
                   value=""
                   title="Initial capital; spaces, apostrophes,&#10;and hyphens allowed"
                   pattern="^[A-Z][A-Za-z '-]*$">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            Middle Initial:
          </div>
          <div class="w3-threequarter w3-container">
            <input type="text" name="middleInitial"
                   style="width: 10%;"
                   value=""
                   title="Capital letter, followed by an optional period"
                   pattern="^[A-Z](\.)?$">
          </div>
        </div>
        <div class="w3-row">
          <div class="w3-quarter w3-container">
            Last Name:
          </div>
          <div class="w3-threequarter w3-container">
            <input type="text" name="lastName" required
                   style="width: 80%;"
                   value=""
                   title="Initial capital; spaces, apostrophes,&#10;and hyphens allowed"
                   pattern="^[A-Z][A-Za-z '-]*$">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            Gender:
          </div>
          <div class="w3-threequarter w3-container">
            <select name="gender" required>
              <option value="" selected disabled hidden>
                Choose one
              </option>
              <option value="Female"
                       >
                Female
              </option>
              <option value="Male"
                       >
                Male
              </option>
              <option value="Other" title="Or maybe do not want to disclose"
                       >
                Other
              </option>
            </select>
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row">
          <div class="w3-quarter w3-container">
            E-mail Address:
          </div>
          <div class="w3-threequarter w3-container">
                        <input type="text" name="email" required
                   style="width: 80%;"
                   value=""
                   title="x@y.z, with . or - allowed in x and/or y,
and z must have only 2 or 3 letters"
                   placeholder="Must be unique within our database"
                   pattern="^\w+([.-]?\w+)*@\w+([.-]?\w+)*(\.\w{2,3})$">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            Phone Number:
          </div>
          <div class="w3-threequarter w3-container w3-wide">
            <input type="text" name="phone"
                   style="width: 80%;"
                   value=""
                   title="xxx-yyy-zzzz, (xxx)yyy-zzzz or just yyy-zzzz"
                   pattern="((\d{3}-)?\d{3}-\d{4})|\(\d{3}\)\d{3}-\d{4}">
          </div>
        </div>
        <div class="w3-row">
          <div class="w3-quarter w3-container">
            Street Address:
          </div>
          <div class="w3-threequarter w3-container w3-wide">
            <input type="text" name="street" required
                   style="width: 80%;"
                   value="">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            City:
          </div>
          <div class="w3-threequarter w3-container w3-wide">
            <input type="text" name="city" required
                   style="width: 80%;"
                   value="">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row">
          <div class="w3-quarter w3-container">
            Region:
          </div>
          <div class="w3-threequarter w3-container">
            <select name="region" required style="width: 30%">
              <option value="">
                Choose one
              </option>
              <optgroup label="Provinces">
                <option title="Alberta" value="AB"
                         >
                  AB
                </option>
                <option title="British Columbia" value="BC"
                         >
                  BC
                </option>
                <option title="Manitoba" value="MB"
                         >
                  MB
                </option>
                <option title="New Brunswick" value="NB"
                         >
                  NB
                </option>
                <option title="Newfoundland and Labrador" value="NL"
                         >
                  NL
                </option>
                <option title="Nova Scotia" value="NS"
                         >
                  NS
                </option>
                <option title="Ontario" value="ON"
                         >
                  ON
                </option>
                <option title="Prince Edward Island" value="PE"
                         >
                  PE
                </option>
                <option title="Quebec" value="QC"
                         >
                  QC
                </option>
                <option title="Saskatchewan" value="SK"
                         >
                  SK
                </option>
              </optgroup>
              <optgroup label="Territories">
                <option title="Northwest Territories" value="NT"
                         >
                  NT
                </option>
                <option title="Nunavut" value="NU"
                         >
                  NU
                </option>
                <option title="Yukon Territory" value="YT"
                         >
                  YT
                </option>
              </optgroup>
            </select>
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            Postal Code:
          </div>
          <div class="w3-threequarter w3-container w3-wide">
            <input type="text" name="postalCode" required
                   style="width: 30%;"
                   value=""
                   title="A1B2C3 or A1B 2C3"
                   pattern="[A-Z]\d[A-Z] ?\d[A-Z]\d">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            Login Name:
          </div>
          <div class="w3-threequarter w3-container w3-wide">
                        <input type="text" name="loginName" required
                   style="width: 80%;"
                   value=""
                   title="Must start with a letter, contain
only letters and digits, and be
6 to 15 characters in length"
                   placeholder="Choose your preferred username for login"
                   pattern="[A-Za-z][A-Za-z0-9]{5,14}">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row">
          <div class="w3-quarter w3-container">
            Password:
          </div>
          <div class="w3-threequarter w3-container w3-wide">
                        <input type="password" name="password1" required
                   style="width: 80%;"
                   value=""
                   title="8 to 15 characters, including at least one
uppercase letter, one lowercase letter, one digit and
one special character from the group @^_+=[]:"
                   placeholder="Choose a good, strong password"
                   pattern="(?=.*\d)(?=.*[@^_+=[\]:])(?=.*[A-Z])(?=.*[a-z])\S{8,15}">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            Password again:
          </div>
          <div class="w3-threequarter w3-container w3-wide">
            <input type="password" name="password2" required
                   style="width: 80%;"
                   value=""
                   placeholder="Re-enter same password as above">
            <span class="w3-text-red">*</span>
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-quarter w3-container">
            &nbsp;
          </div>
          <div class="w3-threequarter w3-container">
            <input type="submit"
                   value="Submit Form Data">
            <input type="reset"
                   value="Reset Form Data" onclick="this.form.reset()">
          </div>
        </div>

        </form>
    </article>
</main>

<footer>
    <?php include("../common/footer.html"); ?>
</footer>

</body>
</html>

 