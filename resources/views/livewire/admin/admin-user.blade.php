@extends('layouts.app')
@section('content')
<button type="button" class="btn btn-primary btn-pill my-5" data-toggle="modal" data-target="#adminUserModal">
    Add User
</button>

<table id="usersTable" class="table table-hover table-product" style="width:100%">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Sex</th>
        <th>Birth Date</th>
        <th>Address</th>
        <th>Phone Number</th>
        <th>Username</th>
        <th>Email</th>
        <th>Role</th>
        <th>Actions</th>
      </tr>
    </thead>
    @if (count($users) > 0 )
        @foreach ($users as $user)
            <tr>
                <td>{{$user->firstname}}</td>
                <td>{{$user->lastname}}</td>
                <td>{{($user->sex == '1') ? "Male" : "Female"}}</td>
                <td>{{$user->birthdate}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @if ($user->role == 1)
                        {{"Administrator"}}
                    @elseif($user->role == 2)
                        {{"Employee"}}
                    @else
                        {{"Customer"}}
                    @endif
                </td>
                <td>{{$user->actions}}</td>
            </tr>
        @endforeach
    @endif
  </table>
  @include('livewire.admin.admin-user-create')
@endsection
