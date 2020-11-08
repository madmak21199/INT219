<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!--card gallery css-->
     <link rel="stylesheet" href="css/card gallery.css">
	 
	 <!-- footer css-->
	 <link rel="stylesheet" href="css/footer.css">
	 
	 
	 <!-- navbar and coursel CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="css/nav bar and coursel.css">
	
	    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  


    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
     <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
         
    <style type="text/css">

	* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
   padding-top:10px;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* fade in overlay*/
.container {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 50%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 50%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 30%;
  text-align: center;
}
<!-- For man and woman-->
.outer-div{
	height: 350px;
	overflow: hidden;
		
}
.inner-div1{
	height: 300px;
	width: 100%;
	background-size: cover;
	background-position: center;
	transition: all 0.5s ease;
	background-image:url(img/Vivo-Nex-3_759.jpg)
}
.inner-div1:hover{
	transform: scale(0.8)
}
.inner-div2{
	height: 300px;
	width: 100%;
	background-size: cover;
	background-position: center;
	transition: all 0.5s ease;
	background-image:url(img/Vivo-Y19-759.jpg)
}
.inner-div2:hover{
	transform: scale(0.8)
}


/* heading hover*/

    </style>

    <!--slishow script-->
    <script type="text/javascript">
      
      var i = 0; // Start point
  var images = [];
  var time = 1000;

  // Image List
  images[0] = 'img/Sports1.png';
  images[1] = 'img/pakistanrailway.jpg';
  images[2] = 'img/Natarajan-Chandrasekaran.jpg';
  images[3] = 'img/Aravinddelhicm.jpg';

  // Change Image
  function changeImg(){
    document.slide.src = images[i];

    if(i < images.length - 1){
      i++;
    } else {
      i = 0;
    }
	setTimeout("changeImg()", time);
  }

  window.onload = changeImg;
    </script>
  </head>

   </head>