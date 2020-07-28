@extends('layouts.dashboad')

@section('page-header')
Complain View
@endsection
@section('content')


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
                                            <th>Farmer Name</th>
                                            <th>Animal</th>
                                            <th>Veterinarian</th>
                                            <th>Details</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($complains as $complain)
                                         
                                     <tr class="gradeX">
                                         <td>{{$complain['id']}}</td>
                                             <td>{{$complain['farmer_name']}}</td>
                                         <td>{{$complain['animal_type']}}</td>
                                         <td class="center">{{$complain['veterinarian_name']}}</td>
                                         <td class="center">{{$complain['title']}}</td>
                                         <td class="center">{{$complain['status']}}</td>
                                   </tr>
                                     @endforeach
									
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->  
@endsection