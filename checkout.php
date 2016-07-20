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
<h4><strong>TERMS OF SERVICE</strong></h4><br>

<p><em>These terms were updated and effective as of 
<?php 

date_default_timezone_set('America/New_York');
echo date('l jS \of F Y h:i:s A');


?>

<!-- July 20<em></span><span style="color: #000000;"><sup><span style="font-family: Arial, serif;"><span style="font-size: 12px;"></sup></span><span style="font-size: 1em;"><em>, 2016.--> Eastern Standard Time</em></p>

<p>
This is a legal agreement (&ldquo;Agreement&rdquo;) between User and Accountant In A Box Inc (d/b/a Accountant In A Box). </span></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="font-size: 12px;"><strong>BY ACCESSING AND/OR USING THE SERVICE(S), YOU ARE AGREEING, ON BEHALF OF YOURSELF AND/OR YOUR COMPANY, TO BE BOUND BY THE MOST RECENT TERMS OF THIS AGREEMENT. IF YOU DO NOT AGREE TO THE TERMS OF THIS AGREEMENT, DO NOT ACCESS AND/OR USE THE SERVICE(S).

</strong>
</p>


<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">This Agreement between Accountant In A Box, as defined in Section 23, and you, governs your use of the Accountant In A Box service, and the website (</span></span></span><a target="_blank" href="http://www.AccountantInABox.co"><span style="font-family: Arial, serif;"><span style="font-size: 12px;">www.AccountantInABox.co</span></span></a><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="font-size: 12px;">) (</span></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="font-size: 12px;"><a href="http://www.AccountantInABox.com" target="_blank">AccountantInABox.com</a></span></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="font-size: 12px;">) including, without limitation, all content such as text, information, images, applications, templates software and other information, services and materials (collectively, the &ldquo;Service&rdquo;) and all information made available to you or by you through this site by Accountant In A Box.com, Accountant In A Box Inc, and/or third parties. The "Customer" shall mean the entity or person invoiced by Accountant In A Box for use of the Service, and &ldquo;You&rdquo; or &ldquo;User&rdquo; shall mean a unique user of the Service whether a Customer or not (as defined by unique URL, IP address or other unique identification)
</span></span></span></span></p>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">This Agreement comprises the entire agreement between User and Accountant In A Box, and supersedes any and all prior or contemporaneous negotiations, discussions or agreements, whether written or oral, between the parties regarding the subject matter contained herein.</span></span></span></span></p>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box, in its sole discretion, reserves the right to revise, update and change this Agreement from time to time without notice to you, and you agree to be bound by such modifications or revisions. Any new features that augment or enhance the current Service, including the release of new features and resources, shall be subject to this Agreement. You agree to use the Service at your own risk and you understand that neither Accountant In A Box.com nor Accountant In A Box Inc., is responsible for the content posted on the Service and you nonetheless may be exposed to such material. </span></span></span></span></p>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Violation of any of the terms below will result in the termination of your Account.&nbsp;</span></span></span></span></p>

<h5>1. Service Plans</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The Service is available as a paid service plan (a &ldquo;Accountant In A Box Account&rdquo;). Each Accountant In A Box Account invoiced to and paid by the Customer in accordance with Section 2 herein comprises a single organization through </span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="text-decoration: underline;">AccountantInABox.com</span></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;<strong>or</strong>&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="text-decoration: underline;"></h5>

<h5>2. Payment</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Payment for Services under a Accountant In A Box Account shall be at prices and under terms stated on the Accountant In A Box.com website, or as otherwise stated or quoted by Accountant In A Box, from time to time. All prices are exclusive of taxes (VAT or otherwise), which may or may not be added to the price, depending on applicable law and the legal residence of the Customer.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box is entitled to adjust the prices, functionality and number of Users for the Service from time to time. Adjusted prices shall take effect upon any subsequent term of the Service.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Payment shall be made automatically by charges assessed against the Customer\' credit card or by other designated payment method, as noted on the Accountant In A Box website, or as otherwise instructed by Accountant In A Box, from time to time.&nbsp;</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">In case of non-payment for any reason or any violation of these Terms and Conditions, Accountant In A Box shall be entitled - without liability - to immediately bar Customer\'s access to the Service and bar access to the service plan in question, and to terminate Customer\' account.&nbsp; Customer agrees and acknowledges that Accountant In A Box has no obligation to retain Uploaded Data and that such Uploaded Data may be irretrievably deleted if the account is 45 days or more delinquent.</span></h5>

