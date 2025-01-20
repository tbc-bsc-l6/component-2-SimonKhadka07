<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Details</title>

    <!-- Base URL -->
    <base href="/public">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <style>
        /* Header Section Styling */
        .header_section {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }

        /* Post Section Styling */
        .post-section {
            text-align: center;
            padding: 40px 20px;
        }

        .post-section img {
            padding: 20px;
            margin: auto;
            max-width: 500px; /* Ensures the image doesn't exceed this width */
            height: auto; /* Maintains the aspect ratio */
            display: block; /* Centers the image within the container */
            border-radius: 8px;
        }

        .post-section h3 {
            font-size: 28px;
            font-weight: bold;
            margin: 20px 0 10px;
        }

        .post-section h4 {
            font-size: 20px;
            margin: 10px 0;
            color: #555;
        }

        .post-section p {
            font-size: 16px;
            margin: 10px 0;
        }

        .post-section .btn_main a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .post-section .btn_main a:hover {
            background-color: #0056b3;
        }

        /* Footer Section Styling */
        .footer_section {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <div class="header_section">
        @include('home.header')
        <!-- Add additional header content here if needed -->
    </div>

    <!-- Post Section -->
    <div class="post-section container">
        <div>
            <img
                src="/postimage/{{ $post->image }}"
                alt="Post Image"
                class="services_img"
            />
        </div>
        <h3>{{ $post->title }}</h3>
        <h4>{{ $post->description }}</h4>
        <p>Post by <b>{{ $post->name }}</b></p>
        <div class="btn_main">
            <a href="{{ url('post_details', $post->id) }}">Read More</a>
        </div>
    </div>

    <!-- Footer Section -->
    <div class="footer_section">
        @include('home.footer')
        <!-- Add footer content here if needed -->
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
