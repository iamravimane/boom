@extends('layouts.master')
@section('content')
<div class="container">
	<div class="row">
    	<div class="col-md-12">

            <br>
            <img class="img-responsive" src="https://www.bigmarketresearch.com/assets/images/checkout-active-status.jpg" alt="chekout-active-status"> 
            <br>
           
        </div>
    </div>
</div>
<section id="billing-information-section">
	<div class="container">
		<div class="row">
       	<form class="form-horizontal bv-form" id="checkout_form" action="https://www.bigmarketresearch.com/checkout-form-process" method="post" novalidate="novalidate">
        	<div class="col-md-8 col-sm-12 col-xs-12"> <!-- COL-MD-8 START --> 
         
                  <div class="billing-information"> 
                     <!-- billing-information starts-->
                      <div class="tab-header">
                          Billing Information
                      </div>
                      <p style="padding-left:15px;color:#000;">Personal Details (secure with us)</p>
        
                      <div class="billing-form">
                       			<input type="hidden" name="flag" value="1">
                 <input type="hidden" name="cart_id" value="710915">        
           <div class="form-group up2 has-feedback inputGroupContainer">
            <label class="control-label dwn-label col-sm-3 text-right" for="full_name">Full Name: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group "> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="full_name" id="full_name" value="" placeholder="Your full name" data-bv-field="full_name"><i class="form-control-feedback" data-bv-icon-for="full_name" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="stringLength" data-bv-validator-for="full_name" class="help-block" style="display: none;">This value is not valid</small><small data-bv-validator="notEmpty" data-bv-validator-for="full_name" class="help-block" style="display: none;">Please provide your Full Name</small><small data-bv-validator="regexp" data-bv-validator-for="full_name" class="help-block" style="display: none;">The name can only consist of alphabets and space</small></div>
          </div>
          
            
          <div class="form-group up2 has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="email_id">Business Email: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input type="text" class="form-control" name="email_id" id="email_id" value="" placeholder="Your business email" data-bv-field="email_id"><i class="form-control-feedback" data-bv-icon-for="email_id" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="email_id" class="help-block" style="display: none;">Please provide your Email address</small><small data-bv-validator="emailAddress" data-bv-validator-for="email_id" class="help-block" style="display: none;">Please provide a valid Email address</small></div>
          </div>
       
          <div class="form-group up2 inputGroupContainer has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="contact_no">Contact Number: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                <input type="text" class="form-control" name="contact_no" id="contact_no" value="" placeholder="Your contact number" data-bv-field="contact_no"><i class="form-control-feedback" data-bv-icon-for="contact_no" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="contact_no" class="help-block" style="display: none;">Please provide your Contact number</small><small data-bv-validator="regexp" data-bv-validator-for="contact_no" class="help-block" style="display: none;">Please provide valid Contact Number</small></div>
          </div>
          
          
       <div class="form-group up2 has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="company">Company Name: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" class="form-control" name="company" id="company" value="" placeholder="Your company name" data-bv-field="company"><i class="form-control-feedback" data-bv-icon-for="company" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="company" class="help-block" style="display: none;">Please provide your Company Name</small></div>
          </div>
           <div class="form-group up2">
            <label class="control-label dwn-label col-sm-3 text-right" for="company">Job Role: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input type="text" class="form-control" name="job_role" id="job_role" value="" placeholder="Your Job Role">
              </div>
              <!-- /input-group --> 
            </div>
          </div>
            <div class="form-group up2 has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="address">Address: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <input type="text" name="address" id="address" class="form-control" value="" placeholder="Your address" data-bv-field="address"><i class="form-control-feedback" data-bv-icon-for="address" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="address" class="help-block" style="display: none;">Please Enter your Address</small></div>
          </div>
            <div class="form-group up2 has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="country">Country: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <select name="country" id="country" class="form-control selectpicker" data-bv-field="country">
                  <option value="">Select Country</option>
                                    <option value="+(93)-Afghanistan">Afghanistan (+93)</option>
                                    <option value="+(355)-Albania">Albania (+355)</option>
                                    <option value="+(213)-Algeria">Algeria (+213)</option>
                                    <option value="+(1684)-American Samoa">American Samoa (+1684)</option>
                                    <option value="+(376)-Andorra">Andorra (+376)</option>
                                    <option value="+(244)-Angola">Angola (+244)</option>
                                    <option value="+(1264)-Anguilla">Anguilla (+1264)</option>
                                    <option value="+(0)-Antarctica">Antarctica (+0)</option>
                                    <option value="+(1268)-Antigua and Barbuda">Antigua and Barbuda (+1268)</option>
                                    <option value="+(54)-Argentina">Argentina (+54)</option>
                                    <option value="+(374)-Armenia">Armenia (+374)</option>
                                    <option value="+(297)-Aruba">Aruba (+297)</option>
                                    <option value="+(61)-Australia">Australia (+61)</option>
                                    <option value="+(43)-Austria">Austria (+43)</option>
                                    <option value="+(994)-Azerbaijan">Azerbaijan (+994)</option>
                                    <option value="+(1242)-Bahamas">Bahamas (+1242)</option>
                                    <option value="+(973)-Bahrain">Bahrain (+973)</option>
                                    <option value="+(880)-Bangladesh">Bangladesh (+880)</option>
                                    <option value="+(1246)-Barbados">Barbados (+1246)</option>
                                    <option value="+(375)-Belarus">Belarus (+375)</option>
                                    <option value="+(32)-Belgium">Belgium (+32)</option>
                                    <option value="+(501)-Belize">Belize (+501)</option>
                                    <option value="+(229)-Benin">Benin (+229)</option>
                                    <option value="+(1441)-Bermuda">Bermuda (+1441)</option>
                                    <option value="+(975)-Bhutan">Bhutan (+975)</option>
                                    <option value="+(591)-Bolivia">Bolivia (+591)</option>
                                    <option value="+(387)-Bosnia and Herzegovina">Bosnia and Herzegovina (+387)</option>
                                    <option value="+(267)-Botswana">Botswana (+267)</option>
                                    <option value="+(0)-Bouvet Island">Bouvet Island (+0)</option>
                                    <option value="+(55)-Brazil">Brazil (+55)</option>
                                    <option value="+(246)-British Indian Ocean Territory">British Indian Ocean Territory (+246)</option>
                                    <option value="+(673)-Brunei Darussalam">Brunei Darussalam (+673)</option>
                                    <option value="+(359)-Bulgaria">Bulgaria (+359)</option>
                                    <option value="+(226)-Burkina Faso">Burkina Faso (+226)</option>
                                    <option value="+(257)-Burundi">Burundi (+257)</option>
                                    <option value="+(855)-Cambodia">Cambodia (+855)</option>
                                    <option value="+(237)-Cameroon">Cameroon (+237)</option>
                                    <option value="+(1)-Canada">Canada (+1)</option>
                                    <option value="+(238)-Cape Verde">Cape Verde (+238)</option>
                                    <option value="+(1345)-Cayman Islands">Cayman Islands (+1345)</option>
                                    <option value="+(236)-Central African Republic">Central African Republic (+236)</option>
                                    <option value="+(235)-Chad">Chad (+235)</option>
                                    <option value="+(56)-Chile">Chile (+56)</option>
                                    <option value="+(86)-China">China (+86)</option>
                                    <option value="+(61)-Christmas Island">Christmas Island (+61)</option>
                                    <option value="+(672)-Cocos (Keeling) Islands">Cocos (Keeling) Islands (+672)</option>
                                    <option value="+(57)-Colombia">Colombia (+57)</option>
                                    <option value="+(269)-Comoros">Comoros (+269)</option>
                                    <option value="+(242)-Congo">Congo (+242)</option>
                                    <option value="+(242)-Congo, the Democratic Republic of the">Congo, the Democratic Republic of the (+242)</option>
                                    <option value="+(682)-Cook Islands">Cook Islands (+682)</option>
                                    <option value="+(506)-Costa Rica">Costa Rica (+506)</option>
                                    <option value="+(225)-Cote D'Ivoire">Cote D'Ivoire (+225)</option>
                                    <option value="+(385)-Croatia">Croatia (+385)</option>
                                    <option value="+(53)-Cuba">Cuba (+53)</option>
                                    <option value="+(357)-Cyprus">Cyprus (+357)</option>
                                    <option value="+(420)-Czech Republic">Czech Republic (+420)</option>
                                    <option value="+(45)-Denmark">Denmark (+45)</option>
                                    <option value="+(253)-Djibouti">Djibouti (+253)</option>
                                    <option value="+(1767)-Dominica">Dominica (+1767)</option>
                                    <option value="+(1809)-Dominican Republic">Dominican Republic (+1809)</option>
                                    <option value="+(593)-Ecuador">Ecuador (+593)</option>
                                    <option value="+(20)-Egypt">Egypt (+20)</option>
                                    <option value="+(503)-El Salvador">El Salvador (+503)</option>
                                    <option value="+(240)-Equatorial Guinea">Equatorial Guinea (+240)</option>
                                    <option value="+(291)-Eritrea">Eritrea (+291)</option>
                                    <option value="+(372)-Estonia">Estonia (+372)</option>
                                    <option value="+(251)-Ethiopia">Ethiopia (+251)</option>
                                    <option value="+(500)-Falkland Islands (Malvinas)">Falkland Islands (Malvinas) (+500)</option>
                                    <option value="+(298)-Faroe Islands">Faroe Islands (+298)</option>
                                    <option value="+(679)-Fiji">Fiji (+679)</option>
                                    <option value="+(358)-Finland">Finland (+358)</option>
                                    <option value="+(33)-France">France (+33)</option>
                                    <option value="+(594)-French Guiana">French Guiana (+594)</option>
                                    <option value="+(689)-French Polynesia">French Polynesia (+689)</option>
                                    <option value="+(0)-French Southern Territories">French Southern Territories (+0)</option>
                                    <option value="+(241)-Gabon">Gabon (+241)</option>
                                    <option value="+(220)-Gambia">Gambia (+220)</option>
                                    <option value="+(995)-Georgia">Georgia (+995)</option>
                                    <option value="+(49)-Germany">Germany (+49)</option>
                                    <option value="+(233)-Ghana">Ghana (+233)</option>
                                    <option value="+(350)-Gibraltar">Gibraltar (+350)</option>
                                    <option value="+(30)-Greece">Greece (+30)</option>
                                    <option value="+(299)-Greenland">Greenland (+299)</option>
                                    <option value="+(1473)-Grenada">Grenada (+1473)</option>
                                    <option value="+(590)-Guadeloupe">Guadeloupe (+590)</option>
                                    <option value="+(1671)-Guam">Guam (+1671)</option>
                                    <option value="+(502)-Guatemala">Guatemala (+502)</option>
                                    <option value="+(224)-Guinea">Guinea (+224)</option>
                                    <option value="+(245)-Guinea-Bissau">Guinea-Bissau (+245)</option>
                                    <option value="+(592)-Guyana">Guyana (+592)</option>
                                    <option value="+(509)-Haiti">Haiti (+509)</option>
                                    <option value="+(0)-Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands (+0)</option>
                                    <option value="+(39)-Holy See (Vatican City State)">Holy See (Vatican City State) (+39)</option>
                                    <option value="+(504)-Honduras">Honduras (+504)</option>
                                    <option value="+(852)-Hong Kong">Hong Kong (+852)</option>
                                    <option value="+(36)-Hungary">Hungary (+36)</option>
                                    <option value="+(354)-Iceland">Iceland (+354)</option>
                                    <option value="+(91)-India">India (+91)</option>
                                    <option value="+(62)-Indonesia">Indonesia (+62)</option>
                                    <option value="+(98)-Iran, Islamic Republic of">Iran, Islamic Republic of (+98)</option>
                                    <option value="+(964)-Iraq">Iraq (+964)</option>
                                    <option value="+(353)-Ireland">Ireland (+353)</option>
                                    <option value="+(972)-Israel">Israel (+972)</option>
                                    <option value="+(39)-Italy">Italy (+39)</option>
                                    <option value="+(1876)-Jamaica">Jamaica (+1876)</option>
                                    <option value="+(81)-Japan">Japan (+81)</option>
                                    <option value="+(962)-Jordan">Jordan (+962)</option>
                                    <option value="+(7)-Kazakhstan">Kazakhstan (+7)</option>
                                    <option value="+(254)-Kenya">Kenya (+254)</option>
                                    <option value="+(686)-Kiribati">Kiribati (+686)</option>
                                    <option value="+(850)-Korea, Democratic People's Republic of">Korea, Democratic People's Republic of (+850)</option>
                                    <option value="+(82)-Korea, Republic of">Korea, Republic of (+82)</option>
                                    <option value="+(965)-Kuwait">Kuwait (+965)</option>
                                    <option value="+(996)-Kyrgyzstan">Kyrgyzstan (+996)</option>
                                    <option value="+(856)-Lao People's Democratic Republic">Lao People's Democratic Republic (+856)</option>
                                    <option value="+(371)-Latvia">Latvia (+371)</option>
                                    <option value="+(961)-Lebanon">Lebanon (+961)</option>
                                    <option value="+(266)-Lesotho">Lesotho (+266)</option>
                                    <option value="+(231)-Liberia">Liberia (+231)</option>
                                    <option value="+(218)-Libyan Arab Jamahiriya">Libyan Arab Jamahiriya (+218)</option>
                                    <option value="+(423)-Liechtenstein">Liechtenstein (+423)</option>
                                    <option value="+(370)-Lithuania">Lithuania (+370)</option>
                                    <option value="+(352)-Luxembourg">Luxembourg (+352)</option>
                                    <option value="+(853)-Macao">Macao (+853)</option>
                                    <option value="+(389)-Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of (+389)</option>
                                    <option value="+(261)-Madagascar">Madagascar (+261)</option>
                                    <option value="+(265)-Malawi">Malawi (+265)</option>
                                    <option value="+(60)-Malaysia">Malaysia (+60)</option>
                                    <option value="+(960)-Maldives">Maldives (+960)</option>
                                    <option value="+(223)-Mali">Mali (+223)</option>
                                    <option value="+(356)-Malta">Malta (+356)</option>
                                    <option value="+(692)-Marshall Islands">Marshall Islands (+692)</option>
                                    <option value="+(596)-Martinique">Martinique (+596)</option>
                                    <option value="+(222)-Mauritania">Mauritania (+222)</option>
                                    <option value="+(230)-Mauritius">Mauritius (+230)</option>
                                    <option value="+(269)-Mayotte">Mayotte (+269)</option>
                                    <option value="+(52)-Mexico">Mexico (+52)</option>
                                    <option value="+(691)-Micronesia, Federated States of">Micronesia, Federated States of (+691)</option>
                                    <option value="+(373)-Moldova, Republic of">Moldova, Republic of (+373)</option>
                                    <option value="+(377)-Monaco">Monaco (+377)</option>
                                    <option value="+(976)-Mongolia">Mongolia (+976)</option>
                                    <option value="+(1664)-Montserrat">Montserrat (+1664)</option>
                                    <option value="+(212)-Morocco">Morocco (+212)</option>
                                    <option value="+(258)-Mozambique">Mozambique (+258)</option>
                                    <option value="+(95)-Myanmar">Myanmar (+95)</option>
                                    <option value="+(264)-Namibia">Namibia (+264)</option>
                                    <option value="+(674)-Nauru">Nauru (+674)</option>
                                    <option value="+(977)-Nepal">Nepal (+977)</option>
                                    <option value="+(31)-Netherlands">Netherlands (+31)</option>
                                    <option value="+(599)-Netherlands Antilles">Netherlands Antilles (+599)</option>
                                    <option value="+(687)-New Caledonia">New Caledonia (+687)</option>
                                    <option value="+(64)-New Zealand">New Zealand (+64)</option>
                                    <option value="+(505)-Nicaragua">Nicaragua (+505)</option>
                                    <option value="+(227)-Niger">Niger (+227)</option>
                                    <option value="+(234)-Nigeria">Nigeria (+234)</option>
                                    <option value="+(683)-Niue">Niue (+683)</option>
                                    <option value="+(672)-Norfolk Island">Norfolk Island (+672)</option>
                                    <option value="+(1670)-Northern Mariana Islands">Northern Mariana Islands (+1670)</option>
                                    <option value="+(47)-Norway">Norway (+47)</option>
                                    <option value="+(968)-Oman">Oman (+968)</option>
                                    <option value="+(92)-Pakistan">Pakistan (+92)</option>
                                    <option value="+(680)-Palau">Palau (+680)</option>
                                    <option value="+(970)-Palestinian Territory, Occupied">Palestinian Territory, Occupied (+970)</option>
                                    <option value="+(507)-Panama">Panama (+507)</option>
                                    <option value="+(675)-Papua New Guinea">Papua New Guinea (+675)</option>
                                    <option value="+(595)-Paraguay">Paraguay (+595)</option>
                                    <option value="+(51)-Peru">Peru (+51)</option>
                                    <option value="+(63)-Philippines">Philippines (+63)</option>
                                    <option value="+(0)-Pitcairn">Pitcairn (+0)</option>
                                    <option value="+(48)-Poland">Poland (+48)</option>
                                    <option value="+(351)-Portugal">Portugal (+351)</option>
                                    <option value="+(1787)-Puerto Rico">Puerto Rico (+1787)</option>
                                    <option value="+(974)-Qatar">Qatar (+974)</option>
                                    <option value="+(262)-Reunion">Reunion (+262)</option>
                                    <option value="+(40)-Romania">Romania (+40)</option>
                                    <option value="+(70)-Russian Federation">Russian Federation (+70)</option>
                                    <option value="+(250)-Rwanda">Rwanda (+250)</option>
                                    <option value="+(290)-Saint Helena">Saint Helena (+290)</option>
                                    <option value="+(1869)-Saint Kitts and Nevis">Saint Kitts and Nevis (+1869)</option>
                                    <option value="+(1758)-Saint Lucia">Saint Lucia (+1758)</option>
                                    <option value="+(508)-Saint Pierre and Miquelon">Saint Pierre and Miquelon (+508)</option>
                                    <option value="+(1784)-Saint Vincent and the Grenadines">Saint Vincent and the Grenadines (+1784)</option>
                                    <option value="+(684)-Samoa">Samoa (+684)</option>
                                    <option value="+(378)-San Marino">San Marino (+378)</option>
                                    <option value="+(239)-Sao Tome and Principe">Sao Tome and Principe (+239)</option>
                                    <option value="+(966)-Saudi Arabia">Saudi Arabia (+966)</option>
                                    <option value="+(221)-Senegal">Senegal (+221)</option>
                                    <option value="+(381)-Serbia and Montenegro">Serbia and Montenegro (+381)</option>
                                    <option value="+(248)-Seychelles">Seychelles (+248)</option>
                                    <option value="+(232)-Sierra Leone">Sierra Leone (+232)</option>
                                    <option value="+(65)-Singapore">Singapore (+65)</option>
                                    <option value="+(421)-Slovakia">Slovakia (+421)</option>
                                    <option value="+(386)-Slovenia">Slovenia (+386)</option>
                                    <option value="+(677)-Solomon Islands">Solomon Islands (+677)</option>
                                    <option value="+(252)-Somalia">Somalia (+252)</option>
                                    <option value="+(27)-South Africa">South Africa (+27)</option>
                                    <option value="+(0)-South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands (+0)</option>
                                    <option value="+(34)-Spain">Spain (+34)</option>
                                    <option value="+(94)-Sri Lanka">Sri Lanka (+94)</option>
                                    <option value="+(249)-Sudan">Sudan (+249)</option>
                                    <option value="+(597)-Suriname">Suriname (+597)</option>
                                    <option value="+(47)-Svalbard and Jan Mayen">Svalbard and Jan Mayen (+47)</option>
                                    <option value="+(268)-Swaziland">Swaziland (+268)</option>
                                    <option value="+(46)-Sweden">Sweden (+46)</option>
                                    <option value="+(41)-Switzerland">Switzerland (+41)</option>
                                    <option value="+(963)-Syrian Arab Republic">Syrian Arab Republic (+963)</option>
                                    <option value="+(886)-Taiwan, Province of China">Taiwan, Province of China (+886)</option>
                                    <option value="+(992)-Tajikistan">Tajikistan (+992)</option>
                                    <option value="+(255)-Tanzania, United Republic of">Tanzania, United Republic of (+255)</option>
                                    <option value="+(66)-Thailand">Thailand (+66)</option>
                                    <option value="+(670)-Timor-Leste">Timor-Leste (+670)</option>
                                    <option value="+(228)-Togo">Togo (+228)</option>
                                    <option value="+(690)-Tokelau">Tokelau (+690)</option>
                                    <option value="+(676)-Tonga">Tonga (+676)</option>
                                    <option value="+(1868)-Trinidad and Tobago">Trinidad and Tobago (+1868)</option>
                                    <option value="+(216)-Tunisia">Tunisia (+216)</option>
                                    <option value="+(90)-Turkey">Turkey (+90)</option>
                                    <option value="+(7370)-Turkmenistan">Turkmenistan (+7370)</option>
                                    <option value="+(1649)-Turks and Caicos Islands">Turks and Caicos Islands (+1649)</option>
                                    <option value="+(688)-Tuvalu">Tuvalu (+688)</option>
                                    <option value="+(256)-Uganda">Uganda (+256)</option>
                                    <option value="+(380)-Ukraine">Ukraine (+380)</option>
                                    <option value="+(971)-United Arab Emirates">United Arab Emirates (+971)</option>
                                    <option value="+(44)-United Kingdom">United Kingdom (+44)</option>
                                    <option value="+(1)-United States">United States (+1)</option>
                                    <option value="+(1)-United States Minor Outlying Islands">United States Minor Outlying Islands (+1)</option>
                                    <option value="+(598)-Uruguay">Uruguay (+598)</option>
                                    <option value="+(998)-Uzbekistan">Uzbekistan (+998)</option>
                                    <option value="+(678)-Vanuatu">Vanuatu (+678)</option>
                                    <option value="+(58)-Venezuela">Venezuela (+58)</option>
                                    <option value="+(84)-Viet Nam">Viet Nam (+84)</option>
                                    <option value="+(1284)-Virgin Islands, British">Virgin Islands, British (+1284)</option>
                                    <option value="+(1340)-Virgin Islands, U.S.">Virgin Islands, U.S. (+1340)</option>
                                    <option value="+(681)-Wallis and Futuna">Wallis and Futuna (+681)</option>
                                    <option value="+(212)-Western Sahara">Western Sahara (+212)</option>
                                    <option value="+(967)-Yemen">Yemen (+967)</option>
                                    <option value="+(260)-Zambia">Zambia (+260)</option>
                                    <option value="+(263)-Zimbabwe">Zimbabwe (+263)</option>
                                  </select><i class="form-control-feedback" data-bv-icon-for="country" style="display: none;"></i>
             
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="country" class="help-block" style="display: none;">Please Enter your Country</small></div>
          </div>
          
            
             <div class="form-group up2 has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="state">State: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <input type="text" name="state" id="state" class="form-control" value="" placeholder="Your state" data-bv-field="state"><i class="form-control-feedback" data-bv-icon-for="state" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="state" class="help-block" style="display: none;">Please Enter your State</small></div>
          </div>
          
             <div class="form-group up2 has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="city">City: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                <input type="text" name="city" id="city" class="form-control" value="" placeholder="Your city" data-bv-field="city"><i class="form-control-feedback" data-bv-icon-for="city" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="city" class="help-block" style="display: none;">Please Enter your City</small></div>
          </div>
           <div class="form-group up2 has-feedback">
            <label class="control-label dwn-label col-sm-3 text-right" for="zip_code">Zip/Postal Code: <span style="color:#FF0000;">*</span>: </label>
            <div class="col-sm-8">
              <div class="input-group"> <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                <input type="text" name="zip_postal" id="zip_code" class="form-control" value="" data-bv-field="zip_postal"><i class="form-control-feedback" data-bv-icon-for="zip_postal" style="display: none;"></i>
              </div>
              <!-- /input-group --> 
            <small data-bv-validator="notEmpty" data-bv-validator-for="zip_postal" class="help-block" style="display: none;">Please Enter Zip/Postal Code</small></div>
          </div>
          
          <div class="form-group up2 has-feedback"> 
         
         <label class="col-sm-3 control-label text-right">Security Code: <span style="color:#FF0000;">*</span></label>
         
            <div class="col-sm-5 disable-select">
              <div class="input-group refresh-captcha"> <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="text" name="captcha_code" class="form-control captchacode" id="security_code" data-bv-field="captcha_code"><i class="form-control-feedback" data-bv-icon-for="captcha_code" style="display: none;"></i>
                <span class="input-group-btn">
                	<button class="btn btn-default captcha-button" type="button" onclick="captchaCode();"> 
                		<span class="glyphicon glyphicon-refresh"></span> 
                	</button>
                </span> </div>
              <!-- /input-group --> 
            <small data-bv-validator="callback" data-bv-validator-for="captcha_code" class="help-block" style="display: none;">Wrong Security Code</small></div>
             <div class="col-sm-3 disable-select">
              <p id="captcha"><span id="code" style="font-size:24px;font-family:Segoe, &quot;Segoe UI&quot;, &quot;DejaVu Sans&quot;,&quot;Trebuchet MS&quot;, Verdana, sans-serif;color: transparent;  text-shadow: 0 0 0px rgba( 10, 0, 0, 10.5);" unselectable="on" onselectstart="return false" onmousedown="return false">2039</span></p>
            </div>
        </div>
         <div class="col-md-4 disable-select"></div>
            <div>Please input above shown text into input box or click <a href="javascript:void(0)" onclick="captchaCode();">refresh</a></div>
         
                        </div>   <!-- billing form ends -->
			
                        <br>
                          
                        <div class="payment-tab-header">
                            Payment Options 
                            <span style="font-size: 14px; font-weight: 400; float: right;">[ Note: We accept all types of cards ] </span>
                        </div>
                        <br>
                        <div class="row">
                        	  <div class="col-md-4 text-center">
                                <label for="paypal"><img src="https://www.bigmarketresearch.com/assets/images/paypal.png" height="50" alt="paypal" style="cursor: pointer;"> <br><br>
                                <input type="radio" name="pay_mode" value="paypal" id="paypal" checked=""></label>
                            </div>
<!--                             <div class="col-md-4 text-center">
                                <label for="2checkout"><img src="https://www.bigmarketresearch.com/assets/images/2CO.png" height="75" alt="2checkout" style="cursor: pointer;"/> <br /><br />
                                <input type="radio" name="pay_mode" value="2checkout" id="2checkout" ></label>
                            </div>  -->   
                            <div class="col-md-4 text-center">
                               <label for="wire_tran"><img src="https://www.bigmarketresearch.com/assets/images/wire-transfer.png" height="50" alt="wire-transfer" style="cursor: pointer;"> <br><br>
                               <input type="radio" name="pay_mode" value="wire-transfer" id="wire_tran"></label>
                            </div>
                            <div class="col-md-4 text-center">
                               <label for="ccavenue"><img src="https://www.bigmarketresearch.com/assets/images/ccavenue.PNG" height="50" alt="ccavenue" style="cursor: pointer;"> <br><br>
                               <input type="radio" name="pay_mode" value="ccavenue" id="ccavenue"></label>
                            </div> <br>
							              <div class="col-md-4 text-center" style="margin-left: -15px;padding-top: 8px;">        
							                 <button type="submit" class="btn payment-button pull-right" id="checkout_button" style="margin-bottom: 10px;margin-right: -66px;">
							                   <span class="glyphicon glyphicon-play"></span> &nbsp;&nbsp; CONTINUE TO SECURE PAYMENT
							                 </button>
						                </div> 
                        </div>      
                        
                  </div> <!-- billing-information ends-->
                  <br>
