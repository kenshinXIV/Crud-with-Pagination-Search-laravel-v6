@extends('layout.app')

@section('content')
    <div class="contaienr-fluid">
        <h1 class="text-center text-success">Simple Crud with Pagination & Search</div>
    </div>
    <div class="container">
        @if(session()->has('notif'))
        <div class="alert alert-success " role="alert">
            <strong>Notification: </strong>{{ session('notif')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('users.create')}}" class="btn btn-info btn-block">Create New User</a>
                    </div>
                    <div class="col-md-9">
                        <form action="{{ route('users.index')}}" method="Get">
                            @csrf
                            <div class="input-group">
                                <input id="search" name="search" type="text" placeholder="Search....." class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit" >Search</button>
                                </span>
                            </div>    
                        </form>
                        
                    </div>
                    <div class="col-md-12 mt-1">
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach( $users as $user )
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->password }}</td>
                                        <td><a href="{{ route('users.edit', $user) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a></td>
                                        <td><a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal-{{$user->id}}"><i class="fa fa-trash"></i></a></td>


                                        <!-- The Modal -->
                                        <div class="modal" id="deleteModal-{{$user->id}}">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title"><i class="fa fa-trash"></i>Delete</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    <h5>Are you sure do you want to delete this user?</h5>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                    <form action="{{route('users.destroy' ,$user)}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">Yes</button>
                                                    </form>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>
                                        
                                    </tr>
                                  
                                @endforeach
                            </tbody>
                        </table>
                       {{ $users->links()}}
                    </div>
                </div>
          </div>
        </div> 
        
    </div>
   

@endsection