
<div class="row signup_page">
    <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Sign Up</h5><hr>
                        <form action="{{ route('signupcode') }}" method="post" onsubmit="return validate()" name="f1">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name">
                                <small id="nameError" class="form-text err text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
                                <small id="emailError" class="form-text err text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="Enter Phone">
                                <small id="phoneError" class="form-text err text-danger"></small>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" name="dob" class="form-control" id="exampleInputPassword1" placeholder="Date Of Birth">
                                <small id="dobError" class="form-text err text-danger"></small>
                           
                            </div>
                            <button type="submit" class="btn btn-block btn-primary mt-2 mx-auto d-block">Sign Up</button><br>
                            <span class="mt-4">Already have an account? <a href="{{ url('sign-in') }}">Login</a></span>
                        </form>
                </div>
            </div>
        </div>
    <div class="col-sm-3"></div>
</div>
   <script>
        function validate(){
            var name = document.f1.name.value;
            var email = document.f1.email.value;
            var phone = document.f1.phone.value;
            var dob = document.f1.dob.value;
            $('.err').html('');
            var status = true;
            if(name == ''){
                document.getElementById('nameError').innerHTML = 'Please enter name';
                status = false;
            }
            if(email == ''){
                document.getElementById('emailError').innerHTML = 'Please enter email';
                status = false;
            }
            if(phone == ''){
                document.getElementById('phoneError').innerHTML = 'Please enter phone no.';
                status = false;
            }
            if(dob == ''){
                document.getElementById('dobError').innerHTML = 'Please select dob';
                status = false;
            }
            return status;
        }
   </script>
    