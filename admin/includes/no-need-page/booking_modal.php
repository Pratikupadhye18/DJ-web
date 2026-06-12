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
                <form class="form-horizontal" method="POST" action="booking_delete.php">
                    <input type="hidden" class="prodid" name="id">
                    <div class="text-center">
                        <p>DELETE BOOKING</p>
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
<!-- Description -->
<div class="modal fade" id="description">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><b><span class="fname"></span> <span class="lname"></span></b></h4>
            </div>
            <div class="modal-body">
                <!--<label> Name : <span class="fname"></span> <span class="lname"></span></label>-->
                <label> Email : <span class="email"></span></label>
                <label> Phone : <span class="phone"></span></label>
                <label> Trip Type : <span class="trip_type"></span></label>
                <label> Vehicle : <span class="vehicle"></span></label>
                <label> Pickup Date and Time : <span class="ddate"></span> (<span class="ddtime"></span>)</label>
                <label> No. of Passengers : <span class="nop"></span></label>
                <label> Country : <span class="country"></span></label>
                <label> State : <span class="state"></span></label>
                <label> Zip Code : <span class="zipcode"></span></label>
                <label> Pickup Location : <span class="pickuplocation"></span></label>
                <label> Destination : <span class="destination"></span></label>
                <label> Additional Note : <span class="additional"></span></label>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>





