@extends('layouts.master')

@section('content')
    @include('includes.message-block')

    @if($activation==1)
    <div class="headline" style="margin-bottom: 15px;">

        <h1>{{$hotel->hotel_name}}</h1>

    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="img-responsive img-circle" src="{{URL::asset('dist/img/1.jpg')}}" alt="" style="border: 2px solid #3c8dbc">

                    <h2 class="profile-username text-center">Orders</h2>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <div class="col-md-9">

            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Our Menu</h3>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <thead>
                        <tr>
                            <td><b>NO.</b></td>
                            <td><b>Ordered By</b></td>
                            <td><b>Ordered Item</b></td>
                            <td><b>Quantity</b></td>
                            <td><b>Delivery Address</b></td>
                            <td><b>Ordered Time</b></td>
                            <td><b>Delete Order</b></td>
                        </tr>
                        </thead>
                        @if(!is_null($orders))
                        @foreach($orders as $key=>$order)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$order->customer->first_name.' '.$order->customer->middle_name}}</td>
                            <td>{{$order->menu->item_name}}</td>
                            <td>{{$order->quantity}}</td>
                            <td>{{$order->customer->address}}</td>
                            <td>{{date('H:i:s',strtotime($order->created_at))}}</td>
                            <td><a href="{{route('order.deleteOrder',['order_id'=>$order->id])}}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <td colspan="5">No Orders Yet</td>
                            </tr>
                        @endif
                        <tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
        <td><a href="" class="bg-danger">Please Contact Admin to Activate Your Account</a></td>
    @endif

    <script>

        var token = '{{ Session::token()}}';
    </script>
@endsection
