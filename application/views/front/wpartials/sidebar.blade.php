<div class="col-md-12 col-lg-4 sidebar">

   <div class="sidebar-box">
      <h3 class="heading">Berita</h3>
      <div class="post-entry-sidebar">
         <ul>
           @foreach($sidebar as $data)
            <li>
               <a href="{{ base_url('berita/detail/').$data->id_news }}">
                  <img src="{{ base_url('assets/uploads/').$data->thumb }}" alt="Image placeholder" class="mr-4">
                  <div class="text">
                     <h4>{{ $data->title }}</h4>
                     <div class="post-meta">
                        <span class="mr-2">{{ $data->created_at }}</span>
                     </div>
                  </div>
               </a>
            </li>
            @endforeach
         </ul>
      </div>
      @endforeach
    </div>
   <!-- END sidebar-box -->
</div>
<!-- END sidebar -->
