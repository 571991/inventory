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
                                    <div class="panel-heading panel-style"><i class="glyphicon glyphicon-lock"></i>&nbsp;Change Password</div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" action="">
                                            
                                          <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Old Password</label>
                                                <div class="col-sm-10">          
                                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">New Password</label>
                                                <div class="col-sm-10">          
                                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="pwd">Confirm Password</label>
                                                <div class="col-sm-10">          
                                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">        
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="glyphicon glyphicon-ok btn btn-default">Change</button>
                                                </div>
                                            </div>
                                        </form>
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
