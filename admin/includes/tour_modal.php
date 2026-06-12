<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b>Add Details</b></h4>
            </div>
            <form class="form-horizontal" method="POST" action="tour_add.php" enctype="multipart/form-data">
            <div class="modal-body">
                    <div class="form-group">
                        <label for="name" class="col-sm-1 control-label">Title</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                       <br /><br />
            		   <label for="head" class="col-sm-1 control-label">Heading</label>
                		<div class="col-sm-11">
            			<input type="text" class="form-control" id="head" name="head">
                		</div>
                	</div>	
                		
                	<div class="form-group">	
					<label for="category" class="col-sm-1 control-label">Service</label>                       
                        <div class="col-sm-11">
       					 <select class="form-control" id="category" name="category" >
        				 <option value="" selected>- Select -</option>
                         </select>
                        </div>
                    </div>
                    
                    <!--<div class="form-group">
                     <label for="photo" class="col-sm-1 control-label">Image</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="photo" name="photo" required>
                        </div>
                          </div>
                    <p><b>Details:</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor2" class="form-control" name="description" rows="5" cols="80"></textarea>
                        </div>
                    </div>
        			<p><b>Specs: / Transmitter Specs:</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor4" class="form-control" name="s_description" rows="5" cols="80"></textarea>
                        </div>
                    </div>
                    <p><b>The Sonar POD App features include: / Receiver Specs: / FPV Regulatory Notice:</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor5" class="form-control" name="r_description" rows="5" cols="80"></textarea>
                        </div>
                    </div>-->
            </div>
            	<div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                <i class="fa fa-close"></i> Close</button>
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
                <form class="form-horizontal" method="POST" action="tour_photo.php" enctype="multipart/form-data">
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
                <form class="form-horizontal" method="POST" action="tour_delete.php">
                    <input type="hidden" class="srid" name="id">
                    <div class="text-center">
                        <p>DELETE Tour</p>
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
        <h4 class="modal-title"><b>Edit Specs</b></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="tour_edit.php" enctype="multipart/form-data">
                    <input type="hidden" class="srid" name="id">
                    <div class="form-group">
                        <label for="edit_name" class="col-sm-1 control-label">Title</label>
                        <div class="col-sm-11">
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                    </div> 
                    <div class="form-group">     
		            	<label for="head" class="col-sm-1 control-label">Heading</label>
		                <div class="col-sm-11">
		            		<input type="text" class="form-control" id="edit_head" name="head">
		                </div>
                	</div>
                	
                	<div class="form-group">     
		            	<label for="category" class="col-sm-1 control-label">Service</label>                    
                        <div class="col-sm-11">
					        <select class="form-control" id="edit_category" name="category" >
					        <option value="" selected>- Select -</option>
                            </select>
		                </div>
                	</div>
                	
                	
                	

                    <!--<p><b>Details:</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
        <textarea id="editor3" class="form-control" name="description" rows="5" cols="80"></textarea>
                        </div>
                    </div>
         			<p><b>Specs: / Transmitter Specs:</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor6" class="form-control" name="s_description" rows="5" cols="80"></textarea>
                        </div>
                    </div>
                    <p><b>The Sonar POD App features include: / Receiver Specs: / FPV Regulatory Notice:</b></p>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <textarea id="editor7" class="form-control" name="r_description" rows="5" cols="80"></textarea>
                        </div>
                    </div> --> 
                              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

