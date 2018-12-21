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
                        <img class="img-responsive img-circle" src="{{URL::asset('dist/img/3.jpg')}}" alt="" style="border: 2px solid #3c8dbc">

                        <h2 class="profile-username text-center">Our Customers</h2>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-9">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Our Customers</h3>


                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <thead>
                        <tr>
                            <td><b>NO.</b></td>
                            <td><b>Customer Name</b></td>
                            <td><b>Birthday</b></td>
                            <td><b>Phone Number</b></td>
                            <td><b>Sex</b></td>
                            <td><b>Address</b></td>

                        </tr>
                        </thead>
                        @if(!is_null($customers))
                            @foreach($customers as $key=>$customer)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$customer->first_name.' '.$customer->middle_name .' '.$customer->last_name}}</td>
                                    <td>{{$customer->birthday}}</td>
                                    <td><i class="fa fa-phone"></i> {{$customer->phoneNumber}}</td>
                                    <td>{{$customer->sex}}</td>
                                    <td>{{$customer->address}}</td>
                                </tr>
                            @endforeach
                          @else
                            <tr>
                                <td colspan="6">No Customers Yet</td>
                            </tr>
                        @endif

                    </table>
                </div>
            </div>
        </div>
    </div>

    @else
        <td><a href="" class="btn btn-success">Activate</a></td>
    @endif    <script>

        var token = '{{ Session::token()}}';
    </script>
@endsection
