@extends('employee.layout.main')
@section('midsection')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">EMPLOYEE TABLE</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->

        <div class="row">

            <div class="col-md-12">
                <!--   Basic Table  -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        EMPLOYEE TABLE
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>

                                        <th scope="col">file</th>
                                        <th scope="col">name</th>
                                        <th scope="col">email</th>
                                        <th scope="col">unm</th>
                                        <th scope="col">address</th>
                                        <th scope="col">GENDER</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td><img src="{{url('upload/customer/'.$d->file)}}" width="100px"
                                                height="100px"></td>
                                        <td>{{$d->name}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>{{$d->unm}}</td>
                                        <td>{{$d->address}}</td>
                                        <td>{{$d->gen}}</td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            {{$data->links()}}
                        </div>
                    </div>
                </div>
                <!-- End  Basic Table  -->
            </div>
        </div>
        <!-- /. ROW  -->

        <!-- /. ROW  -->

    </div>
    <!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->
@endsection