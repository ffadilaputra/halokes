<div class="col-md-12 col-lg-4 sidebar">
   {{-- <div class="sidebar-box search-form-wrap">
      <form action="#" class="search-form">
         <div class="form-group">
            <span class="icon fa fa-search"></span>
            <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
         </div>
      </form>
   </div> --}}
   <!-- END sidebar-box -->

   <!-- END sidebar-box -->
   <div class="sidebar-box">
      <h3 class="heading">Popular Posts</h3>
      @foreach($footer as $data)
      <div class="post-entry-sidebar">
         <ul>
            <li>
              <a href="{{ base_url('blog/detail/'.$data->id_news) }}">
                  <img src="{{ base_url('assets/uploads/').$data->thumb }}" alt="Image placeholder" class="mr-4">
                  <div class="text">
                  <h4> {{ $data->title }}</h4>
                     <div class="post-meta">
                     <span class="mr-2">{{ $data->created_at }}</span>
                     </div>
                  </div>
               </a>
            </li>
         </ul>
      </div>
      @endforeach
    </div>
   <!-- END sidebar-box -->
   <div class="sidebar-box">
      <h3 class="heading">Categories</h3>
      <ul class="categories">
         <li><a href="#">Berita </a></li>
         <li><a href="#">Maulidhoh </a></li>
      </ul>
   </div>
   <!-- END sidebar-box -->
   {{-- <div class="sidebar-box">
      <h3 class="heading">Tags</h3>
      <ul class="tags">
         <li><a href="#">Travel</a></li>
         <li><a href="#">Adventure</a></li>
         <li><a href="#">Food</a></li>
         <li><a href="#">Lifestyle</a></li>
         <li><a href="#">Business</a></li>
         <li><a href="#">Freelancing</a></li>
         <li><a href="#">Travel</a></li>
         <li><a href="#">Adventure</a></li>
         <li><a href="#">Food</a></li>
         <li><a href="#">Lifestyle</a></li>
         <li><a href="#">Business</a></li>
         <li><a href="#">Freelancing</a></li>
      </ul>
   </div> --}}
</div>
<!-- END sidebar -->
