<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Table Example</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        @include('pages/header_script')
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            @include('pages/header')
            @include('pages/sidebar')

            <div class="content-wrapper">
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel-group">
                                <div class="panel panel-primary">
                                    <div class="panel-heading panel-style"><i class="fa fa-dashboard"></i>&nbsp;Table Example</div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table id="tableList" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                                                    <thead style="background: #BDBDBD;">
                                                        <tr>
                                                            <th style="width: 70%;">Name</th>
                                                            <th style="width: 30%;">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody >
                                                        <tr style="border: 1px solid red;">
                                                            <td style="width: 70%;">Content One</td>
                                                            <td style="width: 30%;">
                                                                <a href=""> 
                                                                    <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-edit"></i></button>
                                                                </a>
                                                                <a href="javascript:void(0);"> 
                                                                    <button class="btn btn-danger btn-sm" data-toggle="modal" type="button" data-target="#tableModal"><i class="fa fa-trash-o"></i></button>
                                                                </a>
                                                                <div id="tableModal" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog modal-sm">
                                                                        <div class="modal-content">
                                                                            <form method="POST">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                    <h4 class="modal-title">Are you sure you want to delete this record?</h4>
                                                                                    <input type="hidden" name="" id="" value="" />
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                                                    <button type="submit" id="btnDeleteClass" name="btnDeleteClass" class="btn btn-danger">Yes</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td class="text-center" colspan="1"></td>
                                                            <td class="text-left" colspan="1">
                                                                <a href="">
                                                                    <button class="btn btn-primary">
                                                                        <i class="fa fa-plus"></i>&nbsp;Add
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @include('pages/footer')
        </div>
        @include('pages/footer_script')
        <script>
            $(document).ready(function () {
                $('#tableList').DataTable({
                    "aaSorting": [[1, "asc"]]
                });
            });
        </script>
        <script type="text/javascript">
            $("#tableActive").addClass("active");
            $("#tableActive").parent().parent().addClass("treeview active");
            $("#tableActive").parent().addClass("in");
        </script>

    </body>
</html>
