<?php
include 'includes/session.php';
include 'includes/format.php';
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Dashboard
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row"></div>
            </section>
            <!-- right col -->
        </div>
        <?php include 'includes/footer.php'; ?>

    </div>
    <!-- ./wrapper -->


    <!-- End Chart Data -->

    <?php $pdo->close(); ?>
    <?php include 'includes/scripts.php'; ?>
    
    <style>
        .fc-direction-ltr .fc-daygrid-event.fc-event-end, .fc-direction-rtl .fc-daygrid-event.fc-event-start {
            cursor: pointer;
        }
        .fc .fc-button-primary:disabled {
            text-transform: uppercase;
        }
        .fc-daygrid-dot-event {
            display: flex;
            align-items: center;
            padding: 2px 0;
            flex-direction: row;
            flex-wrap: wrap;
        }

    </style>
    
</body>
</html>
