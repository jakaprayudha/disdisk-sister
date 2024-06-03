<?php
$page = "Home";
require '../../controller/view.php';
require '../../controller/pmb/register.php';
$status = $_SESSION['status'];
$uid = $_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">


<head>
   <?php
   require '../../assets/template/head.php';
   ?>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body class="loading">
   <!-- Begin page -->
   <div class="wrapper">
      <!-- ========== Left Sidebar Start ========== -->
      <div class="left-side-menu">

         <?php
         if ($status == 1) {
            require 'sidebar-pmb.php';
         } else {
            require 'sidebar.php';
         }

         ?>
         <!-- Sidebar -left -->

      </div>
      <!-- Left Sidebar End -->

      <!-- ============================================================== -->
      <!-- Start Page Content here -->
      <!-- ============================================================== -->

      <div class="content-page">
         <div class="content">
            <!-- Topbar Start -->
            <?php
            require 'header.php';
            ?>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

               <!-- start page title -->
               <div class="row">
                  <div class="col-12">
                     <div class="page-title-box">
                        <div class="page-title-right">
                           <ol class="breadcrumb m-0">
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                              <li class="breadcrumb-item"><a href="javascript: void(0);">Registrasi</a></li>
                              <li class="breadcrumb-item active">Mahasiswa/i Baru</li>
                           </ol>
                        </div>
                        <h4 class="page-title">Formulir PMB</h4>
                     </div>
                  </div>
               </div>
               <!-- end page title -->

               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-body">

                           <!-- Checkout Steps -->
                           <!-- <ul class="nav nav-pills bg-nav-pills nav-justified mb-3">
                              <li class="nav-item">
                                 <a href="#billing-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                                    <i class="mdi mdi-account-circle font-18"></i>
                                    <span class="d-none d-lg-block">Data Personal </span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#shipping-information" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                                    <i class="mdi  mdi-account-circle font-18"></i>
                                    <span class="d-none d-lg-block">Data Orang Tua / Wali</span>
                                 </a>
                              </li>
                              <li class="nav-item">
                                 <a href="#payment-information" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0">
                                    <i class="mdi mdi-folder font-18"></i>
                                    <span class="d-none d-lg-block">Data Akademik</span>
                                 </a>
                              </li>
                           </ul> -->

                           <!-- Steps Information -->
                           <form action="" method="POST">
                              <input type="hidden" name="uid" value="<?= $uid ?>">
                              <div class="tab-content">

                                 <!-- Billing Content-->
                                 <div class="tab-pane show active" id="billing-information">
                                    <div class="row">
                                       <div class="col-lg-8">
                                          <h4 class="mt-2">Data Personal</h4>

                                          <p class="text-muted mb-4">Isi data diri anda dengan sebenar benarnya sesuai identitas yang anda miliki saat ini</p>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="nik">NIK <span class="text-danger">*</span></label>
                                                   <input class="form-control" required type="text" placeholder="Nomor Induk Kependudukan" id="nik" name="nik" />
                                                </div>
                                             </div>
                                             <div class="col-md-3">
                                                <div class="form-group">
                                                   <label for="warganegara">Kewarganegaraan <span class="text-danger">*</span></label>
                                                   <select name="warganegara" required class="form-control" id="warganegara">
                                                      <option value="WNI">WNI</option>
                                                      <option value="WNA">WNA</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-3">
                                                <div class="form-group">
                                                   <label>Negara <span class="text-danger">*</span></label>
                                                   <select data-toggle="select2" title="Country" required name="negara">
                                                      <option value="0">Select Negera</option>
                                                      <option value="AF">Afghanistan</option>
                                                      <option value="AL">Albania</option>
                                                      <option value="DZ">Algeria</option>
                                                      <option value="AS">American Samoa</option>
                                                      <option value="AD">Andorra</option>
                                                      <option value="AO">Angola</option>
                                                      <option value="AI">Anguilla</option>
                                                      <option value="AQ">Antarctica</option>
                                                      <option value="AR">Argentina</option>
                                                      <option value="AM">Armenia</option>
                                                      <option value="AW">Aruba</option>
                                                      <option value="AU">Australia</option>
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
                                                      <option value="BW">Botswana</option>
                                                      <option value="BV">Bouvet Island</option>
                                                      <option value="BR">Brazil</option>
                                                      <option value="BN">Brunei Darussalam</option>
                                                      <option value="BG">Bulgaria</option>
                                                      <option value="BF">Burkina Faso</option>
                                                      <option value="BI">Burundi</option>
                                                      <option value="KH">Cambodia</option>
                                                      <option value="CM">Cameroon</option>
                                                      <option value="CA">Canada</option>
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
                                                      <option value="CK">Cook Islands</option>
                                                      <option value="CR">Costa Rica</option>
                                                      <option value="CI">Cote d'Ivoire</option>
                                                      <option value="HR">Croatia (Hrvatska)</option>
                                                      <option value="CU">Cuba</option>
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
                                                      <option value="KR">Korea, Republic of</option>
                                                      <option value="KW">Kuwait</option>
                                                      <option value="KG">Kyrgyzstan</option>
                                                      <option value="LV">Latvia</option>
                                                      <option value="LB">Lebanon</option>
                                                      <option value="LS">Lesotho</option>
                                                      <option value="LR">Liberia</option>
                                                      <option value="LY">Libyan Arab Jamahiriya</option>
                                                      <option value="LI">Liechtenstein</option>
                                                      <option value="LT">Lithuania</option>
                                                      <option value="LU">Luxembourg</option>
                                                      <option value="MO">Macau</option>
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
                                                      <option value="YT">Mayotte</option>
                                                      <option value="MX">Mexico</option>
                                                      <option value="MD">Moldova, Republic of</option>
                                                      <option value="MC">Monaco</option>
                                                      <option value="MN">Mongolia</option>
                                                      <option value="MS">Montserrat</option>
                                                      <option value="MA">Morocco</option>
                                                      <option value="MZ">Mozambique</option>
                                                      <option value="MM">Myanmar</option>
                                                      <option value="NA">Namibia</option>
                                                      <option value="NR">Nauru</option>
                                                      <option value="NP">Nepal</option>
                                                      <option value="NL">Netherlands</option>
                                                      <option value="AN">Netherlands Antilles</option>
                                                      <option value="NC">New Caledonia</option>
                                                      <option value="NZ">New Zealand</option>
                                                      <option value="NI">Nicaragua</option>
                                                      <option value="NE">Niger</option>
                                                      <option value="NG">Nigeria</option>
                                                      <option value="NU">Niue</option>
                                                      <option value="NF">Norfolk Island</option>
                                                      <option value="MP">Northern Mariana Islands</option>
                                                      <option value="NO">Norway</option>
                                                      <option value="OM">Oman</option>
                                                      <option value="PW">Palau</option>
                                                      <option value="PA">Panama</option>
                                                      <option value="PG">Papua New Guinea</option>
                                                      <option value="PY">Paraguay</option>
                                                      <option value="PE">Peru</option>
                                                      <option value="PH">Philippines</option>
                                                      <option value="PN">Pitcairn</option>
                                                      <option value="PL">Poland</option>
                                                      <option value="PT">Portugal</option>
                                                      <option value="PR">Puerto Rico</option>
                                                      <option value="QA">Qatar</option>
                                                      <option value="RE">Reunion</option>
                                                      <option value="RO">Romania</option>
                                                      <option value="RU">Russian Federation</option>
                                                      <option value="RW">Rwanda</option>
                                                      <option value="KN">Saint Kitts and Nevis</option>
                                                      <option value="LC">Saint LUCIA</option>
                                                      <option value="WS">Samoa</option>
                                                      <option value="SM">San Marino</option>
                                                      <option value="ST">Sao Tome and Principe</option>
                                                      <option value="SA">Saudi Arabia</option>
                                                      <option value="SN">Senegal</option>
                                                      <option value="SC">Seychelles</option>
                                                      <option value="SL">Sierra Leone</option>
                                                      <option value="SG">Singapore</option>
                                                      <option value="SK">Slovakia (Slovak Republic)</option>
                                                      <option value="SI">Slovenia</option>
                                                      <option value="SB">Solomon Islands</option>
                                                      <option value="SO">Somalia</option>
                                                      <option value="ZA">South Africa</option>
                                                      <option value="ES">Spain</option>
                                                      <option value="LK">Sri Lanka</option>
                                                      <option value="SH">St. Helena</option>
                                                      <option value="PM">St. Pierre and Miquelon</option>
                                                      <option value="SD">Sudan</option>
                                                      <option value="SR">Suriname</option>
                                                      <option value="SZ">Swaziland</option>
                                                      <option value="SE">Sweden</option>
                                                      <option value="CH">Switzerland</option>
                                                      <option value="SY">Syrian Arab Republic</option>
                                                      <option value="TW">Taiwan, Province of China</option>
                                                      <option value="TJ">Tajikistan</option>
                                                      <option value="TZ">Tanzania, United Republic of</option>
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
                                                      <option value="GB">United Kingdom</option>
                                                      <option value="US">United States</option>
                                                      <option value="UY">Uruguay</option>
                                                      <option value="UZ">Uzbekistan</option>
                                                      <option value="VU">Vanuatu</option>
                                                      <option value="VE">Venezuela</option>
                                                      <option value="VN">Viet Nam</option>
                                                      <option value="VG">Virgin Islands (British)</option>
                                                      <option value="VI">Virgin Islands (U.S.)</option>
                                                      <option value="WF">Wallis and Futuna Islands</option>
                                                      <option value="EH">Western Sahara</option>
                                                      <option value="YE">Yemen</option>
                                                      <option value="ZM">Zambia</option>
                                                      <option value="ZW">Zimbabwe</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="namadepan">Nama Depan <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="text" required id="namadepan" name="namadepan" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="namabelakang">Nama Belakang <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="text" required id="namabelakang" name="namabelakang" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="tempatlahir">Tempat Lahir <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="text" required placeholder="tempatlahir" id="tempatlahir" name="tempatlahir" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="tanggallahir">Tanggal Lahir <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="date" required placeholder="tanggallahir" id="tanggallahir" name="tanggallahir" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="agama">Agama <span class="text-danger">*</span></label>
                                                   <select name="agama" id="agama" required class="form-control">
                                                      <option value="">Pilih</option>
                                                      <option value="Islam">Islam</option>
                                                      <option value="Kristen">Kristen</option>
                                                      <option value="Budha">Budha</option>
                                                      <option value="Hindu">Hindu</option>
                                                      <option value="Konghucu">Konghucu</option>
                                                      <option value="Lainnnya">Lainnya</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="gender">Jenis Kelamin <span class="text-danger">*</span></label>
                                                   <select name="gender" id="gender" required class="form-control">
                                                      <option value="">Pilih</option>
                                                      <option value="L">Laki Laki</option>
                                                      <option value="P">Perempuan</option>
                                                   </select>
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="alamat">Alamat <span class="text-danger">*</span></label>
                                                   <input class="form-control" required type="text" placeholder="Alamat Tempat Tinggal" id="alamat" name="alamat" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="provinsi">Provinsi <span class="text-danger">*</span></label>
                                                   <select name="provinsi" class="form-control" id="provinsi" required="">
                                                      <option value="">Pilih Provinsi</option>
                                                      <?php
                                                      $sql1 = mysqli_query($koneksi, "SELECT * FROM wil_provinsi");
                                                      while ($prov = mysqli_fetch_array($sql1)) { ?>
                                                         <option value="<?php echo $prov['id']; ?>"><?php echo $prov['provinsi']; ?></option>
                                                      <?php } ?>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-6" id="a">
                                                <div class="form-group">
                                                   <label for="kabupaten">Kabupaten <span class="text-danger">*</span></label>
                                                   <select name="kabupaten" class="form-control" id="kabupaten" required="">
                                                      <option value="">Pilih Kabupaten</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-6" id="b">
                                                <div class="form-group">
                                                   <label for="kecamatan">Kecamatan <span class="text-danger">*</span></label>
                                                   <select name="kecamatan" class="form-control" id="kecamatan" required="">
                                                      <option value="">Pilih Kecamatan</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-6" id="c">
                                                <div class="form-group">
                                                   <label for="kelurahan">Kecamatan <span class="text-danger">*</span></label>
                                                   <select name="kelurahan" class="form-control" id="kelurahan" required="">
                                                      <option value="">Pilih Kelurahan</option>
                                                   </select>
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="email">Email Address <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="email" required placeholder="Enter your email" id="email" name="email" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="telepon_mhs">No.Telepon </label>
                                                   <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="telepon_mhs" name="telepon_mhs" />
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="form-group">
                                                   <label for="hp_mhs">No. Handphone (WA) <span class="text-danger">*</span></label>
                                                   <input class="form-control" required placeholder="(xx) xxx xxxx xxx" type="text" id="hp_mhs" name="hp_mhs">
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                       </div>
                                       <div class="col-lg-4">
                                          <div class="border p-3 mt-4 mt-lg-0 rounded">
                                             <h4 class="header-title mb-3">Dokumen</h4>

                                             <div class="table-responsive">
                                                <table class="table table-centered mb-0">
                                                   <tbody>
                                                      <tr>
                                                         <td>
                                                            <img src="assets/images/notfound.jpeg" class="rounded mr-2" height="48" />
                                                            <p class="m-0 d-inline-block align-middle">
                                                               <a href="javascript:;" class="text-body font-weight-semibold">Foto KTP</a>
                                                               <br>
                                                            </p>
                                                         </td>
                                                         <td class="text-right">
                                                            <button class="btn btn-primary">Upload</button>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <img src="assets/images/notfound.jpeg" class="rounded mr-2" height="48" />
                                                            <p class="m-0 d-inline-block align-middle">
                                                               <a href="javascript:;" class="text-body font-weight-semibold">Foto Diri</a>
                                                               <br>
                                                            </p>
                                                         </td>
                                                         <td class="text-right">
                                                            <button class="btn btn-primary">Upload</button>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <img src="assets/images/notfound.jpeg" class="rounded mr-2" height="48" />
                                                            <p class="m-0 d-inline-block align-middle">
                                                               <a href="javascript:;" class="text-body font-weight-semibold">Tanda Tangan</a>
                                                               <br>
                                                            </p>
                                                         </td>
                                                         <td class="text-right">
                                                            <button class="btn btn-primary">Upload</button>
                                                         </td>
                                                      </tr>
                                                      <tr>
                                                         <td>
                                                            <img src="assets/images/notfound.jpeg" class="rounded mr-2" height="48" />
                                                            <p class="m-0 d-inline-block align-middle">
                                                               <a href="javascript:;" class="text-body font-weight-semibold">Ijazah / SKTL</a>
                                                               <br>
                                                            </p>
                                                         </td>
                                                         <td class="text-right">
                                                            <button class="btn btn-primary">Upload</button>
                                                         </td>
                                                      </tr>
                                                   </tbody>
                                                </table>
                                             </div>
                                             <!-- end table-responsive -->
                                          </div> <!-- end .border-->

                                       </div> <!-- end col -->
                                    </div> <!-- end row-->

                                    <div class="row">
                                       <div class="col-lg-8">
                                          <h4 class="mt-2">Data Orang Tua / Wali</h4>
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="nama_ayah">Nama Ayah <span class="text-danger">*</span></label>
                                                   <input class="form-control" required type="text" id="nama_ayah" name="nama_ayah" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="telepon_ayah">No.Telepon</label>
                                                   <input class="form-control" type="text" id="telepon_ayah" name="telepon_ayah" />
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="nama_ibu">Nama Ibu <span class="text-danger">*</span></label>
                                                   <input class="form-control" required type="text" id="nama_ibu" name="nama_ibu" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="telepon_ibu">No.Telepon </label>
                                                   <input class="form-control" type="text" placeholder="(xx) xxx xxxx xxx" id="telepon_ibu" name="telepon_ibu" />
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                          <div class="row">
                                             <div class="col-12">
                                                <div class="form-group">
                                                   <label for="alamat_orangtua">Alamat Orang Tua <span class="text-danger">*</span></label>
                                                   <input class="form-control" required type="text" id="alamat_orangtua" name="alamat_orangtua">
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                          <div class="row">
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for=nama_wali">Nama Wali</label>
                                                   <input class="form-control" type="text" id="nama_wali" name="nama_wali" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="telepon_wali">No.Telepon</label>
                                                   <input class="form-control" type="text" id="telepon_wali" name="telepon_wali" />
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                       </div>
                                    </div> <!-- end row-->

                                    <div class="row">

                                       <div class="col-lg-8">
                                          <h4 class="mt-2">Data Akademik</h4>

                                          <p class="text-muted mb-4">Lengkapi data akademik asal sekolah dan kelengkapan akademik lainnya</p>

                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                   <label for="nama_sekolah">Nama Sekolah <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="text" required id="nama_sekolah" name="nama_sekolah" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="provinsi_sekolah">Provinsi <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="text" required id="provinsi_sekolah" name="provinsi_sekolah" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="kabupaten_sekolah">Kabupaten <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="text" required id="kabupaten_sekolah" name="kabupaten_sekolah" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="nis">Nomor Induk Siswa<span class="text-danger">*</span></label>
                                                   <input class="form-control" type="text" required id="nis" name="nis" />
                                                </div>
                                             </div>
                                             <div class="col-md-6">
                                                <div class="form-group">
                                                   <label for="tahunsekolah">Tahun Tamat Sekolah <span class="text-danger">*</span></label>
                                                   <input class="form-control" type="year" required id="tahunsekolah" name="tahunsekolah" />
                                                </div>
                                             </div>
                                          </div> <!-- end row -->
                                       </div> <!-- end col -->
                                    </div> <!-- end row-->
                                    <div class="row">
                                       <div class="col-sm-12">
                                          <div class="text-sm-left">
                                             <button class="btn btn-danger" type="submit" name="register_pmb"> Simpan</button>
                                          </div>
                                       </div>
                                    </div> <!-- end row-->
                                 </div>
                                 <!-- End Billing Information Content-->

                                 <!-- Shipping Content-->
                                 <div class="tab-pane" id="shipping-information">

                                 </div>
                                 <!-- End Shipping Information Content-->

                                 <!-- Payment Content-->
                                 <div class="tab-pane" id="payment-information">

                                 </div>
                                 <!-- End Payment Information Content-->

                              </div>



                        </div> <!-- end card-body-->

                     </div> <!-- end card-->

                  </div> <!-- end col -->
                  </form>
               </div>
               <!-- end row-->

            </div> <!-- container -->
            <!-- container -->

         </div>
         <!-- content -->

         <!-- Footer Start -->
         <?php
         require '../../assets/template/footer.php';
         ?>
         <!-- end Footer -->

      </div>

      <?php if (@$_SESSION['sukses']) { ?>
         <script>
            swal("Good job !", "<?php echo $_SESSION['sukses']; ?>", "success").then(function() {
               window.location = "<?php echo $_SESSION['redirectlogin'] ?>";
            });
         </script>
      <?php unset($_SESSION['sukses']);
      } ?>
      <?php if (@$_SESSION['error']) { ?>
         <script>
            swal("Perhatian !!", "<?php echo $_SESSION['error']; ?>", "error");
         </script>
      <?php unset($_SESSION['error']);
      } ?>

      <!-- ============================================================== -->
      <!-- End Page content -->
      <!-- ============================================================== -->


   </div>

   <script type="text/javascript">
      var kab = document.getElementById('a');
      var kec = document.getElementById('b');
      var kel = document.getElementById('c');
      var prov = document.getElementById('provinsi');
      var kabu = document.getElementById('kabupaten');
      var kelu = document.getElementById('kecamatan');
      kab.style.display = 'none';
      kec.style.display = 'none';
      kel.style.display = 'none';

      $(document).ready(function() {
         $('body').on('change', '#provinsi', function() {
            if (prov.value == "") {
               kab.style.display = 'none';
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kab.style.display = 'block';
               kec.style.display = 'none';
               kel.style.display = 'none';
            }
            var a = document.getElementById('provinsi').value;
            var data = "data=kab&no=" + a;
            $.ajax({
               type: 'GET',
               url: "module/user/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kabupaten").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kabupaten', function() {
            if (kabu.value == "") {
               kec.style.display = 'none';
               kel.style.display = 'none';
            } else {
               kec.style.display = 'block';
               kel.style.display = 'none';
            }
            var a = document.getElementById('kabupaten').value;
            var data = "data=kec&no=" + a;
            $.ajax({
               type: 'GET',
               url: "module/user/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kecamatan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
      $(document).ready(function() {
         $('body').on('change', '#kecamatan', function() {
            if (kabu.value == "") {
               kel.style.display = 'none';
            } else {
               kel.style.display = 'block';
            }
            var a = document.getElementById('kecamatan').value;
            var data = "data=kel&no=" + a;
            $.ajax({
               type: 'GET',
               url: "module/user/proses.php",
               data: data,
               success: function(hasil) {
                  $("#kelurahan").html(hasil);
               },
               error: function() {
                  alert("Terjadi kesalahan saat mengambil data.");
               }
            })
         })
      })
   </script>
   <!-- END wrapper -->

   <!-- bundle -->
   <script src="assets/js/vendor.min.js"></script>
   <script src="assets/js/app.min.js"></script>

   <!-- third party js -->
   <script src="assets/js/vendor/apexcharts.min.js"></script>
   <script src="assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
   <script src="assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
   <!-- third party js ends -->

   <!-- demo app -->
   <script src="assets/js/pages/demo.dashboard.js"></script>
   <!-- end demo js-->
</body>

<!-- Mirrored from coderthemes.com/hyper/saas/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 05:15:01 GMT -->

</html>