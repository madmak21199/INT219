 <!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"  >
                <img src="img/logo.png" class="rounded-circle" style="width:15%;">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="font-size:25px;">
        
   <form action="/dispv" method="post">@csrf
    <select style="width: 200px" id="nameid" name="selectv">
      <option></option>
      @foreach($data as $d)
        <option>{{$d->username}}</option>
      @endforeach
    </select>
    
    <input type="submit" name="submit" class="btn btn-success">
  </form>
          
                </div>
               <li><a href="/signup"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                 <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>  
              </nav>   
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#nameid").select2({
            placeholder: "Select a Name",
            allowClear: true
        });
</script>


</body>
</html>