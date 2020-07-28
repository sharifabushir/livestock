@extends('layouts.dashboad')

@section('page-header')
    Animal
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
                        <th>Type</th>
                        <th>Spiceis</th>
                        <th>Date of Birth</th>
                        <th>Weight</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($animals as $animal)
                        
                    <tr class="">
                            <td>{{$animal['id']}}</td>
                            <td>{{$animal['farmer_name']}}</td>
                            <td>{{$animal['type']}}</td>
                            <td>{{$animal['species']}}</td>
                            <td class="">{{$animal['date_of_birth']}}</td>
                            <td class="">{{$animal['weight']}}</td>
                            <td class="center">
                                <a class="success" href="#"><i class="btn btn-inverse btn btn-inverse fa fa-medkit">Medical</i></a>
                                <a class="success" href=""><i class="btn btn-inverse fa fa-user">Food</i> </a>
                                <a class="success" href=""><i class="btn btn-inverse fa fa-user-md fa-fw ">Advice</i> </a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection