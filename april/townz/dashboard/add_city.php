<?php include "include/header.php";?>
<div id="page-wrapper">
  <div class="main-page">
   <br>
   <center><h2 class="title1" style="color: red;">Add City</h2></center>
   <html lang="en">
   <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Bootstrap multicolumn form</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
          <div class="form-horizontal">
            <form method="post" enctype="multipart/form-data" class="addCategory">
              <fieldset>
                <div class="form-group">
                  <label class="control-label" for="exampleFormControlSelect1">Name</label>
                  <input type="text" class="form-control" placeholder="Name of the City" name="name" required>
                </div>
                <div class="form-group">
                  <label class="col-md-3 control-label" for="button1id"></label>
                  <div class="col-md-8">
                    <button id="button1id" class="btn btn-success" type="submit" >ADD</button>
                    <p id="added" style="display: none">City Added</p>
                    <p id="retry" style="display: none">Please Re try</p>
                  </div>
                </div>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>  
<?php include "include/footer.php"?>
<script type="text/javascript">
  $('form.addCategory').submit(function(e){
      e.preventDefault();
      var formdata = $(this).serialize();
      $.ajax({
        'type' : 'post',
        'url' : 'insert_city.php',
        'data' : formdata,
        success : function(response){
          var json = JSON.parse(response);
          if(!json.error){
            $('#added').show();
          }
          else{
            $('#retry').show();
          }
        }
      });
    });
</script>


