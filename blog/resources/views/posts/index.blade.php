<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITI Blog Open Source</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid my-5">
        <div class="row my-5">
            <h1>ITI Blog Open Source</h1>
            <table class="table table-hover table-dark table-striped rounded-3 text-center">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Posted By</th>
                    <th colspan='4'>Actions</th>
                </tr>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $post['id'] }}</td>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['body'] }}</td>
                    <td>{{ $post['posted_by'] }}</td>
                    <td>  <a href="/post/{{ $post['id'] }}/edit" class="btn btn-success">Update</a></td>
                    <td>
                        <a href="/post/{{ $post['id'] }}" class="btn btn-primary">Show</a>
                    
                    </td>
                    <td> <form action="/posts/{{ $post['id'] }}" method="post">
                            @method('delete')
                            @csrf
                            <input type='submit' value="Delete" class="btn btn-danger">
                        </form></td>
                </tr>
                @endforeach
            </table>
            <a href="/posts/create" class="btn btn-primary my-5">Create New Post</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
