@extends('layouts.app')

 @section('content')
 <div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('DATA USER') }}</div>
<div class="card-body">
@if (session('status'))
 <div class="alert alert-success" role="alert">
 {{ session('status') }}
 </div>
 @endif

 <table class="table table-responsive table-striped">
 <thead>
 <tr>
 <th>ID</th>
 <th>Username</th>
 <th>Name</th>
 <th>Email</th>
 <th>Password</th>
 </tr>
 </thead>
 <tbody>
 @foreach($user )
 <tr>
 <td>{{ $user->id }}</td>
 <td>{{ $user->username }}</td>
 <td>{{ $user->name }}</td>
 <td>{{ $user->email }}</td>
 <td>{{ $user->password }}</td>
 <td>{{ $u->role }}</td>
</tr>
 @endforeac
 /tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection