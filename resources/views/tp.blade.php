@extends('layouts.app')

@section('content')
<div class="container">
	<script src="\layout\javascript.js" ></script>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    //Add Data only here - Dev



                    <table border="10"  class="table table-striped table-bordered" style="width:100%" >
                        <tr>
                            <td >Stock name:</td>
                            <td>Price:</td>
                            <td>Changes:</td>
                        </tr>
                        @foreach($data as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->price }}</td>
                            <td>{{ $value->change }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
