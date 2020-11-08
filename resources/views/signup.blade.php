<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>Signup</title>
       @extends('signupcss')     
     
    </head>
<body style="background-color:red;">
        
       
        
        <br><br><br>


        <div class="signup-form">
    <form action="signup_val" method="POST">@csrf
    <b><h1 style="color:black;text-align:center;">Sign Up</h1></b>
 <div class="form-group">
     <label>First Name :</label>
     <input class="form-control"  name="first_name" placeholder="first Name" value="{{ old('first_name') }}">
      @error('first_name')
      <div class="e1">{{$message}}</div>
      @enderror
 </div>
 <div class="form-group">
<label>Last Name :</label>
<input class="form-control" placeholder="last_name" name="last_name" value="{{ old('last_name') }}">
@error('last_name')
<div class="e1">{{$message}}</div>
@enderror
</div>
                            <div class="form-group">
                                <label>Email Id :</label>
                                <input  class="form-control"  placeholder="email_id"   name="email_id" value="{{ old('email_id') }}">
                                <div>{{$error ?? ''}}</div>
                                @error('email_id')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password :</label>
                                <input type="password" class="form-control" placeholder="Password"  name="password1" value="{{ old('password1') }}">
                                @error('password1')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Confirm Password :</label>
                                <input type="password" class="form-control" placeholder="confirm Password"  name="password2" value="{{ old('password2') }}" >
                                @error('password2')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Phone :</label>
                                <input type="number" class="form-control"  placeholder="phone"   name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                <div class="e1">{{$message}}</div>
                                @enderror
                            </div>
                            
      <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block btn-lg" name="signup">Sign Up</button>
    </div>
    <div class="text-center " style="color:black;">Already have an account? <a href="login">Login here</a></div>
    </form>
</div>


</body>
</html>