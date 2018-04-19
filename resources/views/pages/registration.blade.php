

<!DOCTYPE html>
<html>
    <head> 
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        @include('pages/header_script')
    </head>
    <body>
        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                    <div class="panel-title text-center">
                        <h1 class="title">Super Shop Inventory</h1>
                        <hr />
                    </div>
                </div> 
                @if (session('errorArray'))
            <div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                @foreach($errors->all() AS $key => $value)
                <strong>{{ $value }}</strong><br>
                @endforeach
            </div>
            @endif
            
            @if (session('error')) 
            <div class="alert alert-danger"> 
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                <strong>{{ session('error') }}</strong>
            </div> @endif
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="{{ URL::to('registration') }}" multipart/form-data >
                           {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Name <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label">Mobile <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="mobile" id="username"  placeholder="Enter your Mobile number"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                                </div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="address" class="cols-sm-2 control-label">Address</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                    <textarea name="address" cols="152" rows="1" placeholder="Enter your Address"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="cols-sm-2 control-label">Image</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                                    <input type="file" class="form-control" name="image" id="username" placeholder="Insert your Image"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="cols-sm-2 control-label">Type <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                    <select id="select"  name="type" style="height: 40px; width: 1165px;">
                                        <option>Select Type</option>
                                        <option value="1">District Manager</option>
                                        <option value="2">Branch Manager</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="cols-sm-2 control-label">Password <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="confirm" class="cols-sm-2 control-label">Confirm Password <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="confirmpass" id="confirm"  placeholder="Confirm your Password"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                        </div>
                        <div class="login-register">
                            <a href="{{ URL::to('login') }}"><h4>Login</h4></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        @include('pages/footer_script')
    </body>
</html>