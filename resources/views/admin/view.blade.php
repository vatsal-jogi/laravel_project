
@extends('admin.index')
@section('add')

<table class="table table-striped ">
    <thead>
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Father's Name</th>
        <th>Mother's Name</th>
        <th>Gender</th>
        <th>Country</th>
        <th>City</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
    </thead>
    @foreach ($data as $my )
    <tr>
        <td>{{$my->id}}</td>
        <td>{{$my->name}}</td>
        <td>{{$my->email}}</td>
        <td>{{$my->dob}}</td>
        <td>{{$my->fathers_name}}</td>
        <td>{{$my->mothers_name}}</td>
        <td>{{$my->gender}}</td>
        <td>{{$my->country}}</td>
        <td>{{$my->city}}</td>
        <td><a href="{{route('admin.edit',$my->id)}}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{route('admin.destroy',$my->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" name="delete" class="btn btn-primary" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection
