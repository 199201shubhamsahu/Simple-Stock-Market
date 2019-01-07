@extends('layouts.app')

@section('content')
<div class="container">
	<script src="\layout\javascript.js" ></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="size: 30px;">Welcome to the world of Share Market</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img src="midimg.png" width="100%">
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
