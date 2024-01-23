
<div class="row login_page">
    <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Forgot Password</h5><hr>
                        <form onsubmit="return validate()" name="f1">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                                <small id="emailError" class="form-text err text-danger"></small>
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-2 mx-auto d-block">Submit</button><br>
                        </form>
                </div>
            </div>
        </div>
    <div class="col-sm-3"></div>
</div>
   <script>
        function validate(){
            var email = document.f1.email.value;
            $('.err').html('');
            var status = true;
            if(email == ''){
                document.getElementById('emailError').innerHTML = 'Please enter email';
                status = false;
            }
            return status;
        }
   </script>
    