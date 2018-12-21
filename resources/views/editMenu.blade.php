@extends('layouts.master')

@section('content')
    @include('includes.message-block')

    @if($activation==1)
    <div class="headline">

        <h1>{{$hotel->hotel_name}} </h1>

    </div>
    <div class="row">
        <div class="col-md-10">

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Menu</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" role="form" action="{{route('menu.updateMenu')}}" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Item Name</label>

                            <div class="col-sm-10">
                                <input type="text" name="item_name" class="form-control" id="exampleInputEmail1" value="{{$menu->item_name}}" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Item Price</label>

                            <div class="col-sm-10">
                                <input type="text" name="item_price" class="form-control" id="exampleInputEmail1" value="{{$menu->item_price}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Item type</label>

                            <div class="col-sm-10">
                                <input type="text" name="item_type" class="form-control" id="exampleInputEmail1" value="{{$menu->type}}">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <input type="hidden" name="id" value="{{$menu->id}}">
                        <button type="submit" class="btn btn-primary bg-aqua pull-right">Update</button>
                        <input type="hidden" value="{{ Session::token()}}" name="_token">
                    </div>
                    <!-- /.box-footer -->
                </form>
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
