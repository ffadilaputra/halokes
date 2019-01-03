@extends('front.template')
@section('content')
<!--contact start -->
 <!-- form_open('ppdb/santri/store')  -->

<?= 
form_open('ppdb/santri/store')
//  $atribut = array('id' => 'contact-form');
//  form_open('ppdb/santri/store', $atribut); 
?>

<section id="contact" class="contact">
  <br><br><br><br>
    <div class="section-heading text-center">
      <h2>FORMULIR PENDAFTARAN SANTRI BARU</h2>
    </div>

    <form id="regForm" action="/action_page.php">
      <h1>Register:</h1>
      <!-- One "tab" for each step in the form: -->
      <div class="tab">Name:
        <p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
        <p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
      </div>
      <div class="tab">Contact Info:
        <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
        <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
      </div>
      <div class="tab">Birthday:
        <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
        <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
        <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
      </div>
      <div class="tab">Login Info:
        <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
        <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
      </div>
      <div style="overflow:auto;">
        <div style="float:right;">
          <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
          <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align:center;margin-top:40px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
      </div>
  </form>
</section>
<?= form_close() ?>
  <!--/.contact-->
  <!--contact end -->

@endsection





<!-- new -->
@extends('front.template')
@section('content')
<!--contact start -->
 <!-- form_open('ppdb/santri/store')  -->

<?= 
form_open('ppdb/santri/store')
//  $atribut = array('id' => 'contact-form');
//  form_open('ppdb/santri/store', $atribut); 
?>

