<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="products_delete.php">
                    <input type="hidden" class="prodid" name="id">
                    <div class="text-center">
                        <p>DELETE PRODUCT</p>
                        <h2 class="bold name"></h2>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Edit Car</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="products_edit.php" enctype="multipart/form-data">
                    <input type="hidden" class="prodid" name="id">
                    <div class="form-group">
                        <label for="edit_name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <label for="edit_category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="edit_category" name="category" required>
                                <option value="" selected>- Select -</option>
                            </select>
                        </div>
                    </div>
                    <!--<div class="form-group">-->
                    <!--    <label for="edit_Per_Hour_Rate" class="col-sm-2 control-label">Per Hour Rate</label>-->
                    <!--    <div class="col-sm-4">-->
                    <!--        <input type="text" class="form-control" id="edit_Per_Hour_Rate" name="Per_Hour_Rate" required>-->
                    <!--    </div>-->
                    <!--    <label for="edit_Per_Day_Rate" class="col-sm-2 control-label">Per Day Rate</label>-->
                    <!--    <div class="col-sm-4">-->
                    <!--        <input type="text" class="form-control" id="edit_Per_Day_Rate" name="Per_Day_Rate" required>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <div class="form-group">
                        <!--<label for="edit_Airport_Transfer_Rate" class="col-sm-2 control-label">Airport Transfer Rate</label>-->
                        <!--<div class="col-sm-4">-->
                        <!--    <input type="text" class="form-control" id="edit_Airport_Transfer_Rate" name="Airport_Transfer_Rate" required>-->
                        <!--</div>-->
                        <label for="edit_hide" class="col-sm-2 control-label">Hide/Show</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="edit_hide" name="hide">
                                <option value="1">Show</option>
                                <option value="0">Hide</option>
                            </select>
                        </div>
                    </div>

                    <p><b>CAR OVERVIEW</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor4" name="car_overviwe" rows="5" cols="80" required></textarea>
                        </div>
                    </div>
                    <p><b>SERVICE OFFERED IN THIS VEHICLE</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor5" name="service_offered" rows="5" cols="80" required></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>





