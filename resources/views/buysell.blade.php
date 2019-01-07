@extends('layouts.app')

@section('content')
<div class="container">
    <script src="\layout\javascript.js" ></script>
    <div class="row justify-content-center">
        <div class="col-md-8">

        

            <div class="card">
                <div class="card-header">Welcome, <strong>{{ Auth::user()->name }}</strong></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    All Stocks, to buy or sell
                    <br>
                    <table border="10"  class="table table-striped table-bordered" style="width:100%" >
                        <tr>
                            <td >Stock name:</td>
                            <td>Price:</td>
                            <td>Change:</td>
                            <td>Buy:</td>
                            <td>Sell:</td>
                        </tr>
                        @foreach($allstocks as $value)
                        <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->price }}</td>
                            <td>{{ $value->change }}</td>
                            <td><button class="btn-success" onclick="update( Auth::user()->name, $value->name, 1)">Buy</button></td>
                            <td><button class="btn-danger" onclick="update( Auth::user()->name, $value->name, -1)">Sell</button></td>
                            
                        </tr>
                        @endforeach
                        
                        
                    </table>
                     <p><a href="/profile">Back to your profile</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
