@extends('layouts.home')
@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-md-6">All List</div>
                <div class="col-md-6 text-right">
                    <a href="{{route('add.home')}}" class="btn btn-primary">Add New</a>
                    @if(Auth::check('login')==true)
                    <p>Welcome {{Auth::user()->name}} </p>
                    @endif

                </div>
                @if(Auth::check('login')==true)
                <a class="btn btn btn-outline-primary float-end" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                @else
                <a href="{{route('login')}}" class="btn btn-primary">Login</a>
                @endif
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
                    @if(Auth::check('login')==true)
            @if(Auth::user()->utype=='ADM')
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
            @elseif(Auth::user()->utype=='USR')
            @php
                $homes=DB::table('homes')->where('user',Auth::user()->id)->get();
            @endphp
            @if(isset($homes))
                    @foreach ($homes as $key=>$homes)
                    <tr>
                        <td scope="row">{{$key+1}}</td>
                        <td>{{$homes->name}}</td>
                        <td>{{$homes->email}}</td>
                        <td>{{$homes->phone}}</td>
                        <td><ul>
                            @php
                                $categories=explode(",",$homes->category)
                            @endphp
                                @foreach($categories as $categorie)
                                   <li style="list-style-type: none;float:left;display:block;">{{$categorie}}
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
            @endif
            @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="text-center ">
    @php
    $category='Blue';
    $products=DB::table('homes')->get();
    foreach ($products as $key => $product) {
        $productcat=explode(',',$product->category);
        if($productcat){
            foreach($productcat as $key=>$pct){
                if($pct){
                    if($category==$pct){


                        $clkproduct=DB::table('homes')->where('id',$product->id)->get();
                        @endphp
                            <ul>
                                @foreach ($clkproduct as $pcts)
                                <li>{{$pcts->name}}</li>
                                <li>{{$pcts->email}}</li>
                                <li>{{$pcts->phone}}</li>
                                @endforeach
                            </ul>
                        @php
                    }
                }
            }
        }
    }
@endphp

</div>

<div class="container" style="margin-top:30px; height:500px; border:1px solid black;">
<p>Select value</p>
<select class="first" id="first" name="first">
    <option value="">Select</option>
    @foreach($offer as $ofr)
    <option value="{{$ofr->inside}}">{{$ofr->inside}}</option>
    <option value="{{$ofr->outside}}">{{$ofr->outside}}</option>
    @endforeach
</select>
{{csrf_field()}}
<br>
<hr>
<p class="result" id="result">Result: </p>
</div>

@endsection
