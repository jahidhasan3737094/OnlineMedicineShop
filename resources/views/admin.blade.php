@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Admin Dashboard</div>
                <div class="container">
                  <div class="sidenav">
                  <a href="{{url('/Medicine')}}">Medicine</a>
                
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @component('components.who')

                    @endcomponent
                </div>
            </div>
        </div>

    </div>

@endsection
