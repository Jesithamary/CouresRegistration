@extends('backend.layout.subpage')
@section('content')
<style>
    table{
     
     width: 100%;
     padding: 40px;
    }
    
    </style>
</style>
<br>
<br>
<br>

    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">   
<table border="2">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Gender</th>
        <th>Address</th>
        <th>CouresTypes</th>
        <th>File</th>
    </tr>
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->age}}</td>
        <td>{{$user->gender}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->coures_types}}</td>
        <td>{{$user->file}}</td>
    </tr>
</table>
</div>
</div>
</div>
@endsection