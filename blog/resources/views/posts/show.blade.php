<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles */
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row my-5">
            <div class="card">
                <div class="card-header">
                    <h3>{{ $post['title'] }}</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-text"> Post with ID : {{ $post['id'] }}, </h5>
                    <h5 class="card-title">Post Body : {{ $post['body'] }}</h5>
                    <p class="card-text">Posted by: {{ $post['posted_by'] }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
