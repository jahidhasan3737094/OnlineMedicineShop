@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> User Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @component('components.who')

                    @endcomponent
                </div>
                <form action="{{url('/userdata')}}">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>User Name</th>
                      <th>User Email</th>
                      <th>User Contact</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{$user['name']}}</td>
                      <td>{{$user['email']}}</td>
                      <td>{{$user['contact']}}</td>
                      <td><a href="{{url('/editInfo',$user['id'])}}">Edit</a></td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
