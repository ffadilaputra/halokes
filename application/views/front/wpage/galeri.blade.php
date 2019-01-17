@extends('front.template')

@section('content')
<div class="wrap">


  <section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">GALLERY</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-12 main-content">
          <div class="row">
            <div class="col-md-4">
              <a href="{{ base_url('blog') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/wordify') }}/images/img_5.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="{{ base_url('blog/blog1') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/wordify') }}/images/img_6.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>

            <div class="col-md-4">
              <a href="{{ base_url('blog') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/wordify') }}/images/img_7.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="{{ base_url('blog') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/wordify') }}/images/img_8.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>

            <div class="col-md-4">
              <a href="{{ base_url('blog') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/wordify') }}/images/img_9.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a href="{{ base_url('blog') }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                <img src="{{ base_url('assets/wordify') }}/images/img_10.jpg" alt="Image placeholder">
                <div class="blog-content-body">
                  <div class="post-meta">
                    <span class="author mr-2"><img src="{{ base_url('assets/wordify') }}/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                    <span class="mr-2">March 15, 2018 </span> &bullet;
                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                  </div>
                  <h2>How to Find the Video Games of Your Youth</h2>
                </div>
              </a>
            </div>

          </div>

          <!-- <div class="row mt-5">
            <div class="col-md-12 text-center">
              <nav aria-label="Page navigation" class="text-center">
                <ul class="pagination">
                  <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                </ul>
              </nav>
            </div>
          </div> -->

        </div>

        <!-- END main-content -->


      </div>
    </div>
  </section>
  <!-- END section -->



</div>

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>


@include('front.partials.modal')
@endsection