<h5>3. Right of Use</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">At the time of entering into this Agreement, the Customer or User is granted a non-exclusive, non-transferable, United States of America wide right to use the Service, solely for Customer\' or User\' own internal business purposes, subject to this Agreement. All rights not expressly granted to You are reserved by Accountant In A Box.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The right of use is at all times conditioned on compliance with the terms of this Agreement, and for Customer, prompt and timely payment regarding the Service. Breach of any term of this Agreement, or non-payment or delay in payment shall terminate any right of use granted to the User or Customer under this Agreement.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The Service may not be used in any way that is illegal or promotes illegal activities or in a manner that might be libelous or defamatory or otherwise malicious or harmful to any person or entity, or discriminatory based on race, sex, religion, nationality, disability, sexual orientation, or age or is otherwise indecent.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You shall not (i) license, sublicense, sell, resell, transfer, assign, distribute or otherwise commercially exploit or make available to any third party the Service in any way; (ii) modify or make derivative works based upon the Service; (iii) create Internet "links" to the Service or "frame" or "mirror" any content on any other server or wireless or Internet-based device; or (iv) reverse engineer or access the Service in order to (a) build a competitive product or service, (b) build a product using similar ideas, features, functions or graphics of the Service, or (c) copy any ideas, features, functions or graphics of the Service.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You may use the Service only for your internal business purposes and shall not: (i) send spam or otherwise duplicative or unsolicited messages in violation of applicable laws; (ii) send or store infringing, obscene, threatening, libelous, or otherwise unlawful or tortuous material, including material harmful to children or violative of third party privacy rights; (iii) send or store material containing software viruses, worms, Trojan horses or other harmful computer code, files, scripts, agents or programs; (iv) interfere with or disrupt the integrity or performance of the Service or the data contained therein; (v) attempt to gain unauthorized access to the Service or its related systems or networks; or (vi) use the Service, including the content, our intellectual property rights, Accountant In A Box technology and our trademarks and service marks for any commercial purposes (i.e. soliciting customers, resale, etc.) without our prior written consent.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">For the avoidance of doubt, any termination by either of the parties or the expiry of the term of this Agreement shall only have effect for the future, and shall have no retroactive effects. Notwithstanding the above, the rights and obligations in Sections 2, 3, 8, 10-13 and 16 shall stay in full force and effect after said expiry or termination of this Agreement.</span></h5>

<h5>4. Access</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Access to the Service is available at <a target="_blank" href="http://AccountantInABox.com">https://AccountantInABox.com</a>. Upon entering into a contract with the Customer or User, Accountant In A Box will provide the Customer or User with an online dashboard account for the organization, username and password for accessing the Service.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Access to the Service is only available to the Customer and Users, subject to compliance with these Terms and Conditions and, in the case of Customer, making the applicable payments for the Service under this Agreement.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Dashboard accounts, usernames and passwords are personal, and are to be considered part of Confidential Information. The User or Customer is at all times fully liable for all acts and omissions by Users whom the User or Customer has granted access and agrees to indemnify Accountant In A Box for all claims and losses related to such acts and omissions.&nbsp;</span></h5>

<h5>5. Service Level</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box will at all times reasonably attempt to achieve the highest possible availability and shortest possible access time of the Service, but no warranties of any kind, regarding any specific availability or time of access are granted. The Service is hosted by Accountant In A Box, or a subcontractor of its choice. All data stored as part of the Service may be backed up on a regular basis. If Customers with a paid service plan experience loss of data, Accountant In A Box may use reasonable efforts to attempt to restore data from the most recent working backup; provided, however, Accountant In A Box gives no warranties with respect to recovering or restoring any lost Customer data. The User or Customer is always encouraged to make its own backups of all data stored on the Service.</span></h5>

