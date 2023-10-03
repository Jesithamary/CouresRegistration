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


<div class="row"><div class="col-sm-2"></div><div class="col-sm-2">
<a href="{{route('student.create')}}" tite="Add" class="btn btn-primary"><i style="font-size:24px" class="fa">&#xf067;</i></a>
</div>
    </div>
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">              
<table class="bg-light">
  <tr>
    <th>Id</th>
    <th>name</th>
    <th>email</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Address</th>
    <th>Coures Types</th>
    <td>File Upload</td>
    <th>Action</th>
  </tr>
  <tr>
    @foreach($users as $key =>$user)
  <th scope="row" >{{$key+1}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->age}}</td>
      <td>{{$user->gender}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->coures_types}}</td>
      <td>{{$user->file}}</td>

     
     
      <td>
        <a href="{{ route('student.edit',$user->id) }}" data-toggle="tooltip" title="Edit"> <i class="fa fa-edit" style="font-size:30px;color:black"></i></a>
                    <a href="{{ route('student.destroy',$user->id) }}"  onclick="return confirm('Are you sure?')" data-toggle="tooltip" title="Delete"><i class="fa fa-trash" style="font-size:30px;color:black"></i>
</a>
                        <a href="{{ route('student.show',$user->id) }}" data-toggle="tooltip" title="View"><i class="fa fa-eye" style="font-size:30px;color:blue"></i></a>
                    </td>
  </tr>
 @endforeach
</table>
</div>
</div>
</div></div>
</div>
</div>

@endsection