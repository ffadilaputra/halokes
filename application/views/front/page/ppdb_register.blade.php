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