<!DOCTYPE html>
<html lang="en">
    <head>
       
        <title>contact us</title>
       @extends('conthead')      
    </head>
          
        
        

<body>
<br><br><br>


<div class="container contact-form">
	<h1>Contact form</h1>
	<hr>

	<div class="row">
   
       <div class="col-md-6">
       	<address>Lovely Professional University,Punjab-144411.</address>
       	<p>Email:- Newsportal@email.com</p>
       	<p>Phone:9999999999</p>
       </div>

       <div class="col-md-6">
       	
		 <form method="post" action="contact form handler.php">
         <div class="form-group">
         	<label>Name</label>
         	<input type="text" class="form-control" name="name">
         </div>

         <div class="form-group">
         	<label>Email</label>
         	<input type="text" class="form-control" name="email">
         </div>

         <div class="form-group">
         	<label>Massage</label>
         	<textarea  class="form-control" rows="7" name="message"></textarea>
         </div>

         <div class="form-group">
         	<button class="btn btn-primary btn-block">Send</button>
         </div>
           
		 </form>  
       </div>

    </div>

</div>




</body>
</html>