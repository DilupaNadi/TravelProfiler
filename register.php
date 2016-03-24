<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Travel Profiler - Sign In</title>

        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/animate.css">
        <!-- Custom Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <!--        <link rel="stylesheet" href="css/bootstrap.min.css">-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="top">
                <div id="title" class="hidden" style="text-align: center"><a href="index.php"><img id="logo" src="images/logo.png"></a></div>
            </div>
            <div class="register-box animated fadeInUp">
                <div class="box-header">
                    <h2>Sign Up</h2>
                </div>
                <form method="post" action="includes/register_inc.php" enctype="multipart/form-data">
                    <div style="float: left; margin-left: 20px">
                        <label for="name">Your Name</label>
                        <br>
                        <input type="text" name="username" required="" tabindex=1>
                        <br>
                        <label for="gender">Gender</label>
                        <br>
                        <select name="gender" required="" tabindex=4>
                            <option>Male</option>
                            <option>Female</option>
                        </select>

                    </div>
                    <div style="float: left; margin-left: 20px">
                        <label for="email">E-Mail</label>
                        <br>
                        <input type="text" required="" name="email" tabindex=2>
                        <br>
                        <label for="pass">Password</label>
                        <br>
                        <input name="pass" id="pass" type="password" required="" tabindex=5>
                        <br>
                    </div>

                    <div style="float: left; margin-left: 20px">
                        <label for="country">Country</label>
                        <br>
                        <select name="country" required="" tabindex=3 style="width: 200px">
	<option>Afghanistan</option>
	<option>Åland Islands</option>
	<option>Albania</option>
	<option>Algeria</option>
	<option>American Samoa</option>
	<option>Andorra</option>
	<option>Angola</option>
	<option>Anguilla</option>
	<option>Antarctica</option>
	<option>Antigua and Barbuda</option>
	<option>Argentina</option>
	<option>Armenia</option>
	<option>Aruba</option>
	<option>Australia</option>
	<option>Austria</option>
	<option>Azerbaijan</option>
	<option>Bahamas</option>
	<option>Bahrain</option>
	<option>Bangladesh</option>
	<option>Barbados</option>
	<option>Belarus</option>
	<option>Belgium</option>
	<option>Belize</option>
	<option>Benin</option>
	<option>Bermuda</option>
	<option>Bhutan</option>
	<option>Bolivia, Plurinational State of</option>
	<option>Bonaire, Sint Eustatius and Saba</option>
	<option>Bosnia and Herzegovina</option>
	<option>Botswana</option>
	<option>Bouvet Island</option>
	<option>Brazil</option>
	<option>British Indian Ocean Territory</option>
	<option>Brunei Darussalam</option>
	<option>Bulgaria</option>
	<option>Burkina Faso</option>
	<option>Burundi</option>
	<option>Cambodia</option>
	<option>Cameroon</option>
	<option>Canada</option>
	<option>Cape Verde</option>
	<option>Cayman Islands</option>
	<option>Central African Republic</option>
	<option>Chad</option>
	<option>Chile</option>
	<option>China</option>
	<option>Christmas Island</option>
	<option>Cocos (Keeling) Islands</option>
	<option>Colombia</option>
	<option>Comoros</option>
	<option>Congo</option>
	<option>Congo, the Democratic Republic of the</option>
	<option>Cook Islands</option>
	<option>Costa Rica</option>
	<option>Côte d'Ivoire</option>
	<option>Croatia</option>
	<option>Cuba</option>
	<optionCuraçao</option>
	<option>Cyprus</option>
	<option>Czech Republic</option>
	<option>Denmark</option>
	<option>Djibouti</option>
	<option>Dominica</option>
	<option>Dominican Republic</option>
	<option>Ecuador</option>
	<option>Egypt</option>
	<option>El Salvador</option>
	<option>Equatorial Guinea</option>
	<option>Eritrea</option>
	<option>Estonia</option>
	<option>Ethiopia</option>
	<option>Falkland Islands (Malvinas)</option>
	<option>Faroe Islands</option>
	<option>Fiji</option>
	<option>Finland</option>
	<option>France</option>
	<option>French Guiana</option>
	<option>French Polynesia</option>
	<option>French Southern Territories</option>
	<option>Gabon</option>
	<option>Gambia</option>
	<option>Georgia</option>
	<option>Germany</option>
	<option>Ghana</option>
	<option>Gibraltar</option>
	<option>Greece</option>
	<option>Greenland</option>
	<option >Grenada</option>
	<option >Guadeloupe</option>
	<option >Guam</option>
	<option >Guatemala</option>
	<option>Guernsey</option>
	<option>Guinea</option>
	<option >Guinea-Bissau</option>
	<option>Guyana</option>
	<option>Haiti</option>
	<option>Heard Island and McDonald Islands</option>
	<option >Holy See (Vatican City State)</option>
	<option >Honduras</option>
	<option >Hong Kong</option>
	<option >Hungary</option>
	<option >Iceland</option>
	<option>India</option>
	<option>Indonesia</option>
	<option>Iran, Islamic Republic of</option>
	<option>Iraq</option>
	<option>Ireland</option>
	<option>Isle of Man</option>
	<option>Israel</option>
	<option>Italy</option>
	<option>Jamaica</option>
	<option>Japan</option>
	<option>Jersey</option>
	<option>Jordan</option>
	<option>Kazakhstan</option>
	<option>Kenya</option>
	<option>Kiribati</option>
	<option>Korea, Democratic People's Republic of</option>
	<option>Korea, Republic of</option>
	<option>Kuwait</option>
	<option>Kyrgyzstan</option>
	<option>Lao People's Democratic Republic</option>
	<option>Latvia</option>
	<option>Lebanon</option>
	<option>Lesotho</option>
	<option>Liberia</option>
	<option>Libya</option>
	<option>Liechtenstein</option>
	<option>Lithuania</option>
	<option>Luxembourg</option>
	<option>Macao</option>
	<option>Macedonia, the former Yugoslav Republic of</option>
	<option>Madagascar</option>
	<option>Malawi</option>
	<option>Malaysia</option>
	<option>Maldives</option>
	<option>Mali</option>
	<option>Malta</option>
	<option>Marshall Islands</option>
	<option>Martinique</option>
	<option>Mauritania</option>
	<option>Mauritius</option>
	<option>Mayotte</option>
	<option >Mexico</option>
	<option>Micronesia, Federated States of</option>
	<option >Moldova, Republic of</option>
	<option >Monaco</option>
	<option >Mongolia</option>
	<option >Montenegro</option>
	<option >Montserrat</option>
	<option >Morocco</option>
	<option >Mozambique</option>
	<option >Myanmar</option>
	<option >Namibia</option>
	<option >Nauru</option>
	<option >Nepal</option>
	<option>Netherlands</option>
	<option>New Caledonia</option>
	<option>New Zealand</option>
	<option>Nicaragua</option>
	<option>Niger</option>
	<option >Nigeria</option>
	<option>Niue</option>
	<option >Norfolk Island</option>
	<option >Northern Mariana Islands</option>
	<option>Norway</option>
	<option>Oman</option>
	<option >Pakistan</option>
	<option >Palau</option>
	<option >Palestinian Territory, Occupied</option>
	<option>Panama</option>
	<option >Papua New Guinea</option>
	<option >Paraguay</option>
	<option >Peru</option>
	<option >Philippines</option>
	<option >Pitcairn</option>
	<option >Poland</option>
	<option >Portugal</option>
	<option >Puerto Rico</option>
	<option >Qatar</option>
	<option >Réunion</option>
	<option >Romania</option>
	<option >Russian Federation</option>
	<option >Rwanda</option>
	<option >Saint Barthélemy</option>
	<option >Saint Helena, Ascension and Tristan da Cunha</option>
	<option >Saint Kitts and Nevis</option>
	<option >Saint Lucia</option>
	<option >Saint Martin (French part)</option>
	<option >Saint Pierre and Miquelon</option>
	<option >Saint Vincent and the Grenadines</option>
	<option >Samoa</option>
	<option >San Marino</option>
	<option >Sao Tome and Principe</option>
	<option >Saudi Arabia</option>
	<option >Senegal</option>
	<option >Serbia</option>
	<option >Seychelles</option>
	<option >Sierra Leone</option>
	<option >Singapore</option>
	<option >Sint Maarten (Dutch part)</option>
	<option >Slovakia</option>
	<option >Slovenia</option>
	<option>Solomon Islands</option>
	<option >Somalia</option>
	<option >South Africa</option>
	<option >South Georgia and the South Sandwich Islands</option>
	<option>South Sudan</option>
	<option >Spain</option>
	<option>Sri Lanka</option>
	<option>Sudan</option>
	<option>Suriname</option>
	<option>Svalbard and Jan Mayen</option>
	<option>Swaziland</option>
	<option>Sweden</option>
	<option>Switzerland</option>
	<option>Syrian Arab Republic</option>
	<option>Taiwan, Province of China</option>
	<option>Tajikistan</option>
	<option>Tanzania, United Republic of</option>
	<option>Thailand</option>
	<option>Timor-Leste</option>
	<option>Togo</option>
	<option >Tokelau</option>
	<option>Tonga</option>
	<option>Trinidad and Tobago</option>
	<option >Tunisia</option>
	<option >Turkey</option>
	<option>Turkmenistan</option>
	<option >Turks and Caicos Islands</option>
	<option>Tuvalu</option>
	<option>Uganda</option>
	<option>Ukraine</option>
	<option>United Arab Emirates</option>
	<option >United Kingdom</option>
	<option >United States</option>
	<option >United States Minor Outlying Islands</option>
	<option>Uruguay</option>
	<option >Uzbekistan</option>
	<option>Vanuatu</option>
	<option>Venezuela, Bolivarian Republic of</option>
	<optionViet Nam</option>
	<option>Virgin Islands, British</option>
	<option>Virgin Islands, U.S.</option>
	<option>Wallis and Futuna</option>
	<option>Western Sahara</option>
	<option>Yemen</option>
	<option>Zambia</option>
	<option>Zimbabwe</option>
        </select>
                        <br>
                        <label for="password">Confirm Password</label>
                        <br>
                        <input id="confpass" type="password" name="password" required="" tabindex=6>
                        <br>
                    </div>

                    <div style="clear: both">
                        
                            <label for="userimage">User Image</label>
                            <br>
                            <input id="confpass" type="file" name="userpic" required="" tabindex=7>
                            <br>
                            <label for="access_fb"> Do you like that ‘Travel Profiling’ to access your FB page? </label>
                        <br>
                        <table style="width: 100%">
                            <tr>
                                <td style="width: 50%; text-align: right"><input type="radio" name="access_fb" value="Yes" checked> Yes<br></td>
                                <td style="width: 50%; text-align: left"><input type="radio" name="access_fb" value="No" checked> No<br></td>
                            </tr>
                        </table>
                        
                        <label for="fb_link">Please enter your Facebook profile url</label>
                        <br>
                        <input id="fblink" type="text" name="fb_link" required="" tabindex=8>
                        <br>
                        <input class="rbutton" name="submit" type="submit" value="Sign Up">
                        <a href="index.php" class="rbutton">Cancel</a>
                    </div>
                    <br/>
                </form>
            </div>
        </div>
    </body>

    <script>
//        $(document).ready(function () {
//            $('#logo').addClass('animated fadeInDown');
//            $("input:text:visible:first").focus();
//        });
//        $('#username').focus(function () {
//            $('label[for="username"]').addClass('selected');
//        });
//        $('#username').blur(function () {
//            $('label[for="username"]').removeClass('selected');
//        });
//        $('#password').focus(function () {
//            $('label[for="password"]').addClass('selected');
//        });
//        $('#password').blur(function () {
//            $('label[for="password"]').removeClass('selected');
//        });

        var password = document.getElementById("pass")
                , confirm_password = document.getElementById("confpass");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Passwords Don't Match");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>

</html>