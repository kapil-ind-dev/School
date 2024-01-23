
<div class="row login_page">
    <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Reset Password</h5><hr>
                        <form onsubmit="return validate()" name="f1">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">New Password</label>
                                <input type="password" name="new_password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter New Password">
                                <small id="newPassError" class="form-text err text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1" placeholder="Enter Confirm Password">
                                <small id="conpassError" class="form-text err text-danger"></small>
                           
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-2 mx-auto d-block">Reset</button><br>
                        </form>
                </div>
            </div>
        </div>
    <div class="col-sm-3"></div>
</div>
   <script>
        function validate(){
            var new_password = document.f1.new_password.value;
            var confirm_password = document.f1.confirm_password.value;
            $('.err').html('');
            var status = true;
            if(new_password == ''){
                document.getElementById('newPassError').innerHTML = 'Please enter new password';
                status = false;
            }
            if(confirm_password == ''){
                document.getElementById('conpassError').innerHTML = 'Please enter confirm password';
                status = false;
            }
            if(status == true){
                if(new_password != confirm_password){
                document.getElementById('conpassError').innerHTML = 'New password and confirm password does not matched!';
                    status = false; 
                }
            }
            
            return status;
        }
   </script>
    