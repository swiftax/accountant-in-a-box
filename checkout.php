<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=10" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Accountant In A Box - Automate Your Back Office</title>

    <!-- css -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">
   <link rel="stylesheet" href="css/validationEngine.jquery.css" /> <!-- This is for the validation engine -->
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="images/favicon.png">
    
    <!--open graph-->
    <meta property="og:title" content="Account in a box" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="images/opengraph.jpg" />



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
         <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" id="menuBtn" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html#home"><img src="images/logo.png" alt=""></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.html#home">Home</a></li>
              <li><a href="index.html#services">Product</a></li>
            <li><a href="index.html#servicesoffered">Services</a></li>
            <li><a href="index.html#xero">Xero</a></li>
              <li><a href="index.html#pricing">Pricing</a></li>

              <li><a href="index.html#contact">Contact</a></li>
            </ul>
                                    
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
        
      <section id="contact" class="contact-panel">
            <div class="container">
               <div class="row">                    
                    <aside class="col-sm-12 contact-form" style="width:100%;">
                        
                        <form id="checkout" action="process.php" method="post" onsubmit="if(document.getElementById('agree').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms of Service'); return false; }">
                            <input type="hidden" name="planid" value="<?php echo $_REQUEST['planid'];?>" />
                            <h2>CHECKOUT</h2>
                            <p style="text-transform:uppercase"><strong>You have selected the  <?php echo $_REQUEST['planname'];?> plan for $<?php echo $_REQUEST['price'].'.00';?></strong></p>
                            <p>We are excited to help you automate your back office! Please enter your credit card information below:</p>
                            <div id="success"></div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="firstname" class="form-control validate[required]" placeholder="First Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="lastname" class="form-control validate[required]" placeholder="Last Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="address" class="form-control validate[required]" placeholder="Address">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="city" class="form-control validate[required]" placeholder="City">
                            </div>
                            
                             <div class="form-group col-sm-6">
                            <select class="form-control  validate[required]" id="country" name="country"> 
                                <option value="">Please Select</option> 
                                <option selected="" value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="UK">United Kingdom</option>
                                <option value="AU">Australia</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BR">Brazil</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, The Democratic Republic of the</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D`Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran (Islamic Republic Of)</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea North</option>
                                <option value="KR">Korea South</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Laos</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macau</option>
                                <option value="MK">Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia</option>
                                <option value="MD">Moldova</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="NA">Namibia</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestine Autonomous</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="MP">Saipan</option>
                                <option value="SM">San Marino</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SK">Slovak Republic</option>
                                <option value="SI">Slovenia</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="KN">St. Kitts/Nevis</option>
                                <option value="LC">St. Lucia</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syria</option>
                                <option value="TW">Taiwan</option>
                                <option value="TI">Tajikistan</option>
                                <option value="TZ">Tanzania</option>
                                <option value="TH">Thailand</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (U.S.)</option>
                                <option value="WF">Wallis and Futuna Islands</option>
                                <option value="YE">Yemen</option>
                                <option value="YU">Yugoslavia</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            </div>
                            <div class="form-group col-sm-6">
                            <select  class="form-control  validate[required]" id="state" name="state">
                            <option value="">Please Select State/Province</option>
                          <optgroup label="Australian Provinces">
                              <option value="-AU-NSW">New South Wales</option>
                              <option value="-AU-QLD">Queensland</option>
                              <option value="-AU-SA">South Australia</option>
                              <option value="-AU-TAS">Tasmania</option>
                              <option value="-AU-VIC">Victoria</option>
                              <option value="-AU-WA">Western Australia</option>
                              <option value="-AU-ACT">Australian Capital Territory</option>
                              <option value="-AU-NT">Northern Territory</option>
                          </optgroup>
                          <optgroup label="Canadian Provinces">
                              <option value="AB">Alberta</option>
                              <option value="BC">British Columbia</option>
                              <option value="MB">Manitoba</option>
                              <option value="NB">New Brunswick</option>
                              <option value="NF">Newfoundland</option>
                              <option value="NT">Northwest Territories</option>
                              <option value="NS">Nova Scotia</option>
                              <option value="NVT">Nunavut</option>
                              <option value="ON">Ontario</option>
                              <option value="PE">Prince Edward Island</option>
                              <option value="QC">Quebec</option>
                              <option value="SK">Saskatchewan</option>
                              <option value="YK">Yukon</option>
                          </optgroup>
                          <optgroup label="US States">
                              <option value="AL">Alabama</option>
                              <option value="AK">Alaska</option>
                              <option value="AZ">Arizona</option>
                              <option value="AR">Arkansas</option>
                              <option value="BVI">British Virgin Islands</option>
                              <option value="CA">California</option>
                              <option value="CO">Colorado</option>
                              <option value="CT">Connecticut</option>
                              <option value="DE">Delaware</option>
                              <option value="FL">Florida</option>
                              <option value="GA">Georgia</option>
                              <option value="GU">Guam</option>
                              <option value="HI">Hawaii</option>
                              <option value="ID">Idaho</option>
                              <option value="IL">Illinois</option>
                              <option value="IN">Indiana</option>
                              <option value="IA">Iowa</option>
                              <option value="KS">Kansas</option>
                              <option value="KY">Kentucky</option>
                              <option value="LA">Louisiana</option>
                              <option value="ME">Maine</option>
                              <option value="MP">Mariana Islands</option>
                              <option value="MPI">Mariana Islands (Pacific)</option>
                              <option value="MD">Maryland</option>
                              <option value="MA">Massachusetts</option>
                              <option value="MI">Michigan</option>
                              <option value="MN">Minnesota</option>
                              <option value="MS">Mississippi</option>
                              <option value="MO">Missouri</option>
                              <option value="MT">Montana</option>
                              <option value="NE">Nebraska</option>
                              <option value="NV">Nevada</option>
                              <option value="NH">New Hampshire</option>
                              <option value="NJ">New Jersey</option>
                              <option value="NM">New Mexico</option>
                              <option value="NY">New York</option>
                              <option value="NC">North Carolina</option>
                              <option value="ND">North Dakota</option>
                              <option value="OH">Ohio</option>
                              <option value="OK">Oklahoma</option>
                              <option value="OR">Oregon</option>
                              <option value="PA">Pennsylvania</option>
                              <option value="PR">Puerto Rico</option>
                              <option value="RI">Rhode Island</option>
                              <option value="SC">South Carolina</option>
                              <option value="SD">South Dakota</option>
                              <option value="TN">Tennessee</option>
                              <option value="TX">Texas</option>
                              <option value="UT">Utah</option>
                              <option value="VT">Vermont</option>
                              <option value="USVI">VI  U.S. Virgin Islands</option>
                              <option value="VA">Virginia</option>
                              <option value="WA">Washington</option>
                              <option value="DC">Washington, D.C.</option>
                              <option value="WV">West Virginia</option>
                              <option value="WI">Wisconsin</option>
                              <option value="WY">Wyoming</option>
                          </optgroup>
                           <option value="N/A">Other</option>
                        </select>
                        </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="user_email" class="form-control validate[required,custom[email]]" placeholder="E-mail ID">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="user_phone" class="form-control validate[required]" placeholder="Phone">
                            </div>
                            
                            <div class="form-group col-sm-12">
                                <input type="text" name="full_name" class="form-control validate[required]" placeholder="Card Holder Name">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="card_number" class="form-control validate[required]" placeholder="Credit Card Number">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" name="card_cvv" class="form-control validate[required]" placeholder="CVC">
                            </div>
               
                            <div class="form-group col-sm-6">
                                <select name="expiry_month" class="form-control  validate[required]">
                                    <option value="">- Month -</option>
                                  <option value="1">01</option>
                                  <option value="2">02</option>
                                  <option value="3">03</option>
                                  <option value="4">04</option>
                                  <option value="5">05</option>
                                  <option value="6">06</option>
                                  <option value="7">07</option>
                                  <option value="8">08</option>
                                  <option value="9">09</option>
                                  <option value="10">10</option>
                                  <option value="11">11</option>
                                  <option value="12">12</option>
                                </select>
                            </div>
                         

                            <div class="form-group col-sm-6">
                            <select name="expiry_year" class="form-control  validate[required]">
                            <option value="">- Year -</option>                      
                              <?php 
                              $y=date("Y");                   
                              for($year=date("Y");$year<$y+10;$year++){?>
                              <option value="<?php echo $year;?>"><?php echo $year;?></option>
                              <?php } ?>                      
                            </select>
                            </div>
                                   <div id="terms-pane">
                                <div id="terms">
