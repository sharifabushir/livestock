
    @extends('layouts.dashboad')

    @section('page-header')
        Farmer
    @endsection
    @section('content')

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        	
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Farmer Name</th>
                                            <th>Location</th>
                                            <th>Phone</th>
                                            <th>Gender</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($farmers as $farmer)
                                            
                                        <tr class="gradeX">
                                            <td>{{$farmer->id}}</td>
                                            <td>{{$farmer->farmer_name}}</td>
                                            <td>{{$farmer->farmer_gender}}</td>
                                        <td class="center">{{$farmer->farmer_location}}</td>
                                            <td class="center">{{$farmer->farmer_phone}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
@endsection
