<!-- Description -->
<div class="modal fade" id="description">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add New Car</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="products_add.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <label for="category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="category" name="category" required>
                                <option value="" selected>- Select -</option>
                            </select>
                        </div>
                        <label for="hide" class="col-sm-2 control-label">Hide/Show</label>
                        <div class="col-sm-4">
                            <select class="form-control" id="hide" name="hide">
                                <option value="1">Show</option>
                                <option value="0">Hide</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="photo" class="col-sm-2 control-label">Photo</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>
                    <!--<div class="form-group">-->
                    <!--    <label for="Per_Hour_Rate" class="col-sm-2 control-label">Per Hour Rate</label>-->
                    <!--    <div class="col-sm-4">-->
                    <!--        <input type="text" class="form-control" id="Per_Hour_Rate" name="Per_Hour_Rate" required>-->
                    <!--    </div>-->
                    <!--    <label for="Per_Day_Rate" class="col-sm-2 control-label">Per Day Rate</label>-->
                    <!--    <div class="col-sm-4">-->
                    <!--        <input type="text" class="form-control" id="Per_Day_Rate" name="Per_Day_Rate" required>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--    <label for="Airport_Transfer_Rate" class="col-sm-2 control-label">Airport Transfer Rate</label>-->
                    <!--    <div class="col-sm-4">-->
                    <!--        <input type="text" class="form-control" id="Airport_Transfer_Rate" name="Airport_Transfer_Rate" required>-->
                    <!--    </div>-->
                        
                    <!--</div>-->
                    <p><b>CAR OVERVIEW</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor1" name="car_overviwe" rows="5" cols="80" required></textarea>
                        </div>
                    </div>
                    <p><b>SERVICE OFFERED IN THIS VEHICLE</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor2" name="service_offered" rows="5" cols="80" required></textarea>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                    <input type="hidden" class="prodid" name="id">
                    <div class="form-group">
                        <label for="photo" class="col-sm-3 control-label">Photo</label>

                        <div class="col-sm-9">
                            <input type="file" id="photo" name="photo" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Update Attachment -->
<div class="modal fade" id="edit_attachment">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="products_attachment.php" enctype="multipart/form-data">
                    <input type="hidden" class="prodid" name="id">
                    <div class="form-group">
                        <label for="attachment" class="col-sm-3 control-label">Attachment</label>

                        <div class="col-sm-9">
                            <input type="file" id="attachment" name="attachment" required>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