<h5>6. Your Responsibilities</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You are responsible for all activity occurring under your User or Customer account and shall abide by all applicable local, state, national and foreign laws, treaties and regulations in connection with your use of the Service, including those related to data privacy, international communications and the transmission of technical or personal data. In addition, you shall be responsible for abiding by any and all internal policies, procedures and regulations, which are required, by your employer and/or the applicable administrators of your account. You shall: (i) notify Accountant In A Box immediately of any unauthorized use of any password or account or any other known or suspected breach of security; (ii) report to Accountant In A Box immediately and use reasonable efforts to stop immediately any copying or distribution of content that is known or suspected by You or other users to violate this Agreement or the intellectual property rights of third parties; and (iii) not impersonate another Accountant In A Box user or provide false identity information to gain access to or use the Service.&nbsp; By accessing the Service, You represent and warrant that you have not falsely identified yourself nor provided any false information to gain access to the Service and that your billing information is correct.</span></h5>

<h5>7. Data</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box does not own any data, information or material that You or others integrate or submit to the Service in the course of using the Service ("Uploaded or Synchronized Data"). You shall have sole responsibility for the accuracy, quality, integrity, legality, reliability, appropriateness, and intellectual property ownership or right to use any and all Uploaded or Synchronized Data that You submit. Accountant In A Box shall not be responsible or liable for the deletion, correction, destruction, damage, loss or failure to store any Uploaded or Synchronized Data.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The Customer and/or User are fully liable for the legality of all Uploaded or Synchronized Data stored by the Customer and/or User on the Service. Furthermore the Customer and/or User is fully liable, if such Uploaded or Synchronized Data is infringing upon third party rights, and accordingly agrees to indemnify Accountant In A Box for all claims and losses related to such infringement and/or illegality.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">If Accountant In A Box on its own or through any third party has notice that Uploaded or Synchronized Data stored by the Customer and/or User is in violation of any law or infringes third party rights, Accountant In A Box shall have the unfettered right to - without liability to the Customer or User - immediately suspend access to such data without prior notice to the User or Customer. The Customer and/or User may be notified by Accountant In A Box of any such action under this Section, when reasonable and possible.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">For paid accounts, the administrator shall have control over all applicable Uploaded or Synchronized Data submitted to the Service, and all Uploaded or Synchronized Data will be deemed to be owned by and the property of the applicable organization. Upon request by the applicable administrator, Accountant In A Box may remove, modify, edit or otherwise alter any applicable Uploaded or Synchronized Data.</span></h5>

<h5>8. Intellectual Property Rights&nbsp;</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box alone (and its successor or assigns, or its licensors, where applicable) shall own all right, title and interest, including all related intellectual property rights, in and to the Accountant In A Box business intelligence technology, the content and the Service and any suggestions, ideas, enhancement requests, feedback, recommendations or other information provided by You or any other party relating to the Service. This Agreement is not a sale and does not convey to You any rights of ownership in or related to the Service, Accountant In A Box business intelligence technology, or intellectual property rights. The Accountant In A Box name, the Accountant In A Box logo, and the product names associated with the Service are trademarks of Accountant In A Box or its affiliated companies, and no right or license is granted to use them.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">All copyrights and/or other intellectual property rights, title and interests in a) software on which the Service is based and made available to the Customer and/or User, b) source codes or other software components of the Service, c) content of the website Accountant In A Box.com and the Service including text and graphics, excluding Uploaded or Synchronized Data, d) trademarks, names etc., are the sole property of Accountant In A Box and its affiliated companies, and/or third parties having granted Accountant In A Box license for its use, and the Customer and/or User shall gain no rights to said intellectual property rights other than the limited right of use as stipulated in this Agreement.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The Customer and/or User shall not reproduce or redistribute any software, content or trademarks, intellectual property in any form, except as allowed in this Agreement.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The Customer and/or User retain all intellectual property rights to Uploaded or Synchronized Data stored by such Customer and/or User on the Service.</span></h5>

