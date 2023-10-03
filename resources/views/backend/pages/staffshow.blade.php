@extends('backend.layout.subpage')
@section('content')
<style>
    table{
     
     width: 100%;
     padding: 40px;
    }
    
    </style>
</style>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Gender</th>
        
    </tr>
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->phone}}</td>
        <td>{{$user->gender}}</td>
        
    </tr>
</table>

@endsection