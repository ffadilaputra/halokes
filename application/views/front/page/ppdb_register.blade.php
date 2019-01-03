@extends('front.template')
@section('content')
<!--contact start -->
 <!-- form_open('ppdb/santri/store')  -->

<?= form_open('ppdb/santri/store')
// $atribut = array('id' => 'contact-form');
// echo form_open('ppdb/santri/store', $atribut); 
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

                  <!-- ttl -->
                  <div class="row">
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir">
                        @if($errors->has('tempat_lahir'))
                        <small class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                    <div class="col-sm-6 col-xs-12">
                      <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tgl_lahir">
                        @if($errors->has('tgl_lahir'))
                        <small class="text-danger">{{ $errors->first('tgl_lahir') }}</small>
                        @endif
                      </div>
                      <!--/.form-group-->
                    </div>
                    <!--/.col-->
                  </div>
                  <!--/.row-->

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