<h5>9. Marketing</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box will not forward marketing material from third parties to Users. Accountant In A Box will forward product news relevant to User\'s use of the Service as Accountant In A Box sees fit from time to time. Data is used only in accordance with the Accountant In A Box Privacy Policy, which may be found at <a href="http://www.AccountantInABox.com/privacy">www.AccountantInABox.com/privacy.</a> </span></h5>

<h5>10. Representations &amp; Warranties</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You represent and warrant that you have the legal power and authority to enter into this Agreement. Accountant In A Box WARRANTS THAT</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(i)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">ANY SERVICES PROVIDED HEREUNDER WILL BE PERFORMED IN A PROFESSIONAL AND WORKMANLIKE MANNER;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>&nbsp;</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(ii)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>&nbsp;</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">THE SERVICES WILL PERFORM SUBSTANTIALLY IN ACCORDANCE WITH THE APPLICABLE SERVICE DOCUMENTATION UNDER NORMAL USE AND CIRCUMSTANCES; AND,</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(iii)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">THE FUNCTIONALITY OF THE SERVICES WILL NOT BE MATERIALLY DECREASED DURING THE TERM.&nbsp; Accountant In A Box\' ENTIRE LIABILITY AND YOUR EXCLUSIVE REMEDY UNDER THIS WARRANTY WILL BE, AT THE SOLE OPTION OF Accountant In A Box AND SUBJECT TO APPLICABLE LAW, TO PROVIDE RESTORED SERVICE(S) WHICH CONFORMS TO THESE WARRANTIES OR TO TERMINATE THE SERVICE(S).&nbsp;</span></h5>

<h5>11. Indemnification</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">You shall defend, indemnify and hold Accountant In A Box, its licensors and each such party\'s parent organizations, subsidiaries, affiliates, officers, directors, employees, attorneys and agents harmless from and against any and all claims, costs, damages, losses, liabilities and expenses (including attorneys' fees and costs) arising out of or in connection with: (i) a claim alleging that use of the Service or any Uploaded or Synchronized Data infringes the rights of, or has caused harm to, a third party; (ii) a claim, which if true, would constitute a violation by You of your representations and warranties made herein; or (iii) a claim arising from the breach by You or other Users of this Agreement (iv) your use of and access to the Accountant In A Box Website. This defense and indemnification obligation will survive these Terms of Service and your use of the Services.</span></h5>

<h5>12. Disclaimer of Warranties</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box AND ITS LICENSORS MAKE NO REPRESENTATION, WARRANTY, OR GUARANTY AS TO THE RELIABILITY, TIMELINESS, QUALITY, SUITABILITY, TRUTH, AVAILABILITY, ACCURACY OR COMPLETENESS OF THE SERVICE OR ANY CONTENT.&nbsp; Accountant In A Box AND ITS LICENSORS DO NOT REPRESENT OR WARRANT THAT (A) THE USE OF THE SERVICE WILL BE SECURE, TIMELY, UNINTERRUPTED OR ERROR-FREE OR OPERATE IN COMBINATION WITH ANY OTHER HARDWARE, SOFTWARE, SYSTEM OR DATA, (B) THE SERVICE WILL MEET YOUR REQUIREMENTS OR EXPECTATIONS, (C) ANY STORED DATA WILL BE ACCURATE OR RELIABLE, (D) THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL PURCHASED OR OBTAINED BY YOU THROUGH THE SERVICE WILL MEET YOUR REQUIREMENTS OR EXPECTATIONS, (E) ERRORS OR DEFECTS WILL BE CORRECTED, OR (F) THE SERVICE OR THE SERVER(S) THAT MAKE THE SERVICE AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. THE SERVICE AND ALL CONTENT IS PROVIDED TO YOU STRICTLY ON AN "AS IS" BASIS.&nbsp; ALL CONDITIONS, REPRESENTATIONS AND WARRANTIES, WHETHER EXPRESS, IMPLIED, STATUTORY OR OTHERWISE, INCLUDING, WITHOUT LIMITATION, ANY IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT OF THIRD PARTY RIGHTS, ARE HEREBY DISCLAIMED TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW BY Accountant In A Box AND ITS LICENSORS.&nbsp; Accountant In A Box IS NOT RESPONSIBLE FOR ANY DELAYS, DELIVERY FAILURES, OR OTHER DAMAGE RESULTING FROM LIMITATIONS, DELAYS, AND OTHER PROBLEMS INHERENT IN THE USE OF THE INTERNET AND ELECTRONIC COMMUNICATIONS.&nbsp;</span></h5>

