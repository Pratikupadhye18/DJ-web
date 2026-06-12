<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<link href="../dist/css/uploader.css" rel="stylesheet" type="text/css"/>
    <script src="js/uploader.js" type="text/javascript"></script>
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- Moment JS -->
<script src="../bower_components/moment/moment.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="../bower_components/chart.js/Chart.js"></script>
<!-- daterangepicker -->
<script src="../bower_components/moment/min/moment.min.js"></script>
<script src="../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- CK Editor -->
<script src="../bower_components/ckeditor/ckeditor.js"></script>
<!-- Active Script -->

<script>
    $(function () {
        /** add active class and stay opened when selected */
        var url = window.location;

        // for sidebar menu entirely but not cover treeview
        $('ul.sidebar-menu a').filter(function () {
            return this.href == url;
        }).parent().addClass('active');

        // for treeview
        $('ul.treeview-menu a').filter(function () {
            return this.href == url;
        }).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');

    });
</script>
<!-- Data Table Initialize -->
<script>
    $(function () {
        $('#example1').DataTable({
            responsive: true,
            stateSave: true
        })
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<script language="javascript">
    var t = 1;
    function changeIt(type, name)

    {
        $('#' + name + '_div').html($('#' + name + '_div').html() + "<div class=' col-sm-2' id='div_" + name + "_" + t + "' style='margin-top:5px;'><div class='input-group'><input type='" + type + "' id='" + name + "_" + t + "' name='" + name + "_" + t + "' class='form-control'><span class='input-group-btn'><button class='btn btn-danger' type='button' onClick='deleteRow(div_" + name + "_" + t + ")'><i class='fa fa-close'></i></button></span></div></div>");
        t++;
    }
    function deleteRow(item) {
        $(item).remove();
    }
</script>
<style>
    .nopad {
        padding-left: 0 !important;
        padding-right: 0 !important;
    }
    /*image gallery*/
    .image-checkbox {
        cursor: pointer;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        border: 4px solid transparent;
        margin-bottom: 0;
        outline: 0;
        margin-top: 6px;
    }
    .image-checkbox input[type="checkbox"] {
        display: none;
    }

    .image-checkbox-checked {
        border-color: #4783B0;
    }
    .image-checkbox img.img-responsive {
        border: 1px solid #000;
    }
    .image-checkbox .fa {
        position: absolute;
        color: #4A79A3;
        background-color: #fff;
        padding: 10px;
        top: 0;
        right: 0;
    }
    .image-checkbox-checked .fa {
        display: block !important;
    }
</style>

<script>
    $(".image-checkbox").each(function () {
        if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
            $(this).addClass('image-checkbox-checked');
        } else {
            $(this).removeClass('image-checkbox-checked');
        }
    });

// sync the state to the input
    $(".image-checkbox").on("click", function (e) {
        $(this).toggleClass('image-checkbox-checked');
        var $checkbox = $(this).find('input[type="checkbox"]');
        $checkbox.prop("checked", !$checkbox.prop("checked"))

        e.preventDefault();
    });
</script>
<script>
    $(function () {
        //Initialize Select2 Elements
        $('.select2').select2()
        //CK Editor
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
		CKEDITOR.replace('editor3');
    });
</script>
    
