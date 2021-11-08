@extends('layouts.home')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">All List</div>
                <div class="col-md-6 text-right">
                    <a href="{{route('add.home')}}" class="btn btn-primary">Add New</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Catgory</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($homes))
                    @foreach ($homes as $homes)
                    <tr>
                        <td scope="row">{{$homes->id}}</td>
                        <td>{{$homes->name}}</td>
                        <td>{{$homes->email}}</td>
                        <td>{{$homes->phone}}</td>
                        <td><ul>
                            @php
                                $categories=explode(",",$homes->category)
                            @endphp
                                @foreach($categories as $categorie)
                                   <li style="list-style-type: none;float:left;display:block;">{{$categorie}}
                                @if($categorie)
                                ,
                                @endif
                                </li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{route('edithome',['home_id'=>$homes->id])}}" class="btn btn-primary">Edit</a>
                            <a href="delete/{{$homes->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                <h1>No Product</h1>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