<h4 style="text-align: center; margin-bottom:1em;"><strong>TERMS AND CONDITIONS</strong></h4><br>


<p><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="font-size: 12px; text-indent: 50px;">These <strong>Terms and Conditions</strong> (these “Terms”) are entered into between Accountant in a Box, Inc., a Florida corporation (“Accountant in a Box”), and the individual or legal entity (“You,” “Your,” or “User”) participating in or using Accountant in a Box’s Website and/or Services, as defined herein.  
</p>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>IMPORTANT.  PLEASE READ THESE TERMS, AS WELL AS ACCOUNTANT IN A BOX’S PRIVACY POLICY LOCATED AT <a href="privacy.html">www.AccountantinABox.co/privacy</a>, CAREFULLY BEFORE USING ACCOUNTANT IN A BOX’S WEBSITE AND/OR SERVICES. BY CLICKING ON THE BOX LABELED “I HAVE READ AND AGREE TO THE TERMS OF SERVICE,” CLICKING ON THE “SIGN UP FOR ACCOUNTANT IN A BOX” BUTTON AT THE TIME OF REGISTERING FOR ACCOUNTANT IN A BOX’S SERVICES, AND/OR ACCESSING OR USING ACCOUNTANT IN A BOX’S WEBSITE AND/OR SERVICES AS DEFINED HEREIN, YOU ARE ACCEPTING AND AGREEING TO BE BOUND BY THESE TERMS. YOU SHOULD MAINTAIN A COPY OF THESE TERMS FOR YOUR RECORDS. </strong> </span></span></span></span></p>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>IF YOU OR THE ENTITY YOU REPRESENT DO NOT AGREE TO THESE TERMS, THEN DO NOT USE ACCOUNTANT IN A BOX’S WEBSITE AND/OR SERVICES,  DO NOT CLICK ON THE BOX LABELED “I HAVE READ AND AGREE TO THE TERMS OF SERVICE” OR THE “SIGN UP FOR ACCOUNTANT IN A BOX” BUTTON WHEN PROMPTED, AND DO NOT EXECUTE A REGISTRATION OR REGISTRATION INCORPORATING THESE TERMS. </strong></span></span></span></span></p>

<h5>1. Introduction</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Welcome to Accountant in a Box. By enrolling, registering, or creating an account with Accountant in a Box, or by using Accountant in a Box’s Website and/or Services, You, and Your agents, representatives, employees, or any other person acting on Your behalf, shall be bound by, and agree to be bound by, these Terms, the terms and conditions set forth in Accountant in a Box’s Privacy Policy, and any other terms and conditions incorporated herein by reference. </span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="text-decoration: underline;"></h5>

<h5>2. Agreement</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">These Terms describe the entire agreement between You and Accountant in a Box which governs Your use of Accountant in a Box’s Services. These Terms govern, include, and fully incorporate by reference Accountant in a Box’s Privacy Policy, all Registrations, ordering and payment terms provided to You on the Website, any additional terms provided separately to You by Accountant in a Box related to the Services, and any additional terms and conditions relating to Your use of the Services which may include those from third parties. </span></h5>

<h5>3. Definitions</h5>

<div style="margin-left:50px;">

 <p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">a. “Terms” means these Terms and Conditions. </span></span></span></span></h5>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">b. “Accountant in a Box” means Accountant in a Box, Inc., a Florida corporation, which is providing the Website and Services to You. </span></h5>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">c. “Registration” means the registration form You complete and submit in connection with the Website and/or Services provided by Accountant in a Box, which is incorporated herein by reference and is governed by these Terms.  </span></h5>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">d. “Person” means any individual, business organization, or legal entity. </span></h5>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">e. “Privacy Policy” means the Privacy Policy of Accountant in a Box, in effect at the time You register and/or use Accountant in a Box’s Website and/or Services, located at <a href="http://www.AccountantInABox.co/privacy" target="_blank">www.AccountantInABox.co/privacy</a>, which is incorporated herein by reference and shall be part of these Terms.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">f. “Service” or “Services” means all tax preparation, accounting, bookkeeping, or any other services provided to You by Accountant in a Box through any medium and by any means, including but not limited to, through Accountant in a Box’s Website, application, or a web browser.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">g. “Service Plan” or “Plan” means the individual service plan or plans You select as part of the registration process in connection with the Website and/or Services provided by Accountant in a Box, which is incorporated herein by reference and is governed by these Terms.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">h. “You,” “Your,” or “User” means any individual or entity which uses Accountant in a Box’s Website or that registers for Accountant in a Box’s Services.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">i. “Website” means Accountant in a Box’s websites located at <a href="http://www.AccountantInABox.com" target="_blank">www.AccountantInABox.com</a>  and <a href="http://www.AccountantInABox.co">www.AccountantInABox.co</a>, and all associated content, including, without limitation, all text, information, images, applications, templates software and other information, services, and materials on such website. </span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">j. “IRS” means the United States Internal Revenue Service. </span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">k. “Electronic Filing” means the filing of federal and/or state tax returns, federal and/or state payroll documents, and business entity documents, through the internet or other electronic media, as the applicable government authority may allow. </span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">l. “Quarter” means an individual, discrete, three-month period, whereby four such periods comprise a User’s fiscal year.
</span></span></span></p></span></span></span></h5>
</p></div>


<h5>4. <span style="text-decoration:underline"> Right to Access, Restrictions, and License</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Subject these Terms and until the expiration or termination of these Terms, Accountant in a Box grants to You a limited, non-exclusive, non-transferable, right to use the Website and Services, solely for Your own internal business purposes. All rights not expressly granted to You are reserved by Accountant in a Box. The right of use is at all times conditioned on compliance with these Terms, including but not limited to prompt and timely payment regarding the Services. Breach of any of these Terms, including but not limited to non-payment or delay in payment, shall terminate any right of use granted to You under these Terms. You shall not (i) license, sublicense, sell, resell, transfer, assign, distribute or otherwise commercially exploit or make available to any third party the the Website and/or Services in any way; (ii) modify or make derivative works based upon the Website and/or Services; (iii) create Internet "links" to the Website or "frame" or "mirror" any content on any other server or wireless or Internet-based device; or (iv) reverse engineer or access the Website and/or Services, (v) build a competitive product or service, (vi) build a product using similar ideas, features, functions or graphics of the Website and/or Services, or (vii) copy any ideas, features, functions or graphics of the Website and/or Services. Accountant in a Box will host and retain physical control over the Website and make such computer programs, software, and code available only through the Internet for access, use and operation by You through a web-browser. No provision under these Terms shall obligate Accountant in a Box to deliver or otherwise make available any copies of computer programs or code from the Website to You, whether in object code or source code form. Because the Website and Services are proprietary, You agree not to publish or disclose to third parties any evaluation of the Website and/or Services without Accountant in a Box’s prior written consent.</span></h5>

<h5>5. <span style="text-decoration:underline"> Modification</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant in a Box reserves the right to make changes to its policies, procedures and practices and to make changes to its hosting and technical infrastructure as deemed reasonably necessary by Accountant in a Box and in its sole discretion, without notice to You, in order to provide the Website and Services to Accountant in a Box’s customers. We recommend that You regularly review such Terms and contact us should You have any questions.</span></h5>

<h5>6. <span style="text-decoration:underline"> Services</h5>

<div style="margin-left:50px;">

<ul><li style="margin-top:1em;">a. <span style="text-decoration:underline;">Accountant in a Box Account.</span></li></ul>
 <p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Access to the Services is available at <a href="https://AccountantInABox.com" target="_blank">www.AccountantInABox.com</a>. The Services are available as paid service plans as further defined in Section 6(b). Upon registering for one or more Service Plans, you will be assigned an individual account with Accountant in a Box (an “Accountant in a Box Account”), for which Accountant in a Box will provide You a username and password with which you may access the Services and  upload Your financial documents through Accountant in a Box’s secure upload portal. All Accountant in a Box Accounts, usernames and passwords are personal, and are to be considered Confidential Information as defined in Section 9.</span></span></span></span></h5>


 <ul><li>b. <span style="text-decoration:underline;">Service Plans and Product Plans</span></li></ul>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You may purchase any of the Service Plans offered by Accountant in a Box, which include the Entrepreneur Plan, the Growth Plan and the Enterprise Plan, in order to meet Your individual needs. Accountant in a Box shall provide You with the Services specifically listed on the Website under the Service Plan that You Purchase. Accountant in a Box also offers Product Plans, which include a Single User License, 5 User Licenses and 10 User Licenses. All Product Plans shall include the Accountant In A Box dashboard with financial analytics.. Any additional Services shall only be provided upon Your request and upon Your agreement in writing to be bound by any additional written terms Accountant in a Box deems necessary, which shall be provided to You in a separate written agreement or addendum.. </span></h5>


 <ul><li>c. <span style="text-decoration:underline;">Term and Termination of Service</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant in a Box shall provide You with Services for the length of time stated in Your chosen Service Plan(s) (“Term of Service”). For example, monthly Service Plans for which Accountant in a Box provides you with Services monthly shall carry a term of one month, and Service Plans for which Accountant in a Box provides you with Services annually shall carry a term of one year (the “Initial Term”). Upon the expiration of any Initial Term, Your Service Plan(s) will <strong> automatically renew </strong> for successive renewal terms equal in duration to the Initial Term (each a “Renewal Terms”), at prices pursuant to Section 7(a) of these Terms, unless and until You specifically terminate Your relationship with Accountant in a Box. You may terminate Your Accountant in a Box Account at any time, which will be effective immediately. <strong> This is Your sole and exclusive remedy with respect to any dissatisfaction with the Website and/or Services provided by Accountant in a Box. </strong> If You wish to terminate Your Accountant in a Box Account you may do so by contacting <a href="mailto:billing@accountantinabox.com"> billing@AccountantInABox.com</a>. Should You elect to cancel Your Accountant in a Box Account, please note that You will not be issued a refund for any changes and paid fees. It is Your responsibility to keep Your contact and payment information current. You explicitly authorize Accountant in a Box to continue billing Your credit card on file until You terminate Your Accountant in a Box Account. In the event that Your credit card is invalid for payment for any reason, You shall remain responsible for any uncollected amounts. </span></h5>

 <ul><li>d. <span style="text-decoration:underline;">Scope of Services</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant in a Box shall only perform the Services set out in Your selected Service Plan(s), and/or which Accountant in a Box specifically agrees to perform in writing.  It is Your responsibility to provide all data and information required for Accountant in a Box to provide the Services requested. Accountant in a Box shall not audit or otherwise verify the data or information You provide during the course of Your selected Services. Notwithstanding the foregoing, Accountant in a Box’s professional standards require that Accountant in a Box make inquiries about User representations that seem unusual or inconsistent with the ordinary and necessary course of events regarding Accountant in a Box’s knowledge of such events, and Accountant in a Box may ask You for further clarification regarding the data or information You provide. You shall provide that clarification promptly and candidly. In most cases communications between You and Accountant in a Box regarding the Services cannot be disclosed to third parties without Your consent and approval, but may be disclosed without Your consent and approval under certain circumstances when Accountant in a Box is legally or professionally obligated to do so, or in accordance with Accountant in a Box’s Privacy Policy. Although Accountant in a Box will perform the Services to the best of its ability, Accountant in a Box cannot and has not made any guarantees regarding the outcome of any Services that Accountant in a Box performs. Any discussions that Accountant in a Box has with you about the outcome of any matter are Accountant in a Box’s best professional estimates only and are limited by Accountant in a Box’s knowledge at the time they are made. As Accountant in a Box learns about Your business, Accountant in a Box may have recommendations respecting your policies, procedures, internal controls, accounting practices, recordkeeping methods, data management, and reporting methods. Accountant in a Box will discuss these recommendations with You and seek Your affirmative written instructions prior to starting any work not specifically contained in Your Service Plan(s). </span></h5>


 <ul><li>e. <span style="text-decoration:underline;">Electronic Filing</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Any Service Plan which includes Electronic Filing is specifically limited to one (1) Electronic Filing attempt by Accountant in a Box. <strong> You are responsible for verifying the status of Your Electronically Filed items </strong> to confirm they have been accepted and received by the applicable government authorities and, if necessary, <strong> for filing manually in the event that those authorities reject your Electronically Filed items.</strong>You agree to review Your tax return and/or other Electronically Filed items for errors or omissions before they are Electronically Filed by Accountant in a Box. Any amendments to Your Electronically Filed items are not included in Accountant in a Box’s standard Electronic Filing but are instead sold separately. You consent to Accountant in a Box’s disclosure to the IRS and any other applicable government authority of all information related to Your use of Accountant in a Box’s Electronic Filing services..</span></h5>

<ul><li>f. <span style="text-decoration:underline;">Tax Advice</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Some Service Plans may include tax advice from a Accountant in a Box tax professional. To ensure a good experience and appropriate levels of coverage for everyone using the Services, the Accountant in a Box tax professional may, at his/her sole discretion, terminate any advisory communication if it is determined that You are misusing or unnecessarily extending the duration of the advisory communication. Accountant in a Box shall not provide You with any tax advice unless such advice is specifically included in Your chosen Service Plan(s), or You and Accountant in a Box agree to Accountant in a Box’s provision of such tax advice in writing.
</span></h5>



<ul><li>g. <span style="text-decoration:underline;">Third Parties</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Depending on Your individual circumstances, Accountant in a Box may, at its sole discretion, engage the services of third parties in order to adequately provide the Services to You. To facilitate Your use of the Services, Accountant in a Box may be required to obtain Your explicit consent to disclose to third parties the information You have provided to Accountant in a Box, and You shall not unreasonably withhold such consent. By agreeing to these Terms, You authorize Accountant in a Box to use and disclose Your contact information, including name and address, to third parties, for the sole purpose of making the Services available to You. Your participation in any services provided by third parties indicates Your acceptance of any additional terms and conditions which may apply to such third party services.
</span></span>
</span></p></span></span></span></h5>
</p></div>

<h5>7. <span style="text-decoration:underline"> Billing and Payment</h5>

<div style="margin-left:50px;">

