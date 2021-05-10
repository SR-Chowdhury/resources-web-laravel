<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shihanur Rahman Chowdhury">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Explore SuperStar World</title>
  </head>
  <body>

    <div class="container py-5">
        <h1 class="text-success text-center">Bismillahir Rahmanir Rahim</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Country</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pagination as $data)
                    <tr>
                        <td> {{ $data->id }} </td>
                        <td> {{ $data->name }} </td>
                        <td> {{ $data->country }} </td>
                        <td>
                            <a href="#" class="btn btn-outline-info btn-sm">View</a>
                            <a href="#" class="btn btn-outline-warning btn-sm ">Edit</a>
                            <a href="#" class="btn btn-outline-danger btn-sm ">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $pagination->links() }}
    </div>




    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


  </body>
</html>
