@extends('layouts.dashboad')

@section('page-header')
    Registration
@endsection

@section('content')
<!-- Form Elements -->
<div class="panel panel-default">
    <div class="panel-heading">
        Treatment
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-12">
                <form role="form" method="post" action="../handler/insert.php" enctype="multipart/form-date">
                    <div class="form-group col-sm-6">
                        <label>CompDetails</label>
                        <input type="text" class="form-control" placeholder="DETAILS" name="Details">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>TreatmentType</label>
                        <label> 

                            <input type="checkbox" name="colorCheckbox" value="C"> C</label> 

                        <label> 

                            <input type="checkbox" name="colorCheckbox" value="Cplus"> C++</label> 

                        <label> 

                            <input type="checkbox" name="colorCheckbox" value="Python"> Python</label> 

                        <label> 

                            <input type="checkbox" name="colorCheckbox" value="Java"> Java</label> 
                        <input type="text" class="form-control" placeholder="TYPE" name="phone">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>DateTreatment</label>
                        <input type="date" class="form-control" placeholder="DATE" name="DateTreatment">
                    </div>
                        <br/>
                    
                <div class="form-group col-lg-12">
                    <label>MEDICINE</label>
                    </div>
                    <div class="form-group col-sm-6">
                        <label>MedicineName</label>
                        <input type="text" class="form-control" placeholder="MEDICINE" name="medicine">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Quantity</label>
                        <input type="text" class="form-control" placeholder="QUANTITY" name="qty">
                    </div>
                    
                    <div class="form-group col-lg-12">
                    <label>FEEDING PLAN</label>
                    </div>
                   <div class="form-group col-sm-6">
                        <label>FoodName</label>
                        <input type="text" class="form-control" placeholder="FOODNAME" name="food">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Category</label>
                        <input type="text" class="form-control" placeholder="CATEGORY" name="cat">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Manufacture</label>
                        <input type="text" class="form-control" placeholder="MANUFACTURE" name="Manufacture">
                    </div>
                    <div class="form-group col-sm-6">
                        <label>Duration</label>
                        <input type="text" class="form-control" placeholder="DURATION" name="duration">
                    </div>
                    <div class="col-md-12">
                    <button type="submit" name="btnvet" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-success">Cancel</button>
                  </div>
                </form>
            </div>

        </div>
    </div>
</div>
 <!-- End Form Elements -->
    
@endsection



 @section('extrajs')
             
        <script type="text/javascript"> 

                    $(document).ready(function() { 

                        $('input[type="checkbox"]').click(function() { 

                            var inputValue = $(this).attr("value"); 

                            $("." + inputValue).toggle(); 

                        }); 

                    }); 

                </script> 
@endsection