<ul><li style="margin-top:1em;">a. <span style="text-decoration:underline;">Pricing</span></li></ul>
 <p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Payment for all Services shall be based upon the rates and terms as stated on the Website, or as otherwise stated or quoted to You by Accountant in a Box from time to time. All prices are exclusive of taxes (VAT or otherwise), which may or may not be added to the price, depending on applicable law and User’s legal residence. Accountant in a Box may from time to time adjust all prices, at its sole and complete discretion and without notice to You, and You will be deemed to have accepted such adjustments unless and until You terminate Your relationship with Accountant in a Box as provided in Section 6. Adjusted prices shall take effect upon any subsequent Renewal Term.</span></span></span></span></h5>


 <ul><li>b. <span style="text-decoration:underline;">Payment</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You shall pay all amounts owed to Accountant in a Box for the Services as such amounts are billed to you by Accountant in a Box. By entering Your payment information on the Website and clicking the “Sign Up For Accountant In A Box” button, You have elected to make all payments due to Accountant in a Box by allowing Accountant in a Box to automatically deduct such payments from a bank account (ACH), credit card, or other form of payment, and You have given Accountant in a Box express permission to make use of the form(s) of payment elected. You authorize Accountant in a Box to automatically deduct payment(s) as elected for the Initial Term, as well as for each subsequent Renewal Term. You agree that in the event that automatic billing is declined, expired, or returned, Accountant in a Box may automatically process any previously used automatic billing on file that was successful. If any payment is declined, charged back, or fails for any other reason, You shall reimburse Accountant in a Box for all charges incurred by Accountant in a Box as the result of any failed payment. Accountant in a Box may suspend its performance of all Services until these charges are reimbursed. You agree that Accountant in a Box shall be held harmless for any error by Accountant in a Box or any financial institution with respect to any deductions or charges. </span></h5>


 <ul><li>c. <span style="text-decoration:underline;">Billing Information</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You agree to provide Accountant in a Box with accurate billing and contact information, and You agree to update this information within fifteen days of any change to it. Accountant in a Box shall not be liable to You or to any third party for any claim resulting from Your failure to provide accurate billing and information as requested by Accountant in a Box.</span></h5>

 <ul><li>d. <span style="text-decoration:underline;">Delinquent or Fraudulent Payment</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Payment by fraudulent means will result in immediate and permanent termination of the Services, Your Accountant in a Box Account, and possible criminal penalties. Your access to the Services may be suspended if Your account is delinquent for any reason. For credit card payments, Your account will be considered delinquent if Your credit card company refuses for any reason to pay the amount billed to it and that amount remains unpaid thirty days following the billing cycle. Accountant in a Box may impose a charge to restore archived data from delinquent accounts. Unpaid charges are subject to interest of 1.5% per month on any outstanding balance, or the maximum permitted by law, whichever is greater, plus all expenses of collection. Any account which is suspended for more than thirty days will be terminated without any obligation on the part of Accountant in a Box to maintain, store or return to You any of Your data or data residing in Your Accountant in a Box Account. </span></h5>


 <ul><li>e. <span style="text-decoration:underline;">No Refunds</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant in a Box does not provide refunds for any completed Term of Service, nor does Accountant in a Box provide credits for any partially completed Term of Service. Should You wish to dispute any charges to your Accountant in a Box Account or raise any claims regarding the Services, You shall timely submit such claims or disputes to Accountant in a Box at <strong><a href="mailto:billing@AccountantInABox.com"> info@accountantinabox.com</a></strong> in writing within fifteen days of any charges, invoices, or events giving rise to such claims or disputes, otherwise You shall be deemed to have forever waived such claims or disputes, and all associated charges to your Accountant in a Box account will be final and not subject to dispute.</span></span></p></span></span></span></h5>
</p></div>

<h5>8. <span style="text-decoration:underline"> Ownership of Website, Services, and Intellectual Property</h5>

<div style="margin-left:50px;">

<ul><li style="margin-top:1em;">a. <span style="text-decoration:underline;">User Content</span></li></ul>
 <p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">User and its affiliates are, and shall remain, the sole and exclusive owners of all right, title and interest in and to the content of all data User submits to Accountant in a Box (“User Content”), including all Intellectual Property Rights therein. User hereby grants the Accountant in a Box and its affiliates a limited, irrevocable, fully paid-up, royalty-free, non-transferable, non-sublicenseable, worldwide license to use, perform, display, execute, reproduce, distribute, transmit, modify (including to create derivative works), import, make, have made, sell, offer to sell and otherwise exploit the User Content solely to the extent reasonably required in connection with User's receipt or use of the Services described herein. All other rights in and to the User Content are expressly reserved by User. Upon termination or expiration of these Terms or the Services, for any reason, this license shall automatically and immediately cease.</span></span></span></span></h5>


 <ul><li>b. <span style="text-decoration:underline;">Liability for User Content</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">User shall have sole liability and responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use any and all User Content that User submits. Accountant in a Box shall not be responsible or liable for the deletion, correction, destruction, damage, loss or failure to store any User Content, nor shall Accountant in a Box be liable for the legality of the User Content, including but not limited to circumstances in which the User Content may infringe upon the intellectual property rights of any third party. If Accountant in a Box on its own or through any third party has notice that any User Content is in violation of any law or infringes upon the rights of any third party, then Accountant in a Box shall have the unfettered right to - without liability to User - remove such User Content without prior notice to User.</span></h5>


 <ul><li>c. <span style="text-decoration:underline;">Ownership of Services and Network</span></li></ul>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant in a Box retains all ownership, right, and interest in the Website, Services, and all associated intellectual property of Accountant in a Box. Accountant in a Box’s Services are being licensed to You, not sold, for Your use in accordance with the terms and conditions set forth herein. All marks, graphics, logos, product names, service marks, domain names, trademarks, dress, trade and names, in connection with Accountant in a Box’s Website and/or Services, are the sole property of Accountant in a Box. User is strictly prohibited from using, modifying, copying or misappropriating any of Accountant in a Box’s intellectual property. Upon termination or expiration of these Terms or the Services, for any reason, this license shall automatically and immediately cease.</span></span></span></span></p></span></span></span></h5>
</p></div>
<h5>9. <span style="text-decoration:underline">Non-Disclosure and Confidentiality</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Due to the nature of the Services provided by Accountant in a Box, it is anticipated that Accountant in a Box may disclose or deliver certain trade secrets, and/or Confidential Information. “Confidential Information” includes, but is not limited to, all proprietary or business-sensitive information, whether oral, written, graphic, machine-readable or tangible form, and whether or not registered, and including all notes, plans, records, documents, computer programs and software and other evidence thereof, including without limitation all: methods, know-how, strategies, patents, patent applications, copyrights, trademarks, trade names, service marks, customer or client lists, pricing policies, operational methods, marketing plans or strategies, procurement and sales activities or methods, promotion and pricing techniques, credit and financial data, and other information, data and documents now existing or to be created, regardless of whether any of such information, data or documents qualify as a “trade secret” under applicable federal or state law. You agree to treat all information so exchanged the strictest confidence. You shall hold the Confidential Information in the strictest confidence, and except as otherwise provided herein, or as stated in Accountant in a Box’s Privacy Policy, and You shall not disclose the Confidential Information to any third party without Accountant in a Box’s written consent. You agree not to disclose any Confidential Information to any unauthorized person and promise not to use the Confidential Information for any reason other than as required in connection with the Services. Your obligations contained in this Section 9 shall survive the termination of these Terms for any reason. </span></h5>

