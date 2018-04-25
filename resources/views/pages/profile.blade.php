<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <style>
            .table-bordered td{
                padding-left: 20px;
            }
            .form-group{
                align-items: left;
                padding-top: 30px;
            }
        </style>
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
                                    <div class="panel-heading panel-style"><i class="glyphicon glyphicon-user"></i>&nbsp;Profile</div>
                                    <div class="panel-body">
                                        <div>
                                            <table class="table-bordered" height="200px" width="900px" align="center" >

                                                <tr>
                                                    <td>Name</td>
                                                    <td>{{ Auth::user()->name }}</td>

                                                </tr>

                                                <tbody>
                                                    <tr>
                                                        <td>Mobile</td>

                                                        <td>{{ Auth::user()->mobile }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td>{{ Auth::user()->email }}</td>

                                                    </tr>
                                                    <tr>
                                                        <td>Addres</td>
                                                        <td>{{ Auth::user()->address }}</td>

                                                    </tr>
                                                </tbody>

                                            </table>    
                                        </div> 

                                        <div class="form-group">        
                                            <div class="col-sm-offset-1 col-sm-4">
                                                
                                                    <div class="pull-left">
                                                        <a href="{{ URL::to('editProfile/'.Auth::user()->id ) }}" class=" glyphicon glyphicon-edit btn btn-default btn-flat " style="border: 1px solid #3C8DBC;">Edit Profile</a>
                                                    </div>
                                                
                                                    <div class="pull-right">

                                                       <a href="{{ URL::to('changePassword') }}" class="glyphicon glyphicon-lock btn btn-default btn-flat" style="border: 1px solid #3C8DBC;">Change Password</a>
                                                    </div>
                                                
                                                
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
        <script type="text/javascript">
            $("#dashActive").addClass("active");
            $("#dashActive").parent().parent().addClass("treeview active");
            $("#dashActive").parent().addClass("in");
        </script>
    </body>
</html>
