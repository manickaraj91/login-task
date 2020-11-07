@extends('layouts.app')
@section('content')
<div class="wrapper">
    <div class="row">
        <div class="col-sm-12" >
            <div class="card" style="color:block">
                <div class="card-header">Welcome</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
</div>
@endsection
