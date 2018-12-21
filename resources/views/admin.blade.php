@extends('layouts.master')

@section('content')
    @include('includes.message-block')



    <div class="bs-docs-header">
        <h1>Administration</h1>

    </div>

    <div class="box">
        <div class="box-header">
            <h3 class="box-title">List Of All Registered Hotels</h3>


        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>No</th>
                    <th>Hotel Name</th>
                    <th>Manager</th>
                    <th>Phone Number</th>
                    <th>Registration Date</th>
                    <th>Activation</th>

                </tr>
                @if(!is_null($hotels))
                    @foreach($hotels as $key=>$hotel)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$hotel->hotel_name}}</td>
                            <td>{{$hotel->user->first_name.' '.$hotel->user->middle_name}}</td>
                            <td>{{$hotel->phone_number}}</td>
                            <td>{{date('Y-m-d', strtotime($hotel->created_at))}}</td>
                            @if($hotel->activation == 1)
                                <td><a href="{{route('hotel.deactivate',['hotel'=>$hotel])}}" class="btn btn-danger">Deactivate</a></td>

                            @else
                                <td><a href="{{route('hotel.activate',['hotel'=>$hotel])}}" class="btn btn-success">Activate</a></td>
                                @endif

                                        <!-- IF active -->

                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6">No Customers Yet</td>
                    </tr>
                @endif
                </tbody></table>
        </div>
        <!-- /.box-body -->
    </div>



    <script>

        var token = '{{ Session::token()}}';
    </script>
@endsection
