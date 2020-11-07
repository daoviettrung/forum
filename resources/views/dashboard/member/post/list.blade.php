@extends('dashboard.index')

@section('title', 'Home')

@section('style')
    <link rel="stylesheet" href="dashboard_assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="dashboard_assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dashboard_assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dashboard_assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection

@section('main')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Post list</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Post</a></li>
                            <li class="breadcrumb-item active">List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Topic</th>
                                        <th>Category</th>
                                        <th>Created at</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>Post 1</td>
                                        <td>Topic 1</td>
                                        <td>Category 1</td>
                                        <td>01/01/2020</td>
                                        <th>Status 1</th>
                                        <td>
                                            <button type="button" class="btn btn-block btn-info">Edit</button>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-block btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Topic</th>
                                        <th>Category</th>
                                        <th>Created at</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
    <!-- jQuery -->
    <script src="dashboard_assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="dashboard_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="dashboard_assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="dashboard_assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="dashboard_assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="dashboard_assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dashboard_assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dashboard_assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
