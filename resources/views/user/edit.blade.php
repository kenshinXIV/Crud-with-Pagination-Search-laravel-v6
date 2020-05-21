@extends('layout.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="textt-center text-info">Edit User</h1>
                <form method="post" action="{{ route('users.update', $user)}} " >
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text"  name="name" class="form-control" id="name"  value="{{ $user->name}} " placeholder="Enter Name">
                        @error('name')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{ $user->email}} " placeholder="Enter email">
                        @error('email')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1"  value="{{ $user->password}} "placeholder="Password">
                        @error('password')
                            <small class="text-danger"> {{ $message }}</small>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
            </div>
        </div>
    </div>
    

@endsection