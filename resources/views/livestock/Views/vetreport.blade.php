@extends('layouts.dashboad')

@section('page-header')
    Veterinarian
@endsection
@section('content')
    
                <!--End Page Header -->
            </div>
 <div class="row">
                <div class="col-lg-12">
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
                                            <th>Vet Name</th>
                                            <th>Phone</th>
                                            <th>gender</th>
                                            <th>address</th>
                                            <th>status</th>
                                            <th>email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>	
                                        @foreach ($veterinarians as $veterinarian)
                                        
                                        <tr class="">
                                            <td>{{$veterinarian->id}}</td>
                                            <td>{{$veterinarian->veterinarian_name}}</td>
                                            <td>{{$veterinarian->veterinarian_gender}}</td>
                                            <td>{{$veterinarian->veterinarian_phone}}</td>
                                            <td>{{$veterinarian->veterinarian_address}}</td>
                                            <td class="">{{$veterinarian->veterinarian_status}}</td>
                                            <td class="">{{$veterinarian->veterinarian_email}}</td>
                                            <td class="center">
  												<i class="btn btn-inverse btn btn-inverse fa fa-eye">Details</i></a>
										</td>
                                        </tr>
                                        @endforeach
									</tbody>
                                </table>
                            </div>

                        </div>
                    </div>
@endsection