
@extends('admin.index')
@section('add')

<table class="table table-striped ">
    <thead>
        <tr>
        <th>Id</th>
        <th>firstname</th>
        <th>lastname</th>
        <th>Date of birth</th>
        <th>email</th>
        <th>mobile</th>
        <th>Gender</th>
        <th>address</th>
        <th>City</th>
        <th>pincode</th>
        <th>state</th>
        <th>Country</th>
        <th>hobbies</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
    </thead>
    @foreach ($data as $my )
    <tr>
        <td>{{$my->id}}</td>
        <td>{{$my->firstname}}</td>
        <td>{{$my->lastname}}</td>
        <td>{{$my->dob}}</td>
        <td>{{$my->email}}</td>
        <td>{{$my->mobile}}</td>
        <td>{{$my->gender}}</td>
        <td>{{$my->address}}</td>
        <td>{{$my->city}}</td>
        <td>{{$my->pincode}}</td>
        <td>{{$my->state}}</td>
        <td>{{$my->country}}</td>
        <td>{{$my->hobbies}}</td>
        {{-- <td><a href="{{route('admin.edit',$my->id)}}" class="btn btn-primary">Edit</a></td> --}}
        {{-- <td> --}}
            {{-- <form action="{{route('admin.destroy',$my->id)}}" method="post"> --}}
                {{-- @csrf --}}
                {{-- @method('delete') --}}
                {{-- <input type="submit" name="delete" class="btn btn-primary" value="delete"> --}}
            {{-- </form> --}}
        {{-- </td> --}}
    </tr>
    @endforeach
</table>

@endsection
