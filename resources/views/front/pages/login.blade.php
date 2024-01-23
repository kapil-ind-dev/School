
<div class="row login_page">
    <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign In</h5><hr>
                        <form onsubmit="return validate()" name="f1">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="email" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username">
                                <small id="emailError" class="form-text err text-danger"></small>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                <small id="passwordError" class="form-text err text-danger"></small>
                           
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                <span class="float-right"><a href="{{url('forgot-password')}}">Forgot Password?</a></span>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-2 mx-auto d-block">Sign In</button><br>
                            <span class="mt-4">Don't have an account? <a href="{{url('sign-up')}}">Create an account</a></span>
                        </form>
                </div>
            </div>
        </div>
    <div class="col-sm-3"></div>
</div>
   <script>
        function validate(){
            var username = document.f1.username.value;
            var password = document.f1.password.value;
            $('.err').html('');
            var status = true;
            if(username == ''){
                document.getElementById('emailError').innerHTML = 'Please enter username';
                status = false;
            }
            if(password == ''){
                document.getElementById('passwordError').innerHTML = 'Please enter password';
                status = false;
            }
            return status;
        }
   </script>
    