<!DOCTYPE html>
<html lang="en">
   <head>

    <base href="/public">

      @include('home.homecss')

   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->

      </div>

      <div style="text-align:center" class="col-md-">
        <div><img style="padding: 20px" margin: auto;" src="/postimage/{{ $post->image}}" class="services_img">  </div>
        <h3><b>{{$post->title}}</b></h3>

        <h4>{{$post->description}}</h4>


        <p>Post by <b>{{$post->name}}</p>


        <div class="btn_main"><a href="{{url('post_details',$post->id)}}">Read More</a></div>
        </div>


     @include('home.footer')

   </body>
</html>