<h5>13. Limitation of Liability</h5>

<p align="JUSTIFY"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">IN NO EVENT SHALL Accountant In A Box BE LIABLE FOR ANY INDIRECT, SPECIAL, CONSEQUENTIAL OR INCIDENTAL LOSS, EXEMPLARY OR OTHER DAMAGES RELATED TO THIS AGREEMENT OR WHETHER DIRECT OR INDIRECT:</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(i)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">LOSS OF DATA,</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(ii)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">LOSS OF INCOME,</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(iii)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">LOSS OF OPPORTUNITY,</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(iv)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">LOST PROFITS, AND</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(v)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">COSTS OF RECOVERY OR ANY OTHER DAMAGES; (VI) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/ OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (VII) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM OUR WEBSITE, (IV) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE, WHICH MAY BE TRANSMITTED TO OR THROUGH OUR WEBSITE BY ANY THIRD PARTY, AND/OR (VIII) ANY ERRORS OR OMISSIONS IN ANY CONTENT OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF YOUR USE OF ANY CONTENT POSTED, EMAILED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE , HOWEVER CAUSED AND BASED ON ANY THEORY OF LIABILITY, AND INCLUDING, BUT NOT LIMITED TO, BREACH OF CONTRACT, TORT (INCLUDING NEGLIGENCE), STATUTE, OR OTHERWISE, AND WHETHER OR NOT Accountant In A Box HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. TO THE EXTENT PERMITTED BY APPLICABLE LAW, Accountant In A Box\' LIABILITY HEREUNDER IS LIMITED TO $50.00. SOME JURISDICTIONS DO NOT ALLOW LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES, SO SOME OF THE ABOVE LIMITATIONS MAY NOT APPLY TO CUSTOMER.</span></h5>
<p align="JUSTIFY"><a name="_GoBack"></a> <span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">If any provision of these Terms of Service is deemed invalid by a court of competent jurisdiction, the invalidity of such provision shall not affect the validity of the remaining provisions of these Terms of Service, which shall remain in full force and effect. No waiver of any term of this these Terms of Service shall be deemed a further or continuing waiver of such term or any other term, and Accountant In A Box\' failure to assert any right or provision under these Terms of Service shall not constitute a waiver of such right or provision. Accountant In A Box reserves the right to amend these Terms of Service at any time and without notice, and it is your responsibility to review these Terms of Service for any changes. Your use of the Accountant In A Box Website following any amendment of these Terms of Service will signify your assent to and acceptance of its revised terms. YOU AND Accountant In A Box AGREE THAT ANY CAUSE OF ACTION ARISING OUT OF OR RELATED TO THE VUMEE WEBSITE MUST COMMENCE WITHIN ONE (1) YEAR AFTER THE CAUSE OF ACTION ACCRUES. OTHERWISE, SUCH CAUSE OF ACTION IS PERMANENTLY BARRED. </span></h5>


<h5>14. Force Majeure</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Neither Party will be responsible for any delay, interruption or other failure to perform under this Agreement due to acts beyond its reasonable control, but only for so long as such conditions persist. Force majeure events include, but are not limited to: natural disasters (e.g., lightning, earthquakes, hurricanes, floods); wars, riots, terrorist activities, and civil commotions; activities of local exchange carriers, telephone carriers, wireless carriers, Internet service providers, and other third parties; explosions and fires; embargoes, strikes, and labor disputes; governmental decrees; and any other cause beyond the reasonable control of a Party.&nbsp;</span></h5>

<h5>15. Personal Data. &nbsp;</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box shall maintain all data in accordance with its Privacy Policy, which may be found at <a target="_blank" href="http://www.AccountantInABox.co/privacy">http://www.AccountantInABox.co/privacy</a>.</span></h5>

<h5>16. Terms and Termination of Service</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>Month-to-Month Payment Option: </strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box Service accounts that are billed month-by-month are pre-paid and are non-refundable. </span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>Accountant In A Box DOES NOT PROVIDE REFUNDS FOR COMPLETED MONTHS OR CREDITS FOR ANY PARTIAL MONTHS OF USE OF THE SERVICE</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">. You may cancel your Accountant In A Box Account at anytime, which will be effective immediately. If you wish to cancel your Accountant In A Box Account you may do so by contacting <a href="mailto:billing@AccountantInABox.com">billing@AccountantInABox.com</a>. Should you elect to cancel your Accountant In A Box Account, please note that you will not be issued a refund for any charged and paid fees. It is your responsibility to keep your contact and payment information current. You explicitly authorize Accountant In A Box to continue billing your credit card on file with us for as long as you continue using the Service, and in the event that your credit card is invalid for payment for any reason, then you remain responsible for any uncollected amounts.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">This Month-to-Month Payment Option shall commence on the date of availability of the Services and will remain in effect for an initial term of contract as stipulated online at the Accountant In A Box website (the &ldquo;Initial Term&rdquo;).&nbsp; Upon the expiration of the Initial Term, this Agreement will </span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><span style="text-decoration: underline;">automatically renew</span></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"> for successive renewal terms equal in duration to the Initial Term at the then current fees, if applicable, unless Customer specifically terminates the Services online on Accountant In A Box’s website.</span></h5>

<h5>17. Notice</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box may give notice by means of a general notice on the Service, electronic mail to your e-mail address on record in Accountant In A Box\'s account information, or by written communication sent by first class mail or pre-paid post to your address on record in Accountant In A Box\'s account information. Such notice shall be deemed to have been given upon the expiration of 48 hours after mailing or posting (if sent by first class mail or pre-paid post) or 12 hours after sending (if sent by email).</span></h5>

<h5>18. Modification to Terms</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box reserves the right to modify the terms and conditions of this Agreement or its policies relating to the Service at any time, effective upon posting of an updated version of this Agreement on the Accountant In A Box website at</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><a  target="_blank" href="http://www.AccountantInABox.co/terms">http://www.AccountantInABox.co/terms</a>. You are responsible for regularly reviewing this Agreement. Continued use of the Service after any such changes shall constitute your consent to such changes.</span></h5>

<h5>19. Assignment</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">This Agreement may not be assigned by you without the prior written approval of Accountant In A Box, but may be assigned without your consent by Accountant In A Box to (i) a parent or subsidiary, (ii) an acquirer of assets, or (iii) a successor by merger. Any purported assignment in violation of this section shall be void.</span></h5>

<h5>20. Scope of Service</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">We will only perform the Services set out in&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>Your</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"> selected coaching plan</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">, and which we agree in writing, to perform.&nbsp;We will not audit, or otherwise verify, your data or information you provide presentation to the Internal Revenue Service during the course of this Service. However, we may ask you for further clarification and expect you to provide that clarification promptly and candidly. Also, our professional standards require that we make inquiries about representations that seem unusual or inconsistent with the ordinary and necessary course of events regarding our knowledge of these events.&nbsp;</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">It is your responsibility to provide all data required to enable us to provide the Services requested.&nbsp;Your communications with us regarding matters raised in this Service are &ldquo;confidential,&rdquo; not &ldquo;privileged&rdquo;. That means, in most cases our communications cannot be disclosed to third parties with your consent and approval.&nbsp;Although we will perform the Services to the best of our ability, we cannot and have not made any guarantees regarding the outcome of any services that we perform. Any discussions that we have with you about the outcome of any matter are our best professional estimates only and are limited by our knowledge at the time they are made. As we learn about your business, we may have recommendations respecting your policies, procedures, internal controls, accounting practices, recordkeeping methods, data management, and reporting methods.&nbsp;We will discuss these recommendations with you and seek your positive written instructions prior to starting any work.</span></h5>

