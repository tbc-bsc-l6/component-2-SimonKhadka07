<!DOCTYPE html>
<html>
  <head>
   @include('admin.css')

    <style type="text/css">

        .title_deg
        {
            font-size: 30px;
            font-weight: bold;
            color: white;
            padding: 30px;
            text-align: center;
        }


        .table_deg
        {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin-Left: 70px;
        }


        .th_deg
        {
            background-color:skyblue;

        }

        .img_deg
        {
            height: 100px;
            idth: 150px;
            padding: 10px;
        }

    </style>



  </head>
  <body>

    @include('admin.header')

    <div class="d-flex align-items-stretch">

      @include('admin.sidebar')

      <div class="page-content">

        <h1 class="title_deg">All Post</h1>

        <table class="table_deg">

            <tr class= "th_deg">
                <th>Post title</th>

                <th>Description</th>

                <th>Post by</th>

                <th>Post Status</th>

                <th>UserType</th>

                <th>Image</th>
            </tr>


@foreach($post as $post)

            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->post_status }}</td>
                <td>{{ $post->usertype }}</td>
                <td>
                    <img class="img_deg" src="postimage/{{$post->image}}">
                </td>

@endforeach



            </tr>



        </table>



      </div>


        @include('admin.footer')
    </div>

  </body>
</html>
