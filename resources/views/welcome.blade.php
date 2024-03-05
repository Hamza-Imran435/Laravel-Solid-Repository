<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Solid Repository CRUD</title>
</head>
<body>

    <div class="container-fluid ">
        <div class="row mt-4 ">
           <div class="col-md-12">
                <button class="btn btn-outline-primary">Add New User</button>
           </div>
           <div class="col-md-12 mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Email</th>
                            {{-- <th scope="col">Product Image</th> --}}
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list as $user)
                             <tr>
                                 <td>{{ $user->id }}</td>
                                 <td>{{ $user->name }}</td>
                                 <td>{{ $user->email }}</td>
                                 {{-- <td>4</td> --}}
                                 <td>
                                    <button class="btn btn-primary">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                             </tr>
                        @endforeach
                    </tbody>
                </table>
           </div>
        </div>
    </div>

</body>
</html>
