<?php include('../layout/top.html');?>

  <h1 class="page-header">Registration</h1>
</div>
<!--End Page Header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Veterinarian
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group col-sm-6">
                                <label>FULLNAME</label>
                                <input class="form-control" placeholder="FULLNAME">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>PHONE</label>
                                <input class="form-control" placeholder="PHONE">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>LOCATION</label>
                                <input class="form-control" placeholder="LOCATION">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>EMAIL</label>
                                <input class="form-control" placeholder="EMAIL">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>USERNAME</label>
                                <input class="form-control" placeholder="USERNAME">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>PASSWORD</label>
                                <input class="form-control" placeholder="PASSWORD">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>GENDER</label>

                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline2" value="male">male
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="optionsRadiosInline3" value="female">female
                                </label>
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
