<?php

if(isset($_POST['save']))
{
  @include('dbconnect.php');



  $CorreMeth = $_POST['corre'];
  $email = $_POST['mail'];
  $PA_for_SM = $_POST['PA_for_SM'];
  $ConCode = $_POST['code'];
  $HomeNum = $_POST['homeNum'];
  $CellNum = $_POST['cellNum'];
  $AccNum = $_POST['accNum'];
  $POPI_Act = $_POST['popi'];
  $AccMailAdd = $_POST['AccMail'];


  $contacts = "INSERT INTO `contactinfo`(`correspondenceMethod`, `email`, `AccMailAddress`, `PA_for_SM`, `code`, `cellNumber`, `homeNumber`, `accCellNumber`, `POPI_Act`)
  VALUES ('$CorreMeth','$email','$AccMailAdd','$PA_for_SM','$ConCode','$CellNum','$HomeNum','$AccNum','$POPI_Act')";
  $contacts = mysqli_query($conn, $contacts);

  $Country = $_POST['country'];
  $Line1 = $_POST['line1'];
  $Line2 = $_POST['line2'];
  $Line3 = $_POST['line3'];
  $Line4 = $_POST['line4'];
  $ZipCode = $_POST['zip'];
  $Post_office = $_POST['post_office'];

  $RessAdd = "INSERT INTO `residentialaddress`(`country`, `Line1`, `Line2`, `Line3`, `Line4`, `Zip_code`, `post_office`)
  VALUES ('$Country','$Line1','$Line2','$Line3','$Line4','$ZipCode','$Post_office')";
  $RessAdd = mysqli_query($conn, $RessAdd);

  $Postal = $_POST['postal'];
  $Lodging = $_POST['lodging'];
  $AddType = $_POST['type'];
  $Courier = $_POST['sameAss'];
  $Account = $_POST['acc'];
  $AccToWhom = $_POST['accToWhom'];
  $Addresse = $_POST['addresse'];

  $Addresses = "INSERT INTO `address`(`postal_address`, `lodging_address`, `courier_address`, `AccAddress`, `AccToWhom`, `Addresse`, `Type`)
  VALUES ('$Postal','$Lodging','$Courier','$Account','$AccToWhom','$Addresse','$AddType')";
  $Addresse = mysqli_query($conn, $Addresses);

  header('location:CourseInfo.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> NWU Application</title>
  <link rel="icon" href="nwu.ico">
  <link rel="stylesheet" href="application.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <script src="application.js"></script>
</head>
<body>
  <header class="header">
    <div class="left-section">
     <img class="nwu-pic"  src="images/download.png" alt="">
    </div>
    <div class="middle-section">
      Application Process
    </div>
  </header>

  <div class="top-section-buttons">
    <div>
      <button class="Biographical-btn">
        <a class="url" href="Biographical.php" >Biographical</a>
      </button>
    </div>

    <div>
       <button class="ParentsInfo-btn">
        <a class="url" href="ParentsInfo.php" >Parents Information</a>
    </button>
  </div>
   


<div>
  <button class="ContactInfo-btn">
    <a class="url" href="ContactInfo.php" >Contact Infomation</a>
  </button>
</div>
   
<div>
  <button class="CourseInfo-btn">
    <a class="url" href="CourseInfo.php" >Course Information</a>
  </button>
</div>  
  </div>
  <h1 >
    Contact Information
  </h1>
  <form class="information-section" action="" method="POST">
  <div class=".information-block">

    <style>
      
  </style>
  </head>
  <body>
  
  <div class="border">
    <h4>POPI Act (Protection of Personal Information)</h4>
    <p style="font-size: small;">I hereby grant permission to disclose my personal information.</p>
    <div class="textBox-blockk">
      <select name="popi" class="selection-BOXx">
      <option value=""> </option>  
        <option value="Yes">Yes</option>
        <option value="No">No</option>     
  </select> 
   </div>     
    <p style ="font-size: small;">Please note: You have the right to change your permission at any time.</p>
  </div> 
</div> 
  <br>
<p>
    Preferred Method of Correspondence <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
    <select name="corre" class="selectionBox">
    <option value=""> </option>  
      <option value="E-Mail">E-Mail</option>
      <option value="Fax">Fax</option>
      <option value="Mail">Mail</option>
      <option value="SMS">SMS</option>
</select> 
 </div>  
 <div class=".information-block">
    <p>
        Email Address <span class="req">*</span>
    </p>
</div>
<div class="textBox-block">
<input class="textbox" name="mail" required="required" type="text">
</div>   
<div class=".information-block">
    <p>
        Account E-mail Address <span class="req">*</span>
    </p>
</div>
<div class="textBox-block">
<input class="textbox" name="AccMail" required="required" type="text">
</div>   
<div class=".information-block">
    <p>
        Preferred Address for Study Material <span class="req"></span>
      </p>
    </div>
    <div class="textBox-block">
        <select  name="PA_for_SM" class="selectionBox">
        <option value=""> </option>  
          <option value="Street Address">Street Address</option>
          <option value="Postal Address">Postal Address</option>
          <option value="Account Address">Account Address</option>
          <option value="Lodging Address">Lodging Address</option>
          <option value="Delivery Address">Delivery Address</option>
          <option value="Courier Address">Courier Address</option>
    </select> 
     </div>  
<h2 style="color: red;">Street/Residential Address
</h2> 
<br>
<div class=".information-block">
  <p>
      Country <span class="req">*</span>
  </p>
</div>
<div class="textBox-block">
  <select name="country" class="selectionBox">
  <option value="" ></option>
          <option value='Afghanistan' >Afghanistan</option>
          <option value='Aland Islands' >Aland Islands</option>
          <option value='Albania' >Albania</option>
          <option value='Algeria' >Algeria</option>
          <option value='American Samoa' >American Samoa</option>
          <option value='Andorra' >Andorra</option>
          <option value='Angola' >Angola</option>
          <option value='Anguilla' >Anguilla</option>
          <option value='Antigua and Barbuda' >Antigua and Barbuda</option>
          <option value='Argentina' >Argentina</option>  
          <option value='Armenia' >Armenia</option>
          <option value='Aruba' >Aruba</option>
          <option value='Australia' >Australia</option>
          <option value='Austria' >Austria</option>
          <option value='Azerbaijan' >Azerbaijan</option>
          <option value='BOTSWANA' >BOTSWANA</option>
          <option value='Bahamas' >Bahamas</option>
          <option value='Bahrain' >Bahrain</option>
          <option value='Bangladesh' >Bangladesh</option>
          <option value='Barbados' >Barbados</option>
          <option value='Belarus' >Belarus</option>
          <option value='Belgium' >Belgium</option>
          <option value='Belize' >Belize</option>
          <option value='Benin' >Benin</option>
          <option value='Bermuda' >Bermuda</option>
          <option value='Bhutan' >Bhutan</option>
          <option value='Bolivia' >Bolivia</option>
          <option value='Bonaire St Eusta' >Bonaire St Eusta</option>    
          <option value='Bosnia&Herzegovinia' >Bosnia&Herzegovinia</option>    
          <option value='Brazil' >Brazil</option> 
          <option value='British Virgin Islan' >British Virgin Islan</option>
          <option value='Brunei' >Brunei</option>
          <option value='Bulgaria' >Bulgaria</option>
          <option value='Burkina Faso' >Burkina Faso</option>
          <option value='Burundi' >Burundi</option>
          <option value='CHAD' >CHAD</option>
          <option value='Cambodia' >Cambodia</option>
          <option value='Cameroon' >Cameroon</option>
          <option value='Canada' >Canada</option>
          <option value='Cape Verde' >Cape Verde</option>
          <option value='Cayman Islands' >Cayman Islands</option>
          <option value='Central African Repu' >Central African Repu</option>
          <option value='Chile' >Chile</option>
          <option value='China' >China</option>
          <option value='Christmas Island' >Christmas Island</option>
          <option value='Ciocos Island' >Cocos Island</option>
          <option value='Columbia' >Columbia</option>
          <option value='Comoros' >Comoros</option>
          <option value='Cook Island' >Cook Island</option>
          <option value='Costa Rica' >Costa Rica</option>
          <option value='Croatia' >Croatia</option>
          <option value='Cuba' >Cuba</option>
          <option value='Cyracoa' >Curaçoa</option>
          <option value='Cyprus' >Cyprus</option>
          <option value='Czech Republic' >Czech Republic</option>
          <option value='Côte d'Ivoire' >Côte d'Ivoire</option>
          <option value='DRC' >DRC</option>
          <option value='Denmark' >Denmark</option>
          <option value='Djibouti' >Djibouti</option>
          <option value='Dominica' >Dominica</option>
          <option value='Dominican Republic' >Dominican Republic</option>
          <option value='Ecuador' >Ecuador</option>
          <option value='Egypt' >Egypt</option>
          <option value='El Salvador' >El Salvador</option>
          <option value='England' >England</option>
          <option value='Equatorial Guinea' >Equatorial Guinea</option>
          <option value='Eritrea' >Eritrea</option>
          <option value='Estonia' >Estonia</option>
          <option value='Ethiopia' >Ethiopia</option>
          <option value='Falkland Islands' >Falkland Islands</option>
          <option value='Faroe Islands' >Faroe Islands</option>
          <option value='Fiji' >Fiji</option>
          <option value='Finland' >Finland</option>
          <option value='France' >France</option>
          <option value='French Guiana' >French Guiana</option>
          <option value='French Polynesia' >French Polynesia</option>
          <option value='Gabon' >Gabon</option>
          <option value='Gambia' >Gambia</option>
          <option value='Geogia' >Georgia</option>
          <option value='Germany' >Germany</option>
          <option value='Ghana' >Ghana</option>
          <option value='Gibraltar' >Gibraltar</option>
          <option value='Greece' >Greece</option>
          <option value='Greenland' >Greenland</option>
          <option value='Grenada' >Grenada</option>
          <option value='Guadeloupe' >Guadeloupe</option>
          <option value='Guam ' >Guam</option>
          <option value='Guatemala' >Guatemala</option>
          <option value='Guernsey' >Guernsey</option>
          <option value='Guinea' >Guinea</option>
          <option value='Guinea-Bissau' >Guinea-Bissau</option>
          <option value='Guyana' >Guyana</option>
          <option value='Haiti' >Haiti</option>
          <option value='Honduras' >Honduras</option>
          <option value='Hong Kong' >Hong Kong</option>
          <option value='Hungary' >Hungary</option>
          <option value='Iceland' >Iceland</option>
          <option value='India' >India</option>
          <option value='Indonesia' >Indonesia</option>
          <option value='Iran' >Iran</option>
          <option value='Iraq' >Iraq</option>
          <option value='Ireland' >Ireland</option>
          <option value='Isle Of Man' >Isle Of Man</option>
          <option value='Israel' >Israel</option>
          <option value='Italy' >Italy</option>
          <option value='Jamica' >Jamaica</option>
          <option value='Japan' >Japan</option>
          <option value='Jersey' >Jersey</option>
          <option value='Jordan' >Jordan</option>
          <option value='Kazakhstan' >Kazakhstan</option>
          <option value='Kenya' >Kenya</option>
          <option value='Kiribai' >Kiribati</option>
          <option value='Kuwait' >Kuwait</option>
          <option value='Kyrgyzstan' >Kyrgyzstan</option>
          <option value='Lesotho' >LESOTHO</option>
          <option value='Laos' >Laos</option>
          <option value='Latvia' >Latvia</option>
          <option value='Lebanon' >Lebanon</option>
          <option value='Liberia' >Liberia</option>
          <option value='Libya' >Libya</option>
          <option value='Liechtenstein' >Liechtenstein</option>
          <option value='Lithuania' >Lithuania</option>
          <option value='Luxembourg' >Luxembourg</option>
          <option value='Macao' >Macao</option>
          <option value='Macedonia' >Macedonia</option>
          <option value='Madagascar' >Madagascar</option>
          <option value='Malawi' >Malawi</option>
          <option value='Malaysia' >Malaysia</option>  
          <option value='Maldives' >Maldives</option>
          <option value='Mali' >Mali</option>
          <option value='Malta' >Malta</option>
          <option value='Marshall Islands' >Marshall Islands</option>
          <option value='Martinique' >Martinique</option>
          <option value='Mauritania' >Mauritania</option>
          <option value='Mauritius' >Mauritius</option>
          <option value='Mayotte' >Mayotte</option>
          <option value='Mexico' >Mexico</option>
          <option value='Micronesia' >Micronesia</option>
          <option value='Moldova' >Moldova</option>
          <option value='Monaco' >Monaco</option>
          <option value='Mongolia' >Mongolia</option>
          <option value='Montenegro' >Montenegro</option>
          <option value='Montserrat' >Montserrat</option>
          <option value='Morocco' >Morocco</option>
          <option value='Mozambique' >Mozambique</option>
          <option value='Myanmar' >Myanmar</option>
          <option value='NAMIBIA' >NAMIBIA</option>
          <option value='Nauru' >Nauru</option>
          <option value='Nepal' >Nepal</option>
          <option value='Netherlands' >Netherlands</option>
          <option value='New Caledonia' >New Caledonia</option>
          <option value='New Zealand' >New Zealand</option>
          <option value='Nicaragua' >Nicaragua</option>
          <option value='Niger' >Niger</option>
          <option value='Nigeria' >Nigeria</option>
          <option value='Niue' >Niue</option>
          <option value='Norfolk Island' >Norfolk Island</option>
          <option value='North Korea' >North Korea</option>
          <option value='Northern Mariana Isl' >Northern Mariana Isl</option>
          <option value='Norway' >Norway</option>
          <option value='Norway' >Norway</option>
          <option value='Pakistan' >Pakistan</option>
          <option value='Palau' >Palau</option>
          <option value='Palestine' >Palestine</option>
          <option value='Panama' >Panama</option>
          <option value='Papua New Guinea' >Papua New Guinea</option>
          <option value='Paraguay' >Paraguay</option>
          <option value='Peru' >Peru</option>
          <option value='Philippines' >Philippines</option>
          <option value='Pitcairn Island' >Pitcairn Island</option>
          <option value='Poland' >Poland</option>
          <option value='Portugal' >Portugal</option>
          <option value='Puerto Rico' >Puerto Rico</option>
          <option value='Qatar' >Qatar</option>
          <option value='Republic of Korea' >Republic of Korea</option>
          <option value='Reunion' >Reunion</option>
          <option value='Romania' >Romania</option>
          <option value='Russian Federation' >Russian Federation</option>
          <option value='Rwanda' >Rwanda</option>
          <option value='Ryukyu Islands' >Ryukyu Islands</option>
          <option value='SWAZILAND' >SWAZILAND</option>
          <option value='Saint Kitts & Nevis' >Saint Kitts & Nevis</option>
          <option value='Saint Lucia' >Saint Lucia</option>
          <option value='Saint Martin(French)' >Saint Martin(French)</option>
          <option value='Saint-Barthélemy' >Saint-Barthélemy</option>
          <option value='Samoa' >Samoa</option>
          <option value='San Marino' >San Marino</option>
          <option value='Sao Tome & Principe' >Sao Tome & Principe</option>
          <option value='Saudi Arabia' >Saudi Arabia</option>
          <option value='Scotland' >Scotland</option>
          <option value='Senegal' >Senegal</option>
          <option value='Serbia' >Serbia</option>
          <option value='Seychelles' >Seychelles</option>
          <option value='Sierra Leone' >Sierra Leone</option>
          <option value='Singapore' >Singapore</option>
          <option value='Sint Maarten' >Sint Maarten</option>
          <option value='Slovakia' >Slovakia</option>
          <option value='Slovenia' >Slovenia</option>
          <option value='Solomon Islands' >Solomon Islands</option>
          <option value='Somalia' >Somalia</option>
          <option value='South Africa' >South Africa</option>
          <option value='South Sudan' >South Sudan</option>
          <option value='Spain' >Spain</option>
          <option value='Sri-lanka' >Sri-lanka</option>
          <option value='St Vincent&Grenadine' >St Vincent&Grenadine</option>
          <option value='St. Helena' >St. Helena</option>
          <option value='St. Pierre & Miquelo' >St. Pierre & Miquelo</option>
          <option value='Sudan' >Sudan</option>
          <option value='Suriname' >Suriname</option>
          <option value='Svalbard' >Svalbard</option>
          <option value='Sweden' >Sweden</option>
          <option value='Switzerland' >Switzerland</option>
          <option value='Syria' >Syria</option>
          <option value='Taiwan' >Taiwan</option>
          <option value='Tajikistan' >Tajikistan</option>  
          <option value='Tanzania' >Tanzania</option>  
          <option value='Thailand' >Thailand</option>   
          <option value='Timor-Leste' >Timor-Leste</option>
          <option value='Togo' >Togo</option>
          <option value='Tokelau Island' >Tokelau Island</option>
          <option value='Tonga' >Tonga</option>
          <option value='Trinidad & Tobago' >Trinidad & Tobago</option>
          <option value='Tunisia' >Tunisia</option>
          <option value='Turkey' >Turkey</option>
          <option value='Turkmenistan' >Turkmenistan</option>
          <option value='Turks and Caicos' >Turks and Caicos</option>
          <option value='Tuvalu' >Tuvalu</option>
          <option value='UAE' >UAE </option>
          <option value='USA' >USA</option>
          <option value='Uganda' >Uganda</option>
          <option value='Ukraine' >Ukraine</option>
          <option value='United Kingdom' >United Kingdom</option>
          <option value='Unknown' >Unknown</option>
          <option value='Uruguay' >Uruguay</option>
          <option value='Uzbekistan' >Uzbekistan</option>
          <option value='Vanuatu' >Vanuatu</option>
          <option value='Vatican' >Vatican</option>
          <option value='Venezuela' >Venezuela</option>
          <option value='Vietnam' >Vietnam</option>
          <option value='Virgin Island U S A' >Virgin Island U S A</option>
          <option value='Wales' >Wales</option>
          <option value='Wallis and Futuna' >Wallis and Futuna</option>
          <option value='Western Sahara' >Western Sahara</option>
          <option value='Yemen' >Yemen</option>
          <option value='ZAMBIA' >ZAMBIA</option>
          <option value='ZIMBABWE' >ZIMBABWE</option>
  </select>
  </div>

 <div class=".information-block">
    <p>
        Address Line 1  <span class="req">*</span>
    </p>
  </div>
  <div class="textBox-block">
  <input class="textbox" name="line1"  type="text">
  </div>
  
  <div class=".information-block">
    <!--<h2>
      Disabilities / Conditions
    </h2>-->
  </div>
  <div class="textBox-block"></div>
  
  <div class=".information-block">
    <p>
        Address Line 2
    </p>
  </div>
  <div class="textBox-block">
  <input class="textbox" name="line2" type="text">
  </div>
  
  <div class=".information-block">
    <p>
        Address Line 3 <span class="req"></span>
    </p>
  </div>
  <div class="textBox-block">
  <input class="textbox" name="line3"  type="text">
  </div>
  
  <div class=".information-block">
    <p>
        Address Line 4
    </p>
  </div>
  <div class="textBox-block">
  <input class="textbox"name="line4" type="text">
  </div>
  <div class = ".information-block">
     <P>
       Zip Code
     </P>
 </div>
  <div class="textBox-block">
   <input name="zip" class="textbox-Title"  type="text" id="zipCode" maxlength="4">
 </div>
  <div class=".information-block">
    <p>
       Town/Post Office <span class="req">*</span>
    </p>
  </div>
  <div class="textBox-block">
  <input class="textbox" name="post_office"  type="text">
  </div>
  <h2 style="color: red;">Postal Address
</h2>
<BR>
<div class=".information-block">
    <p>
        Address Same As <span class="req"></span>
      </p>
    </div>
    <div class="textBox-block">
        <select  name="postal" value=" " class="selectionBox">
        <option value=""> </option>
          <option value="New Address">New Address</option>
          <option value="Street Address">Street Address</option>  
           <p> If not, select another option.</p>
    </select> 
 
     </div> 

 <h2 style="color: red;">  Account Address   </h2> 
 <br>
 <div class=".information-block">
    <p>
        Address Same As <span class="req"></span>
      </p>
    </div>
    <div class="textBox-block">
        <select name="acc" value=" " class="selectionBox">
        <option value=""> </option>
          <option value="New Address">New Address</option>
          <option value="Street Address">Street Address</option>  
          <option value="Postal Address">Postal Address</option>
          
    </select> 
    
     </div> 
     <div class=".information-block">
        <p>
            Account To Whom <span class="req">*</span>
          </p>
        </div>
        <div class="textBox-block">
            <select name="accToWhom" value=" "  class="selectionBox">
            <option value=""> </option>
              <option value="Father">Father</option>  
              <option value="Gurdian">Guardian</option>
              <option value="Mother">Mother</option>
              <option value="Other">Other</option>
              <option value="Self">Self</option>
               
        </select> 
         </div>
         <div class=".information-block">
            <p>
               Addresse <span class="req">*</span>
            </p>
          </div>
          <div class="textBox-block">
          <input class="textbox" name="addresse"  type="text">
          </div> 
          
 <h2 style="color: red;">Lodging Address</h2>
 <br> 
 <div class=".information-block">
    <p>
        Address Same As <span class="req"></span>
      </p>
    </div>
    <div class="textBox-block">
        <select name="lodging" value=" " class="selectionBox">
        <option value=""> </option>
          <option value="New Address">New Address</option>
          <option value="Street Address">Street Address</option> 
          <option value="Postal Address">Postal Address</option>
          <option value="Account Address">Account Address</option>
          
    </select> 
    
     </div>
     
<h2 style="color: red;">Courier address / Delivery Address
</h2>  
<br> 
<div class=".information-block">
    <p>
        Address Type <span class="req"></span>
      </p>
    </div>
    <div name="type" value=" " class="textBox-block">
        <select class="selectionBox">
        <option value=""> </option>
          <option value="Courier Address">Courier Address</option>
          <option value="Delivery Address">Delivery Address</option>     
    </select> 
     </div>  
     <div class=".information-block">
        <p>
            Address Same As <span class="req"></span>
          </p>
        </div>
        <div name="sameAss" value=" " class="textBox-block">
            <select class="selectionBox">
            <option value=""> </option>
              <option value="New Address">New Address</option>
              <option value="Street Address">Street Address</option> 
              <option value="Postal Address">Postal Address</option>
              <option value="Account Address">Account Address</option>
              <option value="Lodging Address">Lodging Address</option>
              
        </select> 
        
         </div> 

         <div class=".information-block">
          <input class="textbox-contact"  type="text" readonly="Home Number" value="Home Number">
        </div>
        <div class="textBox-block">
        <input class="textbox_contact" name="code" type="text" placeholder="e.g +27" id="home-Num" maxlength="3">
        <input class="textbox_Contact" name="homeNum" type="text" placeholder="e.g 820000000" id="homeNum" maxlength="9">
        </div>
        
        <div class=".information-block">
          <input class="textbox-contact"  type="text" readonly="CellPhone" value="CellPhone">
        </div>
        <div class="textBox-block">
        <input class="textbox_contact" name="code" type="text" placeholder="e.g +27" id="cell-Num" maxlength="3">
        <input class="textbox_Contact" name="cellNum" type="text" placeholder="e.g 820000000" id="cellNum" maxlength="9">
        </div>
        
        <div class=".information-block">
          <input class="textbox-contact"  type="text" readonly="Account CellPhone" value="Account CellPhone">
        </div>
        <div class="textBox-block">
        <input class="textbox_contact" name="code"  type="text" placeholder="e.g +27" id="acc-Num" maxlength="3">
        <input class="textbox_Contact" name="accNum" type="text" placeholder="e.g 820000000" id="accNum" maxlength="9">
        </div>

        <div>
          <button type="submit" value="Save" name="save" class="save-btn" >
            Save
          </button>
        </div>

        <div>
          <button type="submit" class="next-btn"  name="save"  value="Save">
            Next >>
          </button>
        </div>

</form>

        








</body>
</html>