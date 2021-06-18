<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Shihanur Rahman Chowdhury">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- toastr CSS (includes Bootstrap)-->
    <link href="{{ asset('public/assets/toastr_styles.css')}}" rel="stylesheet" />

    <!-- Toastr CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <title>Dynamic Input using JQuery in Laravel</title>

</head>

<body>
    <h1 class="mt-3 text-center text-success">Bismillahir Rahmanir Rahim</h1>
    <h1 class="text-center text-info">Dynamic Input using JQuery in Laravel 8</h1>

    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('dynamic-input.store') }}" method="post">
                @csrf
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="text" name="user_name[]" placeholder="Enter Name" class="form-control">
                                </td>
                                <td>
                                    <input type="email" name="email[]" placeholder="Enter Email" class="form-control">
                                </td>
                                <td>
                                    <input type="phone" name="phone[]" placeholder="Enter Phone" class="form-control">
                                </td>
                                <td class="text-center">
                                    <button type="button" style="border: none; background-color: white;" id="add_dynamic_button"><i class="fas fa-plus-square" style="font-size: 2em"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-lrg btn-outline-secondary">Submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- toastr CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- toastr JS-->
    <script src="{{ asset('public/assets/toastr_scripts.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#add_dynamic_button').on('click', function() {
                var html = '';
                html+= '<tr>';
                html+='<td><input type="text" name="user_name[]" placeholder="Enter Name" class="form-control"></td>';
                html+='<td><input type="email" name="email[]" placeholder="Enter Email" class="form-control"></td>';
                html+='<td><input type="phone" name="phone[]" placeholder="Enter Phone" class="form-control"></td>';
                html+='<td class="text-center"><button type="button" style="border: none; background-color: white;" id="remove_dynamic_input"><i class="fas fa-minus-square" style="font-size: 2em"></i></button></td>';
                html+= '</tr>';
                $('tbody').append(html);
            });
            $(document).on('click', '#remove_dynamic_input', function() {
                $(this).closest('tr').remove();
            });
        });
    </script>

    <script>
        @if (Session::has('message'))

            var type = "{{ Session::get('alert-type', 'success') }}"

            switch(type) {
                case 'success' :
                    toastr.success(" {{ Session::get('message') }} ");
                    break;
                case 'info' :
                    toastr.info(" {{ Session::get('message') }} ");
                    break;
                case 'warning' :
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;
                case 'error' :
                    toastr.error(" {{ Session::get('message') }} ");
            }

        @endif
    </script>

</body>

</html>
