<div class="wrap">
<footer class="site-footer">
   <div class="container">
      <div class="row mb-5">
         <div class="col-md-4">
            <h3>Tentang</h3>
            <p class="mb-4">
               <img src="{{ base_url('assets/wordify') }}/images/img4.jpg" alt="Image placeholder" class="img-fluid">
            </p>
            <p><a href="{{base_url('profile') }}">Pondok Pesantren Ma'had Darun Najah</a></p>
         </div>
         <div class="col-md-6 ml-auto">
            <div class="row">
               <div class="col-md-7">
                  <h3>Berita Terbaru</h3>
                  <div class="post-entry-sidebar">
                     <ul>
                        <li>
                          @foreach($footer as $data)
                           <a href="{{ base_url('blog/detail/').$data->id_news }}">
                              <img src="{{ base_url('assets/wordify') }}/images/img_6.jpg" alt="Image placeholder" class="mr-4">
                              <div class="text">
                                 <h4> {{ $data->title }} </h4>
                                 <div class="post-meta">
                                    <span class="mr-2">{{ $data->created_at }}</span>
                                 </div>
                              </div>
                           </a>
                           @endforeach
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-1"></div>
               <div class="col-md-4">
                  <!-- <div class="mb-5">
                     <h3>Quick Links</h3>
                     <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Adventure</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Categories</a></li>
                     </ul>
                  </div> -->
                  <div class="mb-5">
                     <h3>Sosial Media</h3>
                     <ul class="list-unstyled footer-social">
                        <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                        <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12 text-center">
            <p class="small">
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | Design by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
               <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
         </div>
      </div>
   </div>
</footer>
</div>
<!-- END footer -->
