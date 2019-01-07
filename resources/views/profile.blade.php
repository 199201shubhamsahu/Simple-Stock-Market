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


                    Your Stocks
                    <br>
                    <table border="10"  class="table table-striped table-bordered" style="width:100%" >
                        <tr>
                            <td >Stock name:</td>
                            <td >Holding:</td>
                        </tr>
                        <?php
                            $total1=0;
                            $total2=0;
                        ?>
                        <?php $start=0; $total=0?>
                        @foreach($userstocks as $value)
                        @if($value->name==Auth::user()->name)
                        @foreach($value as $cell)
                        @if($start>6)
                        <tr>
                            <td>stock{{$start -6 }} </td>
                            <td>{{ $cell }}</td>
                        
                        </tr>
                        <?php $total= $total + $cell;?>
                        
                        @endif
                        <?php $start= $start +1;?>
                        @endforeach
                        
                        @endif
                        @endforeach
                        <tr>
                            <td>TOTAL</td>
                            <td><?php echo $total;?></td>
                        </tr>
                        
                        
                    </table>
                    <p><a href="/buysell">Buy/Sell</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
