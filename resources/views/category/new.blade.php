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
        <h2>New Category</h2>
        <div class="row">
            <div class="col-sm-4">
                <form method="POST" action="/category-store">
                    @csrf
                    <lable>Title</lable>
                    <input type="text" name="title" class="form-control">
                    <button class="btn btn-info mt-4" type="submit">Create</button>
                </form> 
            </div>
        </div>
 

    </div>
</body>
</html>