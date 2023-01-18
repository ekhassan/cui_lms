<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>

</head>

<body>

    <div class="container m-3">
        <div class="row">
            <div class="container">
                <h1>Update Student</h1>
            </div>
        </div>
        <div class="row">
            <div class="container">
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

                        <a href="{{url('read')}}" class="btn btn-primary">Back</a>
                        
                    </div>

            </div>
        </div>
        <br>
        <div class="container">
            <form action="{{route('student.store',$students->cnic)}}" method="post">
                @csrf
                <input name="cnic" class="form-control" type="text" placeholder="CNIC"> <br>
                <input name="name" class="form-control" type="text" placeholder="Name"> <br>
                <input name="address" class="form-control" type="text" placeholder="Address"> <br>
                <input name="telno" class="form-control" type="text" placeholder="Tel No"> <br>
                <input name="age" class="form-control" type="text" placeholder="Age"> <br> <br>

                <input type="submit" class="btn btn-outline-dark" value="Submit">
            </form>
        </div>
    </div>

</body>

</html>
