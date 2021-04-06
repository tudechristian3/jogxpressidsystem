
<div class="panel-header"> </div>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Employee</h4>
                        <div>
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#addEmployee"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="toolbar">
                        </div>
                        <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Birthdate</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Contact Number</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Employee ID</th>
                                    <th>Name</th>
                                    <th>Birthdate</th>
                                    <th>Address</th>
                                    <th>Position</th>
                                    <th>Contact Number</th>
                                    <th class="disabled-sorting text-right">Actions</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div><!-- end content-->
                </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
    </div> <!-- end row -->
</div>

<!--- Insert Employee Modal--->
<div id="addEmployee" class="modal" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered animated bounceIn">
                    <div class="modal-content">
                        <form method="post" novalidate>
                            <input type="hidden" class="form-control" name="employee_id" value="">
                            <div class="modal-header">
                                <h4 class="modal-title" id="vcenter">Add Employee</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p class="m-0">Name</p>
                                        <input type="text" class="form-control" name="employee_name" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Address</p>
                                        <input type="text" class="form-control m-t-5" name="employee_address" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Birthdate</p>
                                        <input type="text" class="form-control m-t-5" name="employee_birthdate" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Position</p>
                                        <input type="text" class="form-control m-t-5" name="employee_position" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Contact Number</p>
                                        <input type="text" class="form-control m-t-5" name="employee_contact_number" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                <div class="m-t-30 text-right">
                                    <button type="submit" class="btn btn-info waves-effect action-btn">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

           
<!--- Edit Employee Modal --->


<div id="EditEmployee" class="modal" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered animated bounceIn">
                    <div class="modal-content">
                        <form method="post" novalidate>
                            <input type="hidden" class="form-control" name="employee_id" value="">
                            <div class="modal-header">
                                <h4 class="modal-title" id="vcenter">Edit Employee</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p class="m-0">Name</p>
                                        <input type="text" class="form-control" name="employee_name" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Address</p>
                                        <input type="text" class="form-control m-t-5" name="employee_address" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Birthdate</p>
                                        <input type="text" class="form-control m-t-5" name="employee_birthdate" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Position</p>
                                        <input type="text" class="form-control m-t-5" name="employee_position" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                <div class="col-lg-6">  
                                    <div class="form-group">
                                        <p class="m-0">Contact Number</p>
                                        <input type="text" class="form-control m-t-5" name="employee_contact_number" data-validation-required-message="This field is required" required>
                                        <div class="help-block"></div>
                                    </div>
                                </div>    
                                <div class="m-t-30 text-right">
                                    <button type="submit" class="btn btn-info waves-effect action-btn">Create</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>