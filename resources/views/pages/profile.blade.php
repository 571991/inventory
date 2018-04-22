<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
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
                                    <div class="panel-heading panel-style"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</div>
                                    <div class="panel-body">
                                        <table>
                                            
                                            <tr>
                                                <td>Name</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Address</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Image</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            
                                        </table>
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
        <script type="text/javascript">
            $("#dashActive").addClass("active");
            $("#dashActive").parent().parent().addClass("treeview active");
            $("#dashActive").parent().addClass("in");
        </script>
    </body>
</html>