<h5>10. <span style="text-decoration:underline">Compliance with Laws and Rules</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You agree to comply with all local, state and federal rules, regulations, and laws that apply to Your use of Accountant in a Box’s Services. You represent and warrant that You shall be in compliance with all such rules, regulations, and laws at all times prior to and while using Accountant in a Box’s Services and agree to be bound by such rules, regulations, and laws. You further agree that Accountant in a Box shall not be responsible for informing You of such rules, regulations and laws that may apply to Your use of Accountant in a Box’s Services, and that it shall be Your sole responsibility to abide such rules, regulations, and laws that may apply to Your use of the Services.  </span></h5>

<h5>11. <span style="text-decoration:underline">Prohibited Uses</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You will only use the Website and/or Services for lawful purposes, in compliance with all applicable laws including, without limitations, copyright, trademark, obscenity and defamation laws. Unlawful activities may include (without limit) storing, distributing or transmitting any unlawful material, attempting to compromise the security of any networked account or site, or making direct threats of physical harm. You shall not restrict or inhibit any other user from using Accountant in a Box’s Website and/or Services. You hereby agree to defend, indemnify and hold Accountant in a Box harmless against any claim or action that arises from Your use of the Website and/or Services in an unlawful manner or in any manner inconsistent with these Terms.  You agree that You shall not: decompile, reverse engineer, disassemble or otherwise determine or attempt to determine source code or the executable code of the Website and/or Services or create any derivative works based upon the Website and/or Services, or authorize any third party to do so; rent, lease, distribute, or resell the Services, or attempt to do any of the foregoing; or obfuscate, remove or alter any of the logos, trademarks, internet links, patent or copyright notices, confidentiality or proprietary legends or other notices or markings that are on or in the Website and/or Services or the related documentation.  You shall not and shall not allow anyone working on Your behalf to (i) perform any technical security integrity review, penetration test, load test, denial-of-service simulation or vulnerability scan without Accountant in a Box’s prior written consent, or (ii) attempt to access the data of another Accountant in a Box customer.</span></h5>

<h5>12. <span style="text-decoration:underline">Passwords and Security</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You will choose or be given all applicable passwords to use in connection with the Services and Website. You are entirely responsible for maintaining the confidentiality of Your passwords and Accountant in a Box Account (including, if applicable, the passwords and accounts of each User accessing the Website and/or Services by means of an account established by You). Furthermore, You are entirely responsible for any and all activities that occur under Your Accountant in a Box Account (including, if applicable, the accounts of each User accessing the Services by means of an account established by You), and You shall ensure that You exit from Your Accountant in a Box Account at the end of each session that You are participating in.  Passwords may not be used concurrently or shared for any purpose. You shall notify Accountant in a Box immediately of any unauthorized use of Your Accountant in a Box Account (including, if applicable, the passwords and accounts of each User accessing the Service by means of an account established by You) or any other breach of security.  Accountant in a Box will not be liable for any loss or damage arising from Your failure to comply with these requirements.</span></h5>

<h5>13. <span style="text-decoration:underline"> Privacy Policy</h5>

<p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You acknowledge that You have accessed and read the Privacy Policy and that it is a part of this Agreement, which can be located at <a href="http://www.AccountantInABox.co/privacy" target="_blank">http://www.AccountantInABox.co/privacy</a>. If there is any conflict between the terms of the Privacy Policy and these Terms, these Terms shall control.  It is Accountant in a Box's policy to respect the privacy of its Users. A copy of Accountant in a Box’s Privacy Policy is located on Accountant in a Box’s website. Accountant in a Box's Privacy Policy is subject only to Accountant in a Box 's obligation to comply with applicable laws and lawful government requests, to operate its business properly, and to protect its users and/or itself. </span></h5>


<h5>14. <span style="text-decoration:underline"> Indemnification</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You agree to defend, indemnity and hold harmless Accountant in a Box and its affiliates and their respective directors, officers, employees, and agents from any and all damages, liabilities, costs and expenses (including reasonable attorneys’ fees) (collectively “Losses”) incurred as a result of a third party claim, judgment or proceeding relating to or arising out of Your breach of any portion of these Terms or any additional terms and conditions to which You and Accountant in a Box have agreed in writing. If any action is brought against Accountant in a Box with respect to any allegation for which indemnity may be sought from You, Accountant in a Box will promptly notify You of any such claim of which it becomes aware and will (i) provide reasonable cooperation to You at Your expense in connection with the defense or settlement of any such claim and (ii) be entitled to participate at its own expense in the defense of any such claim. You shall not acquiesce to any judgment or enter into any settlement that adversely affects Accountant in a Box’s rights or interests without the prior written consent of Accountant in a Box. </span></h5>

<h5>15. <span style="text-decoration:underline"> Disclaimer of Warranties &nbsp;</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">YOUR USE OF ACCOUNTANT IN A BOX’S WEBSITE AND/OR SERVICES IS ENTIRELY AT YOUR OWN RISK. ACCOUNTANT IN A BOX’S SERVICES, WEBSITE, AND RELATED CONTENT, AS WELL AS THE WEBSITES, SERVICES, OR RELATED CONTENT OF ACCOUNTANT IN A BOX’S THIRD PARTY PROVIDERS, ARE PROVIDED TO YOU “AS IS.” TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, ACCOUNTANT IN A BOX, ITS AFFILIATES, AND ITS THIRD PARTY PROVIDERS, DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING ANY WARRANTY THAT THE SERVICES ARE FIT FOR A PARTICULAR PURPOSE, TITLE, MERCHANTABILITY, DATA LOSS, NON-INTERFERENCE WITH OR NON-INFRINGEMENT OF ANY INTELLECTUAL PROPERTY RIGHTS, OR THE ACCURACY, RELIABILITY, QUALITY, OR CONTENT IN OR LINKED TO THE SERVICES. ACCOUNTANT IN A BOX AND ITS AFFILIATES DO NOT WARRANT THAT THE WEBSITE AND/OR SERVICES ARE FREE FROM BUGS, VIRUSES, INTERRUPTION, ERRORS, THEFT, OR DESTRUCTION. IF THE EXCLUSIONS FOR IMPLIED WARRANTIES DO NOT APPLY TO YOU, ANY IMPLIED WARRANTIES ARE LIMITED TO 60 DAYS FROM THE DATE OF PURCHASE OF THE SERVICES. ACCOUNTANT IN A BOX AND ITS AFFILIATES DISCLAIM ANY REPRESENTATIONS OR WARRANTIES THAT YOUR USE OF THE SERVICES WILL SATISFY OR ENSURE COMPLIANCE WITH ANY LEGAL OBLIGATIONS, LAWS, OR REGULATIONS.</span></h5>

