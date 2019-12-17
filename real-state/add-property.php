<!DOCTYPE html>
<html>
<head>
    <title>E-Construction</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>E-Construction</title>
  <meta name="description" content="website for construction">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="scripts/jquery.form.js"></script>
  <script type="text/javascript" src="scripts/upload_image.js"></script>

</head>
<body>
   
   <div><!-- main div -->
    
    <div id="top" class="nav-fixed"><!--top begin-->
        <div class="container"><!--top container begin-->
            <!--col-md-6 offer-->
            <div class="col-md-5 offer"></div>
            <!--col-md-6 offer finish-->
            <div class="col-md-7"><!--col-md-6 begin-->
                <ul class="menu">
                    <li>
                        <a href="register.php"><i class="glyphicon glyphicon-user"></i> sign in</a>
                    </li>
                    <li>
                        <a href="register.php"><i class="glyphicon glyphicon-user"></i> log in</a>
                    </li>
                </ul>
            </div><!--col-md-6 finish-->
        </div><!--top container finish-->
    </div><!--top menu finish-->
    
    <!-- navbar -->
   <div class="brandWrap"> <!-- brandWrap start -->
        <div class="container top-margin">
            <div class="col-md-6">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
               <div class="navbar-header">
                 <a href="index.php" class="navbar-brand"><img src="images/logo.png"></a>
               </div>
            </div>
            <div class="col-md-6">
                <div class="nav navbar-nav">
                  <div class="search-box">
                    <div class="input-group">
                        <input type="search" name="search" class="search" placeholder="Search your product">
              <button type="submit" name="search" class="search-button">
                  <span class="glyphicon glyphicon-search" ></span>
              </button>   
                    </div>
                  </div>    
                </div>
            </div>
        </div>
   </div> <!-- brandWrap finish -->

   <!-- navbar start -->
   <div id="navbar" class="navbar navbar-default">
    <div class="container">
        <div class="padding-nav"><!--padding-nav start-->
            <ul class="nav navbar-nav left"><!--navbar-nav start-->
               <li><a href="index.php">Home</a></li>
               <li><a href="#">plots</a></li>
               <li><a href="#">Architectural Solution</a></li>
               <li><a href="#">Materials</a></li>
               <li><a href="#">Services</a></li>
               <li><a href="#">Real State</a></li>
            </ul><!--navbar-nav finish-->
        </div><!--padding-nav-->
        <div class="social-icon pull-right">
          <a href="#" class="fa fa-facebook"></a>
        </div>
    </div>
   </div>
   <!-- nav bar finish -->
   <!-- slider -->
   <div class="container main-heading">
        <div class="row">
            <div class="col-md-12 heading">
                <h3>Post Your Property Ad</h3>
                <div class="divider"></div>
            </div>
        </div>
       </div>

        <div class="container"> 
          <form method="post" name="image_upload_form" id="image_upload_form" enctype="multipart/form-data" action="upload_image.php" class="properity-form"> 
           
           <div class="row">
             <div class="col-md-4 form-group">
                    <h5 for="purpose"><b>Purpose:</b></h5>
                    <select id="Purpose" name="Purpose" class="form-control">
                        <option value="Sale">Sale</option>
                        <option value="Rent">Rent</option>
                    </select>
            </div>

            <div class="col-md-4 form-group">
                <h5 for="type"><b>Type:</b></h5>
                    <select id="Property_type" name="Property_type" class="form-control">
                        <option value="Home">Home</option>
                        <option value="Plot">Plot</option>
                        <option value="Commercial">Commercial</option>
                    </select>
            </div>
            
            <div class="col-md-4 form-group">
                <h5 for="stype"><b>Sub Type: </b></h5>
                    <select id="subtype" name="subtype" class="form-control">
                        <option value="House">House</option>
                        <option value="Flat">Flat</option>
                        <option value="Upper Portion">Upper Portion</option>
                        <option value="Lower Portion">Lower Portion</option>
                        <option value="Farmhouse">Farmhouse</option>
                        <option value="Room">Room</option>
                        <option value="Penthouse">Penthouse</option>
                        <option value="Residential Plot">Resitential Plot</option>
                        <option value="Commercial Plot">Commercial Plot</option>
                        <option value="Agricultural Plot">Agricultural Plot</option>
                        <option value="Industrial Land">Industrial Land</option>
                        <option value="Plot File">Plot File</option>
                        <option value="Plot Form">Plot Form</option>
                        <option value="Office">Office</option>
                        <option value="Shop">Shop</option>
                        <option value="Warehouse">Warehouse</option>
                        <option value="Factory">Factory</option>
                        <option value="Building">Building</option>
                        <option value="Other">Other</option>
                    </select>
            </div>

           </div><!-- row finish -->
            
            <div class="row">
            <div class="col-md-6 form-group">
                <h5><b>Select City:</b></h5>
                <select name="Select_city" id="Select_city" required class="form-control">
                    <option value="" disabled selected>Select The City</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="" disabled>Punjab Cities</option>
                    <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                    <option value="Ahmadpur East">Ahmadpur East</option>
                    <option value="Ali Khan Abad">Ali Khan Abad</option>
                    <option value="Alipur">Alipur</option>
                    <option value="Arifwala">Arifwala</option>
                    <option value="Attock">Attock</option>
                    <option value="Bhera">Bhera</option>
                    <option value="Bhalwal">Bhalwal</option>
                    <option value="Bahawalnagar">Bahawalnagar</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Bhakkar">Bhakkar</option>
                    <option value="Burewala">Burewala</option>
                    <option value="Chillianwala">Chillianwala</option>
                    <option value="Chakwal">Chakwal</option>
                    <option value="Chichawatni">Chichawatni</option>
                    <option value="Chiniot">Chiniot</option>
                    <option value="Chishtian">Chishtian</option>
                    <option value="Daska">Daska</option>
                    <option value="Darya Khan">Darya Khan</option>
                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                    <option value="Dhaular">Dhaular</option>
                    <option value="Dina">Dina</option>
                    <option value="Dinga">Dinga</option>
                    <option value="Dipalpur">Dipalpur</option>
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Fateh Jhang">Fateh Jang</option>
                    <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                    <option value="Gojra">Gojra</option>
                    <option value="Gujranwala">Gujranwala</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Gujar Khan">Gujar Khan</option>
                    <option value="Hafizabad">Hafizabad</option>
                    <option value="Haroonabad">Haroonabad</option>
                    <option value="Hasilpur">Hasilpur</option>
                    <option value="Haveli">Haveli</option>
                    <option value="Lakha">Lakha</option>
                    <option value="Jalalpur">Jalalpur</option>
                    <option value="Jattan">Jattan</option>
                    <option value="Jampur">Jampur</option>
                    <option value="Jaranwala">Jaranwala</option>
                    <option value="Jhang">Jhang</option>
                    <option value="Jhelum">Jhelum</option>
                    <option value="Kalabagh">Kalabagh</option>
                    <option value="Karor Lal Esan">Karor Lal Esan</option>
                    <option value="Kasur">Kasur</option>
                    <option value="Kamalia">Kamalia</option>
                    <option value="Kamoke">Kamoke</option>
                    <option value="Khanewal">Khanewal</option>
                    <option value="Khanpur">Khanpur</option>
                    <option value="Kharian">Kharian</option>
                    <option value="Khushab">Khushab</option>
                    <option value="Kot Adu">Kot Adu</option>
                    <option value="Jauharabad">Jauharabad</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Lalamusa">Lalamusa</option>
                    <option value="Layyah">Layyah</option>
                    <option value="Liaquat Pur">Liaquat Pur</option>
                    <option value="Lodhran">Lodhran</option>
                    <option value="Malakwal">Malakwal</option>
                    <option value="Mamoori">Mamoori</option>
                    <option value="Mailsi">Mailsi</option>
                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                    <option value="mian Channu">Mian Channu</option>
                    <option value="Mianwali">Mianwali</option>
                    <option value="Multan">Multan</option>
                    <option value="Murree">Murree</option>
                    <option value="Muridke">Muridke</option>
                    <option value="Mianwali Bangla">Mianwali Bangla</option>
                    <option value="Muzaffargarh">Muzaffargarh</option>
                    <option value="Narowal">Narowal</option>
                    <option value="Okara">Okara</option>
                    <option value="Renala Khurd">Renala Khurd</option>
                    <option value="Pakpattan">Pakpattan</option>
                    <option value="Pattoki">Pattoki</option>
                    <option value="Pir Mahal">Pir Mahal</option>
                    <option value="Qaimpur">Qaimpur</option>
                    <option value="Qila Didar Singh">Qila Didar Singh</option>
                    <option value="Rabwah">Rabwah</option>
                    <option value="Raiwind">Raiwind</option>
                    <option value="Rajanpur">Rajanpur</option>
                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Sadiqabad">Sadiqabad</option>
                    <option value="Safdarabad">Safdarabad</option>
                    <option value="Sahiwal">Sahiwal</option>
                    <option value="Sangla Hill">Sangla Hill</option>
                    <option value="Sarai Alamgir">Sarai Alamgir</option>
                    <option value="Sargodha">Sargodha</option>
                    <option value="Shakargarh">Shakargarh</option>
                    <option value="Sheikhupura">Sheikhupura</option>
                    <option value="Sialkot">Sialkot</option>
                    <option value="Sohawa">Sohawa</option>
                    <option value="Soianwala">Soianwala</option>
                    <option value="Siranwali">Siranwali</option>
                    <option value="Talagang">Talagang</option>
                    <option value="Taxila">Taxila</option>
                    <option value="Toba Tek  Singh">Toba Tek Singh</option>
                    <option value="Vehari">Vehari</option>
                    <option value="Wah Cantonment">Wah Cantonment</option>
                    <option value="Wazirabad">Wazirabad</option>
                    <option value="" disabled>Sindh Cities</option>
                    <option value="Badin">Badin</option>
                    <option value="Bhirkan">Bhirkan</option>
                    <option value="Rajo Khanani">Rajo Khanani</option>
                    <option value="Chak">Chak</option>
                    <option value="Dadu">Dadu</option>
                    <option value="Digri">Digri</option>
                    <option value="Diplo">Diplo</option>
                    <option value="Dokri">Dokri</option>
                    <option value="Ghotki">Ghotki</option>
                    <option value="Haala">Haala</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Islamkot">Islamkot</option>
                    <option value="Jacobabad">Jacobabad</option>
                    <option value="Jamshoro">Jamshoro</option>
                    <option value="Jungshahi">Jungshahi</option>
                    <option value="Kandhkot">Kandhkot</option>
                    <option value="Kandiaro">Kandiaro</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Kashmore">Kashmore</option>
                    <option value="Keti Bandar">Keti Bandar</option>
                    <option value="Khairpur">Khairpur</option>
                    <option value="Kotri">Kotri</option>
                    <option value="Larkana">Larkana</option>
                    <option value="Matiari">Matiari</option>
                    <option value="Mehar">Mehar</option>
                    <option value="Mirpur Khas">Mirpur Khas</option>
                    <option value="Mithani">Mithani</option>
                    <option value="Mithi">Mithi</option>
                    <option value="Mehrabpur">Mehrabpur</option>
                    <option value="Moro">Moro</option>
                    <option value="Nagarparkar">Nagarparkar</option>
                    <option value="Naudero">Naudero</option>
                    <option value="Naushahro Feroze">Naushahro Feroze</option>
                    <option value="Naushara">Naushara</option>
                    <option value="Nawabshah">Nawabshah</option>
                    <option value="Nazimabad">Nazimabad</option>
                    <option value="Qambar">Qambar</option>
                    <option value="Qasimabad">Qasimabad</option>
                    <option value="Ranipur">Ranipur</option>
                    <option value="Ratodero">Ratodero</option>
                    <option value="Rohri">Rohri</option>
                    <option value="Sakrand">Sakrand</option>
                    <option value="Sanghar">Sanghar</option>
                    <option value="Shahbandar">Shahbandar</option>
                    <option value="Shahdadkot">Shahdadkot</option>
                    <option value="Shahdadpur">Shahdadpur</option>
                    <option value="Shahpur Chakar">Shahpur Chakar</option>
                    <option value="Shikarpaur">Shikarpaur</option>
                    <option value="Sukkur">Sukkur</option>
                    <option value="Tangwani">Tangwani</option>
                    <option value="Tando Adam Khan">Tando Adam Khan</option>
                    <option value="Tando Allahyar">Tando Allahyar</option>
                    <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                    <option value="Thatta">Thatta</option>
                    <option value="Umerkot">Umerkot</option>
                    <option value="Warah">Warah</option>
                    <option value="" disabled>Khyber Cities</option>
                    <option value="Abbottabad">Abbottabad</option>
                    <option value="Adezai">Adezai</option>
                    <option value="Alpuri">Alpuri</option>
                    <option value="Akora Khattak">Akora Khattak</option>
                    <option value="Ayubia">Ayubia</option>
                    <option value="Banda Daud Shah">Banda Daud Shah</option>
                    <option value="Bannu">Bannu</option>
                    <option value="Batkhela">Batkhela</option>
                    <option value="Battagram">Battagram</option>
                    <option value="Birote">Birote</option>
                    <option value="Chakdara">Chakdara</option>
                    <option value="Charsadda">Charsadda</option>
                    <option value="Chitral">Chitral</option>
                    <option value="Daggar">Daggar</option>
                    <option value="Dargai">Dargai</option>
                    <option value="Darya Khan">Darya Khan</option>
                    <option value="dera Ismail Khan">Dera Ismail Khan</option>
                    <option value="Doaba">Doaba</option>
                    <option value="Dir">Dir</option>
                    <option value="Drosh">Drosh</option>
                    <option value="Hangu">Hangu</option>
                    <option value="Haripur">Haripur</option>
                    <option value="Karak">Karak</option>
                    <option value="Kohat">Kohat</option>
                    <option value="Kulachi">Kulachi</option>
                    <option value="Lakki Marwat">Lakki Marwat</option>
                    <option value="Latamber">Latamber</option>
                    <option value="Madyan">Madyan</option>
                    <option value="Mansehra">Mansehra</option>
                    <option value="Mardan">Mardan</option>
                    <option value="Mastuj">Mastuj</option>
                    <option value="Mingora">Mingora</option>
                    <option value="Nowshera">Nowshera</option>
                    <option value="Paharpur">Paharpur</option>
                    <option value="Pabbi">Pabbi</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Saidu Sharif">Saidu Sharif</option>
                    <option value="Shorkot">Shorkot</option>
                    <option value="Shewa Adda">Shewa Adda</option>
                    <option value="Swabi">Swabi</option>
                    <option value="Swat">Swat</option>
                    <option value="Tangi">Tangi</option>
                    <option value="Tank">Tank</option>
                    <option value="Thall">Thall</option>
                    <option value="Timergara">Timergara</option>
                    <option value="Tordher">Tordher</option>
                    <option value="" disabled>Balochistan Cities</option>
                    <option value="Awaran">Awaran</option>
                    <option value="Barkhan">Barkhan</option>
                    <option value="Chagai">Chagai</option>
                    <option value="Dera Bugti">Dera Bugti</option>
                    <option value="Gwadar">Gwadar</option>
                    <option value="Harnai">Harnai</option>
                    <option value="Jafarabad">Jafarabad</option>
                    <option value="Jhal Magsi">Jhal Magsi</option>
                    <option value="Kacchi">Kacchi</option>
                    <option value="Kalat">Kalat</option>
                    <option value="Kech">Kech</option>
                    <option value="Kharan">Kharan</option>
                    <option value="Khuzdar">Khuzdar</option>
                    <option value="Killa Abdullah">Killa Abdullah</option>
                    <option value="Killa Saifullah">Killa Saifullah</option>
                    <option value="Kohlu">Kohlu</option>
                    <option value="Lasbela">Lasbela</option>
                    <option value="Lehri">Lehri</option>
                    <option value="Loralai">Loralai</option>
                    <option value="Mastung">Mastung</option>
                    <option value="Musakhel">Musakhel</option>
                    <option value="Nasirabad">Nasirabad</option>
                    <option value="Nushki">Nushki</option>
                    <option value="Panjgur">Panjgur</option>
                    <option value="Pishin valley">Pishin Valley</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Sherani">Sherani</option>
                    <option value="Sibi">Sibi</option>
                    <option value="Sohbatpur">Sohbatpur</option>
                    <option value="Washuk">Washuk</option>
                    <option value="Zhob">Zhob</option>
                    <option value="Ziarat">Ziarat</option>
                  </select>
            </div>

            <div class="col-md-6 form-group">
                <h5 for="location"><b>Enter Location:</b></h5>
                <input type="text" id="Location" name="Location" placeholder="Location" required class="form-control">
            </div>    
            </div><!-- row finish -->
            
        
        <div class="row">
            <div class="col-md-12 form-group">
                <h5 for="Property Title"><b>Property Title:</b></h5>
                <input type="text" id="Property_Title" name="Property_Title" placeholder="Property Title" required class="form-control">
            </div>
        </div>
            
        <div class="row">
            <div class="col-md-12 form-group">
                <h5><b>Discription:</b></h5>
                <textarea rows = "5" cols = "64" name = "Description" placeholder="Enter Description" class="form-control"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <h5 for="Price"><b>Price:</b></h5>
                <input type="number" id="Price" name="Enter Price" placeholder="Price" required class="form-control">
            </div>

            <div class="col-md-4 form-group">
                <h5 for="Description"><b>Area Land:</b></h5>
                <input type="text" id="Land_area" name="Land_area" placeholder="Area Land" required class="form-control">
            </div>

            <div class="col-md-4 form-group">
                <h5 for="unit"><b>Unit:</b></h5>
                <select id="Unit" name="Unit" class="form-control">
                    <option value="Square Feet">Square Feet</option>
                    <option value="Square Yards">Square Yards</option>
                    <option value="Square Meters">Square Meters</option>
                    <option value="Marla">Marla</option>
                    <option value="Kanal">Kanal</option>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6 form-group">
                <h5 for="Bedrooms"><b>Bedrooms:</b></h5>
                    <select id="Bedrooms" name="Bedrooms" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="1">6</option>
                        <option value="2">7</option>
                        <option value="3">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="10+">10+</option>
                    </select>
            </div>

            <div class="col-md-6 form-group">
                <h5 for="Bathrooms"><b>Bathrooms:</b></h5>
                    <select id="Bathrooms" name="Bathrooms" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="1">6</option>
                        <option value="2">7</option>
                        <option value="3">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="10+">10+</option>
                    </select>
            </div>
        </div>    
            
            
        <div class="row">
            

            <div class="col-md-4 form-group">
                <h5 for="phone_no"><b>Phone No:</b></h5>
                <input type="number" id="phone_no" name="phone_no" placeholder="Phone No" required class="form-control">
            </div>
            
            <div class="col-md-4 form-group">
                <label for="Cell No"><b>Cell No:</b></label>
                <input type="number" id="cell_no" name="cell_no" placeholder="Cell No" required class="form-control">
            </div>
            
            <div class="col-md-4 form-group has-feedback">
                <h5 for="Email"><b>Email:</b></h5>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <input type="Email" id="Email" name="Email" placeholder="Property Title" required class="form-control">
            </div>
        </div>
            
                        
            <div class="form-group">
                <h4 for="customer_id"><b>Customer_id:</b></h4>
                <input type="text" id="customer_id" name="customer_id" placeholder="Customer ID" class="form-control"><br>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><b>Images</b> (Choose Multiple Images to Upload)</label>
              <input type="file" name="images[]" id="upload_files" multiple class="form-control">
            </div>
            <div class="image_uploading hidden">
                <label>&nbsp;</label>
                <img src="image_upload_status.gif" alt="Image Uploading......"/>
            </div>
            <div>
                <input type="submit" name="images" value="submit">
            </div>
            <div id="images_preview"></div>
          </form>
   </div>

   
   <footer class="footer_area"><!-- footer start -->
     <div class="container"><!-- container start -->
        <div class="row footer-row"><!-- row start -->
            <div class="col-md-4">
                <div class="footer-widget">
                    <div class="widget-title">
                        <h4><strong>about us</strong></h4>
                    </div>
                    <div class="text-widget">
                     <p>
                        Building isn’t just a job. Aect the Construction Company, it is our passion. With every project we undertake, we set the bar high and provide the best people in the industry, with a true love of what we do to make our Customers’ vision a reality.
                     </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                
                    <div class="footer-widget">
                        <div class="widget-title company-links">
                            <h4><strong>Company links</strong></h4>
                            <ul>
                                <li><a href="#aboutus-container">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">FAQ</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
            <div class="col-md-4">
                
                    <div class="footer-widget">
                        <div class="widget-title">
                            <h4><strong>Contact info</strong></h4>
                            <ul class="cantact-info">
                  <li> <i class=" fa fa-map-marker" aria-hidden="true"></i>   
                        86, Block 7 &amp; 8, J.C.H.S., Shaheed-e-Millat Road 
                       <br> Karachi, Pakistan 
                  </li>
                  <li> <i class=" fa fa-phone" aria-hidden="true"></i>
                       (92-21)34025818-03343348028
                  </li>
                  <li> <i class=" fa fa-envelope-o" aria-hidden="true"></i>
                    <a href="#"> info@econstruction.com</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div><!-- row finish -->

     </div><!-- container finish -->
   </footer><!-- footer finish -->

    </div><!-- <main div closed -->
   
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>