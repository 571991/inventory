

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        @include('pages/header_script')

    </head>
    <body class="login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href=""><b>Super Shop Inventory</b></a>

            </div>
            @if (session('errorArray'))
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() AS $key => $value)
                <strong>{{ $value }}</strong><br>
                @endforeach
            </div>
            @endif
            <div class="login-box-body">
                <form method="post" action="{{ URL::to('login') }}">
                    <div class="form-group has-feedback">
                        <input type="email" class="form-control" id="" name="email" value="" placeholder="Enter email address"/>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password"  id="" name="password" class="form-control" placeholder="Enter password" value=""/>
                    </div>
                    <div style="height: 20px;"></div>
                    <div class="row">
                        <div class="col-xs-12">

                            {{ csrf_field() }}
                            <a href=""> 
                                <button name="btnLogin" class="btn btn-primary btn-block btn-flat">Login</button>
                            </a>

                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('pages/footer_script')
    </body>
</html>
