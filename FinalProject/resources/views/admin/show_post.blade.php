<!DOCTYPE html>
<html>
  <head>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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

        @if(session()->has('message'))

        <div class="alert alert-danger">

            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

            {{session()->get('message') }}

        </div>

        @endif


        <h1 class="title_deg">All Post</h1>

        <table class="table_deg">

            <tr class= "th_deg">
                <th>Post title</th>

                <th>Description</th>

                <th>Post by</th>

                <th>Post Status</th>

                <th>UserType</th>

                <th>Image</th>

                <th>Delete</th>

                <th>Edit</th>


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

                <td>
                    <a href="{{ url('delete_post',$post->id) }}" class="btn btn-danger" onclick="confirmation(event)">Delete</a>
                </td>

                <td>
                    <a href= "{{ url('edit_page',$post->id) }}" class="btn btn-success">Edit</a>
                </td>

@endforeach



            </tr>



        </table>



      </div>


        @include('admin.footer')
    </div>

    {{-- <script type="text/javascript">

        function confirmation(ev)
        {

            ev.preventDefault();

            var urlToRedirect=ev.currentTarget.getAttribute('href');

            console.Log(urlToRedirect);


            swal({

                title:"Are you sure to delete this ?" ,

                text:"You won't be able to reveret this delete ",

                icon:"warning",

                buttons: true,

                dangerMode: true,

            })


            .then((willCancel)=>
            {
                if(willCancel)
                {
                    window.location.href=urlToRedirect;
                }


            });

        }

    </script> --}}

  </body>
</html>
