@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                    <a href="/user_setting" class="btn btn-primary">user settings</a>
                    <a href="/dashboard" class="btn btn-primary">Posts</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your user settings</h3>
                   

                    <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                                
                            </tr>
                       
                            <tr>
                            <td>{{$user->name}}</td>
                            <td><a href="/dashboards/{{$user->id}}/edit" class="btn btn-warning">Edit</a></td>
                            
                            </tr>
                       
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
