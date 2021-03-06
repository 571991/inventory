

<!DOCTYPE html>
<html>
    <head> 
        <title>Registration</title>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
            
            
            @if (session('success')) 
            <div class="alert alert-success"> 
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> 
                <strong>{{ session('success') }}</strong>
            </div> @endif
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="{{ URL::to('registration') }}" enctype="multipart/form-data" >
                           {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name" class="cols-sm-2 control-label">Your Name <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" placeholder="Enter your Name"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="mobile" class="cols-sm-2 control-label">Mobile <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="mobile" id="username" onchange="checkMobile(this.value)" value="{{ old('mobile') }}" placeholder="Enter your Mobile number"/>
                                </div>
                                <p style="font-size: 15px; padding-left: 40px;" id="mobileId"></p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="cols-sm-2 control-label">Your Email <span style="color:red">*</span></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="email" id="email" onchange="checkEmail(this.value)" value="{{ old('email') }}" placeholder="Enter your Email"/>
                                </div>
                                <p style="font-size: 15px; padding-left: 40px;" id="emailId"></p>
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="address" class="cols-sm-2 control-label">Address</label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-building fa" aria-hidden="true"></i></span>
                                    <textarea name="address" cols="152" rows="1" value="{{ old('address') }}" placeholder="Enter your Address"></textarea>
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
                                    <select id="select"  name="type" value="{{ old('type') }}" style="height: 40px; width: 1165px;">
                                        <option value="">Select Type</option>
                                        <option value="2">District Manager</option>
                                        <option value="3">Branch Manager</option>
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
                            <a href="{{ URL::to('/') }}"><h4>Login</h4></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
            @include('pages/footer_script')
            
            <script>
                
                 $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                
           function checkMobile(mobile){
                   
            $.ajax({
                type: 'POST',
                url: 'checkMobile',
                dataType: 'json',
                data: {
                    mobile: mobile
                },
                
                success: function (response) {
                   var obj = response; 
                   if(obj.output === "exists"){
                       $('#mobileId').text('Mobile number Already Exists');
                       $('#mobileId').css("color","red");
                }
                else{
                       $('#mobileId').text('Mobile number Available');
                       $('#mobileId').css("color","green");
                }
                 
                }
            });
                }
                
          
         function checkEmail(email){ 
         
         $.ajax({
                type: 'POST',
                url: 'checkEmail',
                dataType: 'json',
                data: {
                    email: email
                },
                
                success: function (response) {
                    var obj = response; 
                   if(obj.output === "exists"){
                       $('#emailId').text('Email Already Exists');
                       $('#emailId').css("color","red");
                }
                else{
                       $('#emailId').text('Email Available');
                       $('#emailId').css("color","green");
                }
//                    
                }
            });
    }  
        </script>
    </body>
</html>