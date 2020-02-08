<html lang="vi">
 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     


<title>Slovník online </title>
        

<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
<link rel="stylesheet" href="theme/bootstrap.min.css"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://kit.fontawesome.com/9041096289.js" crossorigin="anonymous"></script>
</head>
 <body>


<?php include 'wg/menu-backhome.php';?>

  <div class="container">
   <br />
   <h2 align="center">Ajax Live Data Search using Jquery PHP MySql form slovnik.minhquydesign.com</h2><br />
   <div class="form-group">
    <div class="input-group input-group-sm mb">
     <div class="input-group-prepend">
    <span class="input-group-text">Enter Keyboard</span>
  </div>
     <input type="text" name="search_text" id="search_text" placeholder="Livesearch..." class="form-control" />
     <div class="input-group-append">
    <span class="input-group-text" id="basic-addon2",</span><i class="fas fa-spinner fa-spin"></i>
  </div>
    </div>
   </div>
   <br />
   <div id="result" class="container"></div>
  </div>

<?php include 'wg/footer.php';?>
 </body>
</html>


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