<h5>16. <span style="text-decoration:underline"> Limitation of Liability</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">

YOU UNDERSTAND THAT ACCOUNTANT IN A BOX WILL NOT AUDIT OR OTHERWISE VERIFY ANY INFORMATION YOU PROVIDE, AND THAT ACCOUNTANT IN A BOX IS NOT RESPONSIBLE FOR DISALLOWED DEDUCTIONS, THE INCLUSION OF ADDITIONAL UNREPORTED INCOME, OR FOR ANY ADDITIONAL TAXES, PENALTIES, OR INTEREST RESULTING THEREFROM.</span></span></span></span></p>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">

THE ENTIRE CUMULATIVE LIABILITY OF ACCOUNTANT IN A BOX AND ITS AFFILIATES FOR ANY REASON ARISING FROM OR RELATING TO THESE TERMS SHALL BE LIMITED TO THE AMOUNTS RECEIVED BY ACCOUNTANT IN A BOX FROM YOU IN THE 12 MONTHS PRIOR TO THE ACT OF INJURY THAT GAVE RISE TO LIABILITY. </span></span></span></span></p>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">

ACCOUNTANT IN A BOX SHALL NOT BE LIABLE FOR LOSS OF PROFITS OR INVESTMENT, TAX POSITIONS TAKEN BY YOU, INABILITY TO FILE YOUR DOCUMENTS, DELAY IN PREPARING YOUR DOCUMENTS, INCORRECT INCOMPLETE INFORMATION PROVIDED TO ACCOUNTANT IN A BOX, OR ANY ACCESS TO, OR USE OF, YOUR ACCOUNTANT IN A BOX ACCOUNT BY AN UNAUTHORIZED PERSON.

</span></span></span></span></p>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">

ACCOUNTANT IN A BOX SHALL NOT BE LIABLE FOR ANY DEFAULT OR DELAY IN THE PERFORMANCE OF ITS OBLIGATIONS UNDER THESE TERMS TO THE EXTEND ITS PERFORMANCE IS DELAYED OR PREVENTED DUE TO CAUSES BEYOND ITS REASONABLE CONTROL.
</span></span></span></span></p>
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">

IN NO EVENT SHALL ACCOUNTANT IN A BOX BE LIABLE FOR ANY SPECIAL, INDIRECT, INCIDENTAL OR CONSEQUENTIAL DAMAGES (INCLUDING, WITHOUT LIMITATION, FOR BREACH OF CONTRACT, WARRANTY, NEGLIGENCE OR STRICT LIABILITY), OR FOR INTERRUPTED COMMUNICATIONS, LOSS OF USE, LOST BUSINESS, LOST DATA OR LOST PROFITS (EVEN IF ACCOUNTANT IN A BOX WAS ADVISED OF THE POSSIBILITY OF ANY OF THE FOREGOING), ARISING OUT OF OR IN CONNECTION WITH THE SERVICES, OR YOUR USE OF ACCOUNTANT IN A BOX’S WEBSITE AND/OR SERVICES. ACCOUNTANT IN A BOX SHALL NOT BE RESPONSIBLE FOR ANY FAILURES ARISING FROM USER EQUIPMENT OR NEGLIGENCE OF USER.</span></span></span></span></p></span></h5>


<h5>17. <span style="text-decoration:underline"> Notices</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">All notices shall be sent to the addresses submitted by You when enrolling, registering, or creating an account with Accountant in a Box, or when using Accountant in a Box’s Website and/or Services, by certified mail, facsimile, electronic mail (e-mail) or courier.  Accountant in a Box’s Website and Services are conducted and provided electronically. Therefore, You agree that Accountant in a Box may communicate electronically with You with respect to any and all matters relating to the Website and Services. You shall send all notices required to be sent by You to Accountant in a Box either (i) by email to <a href="mailto:billing@AccountantInABox.com"> info@accountantinabox.com</a>, or (ii) by by personal delivery, nationally recognized overnight courier (with all fees pre-paid), or certified or registered mail (in each case, return receipt requested, postage prepaid) to 1025 Gateway Blvd. Suite 303-342, Boynton Beach, FL 33426. Except as otherwise provided in this Agreement, a notice is effective only (a) upon receipt of the receiving party, and (b) if the party giving the notice has complied with the requirements of this Section 17.</span></h5>

<h5>18. <span style="text-decoration:underline"> Legal Authority</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">If You are signing up for the Services on behalf of a business entity or company, You represent and warrant that: (i) the entity is qualified and licensed to do business and in good standing in every jurisdiction where such qualification and licensing is required for purposes of these Terms; (ii) You have the full right, power and authority to enter into these Terms on the entity’s behalf and to ensure the entity performs its obligations hereunder; (iii) You have taken all necessary corporate action to authorize the execution of these Terms and You are authorized to bind the entity to these Terms; and (iv) when executed and delivered by You, these Terms will constitute the legal, valid and binding obligation of the entity, enforceable against it in accordance with these Terms. If You are signing up for the Services on Your own behalf, or if You are not authorized to represent Accountant in a Box on whose behalf You purport to sign up, You agree that You are personally bound by these Terms. </span></h5>

<h5>19. <span style="text-decoration:underline"> Survival</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Each provision contained in these Terms reasonably intended by its terms to survive termination or expiration of this Agreement shall so survive.</span></h5>

<h5>20. <span style="text-decoration:underline"> Waiver</h5>
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">
No waiver by Accountant in a Box of any of the provisions of these Terms is effective unless explicitly set forth in writing and signed by Accountant in a Box. No failure to exercise, or delay in exercising, any right, remedy, power or privilege arising from this Agreement operates, or may be construed, as a waiver thereof. No single or partial exercise of any right, remedy, power or privilege hereunder precludes any other or further exercise thereof or the exercise of any other right, remedy, power or privilege.</span></h5>

