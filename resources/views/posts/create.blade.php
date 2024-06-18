<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new post</title>
    <!-- Include boostrap-->
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script  src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}

</head>
<body>
    <div class="createpost">
        <div class="container">
            <h3 class="text-center mt-5">Add post</h3>
            <form class="mt-5" method="POST" action="{{route('post.insert')}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="mb-3">
                  <label for="exampleInputtitle" class="form-label">Title</label>
                  <input type="text" class="form-control" id="exampleInputtitle" name="title">
                </div>
                <div class="mb-3">
                  <label for="exampleInputbody" class="form-label">Body</label>
                  <input type="text" class="form-control" id="exampleInputbody" name="body">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
 
</body>
</html>