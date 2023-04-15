<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

    <div class="container p-5">
        <h2>Categories<a class="btn btn-info m-4" href="/category-create">New Category</a></h2>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$loop->index+1}}</th>
      <td>{{$category->title}}</td>
      <td>
        <a href="/category-edit/{{$category->id}}" class="btn btn-sm btn-info">Edit</a>
        <a href="/category-delete/{{$category->id}}" class="btn btn-sm btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


    </div>
</body>
</html>