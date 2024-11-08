@extends('admin.index')
@section('add')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>

<body >
    <div class="container" style="width: 1000px;" >
        <!-- <marquee behavior="" direction="right"> -->
        <h2 style="text-align: center;">Registration Form</h2>
    <!-- </marquee> -->
        <form class="form-control" action="{{route('admin.update',$data ->id)}}" method="post" style="background-color: rgb(32, 58, 64); color: white;">
        @csrf
        @method('put')
        <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{$data->name}}" placeholder="enter your full name" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" class="form-control"  name="email" value="{{$data->email}}"  placeholder="enter your email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date Of Birth</label>
                <input type="date" class="form-control" name="dob" value="{{$data->dob}}" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label"> Father's Name</label>
                <input type="text" class="form-control" placeholder="enter your father name" name="fathersname" value="{{$data->fathers_name}}" >
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1"  class="form-label"> Mother's Name</label>
                <input type="text" class="form-control" placeholder="enter your mother name" name="mothersname" value="{{$data->mothers_name}}">
            </div>
            <div>
            <label for="exampleFormControlInput1"  class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio"  name="gender" value="male" >
                <label class="form-check-label" for="flexRadioDefault1">
                 Male
                </label>
            </div>
            <div class="form">
            <input class="form-check-input" type="radio" name="gender" value="female" >
                <label class="form-check-label" >
                 Female
                </label>
            </div><br>
        </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1"  class="form-label">Country</label>
                <input type="text" class="form-control" name="country" value="{{$data->country}}" placeholder="enter your full name">
            </div>
            <div>
            <label for="">Enter yout city</label><br><br>
             <select name="city" value="{{$data->city}}" id="">
                 <option value="rajkot" >Rajkot</option>
                 <option value="ahemdabad">ahemdabad</option>
                 <option value="junagadh">junagadh</option>
                 <option value="surat">surat</option>
            </select>
             </div><br>

             <button type="submit" class="btn-striped" name="update">Submit</button>
        </form>
    </div>
</body>

</html>





@endsection