<!--                   <div class="form-group">        
                    <div class="col-sm-12">
                      <button type="submit" class="btn payment-button pull-right" id="checkout_button">
                      <span class="glyphicon glyphicon-play"></span> &nbsp;&nbsp; CONTINUE TO SECURE PAYMENT</button>
                    </div>
                  </div> -->

            
              </div>  <!-- COL-MD-8 ENDS --> 
            
            <div class="col-md-4 col-sm-12 col-xs-12"> <!-- COL-MD-4 START -->
               
                <div class="report-box">
                	<h4 style="font-weight: 700;">Selected Reports:</h4>
                                        <div class="report-box-details">
                    	<p style="color:#1b5270; margin-top:0px;font-weight: 700;">Global Food Service Equipment Market  by Product (Cooking Equipment, Storage and Handling Equipment, Warewashing Equipment, Food &amp; Beverage Preparation Equipment, and Serving Equipment) and End Use (Full-service Restaurants &amp; Hotels, Quick-Service Restaurants and Pubs, and Caterings) - Global Opportunity Analysis and Industry Forecast, 2018-2025</p>
                        <p style="color:#2d2d2d; font-weight:400;"><strong>Price:</strong> &nbsp;&nbsp; $5370</p>
                        <p style="color:#2d2d2d; font-weight:300;"><strong>License Type:</strong> Single User PDF</p>
                           
                    </div> 
                   
                      
                </div>
                
                <div class="clearfix"></div>
             
                <input type="hidden" name="total_price" value="5370" id="total_price">
                  <input type="hidden" name="currency" value="USD" id="currency">
                <div class="total-cost">
                	<span style="color:#d88817;font-weight:700;">Total Cost</span>
                    <span class="pull-right" style="color:#f0ad4e; font-weight:700;"> $ 5370</span>
                </div>
                
                <div class="clearfix">&nbsp;</div>
                 
                 
                <div class="buy-now-content text-center">
                    <p class="need-more">Need More <span>Information</span></p>
                    <p class="rd-contact"> Contact us <br>
                        <strong>
                            Call us +1-971-202-1575 <br>
                        </strong>
                           ------------------------------ <br>    
                            U.S. - Canada toll Free <br>
                        <strong>     
                            Call us +1-800-910-6452 <br>
                            --- or --- <br>
                            help@bigmarketresearch.com
                        </strong>
                   </p>
                </div>
    
            </div> <!-- COL-MD-3 END -->
            <input type="hidden" value=""></form>
        </div>
	</div>
</section>
@stop