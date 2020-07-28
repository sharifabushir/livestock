<?php include('../layouts/top.html');?>

  <h1 class="page-header">Registration</h1>
</div>
<!--End Page Header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Feeding Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
						<div class="form-group col-sm-6">
                                <label>FOODNAME</label>
                                <input type="text" class="form-control" placeholder="FOODNAME"  name="fname">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>TYPE</label>
                                <input  type="text" class="form-control" placeholder="TYPE" name="type">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>MANUFACTURE</label>
                                <input type="text" class="form-control" placeholder="MANUFACTURE" name="manufacture">
                            </div>
                            
                            <div class="form-group col-sm-6">
                                <label>DURATION</label>
                                <input class="form-control" placeholder="DURATION">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>QUANTITY</label>
                                <input class="form-control" placeholder="QUANTITY">
                            </div>
                            <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="reset" class="btn btn-success">Cancel</button>
                          </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>

<?php include('../layout/down.html');?>
