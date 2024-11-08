@extends('admin.index')
@section('add')



<table class="table table-striped ">
    <thead>
        <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>email</th>
        <th>Password</th>
        <th>Repeat Password</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
    </thead>
    @foreach ($data as $my )

    <tr>
        <td>{{$my->id}}</td>
        <td>{{$my->firstname}}</td>
        <td>{{$my->lastname}}</td>
        <td>{{$my->email}}</td>
        <td>{{$my->password}}</td>
        <td>{{$my->repeatpass}}</td>



        <td><a href="{{route('admin.editsign',$my->id)}}" class="btn btn-primary">Edit</a></td>
        <td>
            <form action="{{route('admin.destroys',$my->id)}}" method="post"  >
                @csrf
                @method('delete')
                <input type="submit" name="delete" class="btn btn-primary" value="delete">
            </form>
        </td>
    </tr>


    @endforeach
</table>


@endsection
