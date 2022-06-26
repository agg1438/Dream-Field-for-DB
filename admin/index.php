<?php @include "header.php" ?>

<title> Dream Field DB Sitesi - Admin Paneli</title>


<div class="container">
<div class="row">
<div class="col-md-4">

<h2 align="center">16</h2>
<h6 align="center">Takım</h6>

</div>
<div class="col-md-4">
<h2 align="center">156</h2>
<h6 align="center">Superie</h6>

</div>
<div class="col-md-4">
<h2 align="center">512</h2>
<h6 align="center">Oyuncu</h6>
</div>
</div>

<div class="row">
<div class="col-md-6">
<h2>Oyun Kurallar</h2>
<ul>
<li>Her takım en fazla 5 yabancı barındırabilir.</li>
<li>Her takım en fazla 16 kişi barındırabilir.</li>
<li>Her oyuncu en fazla 3 tekli teknik, en fazla 3 çoklu teknik kullanabilir.</li>
<li>Oyuncu değişiklik sınırı yok.</li>
</ul>
</div>

<div class="col-md-6">
<form>
<h2>Oyuncu Ekle</h2>
<p>Ad: <input type="text" name="playername"></p>
<p>Yaş:<input type="date" id="age" name="age"></p>
<p>Ülkesi:<select id="country" name="country">
    <option>Ülkesiz</option>
    <option value="AF">Afganistan</option>
    <option value="AX">Aland adaları</option>
    <option value="AL">Arnavutluk</option>
    <option value="DZ">Cezayir</option>
    <option value="AS">Amerikan Samoası</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarktika</option>
    <option value="AG">Antigua ve Barbuda</option>
    <option value="AR">Arjantin</option>
    <option value="AM">Ermenistan</option>
    <option value="AW">Aruba</option>
    <option value="AU">Avustralya</option>
    <option value="AT">Avusturya</option>
    <option value="AZ">Azerbaycan</option>
    <option value="BS">Bahamalar</option>
    <option value="BH">Bahreyn</option>
    <option value="BD">Bangladeş</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belçika</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Butan</option>
    <option value="BO">Bolivya</option>
    <option value="BQ">Bonaire, Sint Eustatius ve Saba</option>
    <option value="BA">Bosna Hersek</option>
    <option value="BW">Botsvana</option>
    <option value="BV">Bouvet Adası</option>
    <option value="BR">Brezilya</option>
    <option value="IO">İngiliz Hint Okyanusu Bölgesi</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaristan</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Kamboçya</option>
    <option value="CM">Kamerun</option>
    <option value="CA">Kanada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Adaları</option>
    <option value="CF">Orta Afrika Cumhuriyeti</option>
    <option value="TD">Çad</option>
    <option value="CL">Şili</option>
    <option value="CN">Çin</option>
    <option value="CX">Noel Adası</option>
    <option value="CC">Cocos (Keeling) Adaları</option>
    <option value="CO">Kolombiya</option>
    <option value="KM">Komorlar</option>
    <option value="CG">Kongo</option>
    <option value="CD">Kongo, Demokratik Kongo Cumhuriyeti</option>
    <option value="CK">Cook Adaları</option>
    <option value="CR">Kosta Rika</option>
    <option value="CI">Fildişi Sahili</option>
    <option value="HR">Hırvatistan</option>
    <option value="CU">Küba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Kıbrıs</option>
    <option value="CZ">Çek Cumhuriyeti</option>
    <option value="DK">Danimarka</option>
    <option value="DJ">Cibuti</option>
    <option value="DM">Dominika</option>
    <option value="DO">Dominik Cumhuriyeti</option>
    <option value="EC">Ekvador</option>
    <option value="EG">Mısır</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Ekvator Ginesi</option>
    <option value="ER">Eritre</option>
    <option value="EE">Estonya</option>
    <option value="ET">Etiyopya</option>
    <option value="FK">Falkland Adaları (Malvinas)</option>
    <option value="FO">Faroe Adaları</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finlandiya</option>
    <option value="FR">Fransa</option>
    <option value="GF">Fransız Guyanası</option>
    <option value="PF">Fransız Polinezyası</option>
    <option value="TF">Fransız Güney Toprakları</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambiya</option>
    <option value="GE">Gürcistan</option>
    <option value="DE">Almanya</option>
    <option value="GH">Gana</option>
    <option value="GI">Cebelitarık</option>
    <option value="GR">Yunanistan</option>
    <option value="GL">Grönland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Gine</option>
    <option value="GW">Gine-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Adası ve McDonald Adaları</option>
    <option value="VA">Holy See (Vatikan Şehir Devleti)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Macaristan</option>
    <option value="IS">İzlanda</option>
    <option value="IN">Hindistan</option>
    <option value="ID">Endonezya</option>
    <option value="IR">İran İslam Cumhuriyeti</option>
    <option value="IQ">Irak</option>
    <option value="IE">İrlanda</option>
    <option value="IM">Man Adası</option>
    <option value="IL">İsrail</option>
    <option value="IT">İtalya</option>
    <option value="JM">Jamaika</option>
    <option value="JP">Japonya</option>
    <option value="JE">Jersey</option>
    <option value="JO">Ürdün</option>
    <option value="KZ">Kazakistan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Kore Demokratik Halk Cumhuriyeti</option>
    <option value="KR">Kore Cumhuriyeti</option>
    <option value="XK">Kosova</option>
    <option value="KW">Kuveyt</option>
    <option value="KKTC">Kuzey Kıbrıs Türk Cumhuriyeti</option>
    <option value="KG">Kırgızistan</option>
    <option value="LA">Lao Demokratik Halk Cumhuriyeti</option>
    <option value="LV">Letonya</option>
    <option value="LB">Lübnan</option>
    <option value="LS">Lesoto</option>
    <option value="LR">Liberya</option>
    <option value="LY">Libya Arap Cemahiriyası</option>
    <option value="LI">Lihtenştayn</option>
    <option value="LT">Litvanya</option>
    <option value="LU">Lüksemburg</option>
    <option value="MO">Makao</option>
    <option value="MK">Makedonya Eski Yugoslav Cumhuriyeti</option>
    <option value="MG">Madagaskar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malezya</option>
    <option value="MV">Maldivler</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marşal Adaları</option>
    <option value="MQ">Martinik</option>
    <option value="MR">Moritanya</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Meksika</option>
    <option value="FM">Mikronezya Federal Devletleri</option>
    <option value="MD">Moldova Cumhuriyeti</option>
    <option value="MC">Monako</option>
    <option value="MN">Moğolistan</option>
    <option value="ME">Karadağ</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Fas</option>
    <option value="MZ">Mozambik</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibya</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Hollanda</option>
    <option value="AN">Hollanda Antilleri</option>
    <option value="NC">Yeni Kaledonya</option>
    <option value="NZ">Yeni Zelanda</option>
    <option value="NI">Nikaragua</option>
    <option value="NE">Nijer</option>
    <option value="NG">Nijerya</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Adası</option>
    <option value="MP">Kuzey Mariana Adaları</option>
    <option value="NO">Norveç</option>
    <option value="OM">Umman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Filistin Arazisi, İşgal altında</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua Yeni Gine</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Filipinler</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Polonya</option>
    <option value="PT">Portekiz</option>
    <option value="PR">Porto Riko</option>
    <option value="QA">Katar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romanya</option>
    <option value="RU">Rusya Federasyonu</option>
    <option value="RW">Ruanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts ve Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Aziz Martin</option>
    <option value="PM">Saint Pierre ve Miquelon</option>
    <option value="VC">Saint Vincent ve Grenadinler</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome ve Principe</option>
    <option value="SA">Suudi Arabistan</option>
    <option value="SN">Senegal</option>
    <option value="RS">Sırbistan</option>
    <option value="CS">Sırbistan ve Karadağ</option>
    <option value="SC">Seyşeller</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapur</option>
    <option value="SX">St Martin</option>
    <option value="SK">Slovakya</option>
    <option value="SI">Slovenya</option>
    <option value="SB">Solomon Adaları</option>
    <option value="SO">Somali</option>
    <option value="ZA">Güney Afrika</option>
    <option value="GS">Güney Georgia ve Güney Sandwich Adaları</option>
    <option value="SS">Güney Sudan</option>
    <option value="ES">ispanya</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Surinam</option>
    <option value="SJ">Svalbard ve Jan Mayen</option>
    <option value="SZ">Svaziland</option>
    <option value="SE">İsveç</option>
    <option value="CH">İsviçre</option>
    <option value="SY">Suriye Arap Cumhuriyeti</option>
    <option value="TW">Tayvan, Çin'in bölgesi</option>
    <option value="TJ">Tacikistan</option>
    <option value="TZ">Tanzanya Birleşik Cumhuriyeti</option>
    <option value="TH">Tayland</option>
    <option value="TL">Doğu Timor</option>
    <option value="TG">Gitmek</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad ve Tobago</option>
    <option value="TN">Tunus</option>
    <option value="TR">Türkiye</option>
    <option value="TM">Türkmenistan</option>
    <option value="TC">Turks ve Caicos Adaları</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukrayna</option>
    <option value="AE">Birleşik Arap Emirlikleri</option>
    <option value="GB">Birleşik Krallık</option>
    <option value="US">Amerika Birleşik Devletleri</option>
    <option value="UM">Amerika Birleşik Devletleri Küçük Dış Adaları</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Özbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Vietnam</option>
    <option value="VG">Virgin Adaları, İngiliz</option>
    <option value="VI">Virgin Adaları, U.s.</option>
    <option value="WF">Wallis ve Futuna</option>
    <option value="EH">Batı Sahra</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambiya</option>
    <option value="ZW">Zimbabve</option>
</select></p>
<p>Takımı: <select id="team" name="team">
    <option>Takım</option>
	<option value="DIA">Elmas Ordu FC</option>
	<option value="BOM">Bombacılar FC</option>
	<option value="SCH">Okul Korkusu FC</option>
	<option value="POI">Zehirli Hayat FC</option>
	</p>
</form>

</div>
</div>
</div>
<?php @include "footer.php" ?>