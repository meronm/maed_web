@extends('layouts.master')

@section('content')
    @include('includes.message-block')

    @if($activation==1)
    <div class="headline">

        <h1>{{$hotel->hotel_name}}</h1>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="img-responsive img-circle" src="{{URL::asset('dist/img/2.jpg')}}" alt="" style="border: 2px solid #3c8dbc">

                        <h2 class="profile-username text-center">Our Menu</h2>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

            <div class="col-md-9">

                    <form role="form" action="{{route('hotel.addMenu')}}" method="POST" style="margin-bottom: 2px;">
                        <div class="box-body">
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <input type="text" name="item_name" class="form-control" id="exampleInputEmail1" placeholder="Item Name" >
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="item_price" class="form-control" id="exampleInputEmail1" placeholder="Item Price">
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="item_type" class="form-control" id="exampleInputEmail1" placeholder="Item Type">
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary">Add New Item</button>
                                    <input type="hidden" value="{{ Session::token()}}" name="_token">
                                </div>
                            </div>
                        </div>

                    </form>

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
                            <td><b>Item Name</b></td>
                            <td><b>Item Price</b></td>
                            <td><b>Item Type</b></td>
                            <td></td>
                            <td></td>

                        </tr>
                        </thead>
                        @if(!is_null($menus))
                        @foreach($menus as $key=>$menu)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$menu->item_name}}</td>
                            <td>{{$menu->item_price}}</td>
                            <td>{{$menu->type}}</td>
                            <td><a href="{{route('menu.editMenu',['menu_id'=>$menu->id])}}" class="btn btn-primary" style="min-width: 100px;">Edt</a></td>
                            <td><a href="{{route('menu.deleteMenu',['menu_id'=>$menu->id])}}" class="btn btn-danger" style="min-width: 100px;">Delete</a></td>
                        </tr>
                        @endforeach
                        @endif

                    </table>
                </div>
            </div>
        </div>
    </div>
    @else
        <td><a href="" class="btn btn-success">Activate</a></td>
    @endif
    <script>

        var token = '{{ Session::token()}}';
    </script>
@endsection
