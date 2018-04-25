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
                                    <div class="panel-heading panel-style"><i class="glyphicon glyphicon-edit"></i>&nbsp;Edit Profile</div>
                                    <div class="panel-body">
                                        <form class="form-horizontal" action="">
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="name">Name</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="{{ Auth::user()->name }}" >
                                                    <input type="hidden" name="id" class="form-control" id="name" placeholder="{{ Auth::user()->id }}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="mobile">Mobile</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="{{ Auth::user()->mobile }}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="email">Email</label>
                                                <div class="col-sm-10">
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="{{ Auth::user()->email }}" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="address">Address</label>
                                                <div class="col-sm-10">
                                                    <textarea name="address" id="address" class="form-control" placeholder="{{ Auth::user()->address }}"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2" for="image">Image</label>
                                                <div class="col-sm-10">
                                                    <img src="{{ Auth::user()->image }}" alt="image" height="40px" width="60px"/>
                                                    <input type="file" name="image" id="image" class="form-control"/>
                                                </div>
                                            </div>
                                            
                                             <div class="form-group">        
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="glyphicon glyphicon-check btn btn-default">Update Info</button>
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