<h5>21. <span style="text-decoration:underline"> Attorneys' Fees</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">If any action at law or in equity, including an action for declaratory relief, is brought to enforce or interpret any provision or provisions of these Terms, the prevailing party will be entitled to reasonable attorneys' fees in addition to all other costs associated with the action whether or not the action advances to judgment, in addition to any other relief to which that party may be entitled.</span></h5>


<h5>22. <span style="text-decoration:underline">Defined Terms</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The definitions contained in these Terms are applicable to the singular as well as to the plural forms of such terms, to the past, present, and future tenses of such terms, and to the masculine as well as to the feminine and neuter genders of such terms. Whenever the context requires, any pronouns used herein shall include the corresponding masculine, feminine or neuter forms.</span></h5>

<h5>23.&nbsp; <span style="text-decoration:underline">Miscellaneous</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">These Terms will be governed and construed in accordance with the laws of the State of Florida without giving effect to conflict of laws principles, and all federal law. You agree to submit to exclusive jurisdiction and venue in the courts of Palm Beach County, Florida. If any provision herein is held to be invalid or unenforceable for any reason, the remaining provisions will continue in full force without being impaired or invalidated in any way.  You may not assign your rights and obligations hereunder without the prior written consent of Accountant in a Box. The parties' rights and obligations will bind and inure to the benefit of their respective successors, heirs, executors and joint administrators and permitted assigns. The parties hereto are independent contractors, and no agency, partnership, joint venture or employee-employer relationship is intended or created by these Terms. These Terms, Accountant in a Box’s Privacy Policy, ordering and payment terms provided to You on the Website, any additional terms provided separately to You by Accountant in a Box related to the Services, and any additional terms and conditions relating to Your use of the Services which may include those from third parties, set forth the entire agreement of the parties and supersedes any and all prior oral or written agreements or understandings between the parties as to the subject matter hereof. Only a writing signed by both You and Accountant in a Box may change these Terms.</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>&nbsp;</strong></span></h5>

<p><em>(Last Updated July 26, 2016)</em></p>

</div>
</div>



                            <div class="form-group checkbox">
                            <label style="font-size:1em; font-family:sans-serif;">
                                <input type="checkbox" name="checkbox" value="check" id="agree"><span class="cr"><i class="cr-icon fa fa-check"></i></span> <strong>I have read and agree to the Terms of Service</strong> </label></div>

                                <div class="agree-terms"><?php 
                                if(empty($_POST['agree']) || $_POST['agree'] != 'agree') {
    echo 'Please indicate that you have read and agree to the Terms of Service';
} ?>
    </div>
                            <div class="form-group clear-m-b col-sm-12">
                            <button>Sign Up For Accountant In A Box</button>
                            </div>
                        </form>
                    </aside>
                </div>
            </div>
        </section>
        <section id="contact">
        <footer>
            <div class="container">
               <div class="footer-first-row">
                    <div class="row">
                        <aside class="col-sm-4 col-lg-5">
                            <figure class="footer-logo"><img src="images/footer-logo.png" alt=""></figure>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        </aside>
                        <aside class="col-sm-2 col-lg-2">
                            <h3>Site Map</h3>
                            <ul>
                                <li>
                                    <a href="#index.html">HOME</a>
                                </li>
                                <li>
                                    <a href="index.html#services">PRODUCT</a>
                                </li>
                                   <li> <a href="#servicesoffered">SERVICES</a></li>

                                <li>
                                    <a href="index.html#pricing">PRICING</a>
                                </li>
                                <li>
                                    <a href="index.html#xero">XERO</a>
                                </li>
                                <li>
                                    <a href="index.html#contact">CONTACT</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3 col-lg-3">
                            <h3>Address</h3>
                            <ul class="address">
                                <li>
                                    <a href="tel:+1-561-425-9196">+1 561-425-9196</a>
                                </li>
                                <li>
                                    <a href="mailto:Info@AccountantInABox.com">Info@AccountantInABox.com</a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/maps/place/26%C2%B031'54.5%22N+80%C2%B005'26.1%22W/@26.5317982,-80.0911222,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d26.531797!4d-80.090575?hl=en-US" target="_blank">Boynton Beach, FL, USA</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="col-sm-3 col-lg-2">
                            <h3>Connect with us</h3>
                            <div class="social-links">
                                <a href="https://www.facebook.com/accountantinabox" target="_blank"><img src="images/footer-fb-icon.png" alt=""></a>
                                <a href="https://twitter.com/AccountantBox" target="_blank"><img src="images/footer-twitter-icon.png" alt=""></a>
                                <a href="#"><img src="images/footer-linkedin-icon.png" alt=""></a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="footer-second-row">
                    <span class="copy-right">&copy; 2016 Accountant In A Box Inc. All rights reserved</span> 
                    <div class="footer-links">
                        <a href="checkout.php">Terms of service</a>
                        <a href="#">Privacy Policy</a>
                                        <span id="siteseal"><script async type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=fFzbrKnEGDXO31qVXBy1huXJkctKQC1oeWFpcGe2FkDx9Qf3bLvWCe7SWE2s"></script></span>
                    </div>
       
                </div>

            </div>
        </footer>
    </section>
        <span id="overlay"></span><!--transparent bg color-->
        
        <!--  ===== Video popup ===== -->
        <!-- popup box Create a new album-->
        <div class="popup-box" id="loveXeroVideo">
            <span class="popup-close-btn"></span>
            <iframe id="vimeoVideo" src="https://player.vimeo.com/video/112207060" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    
    <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
    <!-- FOR JQUERY VALIDATION -->
    <script src="js/jquery.validationEngine.js"></script>
    <script src="js/jquery.validationEngine-en.js"></script>
    <!-- FOR JQUERY VALIDATION -->
    <script src="js/common.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("#checkout").validationEngine({promptPosition : "bottomLeft",scroll:false});
        });
        
    </script>
  </body>
</html>