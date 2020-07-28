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
                Feeding Information
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group col-sm-6">
                                <label>DURATION</label>
                                <input class="form-control" name="dura" value="<?= ?>">
                            </div>
                            <div class="form-group col-sm-6">
                                <label>QUANTITY</label>
                                <input class="form-control" name="qnt" value="<?= ?>">
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