<h5>21. Definitions</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>Full Bookkeeping (definition)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;includes;</span></h5>
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Accountant In A Box Responsibility: (1) verifying transactions within your accounting software, (2) matching, vouching and tying transactions from your accounting software to your financial institution documents, (3) locating missing transaction within your accounting software compared to your financial institution, (4) creating transactions within your accounting software to match your financial institution documents, (5)&nbsp;properly&nbsp;categorizing all transactions into the income statement and/or balance sheet according to Generally Accepted Accounting Principles (GAAP), (6) tailoring the company\'s chart of accounts to business needs, (7) communicating all findings to the owners, (8) ensuring proper and full use of the balance sheet according GAAP.</span></h5>
<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">User or Customer Responsibility: (1) providing financial institution documentation and information on a timely basis for further bookkeeping, (2) responding on a timely basis to communications sent by Accountant In A Box, and (3) providing any additional information as requested by your dedicated Account Manager.&nbsp;</span></h5>


<h5>22. Confidentiality</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Unless expressly authorized in writing by the other Party, neither Party shall disclose to any third party any Confidential Information of the other Party, nor use such Confidential Information in any manner other than to perform its obligations under this Agreement. </span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>Confidential Information</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">means any non-public information and/or materials provided by a Party under this Agreement to the other Party and reasonably understood to be confidential, but shall not include Uploaded or Synchronized Data.</span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">The foregoing restrictions do not apply to any information that</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(i)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">is publicly disclosed through no fault of the receiving Party,</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(ii)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">is already lawfully in the receiving Party\' possession and not subject to a confidentiality obligation to the disclosing Party,</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(iii) </strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">becomes known to the receiving Party from a third party having an apparent bona fide right to disclose the information, or</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>(iv)</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">&nbsp;</span></span><span style="color: #000000;"><span style="font-family: Arial, serif;">is Confidential Information that the receiving Party is obligated to produce pursuant to an order of a court of competent jurisdiction or a valid administrative subpoena, provided receiving Party supplies disclosing Party with timely notice of such court order or subpoena. Furthermore, Customer and User will keep in confidence all passwords and/or other access information related to the Services. Customer and User acknowledge that Accountant In A Box and its licensors retain all intellectual property rights and title, in and to, all of their Confidential Information and/or other proprietary information. This shall include, but not be limited to: products, services, and the ideas, concepts, techniques, inventions, processes, software or works of authorship developed, embodied in, or practiced in connection with the Services provided by Accountant In A Box hereunder.</span></h5>

<h5>23.&nbsp; Accountant In A Box Contracting Entity</h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>The Accountant In A Box contracting entity under this Agreement is Accountant In A Box Inc, (d/b/a AccountantInABox.com) located at 1025 Gateway Blvd Suite 303-342, Boynton Beach, Florida 33426, USA. Notices should be sent to Accountant In A Box Customer Support, with a copy to the Legal Agent: Marshall Socarras Grant, P.L. located at 197 S. Federal Hwy ,  Suite 300   Boca Raton ,  FL   33432. This Agreement is governed by the laws of the State of Delaware without regard to conflicts of laws.&nbsp; The courts having exclusive jurisdiction over matters pertaining to this Agreement are the State or Federal Courts of Delaware located in Wilmington County, Delaware.</strong></span></span><span style="color: #000000;"><span style="font-family: Arial, serif;"><strong>&nbsp;</strong></span></h5>

<p><span style="font-family: 'Times New Roman', serif;"><span style="font-size: 12px;"><span style="color: #000000;"><span style="font-family: Arial, serif;">Questions about the Terms of Service should be sent to </span></span><a href="mailto:info@AccountantInABox.com"><span style="font-family: Arial, serif;">info@AccountantInABox.com</span></a></span></span></p>

</div></div>

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
                                <a href="https://www.facebook.com/accountantinabox"><img src="images/footer-fb-icon.png" alt=""></a>
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