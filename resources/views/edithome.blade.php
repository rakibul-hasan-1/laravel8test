@extends('home')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
update
            </div>
            <div class="panel-body">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                <form action="{{route('updatehome',['id'=>$home->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="{{$home->name}}" placeholder="Name">
                        @error('name')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" value="{{$home->email}}" placeholder="Email">
                        @error('email')
                            <p class="alert alert-danger"  role="alert">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" value="{{$home->phone}}" placeholder="Phone">
                        @error('phone')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
