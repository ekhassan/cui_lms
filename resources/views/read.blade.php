<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read Student</title>

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    

    


</head>

<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <h1>Show Student</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

            </div>
        </div>
        <div class="container">
            <div class="row">
                    <div class="mt-3 mb-3">

                        <a href="{{url('create')}}" class="btn btn-primary">Add Student</a>
                        
                    </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <table class="table table-bordered" id="myTable">
                    <thead class="table table-dark">
                        <tr>
                            <th>CNIC</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Tel. No.</th>
                            <th>Age</th>
                            <th>Marital Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->cnic }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->telno }}</td>
                                <td>{{ $student->age }}</td>
                                <td>{{ $student->marital_status }}</td>
                                <td>
                                    <a class="btn btn-outline-info" href="{{ URL::to('edit', $student->cnic) }}"
                                        title="Edit -> {{ $student->cnic }}"><i
                                            class="fa fa-pen-to-square"></i></a>
                                    <a class="btn btn-outline-danger" href="{{ URL::to('delete', $student->cnic) }}"
                                        onclick="return confirm ('Are you sure to delete the student {{$student->name}} having CNIC {{ $student->cnic }}?')"
                                        title="Delete -> {{ $student->cnic }}"><i
                                            class="fa fa-trash-can"></i></a>
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"></script>


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>
