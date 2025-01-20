<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Genre </h1>
       <p class="services_text"></p>
       <div class="services_section_2">
          <div class="row">

            @foreach($post as $post)

             <div class="col-md-4">
                <div><img src="/postimage/{{ $post->image}}" class="services_img"></div>
                <h4>{{$post->title}}</h4>

                <p>Post by <b>{{$post->name}}</p>


                <div class="btn_main"><a href="#">Read More</a></div>
             </div>

            @endforeach

          </div>
       </div>
    </div>
 </div>