<section id="contact" class="contact">
  <br><br><br><br>
    <div class="section-heading text-center">
      <h2>FORMULIR PENDAFTARAN SANTRI BARU</h2>
    </div>

    <div class="container">
      <div class="contact-content">
        <div class="row">
          <!-- right -->
          <div class="col-md-offset-1 col-md-5 col-sm-6">
            <div class="single-contact-box">
              <div class="contact-form">
                  <!-- nis -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">NIS</label>
                        <input type="number" class="form-control" name="nis">
                        @if($errors->has('nis'))
                        <small class="text-danger">{{ $errors->first('nis') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->
                  <!-- nama lengkap -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap">
                        @if($errors->has('nama_lengkap'))
                        <small class="text-danger">{{ $errors->first('nama_lengkap') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- panggilan -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Nama Panggilan</label>
                        <input type="text" class="form-control" name="panggilan">
                        @if($errors->has('panggilan'))
                        <small class="text-danger">{{ $errors->first('panggilan') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- nik -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">NIK</label>
                        <input type="number" class="form-control" name="nik">
                        @if($errors->has('nik'))
                        <small class="text-danger">{{ $errors->first('nik') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- tempat lahir -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir">
                        @if($errors->has('tempat_lahir'))
                        <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                  </div>
                  <!--/.row-->

                  <!-- ttl -->
                  <div class="row">
                  <!-- tgl -->
                    <div class="col-sm-3 col-xs-12">
                      <div class="form-group">
                        <label for="">Tgl</label>
                        <input type="number" min="1" max="31"  class="form-control" name="tgl"  id="tgl" required onkeyup="capt()">
                        
                        @if($errors->has('tempat_lahir'))
                        <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <!-- bln -->
                    <div class="col-sm-5 col-xs-12">
                      <div class="form-group">
                        <label for="">Bulan</label>
                        <select name="bln" id="bulan" class="form-control" required="required" placeholder="Bulan" style="border: 1px solid #ea8a8a;">
                          <option value="1">Januari</option>
                          <option value="2">Februari</option>
                          <option value="3">Maret</option>
                          <option value="4">April</option>
                          <option value="5">Mei</option>
                          <option value="6">Juni</option>
                          <option value="7">Juli</option>
                          <option value="8">Agustus</option>
                          <option value="9">September</option>
                          <option value="10">Oktober</option>
                          <option value="11">November</option>
                          <option value="12">Desember</option>
                        </select>
                        @if($errors->has('tgl_lahir'))
                        <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                        @endif
                      </div>
                    </div>
                    <!--/.col-->
                    <!-- thn -->
                    <div class="col-sm-4 col-xs-12">
                      <div class="form-group">
                        <label for="">Tahun</label>
                        <input type="number" min="1990" max="2018" class="form-control medqInput" name="tahun" id="tahun"  required onkeyup="capt()">
                        @if($errors->has('tgl_lahir'))
                        <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                        @endif
                      </div>
                    </div>
                  </div>



                  <!-- telp -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Telepon</label>
                        <!-- <div class="form-group input-group"> -->
                              <!-- <span class="input-group-addon" value="0">+62</span> -->
                              <input type="number" name="telepon" class="form-control" maxlength="13">
                              @if($errors->has('telepon'))
                              <small class="text-danger">{{ $errors->first('telepon') }}</small>
                              @endif
                        <!-- </div> -->
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

              </div>
              <!--/.contact-form-->
            </div>
            <!--/.single-contact-box-->
          </div>
          <!--/.col-->

          <!-- left -->
          <div class="col-md-offset-1 col-md-5 col-sm-6">
            <div class="single-contact-box">
              <div class="contact-form">

                  <!-- alamat -->
                  <div class="row">
                    <div class="col-sm-12">
                      <label for="">Alamat</label>
                      <div class="form-group">
                        <textarea name="alamat" class="form-control" rows="3" id="comment"></textarea>
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- kecamatan dan kelurahan -->
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Kelurahan</label>
                        <input type="text" class="form-control" name="kelurahan">
                        @if($errors->has('kelurahan'))
                        <small class="text-danger">{{ $errors->first('kelurahan') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Kecamatan</label>
                        <input type="text" class="form-control"  name="kecamatan">
                        @if($errors->has('kecamatan'))
                        <small class="text-danger">{{ $errors->first('kecamatan') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- kota dan provinsi -->
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Kota</label>
                        <input type="text" class="form-control" name="kota">
                        @if($errors->has('kota'))
                        <small class="text-danger">{{ $errors->first('kota') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Provinsi</label>
                        <input type="text" class="form-control"  name="provinsi">
                        @if($errors->has('provinsi'))
                        <small class="text-danger">{{ $errors->first('provinsi') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- kodepos -->
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="">Kodepos</label>
                        <input type="number" name="kode_pos" class="form-control" maxlength="5">
                        @if($errors->has('kode_pos'))
                          <small class="text-danger">{{ $errors->first('kode_pos') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

                  <!-- captcha -->
                  <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LdesYUUAAAAAN9ObZshxalAifbSjPxoQK3vv0x4" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                    <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                    <div class="help-block with-errors"></div>
                  </div>
                  <!-- end captcha -->

                  <!-- captcha php -->
                  <?php
                  // require ReCaptcha class
                  require('recaptcha/recaptcha-master/src/autoload.php');

                  // configure
                  // an email address that will be in the From field of the email.
                  $from = 'Demo contact form <demo@domain.com>';

                  // an email address that will receive the email with the output of the form
                  $sendTo = 'Demo contact form <demo@domain.com>';

                  // subject of the email
                  $subject = 'New message from contact form';

                  // form field names and their translations.
                  // array variable name => Text to appear in the email
                  $fields = array('name' => 'Name', 'surname' => 'Surname', 'phone' => 'Phone', 'email' => 'Email', 'message' => 'Message');

                  // message that will be displayed when everything is OK :)
                  $okMessage = 'Contact form successfully submitted. Thank you, I will get back to you soon!';

                  // If something goes wrong, we will display this message.
                  $errorMessage = 'There was an error while submitting the form. Please try again later';

                  // ReCaptch Secret
                  $recaptchaSecret = '6LdesYUUAAAAAKcZbummOqyW7zO4U-u4NWmK0voJ';

                  // let's do the sending

                  // if you are not debugging and don't need error reporting, turn this off by error_reporting(0);
                  error_reporting(E_ALL & ~E_NOTICE);

                  try {
                      if (!empty($_POST)) {

                          // validate the ReCaptcha, if something is wrong, we throw an Exception,
                          // i.e. code stops executing and goes to catch() block
                          
                          if (!isset($_POST['g-recaptcha-response'])) {
                              throw new \Exception('ReCaptcha is not set.');
                          }

                          // do not forget to enter your secret key from https://www.google.com/recaptcha/admin
                          
                          $recaptcha = new \ReCaptcha\ReCaptcha($recaptchaSecret, new \ReCaptcha\RequestMethod\CurlPost());
                          
                          // we validate the ReCaptcha field together with the user's IP address
                          
                          $response = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

                          if (!$response->isSuccess()) {
                              throw new \Exception('ReCaptcha was not validated.');
                          }
                          
                          // everything went well, we can compose the message, as usually
                          
                          $emailText = "You have a new message from your contact form\n=============================\n";

                          foreach ($_POST as $key => $value) {
                              // If the field exists in the $fields array, include it in the email
                              if (isset($fields[$key])) {
                                  $emailText .= "$fields[$key]: $value\n";
                              }
                          }
                      
                          // All the neccessary headers for the email.
                          $headers = array('Content-Type: text/plain; charset="UTF-8";',
                              'From: ' . $from,
                              'Reply-To: ' . $from,
                              'Return-Path: ' . $from,
                          );
                          
                          // Send email
                          mail($sendTo, $subject, $emailText, implode("\n", $headers));

                          $responseArray = array('type' => 'success', 'message' => $okMessage);
                      }
                  } catch (\Exception $e) {
                      $responseArray = array('type' => 'danger', 'message' => $e->getMessage());
                  }

                  if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
                      $encoded = json_encode($responseArray);

                      header('Content-Type: application/json');

                      echo $encoded;
                  } else {
                      echo $responseArray['message'];
                  }
                  ?>
                  <!-- end captcha php -->

                  <!-- btn submit -->
                  <div class="row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success">Submit</button>
                      <!--/.single-single-contact-btn-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->
              </div>
              <!--/.contact-form-->
            </div>
            <!--/.single-contact-box-->
          </div>
          <!--/.col-->
        </div>
        <!--/.row-->
      </div>
      <!--/.contact-content-->
    </div>
    <!--/.container-->
</section>
<?= form_close() ?>
  <!--/.contact-->
  <!--contact end -->

  <script>
  
  </script>
@endsection