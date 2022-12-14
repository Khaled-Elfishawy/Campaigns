@extends('layouts.app')
@section('main')
<div class="card card-flush pt-3 mb-5 mb-xl-10">
	<!--begin::Card header-->
	<div class="card-header">
		<!--begin::Card title-->
		<div class="card-title">
			<h2 class="fw-bold">Edit Sales</h2>
		</div>
		<!--begin::Card title-->
	</div>
	<!--end::Card header-->
	<form method="POST">
		@csrf
		<!--begin::Card body-->
		<div class="card-body pt-3">
			<!--begin::Section-->
			<div class="mb-10">
				<!--begin::Title-->
				<h5 class="mb-4">Base Details:</h5>
				<!--end::Title-->
				<!--begin::Details-->
				<div class="d-flex flex-wrap py-5">
					<!--begin::Row-->
					<div class="flex-equal me-5">
						<!--begin::Details-->
						<table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
							<!--begin::Row-->
							<tbody><tr>
								<td class="text-gray-400 min-w-175px w-175px">Name:</td>
								<td class="text-gray-800 min-w-200px">
									<input type="text" name="name" class="form-control" value="{{$sales->name}}">
								</td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Email:</td>
								<td class="text-gray-800">
									<input type="text" name="email" class="form-control" value="{{$sales->email}}">
								</td>
							</tr>
							<!--end::Row-->
							<!--begin::Row-->
							<tr>
								<td class="text-gray-400">Country:</td>
								<td class="text-gray-800">
						            <select id="country" name="country" class="form-control">
									    <option @if($sales->country == "AF") selected @endif value="AF">Afghanistan</option>
									    <option @if($sales->country == "AX") selected @endif value="AX">Åland Islands</option>
									    <option @if($sales->country == "AL") selected @endif value="AL">Albania</option>
									    <option @if($sales->country == "DZ") selected @endif value="DZ">Algeria</option>
									    <option @if($sales->country == "AS") selected @endif value="AS">American Samoa</option>
									    <option @if($sales->country == "AD") selected @endif value="AD">Andorra</option>
									    <option @if($sales->country == "AO") selected @endif value="AO">Angola</option>
									    <option @if($sales->country == "AI") selected @endif value="AI">Anguilla</option>
									    <option @if($sales->country == "AQ") selected @endif value="AQ">Antarctica</option>
									    <option @if($sales->country == "AG") selected @endif value="AG">Antigua and Barbuda</option>
									    <option @if($sales->country == "AR") selected @endif value="AR">Argentina</option>
									    <option @if($sales->country == "AM") selected @endif value="AM">Armenia</option>
									    <option @if($sales->country == "AW") selected @endif value="AW">Aruba</option>
									    <option @if($sales->country == "AU") selected @endif value="AU">Australia</option>
									    <option @if($sales->country == "AT") selected @endif value="AT">Austria</option>
									    <option @if($sales->country == "AZ") selected @endif value="AZ">Azerbaijan</option>
									    <option @if($sales->country == "BS") selected @endif value="BS">Bahamas</option>
									    <option @if($sales->country == "BH") selected @endif value="BH">Bahrain</option>
									    <option @if($sales->country == "BD") selected @endif value="BD">Bangladesh</option>
									    <option @if($sales->country == "BB") selected @endif value="BB">Barbados</option>
									    <option @if($sales->country == "BY") selected @endif value="BY">Belarus</option>
									    <option @if($sales->country == "BE") selected @endif value="BE">Belgium</option>
									    <option @if($sales->country == "BZ") selected @endif value="BZ">Belize</option>
									    <option @if($sales->country == "BJ") selected @endif value="BJ">Benin</option>
									    <option @if($sales->country == "BM") selected @endif value="BM">Bermuda</option>
									    <option @if($sales->country == "BT") selected @endif value="BT">Bhutan</option>
									    <option @if($sales->country == "BO") selected @endif value="BO">Bolivia, Plurinational State of</option>
									    <option @if($sales->country == "BQ") selected @endif value="BQ">Bonaire, Sint Eustatius and Saba</option>
									    <option @if($sales->country == "BA") selected @endif value="BA">Bosnia and Herzegovina</option>
									    <option @if($sales->country == "BW") selected @endif value="BW">Botswana</option>
									    <option @if($sales->country == "BV") selected @endif value="BV">Bouvet Island</option>
									    <option @if($sales->country == "BR") selected @endif value="BR">Brazil</option>
									    <option @if($sales->country == "IO") selected @endif value="IO">British Indian Ocean Territory</option>
									    <option @if($sales->country == "BN") selected @endif value="BN">Brunei Darussalam</option>
									    <option @if($sales->country == "BG") selected @endif value="BG">Bulgaria</option>
									    <option @if($sales->country == "BF") selected @endif value="BF">Burkina Faso</option>
									    <option @if($sales->country == "BI") selected @endif value="BI">Burundi</option>
									    <option @if($sales->country == "KH") selected @endif value="KH">Cambodia</option>
									    <option @if($sales->country == "CM") selected @endif value="CM">Cameroon</option>
									    <option @if($sales->country == "CA") selected @endif value="CA">Canada</option>
									    <option @if($sales->country == "CV") selected @endif value="CV">Cape Verde</option>
									    <option @if($sales->country == "KY") selected @endif value="KY">Cayman Islands</option>
									    <option @if($sales->country == "CF") selected @endif value="CF">Central African Republic</option>
									    <option @if($sales->country == "TD") selected @endif value="TD">Chad</option>
									    <option @if($sales->country == "CL") selected @endif value="CL">Chile</option>
									    <option @if($sales->country == "CN") selected @endif value="CN">China</option>
									    <option @if($sales->country == "CX") selected @endif value="CX">Christmas Island</option>
									    <option @if($sales->country == "CC") selected @endif value="CC">Cocos (Keeling) Islands</option>
									    <option @if($sales->country == "CO") selected @endif value="CO">Colombia</option>
									    <option @if($sales->country == "KM") selected @endif value="KM">Comoros</option>
									    <option @if($sales->country == "CG") selected @endif value="CG">Congo</option>
									    <option @if($sales->country == "CD") selected @endif value="CD">Congo, the Democratic Republic of the</option>
									    <option @if($sales->country == "CK") selected @endif value="CK">Cook Islands</option>
									    <option @if($sales->country == "CR") selected @endif value="CR">Costa Rica</option>
									    <option @if($sales->country == "CI") selected @endif value="CI">Côte d'Ivoire</option>
									    <option @if($sales->country == "HR") selected @endif value="HR">Croatia</option>
									    <option @if($sales->country == "CU") selected @endif value="CU">Cuba</option>
									    <option @if($sales->country == "CW") selected @endif value="CW">Curaçao</option>
									    <option @if($sales->country == "CY") selected @endif value="CY">Cyprus</option>
									    <option @if($sales->country == "CZ") selected @endif value="CZ">Czech Republic</option>
									    <option @if($sales->country == "DK") selected @endif value="DK">Denmark</option>
									    <option @if($sales->country == "DJ") selected @endif value="DJ">Djibouti</option>
									    <option @if($sales->country == "DM") selected @endif value="DM">Dominica</option>
									    <option @if($sales->country == "DO") selected @endif value="DO">Dominican Republic</option>
									    <option @if($sales->country == "EC") selected @endif value="EC">Ecuador</option>
									    <option @if($sales->country == "EG") selected @endif value="EG">Egypt</option>
									    <option @if($sales->country == "SV") selected @endif value="SV">El Salvador</option>
									    <option @if($sales->country == "GQ") selected @endif value="GQ">Equatorial Guinea</option>
									    <option @if($sales->country == "ER") selected @endif value="ER">Eritrea</option>
									    <option @if($sales->country == "EE") selected @endif value="EE">Estonia</option>
									    <option @if($sales->country == "ET") selected @endif value="ET">Ethiopia</option>
									    <option @if($sales->country == "FK") selected @endif value="FK">Falkland Islands (Malvinas)</option>
									    <option @if($sales->country == "FO") selected @endif value="FO">Faroe Islands</option>
									    <option @if($sales->country == "FJ") selected @endif value="FJ">Fiji</option>
									    <option @if($sales->country == "FI") selected @endif value="FI">Finland</option>
									    <option @if($sales->country == "FR") selected @endif value="FR">France</option>
									    <option @if($sales->country == "GF") selected @endif value="GF">French Guiana</option>
									    <option @if($sales->country == "PF") selected @endif value="PF">French Polynesia</option>
									    <option @if($sales->country == "TF") selected @endif value="TF">French Southern Territories</option>
									    <option @if($sales->country == "GA") selected @endif value="GA">Gabon</option>
									    <option @if($sales->country == "GM") selected @endif value="GM">Gambia</option>
									    <option @if($sales->country == "GE") selected @endif value="GE">Georgia</option>
									    <option @if($sales->country == "DE") selected @endif value="DE">Germany</option>
									    <option @if($sales->country == "GH") selected @endif value="GH">Ghana</option>
									    <option @if($sales->country == "GI") selected @endif value="GI">Gibraltar</option>
									    <option @if($sales->country == "GR") selected @endif value="GR">Greece</option>
									    <option @if($sales->country == "GL") selected @endif value="GL">Greenland</option>
									    <option @if($sales->country == "GD") selected @endif value="GD">Grenada</option>
									    <option @if($sales->country == "GP") selected @endif value="GP">Guadeloupe</option>
									    <option @if($sales->country == "GU") selected @endif value="GU">Guam</option>
									    <option @if($sales->country == "GT") selected @endif value="GT">Guatemala</option>
									    <option @if($sales->country == "GG") selected @endif value="GG">Guernsey</option>
									    <option @if($sales->country == "GN") selected @endif value="GN">Guinea</option>
									    <option @if($sales->country == "GW") selected @endif value="GW">Guinea-Bissau</option>
									    <option @if($sales->country == "GY") selected @endif value="GY">Guyana</option>
									    <option @if($sales->country == "HT") selected @endif value="HT">Haiti</option>
									    <option @if($sales->country == "HM") selected @endif value="HM">Heard Island and McDonald Islands</option>
									    <option @if($sales->country == "VA") selected @endif value="VA">Holy See (Vatican City State)</option>
									    <option @if($sales->country == "HN") selected @endif value="HN">Honduras</option>
									    <option @if($sales->country == "HK") selected @endif value="HK">Hong Kong</option>
									    <option @if($sales->country == "HU") selected @endif value="HU">Hungary</option>
									    <option @if($sales->country == "IS") selected @endif value="IS">Iceland</option>
									    <option @if($sales->country == "IN") selected @endif value="IN">India</option>
									    <option @if($sales->country == "ID") selected @endif value="ID">Indonesia</option>
									    <option @if($sales->country == "IR") selected @endif value="IR">Iran, Islamic Republic of</option>
									    <option @if($sales->country == "IQ") selected @endif value="IQ">Iraq</option>
									    <option @if($sales->country == "IE") selected @endif value="IE">Ireland</option>
									    <option @if($sales->country == "IM") selected @endif value="IM">Isle of Man</option>
									    <option @if($sales->country == "IL") selected @endif value="IL">Israel</option>
									    <option @if($sales->country == "IT") selected @endif value="IT">Italy</option>
									    <option @if($sales->country == "JM") selected @endif value="JM">Jamaica</option>
									    <option @if($sales->country == "JP") selected @endif value="JP">Japan</option>
									    <option @if($sales->country == "JE") selected @endif value="JE">Jersey</option>
									    <option @if($sales->country == "JO") selected @endif value="JO">Jordan</option>
									    <option @if($sales->country == "KZ") selected @endif value="KZ">Kazakhstan</option>
									    <option @if($sales->country == "KE") selected @endif value="KE">Kenya</option>
									    <option @if($sales->country == "KI") selected @endif value="KI">Kiribati</option>
									    <option @if($sales->country == "KP") selected @endif value="KP">Korea, Democratic People's Republic of</option>
									    <option @if($sales->country == "KR") selected @endif value="KR">Korea, Republic of</option>
									    <option @if($sales->country == "KW") selected @endif value="KW">Kuwait</option>
									    <option @if($sales->country == "KG") selected @endif value="KG">Kyrgyzstan</option>
									    <option @if($sales->country == "LA") selected @endif value="LA">Lao People's Democratic Republic</option>
									    <option @if($sales->country == "LV") selected @endif value="LV">Latvia</option>
									    <option @if($sales->country == "LB") selected @endif value="LB">Lebanon</option>
									    <option @if($sales->country == "LS") selected @endif value="LS">Lesotho</option>
									    <option @if($sales->country == "LR") selected @endif value="LR">Liberia</option>
									    <option @if($sales->country == "LY") selected @endif value="LY">Libya</option>
									    <option @if($sales->country == "LI") selected @endif value="LI">Liechtenstein</option>
									    <option @if($sales->country == "LT") selected @endif value="LT">Lithuania</option>
									    <option @if($sales->country == "LU") selected @endif value="LU">Luxembourg</option>
									    <option @if($sales->country == "MO") selected @endif value="MO">Macao</option>
									    <option @if($sales->country == "MK") selected @endif value="MK">Macedonia, the former Yugoslav Republic of</option>
									    <option @if($sales->country == "MG") selected @endif value="MG">Madagascar</option>
									    <option @if($sales->country == "MW") selected @endif value="MW">Malawi</option>
									    <option @if($sales->country == "MY") selected @endif value="MY">Malaysia</option>
									    <option @if($sales->country == "MV") selected @endif value="MV">Maldives</option>
									    <option @if($sales->country == "ML") selected @endif value="ML">Mali</option>
									    <option @if($sales->country == "MT") selected @endif value="MT">Malta</option>
									    <option @if($sales->country == "MH") selected @endif value="MH">Marshall Islands</option>
									    <option @if($sales->country == "MQ") selected @endif value="MQ">Martinique</option>
									    <option @if($sales->country == "MR") selected @endif value="MR">Mauritania</option>
									    <option @if($sales->country == "MU") selected @endif value="MU">Mauritius</option>
									    <option @if($sales->country == "YT") selected @endif value="YT">Mayotte</option>
									    <option @if($sales->country == "MX") selected @endif value="MX">Mexico</option>
									    <option @if($sales->country == "FM") selected @endif value="FM">Micronesia, Federated States of</option>
									    <option @if($sales->country == "MD") selected @endif value="MD">Moldova, Republic of</option>
									    <option @if($sales->country == "MC") selected @endif value="MC">Monaco</option>
									    <option @if($sales->country == "MN") selected @endif value="MN">Mongolia</option>
									    <option @if($sales->country == "ME") selected @endif value="ME">Montenegro</option>
									    <option @if($sales->country == "MS") selected @endif value="MS">Montserrat</option>
									    <option @if($sales->country == "MA") selected @endif value="MA">Morocco</option>
									    <option @if($sales->country == "MZ") selected @endif value="MZ">Mozambique</option>
									    <option @if($sales->country == "MM") selected @endif value="MM">Myanmar</option>
									    <option @if($sales->country == "NA") selected @endif value="NA">Namibia</option>
									    <option @if($sales->country == "NR") selected @endif value="NR">Nauru</option>
									    <option @if($sales->country == "NP") selected @endif value="NP">Nepal</option>
									    <option @if($sales->country == "NL") selected @endif value="NL">Netherlands</option>
									    <option @if($sales->country == "NC") selected @endif value="NC">New Caledonia</option>
									    <option @if($sales->country == "NZ") selected @endif value="NZ">New Zealand</option>
									    <option @if($sales->country == "NI") selected @endif value="NI">Nicaragua</option>
									    <option @if($sales->country == "NE") selected @endif value="NE">Niger</option>
									    <option @if($sales->country == "NG") selected @endif value="NG">Nigeria</option>
									    <option @if($sales->country == "NU") selected @endif value="NU">Niue</option>
									    <option @if($sales->country == "NF") selected @endif value="NF">Norfolk Island</option>
									    <option @if($sales->country == "MP") selected @endif value="MP">Northern Mariana Islands</option>
									    <option @if($sales->country == "NO") selected @endif value="NO">Norway</option>
									    <option @if($sales->country == "OM") selected @endif value="OM">Oman</option>
									    <option @if($sales->country == "PK") selected @endif value="PK">Pakistan</option>
									    <option @if($sales->country == "PW") selected @endif value="PW">Palau</option>
									    <option @if($sales->country == "PS") selected @endif value="PS">Palestinian Territory, Occupied</option>
									    <option @if($sales->country == "PA") selected @endif value="PA">Panama</option>
									    <option @if($sales->country == "PG") selected @endif value="PG">Papua New Guinea</option>
									    <option @if($sales->country == "PY") selected @endif value="PY">Paraguay</option>
									    <option @if($sales->country == "PE") selected @endif value="PE">Peru</option>
									    <option @if($sales->country == "PH") selected @endif value="PH">Philippines</option>
									    <option @if($sales->country == "PN") selected @endif value="PN">Pitcairn</option>
									    <option @if($sales->country == "PL") selected @endif value="PL">Poland</option>
									    <option @if($sales->country == "PT") selected @endif value="PT">Portugal</option>
									    <option @if($sales->country == "PR") selected @endif value="PR">Puerto Rico</option>
									    <option @if($sales->country == "QA") selected @endif value="QA">Qatar</option>
									    <option @if($sales->country == "RE") selected @endif value="RE">Réunion</option>
									    <option @if($sales->country == "RO") selected @endif value="RO">Romania</option>
									    <option @if($sales->country == "RU") selected @endif value="RU">Russian Federation</option>
									    <option @if($sales->country == "RW") selected @endif value="RW">Rwanda</option>
									    <option @if($sales->country == "BL") selected @endif value="BL">Saint Barthélemy</option>
									    <option @if($sales->country == "SH") selected @endif value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
									    <option @if($sales->country == "KN") selected @endif value="KN">Saint Kitts and Nevis</option>
									    <option @if($sales->country == "LC") selected @endif value="LC">Saint Lucia</option>
									    <option @if($sales->country == "MF") selected @endif value="MF">Saint Martin (French part)</option>
									    <option @if($sales->country == "PM") selected @endif value="PM">Saint Pierre and Miquelon</option>
									    <option @if($sales->country == "VC") selected @endif value="VC">Saint Vincent and the Grenadines</option>
									    <option @if($sales->country == "WS") selected @endif value="WS">Samoa</option>
									    <option @if($sales->country == "SM") selected @endif value="SM">San Marino</option>
									    <option @if($sales->country == "ST") selected @endif value="ST">Sao Tome and Principe</option>
									    <option @if($sales->country == "SA") selected @endif value="SA">Saudi Arabia</option>
									    <option @if($sales->country == "SN") selected @endif value="SN">Senegal</option>
									    <option @if($sales->country == "RS") selected @endif value="RS">Serbia</option>
									    <option @if($sales->country == "SC") selected @endif value="SC">Seychelles</option>
									    <option @if($sales->country == "SL") selected @endif value="SL">Sierra Leone</option>
									    <option @if($sales->country == "SG") selected @endif value="SG">Singapore</option>
									    <option @if($sales->country == "SX") selected @endif value="SX">Sint Maarten (Dutch part)</option>
									    <option @if($sales->country == "SK") selected @endif value="SK">Slovakia</option>
									    <option @if($sales->country == "SI") selected @endif value="SI">Slovenia</option>
									    <option @if($sales->country == "SB") selected @endif value="SB">Solomon Islands</option>
									    <option @if($sales->country == "SO") selected @endif value="SO">Somalia</option>
									    <option @if($sales->country == "ZA") selected @endif value="ZA">South Africa</option>
									    <option @if($sales->country == "GS") selected @endif value="GS">South Georgia and the South Sandwich Islands</option>
									    <option @if($sales->country == "SS") selected @endif value="SS">South Sudan</option>
									    <option @if($sales->country == "ES") selected @endif value="ES">Spain</option>
									    <option @if($sales->country == "LK") selected @endif value="LK">Sri Lanka</option>
									    <option @if($sales->country == "SD") selected @endif value="SD">Sudan</option>
									    <option @if($sales->country == "SR") selected @endif value="SR">Suriname</option>
									    <option @if($sales->country == "SJ") selected @endif value="SJ">Svalbard and Jan Mayen</option>
									    <option @if($sales->country == "SZ") selected @endif value="SZ">Swaziland</option>
									    <option @if($sales->country == "SE") selected @endif value="SE">Sweden</option>
									    <option @if($sales->country == "CH") selected @endif value="CH">Switzerland</option>
									    <option @if($sales->country == "SY") selected @endif value="SY">Syrian Arab Republic</option>
									    <option @if($sales->country == "TW") selected @endif value="TW">Taiwan, Province of China</option>
									    <option @if($sales->country == "TJ") selected @endif value="TJ">Tajikistan</option>
									    <option @if($sales->country == "TZ") selected @endif value="TZ">Tanzania, United Republic of</option>
									    <option @if($sales->country == "TH") selected @endif value="TH">Thailand</option>
									    <option @if($sales->country == "TL") selected @endif value="TL">Timor-Leste</option>
									    <option @if($sales->country == "TG") selected @endif value="TG">Togo</option>
									    <option @if($sales->country == "TK") selected @endif value="TK">Tokelau</option>
									    <option @if($sales->country == "TO") selected @endif value="TO">Tonga</option>
									    <option @if($sales->country == "TT") selected @endif value="TT">Trinidad and Tobago</option>
									    <option @if($sales->country == "TN") selected @endif value="TN">Tunisia</option>
									    <option @if($sales->country == "TR") selected @endif value="TR">Turkey</option>
									    <option @if($sales->country == "TM") selected @endif value="TM">Turkmenistan</option>
									    <option @if($sales->country == "TC") selected @endif value="TC">Turks and Caicos Islands</option>
									    <option @if($sales->country == "TV") selected @endif value="TV">Tuvalu</option>
									    <option @if($sales->country == "UG") selected @endif value="UG">Uganda</option>
									    <option @if($sales->country == "UA") selected @endif value="UA">Ukraine</option>
									    <option @if($sales->country == "AE") selected @endif value="AE">United Arab Emirates</option>
									    <option @if($sales->country == "GB") selected @endif value="GB">United Kingdom</option>
									    <option @if($sales->country == "US") selected @endif value="US">United States</option>
									    <option @if($sales->country == "UM") selected @endif value="UM">United States Minor Outlying Islands</option>
									    <option @if($sales->country == "UY") selected @endif value="UY">Uruguay</option>
									    <option @if($sales->country == "UZ") selected @endif value="UZ">Uzbekistan</option>
									    <option @if($sales->country == "VU") selected @endif value="VU">Vanuatu</option>
									    <option @if($sales->country == "VE") selected @endif value="VE">Venezuela, Bolivarian Republic of</option>
									    <option @if($sales->country == "VN") selected @endif value="VN">Viet Nam</option>
									    <option @if($sales->country == "VG") selected @endif value="VG">Virgin Islands, British</option>
									    <option @if($sales->country == "VI") selected @endif value="VI">Virgin Islands, U.S.</option>
									    <option @if($sales->country == "WF") selected @endif value="WF">Wallis and Futuna</option>
									    <option @if($sales->country == "EH") selected @endif value="EH">Western Sahara</option>
									    <option @if($sales->country == "YE") selected @endif value="YE">Yemen</option>
									    <option @if($sales->country == "ZM") selected @endif value="ZM">Zambia</option>
									    <option @if($sales->country == "ZW") selected @endif value="ZW">Zimbabwe</option>
									</select>								
								</td>
							</tr>
							<!--end::Row-->
						</tbody></table>
						<!--end::Details-->
					</div>
					<!--end::Row-->
					<!--begin::Row-->
					<div class="flex-equal">
						<!--begin::Details-->
						<table class="table fs-6 fw-semibold gs-0 gy-2 gx-2 m-0">
							<!--begin::Row-->
							<tbody>
								<tr>
									<td class="text-gray-400 min-w-175px w-175px">Password:</td>
									<td class="text-gray-800 min-w-200px">
										<input type="password" name="password" class="form-control" value="">
									</td>
								</tr>
								<!--end::Row-->
								<!--begin::Row-->
								<tr>
									<td class="text-gray-400">Password Confirmation:</td>
									<td class="text-gray-800">
										<input type="password" name="password_confirmation" class="form-control" value="">
									</td>
								</tr>
								<!--end::Row-->
								<!--begin::Row-->
								<tr>
									<td class="text-gray-400">Phone:</td>
									<td class="text-gray-800">
										<input type="text" name="phone" class="form-control" value="">
									</td>
								</tr>
								<!--end::Row-->
								<!--begin::Row-->
								<tr>
									<td class="text-gray-400">Office:</td>
									<td class="text-gray-800">
										<input type="text" name="office" class="form-control" value="">
									</td>
								</tr>
								<!--end::Row-->
							</tbody>						
						</table>
						<!--end::Details-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Row-->
			</div>
			<!--end::Section-->
		</div>
		<!--end::Card body-->
		<div class="card-footer d-flex justify-content-end py-6 px-9">
		   <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
		   <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Save Changes</button>
		</div>
	</form>	
</div>
@endsection