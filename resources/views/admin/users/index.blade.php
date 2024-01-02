@extends('layouts.master')

@section('content')
<div class="tags">
   @include('admin.reusables.logged-user')
    <table class="copylist-table">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Account Created At</th>
        </thead>
       @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    @foreach ($user->roles as $role)
                        {{$role->name}}
                        @if(!$loop->last)
                            ,
                        @endif
                    @endforeach
                </td>
                <td>{{$user->created_at}}</td>
            </tr>
       @endforeach
    </table>
    <div class="pagination-wrapper">{{$users->links()}}</div>
</div>
@endsection
