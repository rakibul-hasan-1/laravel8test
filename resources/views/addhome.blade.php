@extends('home')
@section('content')
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                @if (Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div>
                @endif
                <form action="{{route('savehome')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" placeholder="Name">
                        @error('name')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="Email">
                        @error('email')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="text" name="phone" placeholder="Phone">
                        @error('phone')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label><strong>Category :</strong></label><br>
                                <label><input type="checkbox" name="category[]" value="Red"> Red</label>
                                <label><input type="checkbox" name="category[]" value="Blue"> Blue</label>
                                <label><input type="checkbox" name="category[]" value="Green"> Green</label>
                                <label><input type="checkbox" name="category[]" value="Yellow"> Yellow</label>
                        @error('phone')
                            <p class="alert alert-danger" role="alert">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit">Submit</button>
                      <a href="{{route('home')}}" class="btn btn-primary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
