<?php include 'session.php'; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Vaibhav-Tour:-Profile
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!----css3---->
    <link rel="stylesheet" href="css/custom.css">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">




    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>




    <div class="wrapper">


        <div class="body-overlay"></div>


        <!-- Sidebar  -->
        <?php include 'nav.html'; ?>



        <!-- Page Content  -->
        <div id="content">

            <?php include 'topnavbar.php' ?>


            <div class="main-content">

                <div class="row ">
                    <div class="col-lg-7 col-md-12">
                        <div class="card" style="min-height: 550px">

                            <h3 class="text-center mt-2">Post The Packages</h3>
                            <div class="col-md-10">
                                <form class="row g-3" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
                                <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="<?php echo $_SESSION['username'];  ?>" readonly>
                                    </div>
                                    <div class="col-mb-5">
                                        <label for="exampleInputEmail1" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $_SESSION['email'];  ?>" readonly>
                                    </div>    
                                
                                <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">Continents</label>
                                        <select class="form-select" id="validationCustom04" name="continents" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Asia">Asia</option>
                                            <option value="Africa">Africa</option>
                                            <option value="North_America">North_America</option>
                                            <option value="South_America">South_America</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Europe">Europe</option>
                                            <option value="Australia">Australia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">Country</label>
                                        <select class="form-select" id="validationCustom04" name="country" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Åland Islands">Åland Islands</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'ivoire">Cote D'ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guernsey">Guernsey</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-bissau">Guinea-bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jersey">Jersey</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montenegro">Montenegro</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="North Korea">North Korea</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Helena">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="south korea">south korea</option>
                                            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Timor-leste">Timor-leste</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Viet Nam">Viet Nam</option>
                                            <option value="Virgin Islands, British">Virgin Islands, British</option>
                                            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">Min-Age</label>
                                        <select class="form-select" id="validationCustom04" name="min_age" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="3-Min-Age">3-Min-Age</option>
                                            <option value="6-Min_Age">6-Min_Age</option>
                                            <option value="8-Min_Age">8-Min_Age</option>
                                            <option value="10-Min_Age">10-Min_Age</option>
                                            <option value="13-Min_Age">13-Min_Age</option>
                                            <option value="15-Min_Age">15-Min_Age</option>
                                            <option value="18-Min_Age">18-Min_Age</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">DIFFICULTY</label>
                                        <select class="form-select" id="validationCustom04" name="difficulty" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Low">Low</option>
                                            <option value="Medium">Medium</option>
                                            <option value="High">High</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">TYPOLOGIES</label>
                                        <select class="form-select" id="validationCustom04" name="type" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="Cultural">Cultural</option>
                                            <option value="Relax">Relax</option>
                                            <option value="History">History</option>
                                            <option value="Sport">Sport</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="validationCustom04" class="form-label">Days</label>
                                        <select class="form-select" id="validationCustom04" name="days" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="3-Days">3-Days</option>
                                            <option value="5-Days">5-Days</option>
                                            <option value="7-Days">7-Days</option>
                                            <option value="9-Days">9-Days</option>
                                            <option value="11-Days">11-Days</option>
                                            <option value="14-Days">14-Days</option>
                                            <option value="17-Days">17-Days</option>
                                            <option value="20-Days">20-Days</option>
                                        </select>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="formFile" class="form-label">Default file input example</label>
                                        <input class="form-control" name="file" type="file" id="formFile">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Photo</label>
                                        <input type="File" class="form-control" id="validationCustom03" name="file2" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Photo</label>
                                        <input type="File" class="form-control" id="validationCustom03" name="file3" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom03" class="form-label">Photo</label>
                                        <input type="File" class="form-control" id="validationCustom03" name="file4" required>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
                                    </div>
                                </form>
                                <?php
                                include 'DB.php';

                                if (isset($_POST['submit'])) {
                                    $name = mysqli_real_escape_string($con, $_POST['name']);
                                    $email = mysqli_real_escape_string($con, $_POST['email']);
                                    $continents = mysqli_real_escape_string($con, $_POST['continents']);
                                    $country = mysqli_real_escape_string($con, $_POST['country']);
                                    $min_age = mysqli_real_escape_string($con, $_POST['min_age']);

                                    $difficulty = mysqli_real_escape_string($con, $_POST['difficulty']);
                                    $type = mysqli_real_escape_string($con, $_POST['type']);
                                    $days = mysqli_real_escape_string($con, $_POST['days']);


                                    $File = $_FILES['file'];

                                    $filename = $File['name'];
                                    $fileerror = $File['error'];
                                    $filetemp = $File['tmp_name'];

                                    $fileext = explode('.', $filename);
                                    $filechk = strtolower(end($fileext));

                                    $fileextstore = array('png', 'jpg', 'jpeg');


                                    $File2 = $_FILES['file2'];

                                    $filename2 = $File2['name'];
                                    $fileerror2 = $File2['error'];
                                    $filetemp2 = $File2['tmp_name'];

                                    $fileext2 = explode('.', $filename2);
                                    $filechk2 = strtolower(end($fileext2));

                                    $fileextstore2 = array('png', 'jpg', 'jpeg');

                                    $File3 = $_FILES['file3'];

                                    $filename3 = $File3['name'];
                                    $fileerror3 = $File3['error'];
                                    $filetemp3 = $File3['tmp_name'];

                                    $fileext3 = explode('.', $filename3);
                                    $filechk3 = strtolower(end($fileext3));

                                    $fileextstore3 = array('png', 'jpg', 'jpeg');

                                    $File4 = $_FILES['file4'];

                                    $filename4 = $File4['name'];
                                    $fileerror4 = $File4['error'];
                                    $filetemp4 = $File4['tmp_name'];

                                    $fileext4 = explode('.', $filename4);
                                    $filechk4 = strtolower(end($fileext4));

                                    $fileextstore4 = array('png', 'jpg', 'jpeg');

                                    if (in_array($filechk, $fileextstore)) {
                                        $destination = '../Upload/Gallery/' . $filename;
                                        $destinationd =  $filename;
                                        move_uploaded_file($filetemp, $destination);

                                        if (in_array($filechk2, $fileextstore2)) {
                                            $destination2 = '../Upload/Gallery/' . $filename2;
                                            $destinationd2 =  $filename2;
                                            move_uploaded_file($filetemp2, $destination2);

                                            if (in_array($filechk3, $fileextstore3)) {
                                                $destination3 = '../Upload/Gallery/' . $filename3;
                                                $destinationd3 =  $filename3;
                                                move_uploaded_file($filetemp3, $destination3);

                                                if (in_array($filechk4, $fileextstore4)) {
                                                    $destination4 = '../Upload/Gallery/' . $filename4;
                                                    $destinationd4 =  $filename4;
                                                    move_uploaded_file($filetemp4, $destination4);




                                                    // $insertquery = "INSERT INTO pakages(Continents, Country, Min_Age, Diff, Type, Days, pic_1, pic_2, pic_3, pic_4) 
                                                    // VALUES ('$continents','$country','$min_age', '$difficulty','$type','$days','$destinationd1''$destinationd2''$destinationd3''$destinationd4')";

                                                    $insertquery = "INSERT INTO pakages( Name, email, Continents, Country, Min_Age, Diff, Type, Days, pic_1, pic_2, pic_3, pic_4) VALUES ('$name','$email','$continents','$country','$min_age', '$difficulty','$type','$days','$destinationd','$destinationd2','$destinationd3','$destinationd4')";

                                                    $result = mysqli_query($con, $insertquery);

                                                    if ($result) {
                                ?>
                                                        <script>
                                                            alert("data insert Successlly");
                                                        </script>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <script>
                                                            alert("data insert Un-Successlly");
                                                        </script>
                                <?php

                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 ">
                        <div class="card" style="min-height: 485px">
                            <div class="row justify-content-around">
                                <div class="col-md-8 mt-5">
                                    <h4>Packages You Post</h4>
                                    <?php $email = $_SESSION['email'];

                                    $pack_select = "select * from pakages where email='$email'";
                                    $query = mysqli_query($con, $pack_select);
                                    while ($row = mysqli_fetch_array($query)) {
                                        if ($query) {

                                    ?>
                                            <div class="row mt-3">
                                                <div class="col-md-4">
                                                    <img src="../Upload/Gallery/<?php echo $row['pic_1'];  ?>" width="100px" alt="" srcset="">
                                                </div>
                                                <div class="col-md-8">
                                                    <p>Continents:- <?php echo $row['Continents'];  ?></p>
                                                    <p>Country:- <?php echo $row['Country'];  ?></p>
                                                </div>
                                            </div>

                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <?php include 'footer.html' ?>

            </div>



        </div>
    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });

            $('.more-button,.body-overlay').on('click', function() {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });

        });
    </script>





</body>

</html>