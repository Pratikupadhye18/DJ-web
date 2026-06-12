<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add New News</b></h4>
            </div>
			<form class="form-horizontal" method="POST" action="service_add.php" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                         <label for="price" class="col-sm-1 control-label">Date</label>


                        <div class="col-sm-5">
                    <input type="date" class="form-control" id="price" name="price" required>
                        </div> 
                       </div>
            		<div class="form-group">
                     <label for="photo" class="col-sm-1 control-label">Image</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="photo" name="photo" required>
                        </div>
                        
							<label for="p3" class="col-sm-1 control-label">Price</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" id="p3" name="p3" required>
							</div>
                        
                        
                          </div>
				    <div class="form-group">
				  	<label for="photo" class="col-sm-1 control-label">Offer Price</label>
				  	<div class="col-sm-5">
				  	<input type="text" class="form-control" id="photo" name="photo" required>
				  	</div>


						  </div>

                    <p><b>Description</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
            			<textarea id="editor2" class="form-control" name="l_description" rows="5" cols="150" required></textarea>
                        </div>
                    </div>
					
					<p><b>Components</b></p>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea id="editor4" class="form-control" name="l_description" rows="5" cols="150" required></textarea>
						</div>
					</div>
					
					<p><b>Specifications</b></p>
					<div class="form-group">
						<div class="col-sm-12">
							<textarea id="editor1" class="form-control" name="l_description" rows="5" cols="150" required></textarea>
						</div>
					</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
            </div>
			</form> 
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
                <form class="form-horizontal" method="POST" action="service_photo.php" enctype="multipart/form-data">
                    <input type="hidden" class="srid" name="id">
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
                <form class="form-horizontal" method="POST" action="service_delete.php">
                    <input type="hidden" class="srid" name="id">
                    <div class="text-center">
                        <p>DELETE News</p>
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
                <h4 class="modal-title"><b>Edit News</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="service_edit.php" enctype="multipart/form-data">
                    <input type="hidden" class="srid" name="id">
                    <div class="form-group">
                        <label for="edit_name" class="col-sm-1 control-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                     <label for="price" class="col-sm-1 control-label">Date</label>


                        <div class="col-sm-5">
                    <input type="date" class="form-control" id="edit_price" name="price" required>
                        </div>
                    </div>

                    <p><b>Description</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
             <textarea id="editor3" class="form-control" name="l_description" rows="5" cols="150" required></textarea>
                        </div>
                    </div>

                   <!--  <p><b>Description - 2</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                <textarea id="editor5" class="form-control" name="s_description" rows="5" cols="150" required></textarea>
                        </div>
                    </div> -->

                    <div class="form-group">
                        <label for="head" class="col-sm-1 control-label">Heading</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="edit_head" name="head" required>
                        </div>
                       </div>
                       <div class="form-group">
                        <label for="link" class="col-sm-1 control-label">Link</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="edit_link" name="link" required>
                        </div>
                        </div>

                          <div class="form-group">
                        <label for="p1" class="col-sm-1 control-label">Point-1</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="edit_p1" name="p1" required>
                        </div>
                        <label for="p2" class="col-sm-1 control-label">Point-2</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="edit_p2" name="p2" required>
                        </div>
                         
                       </div>

                          <div class="form-group">
                        <label for="p3" class="col-sm-1 control-label">Point-3</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="edit_p3" name="p3" required>
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

