@extends('backend.layout.subpage')
@section('content')
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<br>
</head>
<body>
    <div class="container">
    @if(Session::has('success'))
      <p class="alert alert-success">{{ Session::get('success') }}</p>
    @endif

<div class="col-sm-12">
<div class="row"><div class="col-sm-2">
<a href="{{route('user.create')}}" tite="Add" class="btn btn-primary"><i style="font-size:24px" class="fa">&#xf067;</i></a>
</div>
    </div>
                      
<table>
  <tr>
    <th>Id</th>
    <th>name</th>
    <th>email</th>
    <th>phone</th>
    <th>Gender</th>
    <th>Action</th>
  </tr>
  <tr>
    @foreach($user as $key =>$user)
  <th scope="row">{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->gender}}</td>
      
     
     
      <td>
        <a href="{{ route('user.edit',$user->id) }}" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit" style="font-size:30px;color:black"></i></a>
                    <a href="{{ route('user.destroy',$user->id) }}"  onclick="return confirm('Are you sure?')" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" style="font-size:30px;color:black"></i>
</a>
                        <a href="{{ route('user.show',$user->id) }}" data-toggle="tooltip" title="View"><i class="fa fa-eye" style="font-size:30px;color:blue"></i></a>
                    </td>
  </tr>
 @endforeach
</table>
</div>

</div>
</div>
</div>

@endsection
