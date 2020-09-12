<?php include "include/header.php";?>
<div id="page-wrapper" style="background:white">
	<div class="main-page" style="background: white;">
	<center><h2 class="title1" style="color:green;">ADD <span id="na"></span> BANNER</h2></center>
  <div id="cus_table">
    <div class="form-group input_fields_wrap ">
      <button class="add_field_button btn btn-success">Add More Images</button>
      <br>
      <label class="control-label" for="textinput">Image</label>  
      <div>                     
        <input id="textinput" name="mytext[1]" type="file" placeholder=" Add image" class="form-control input-md"  required><br>
      </div>
    </div>
    <div class="card" style="width: 11rem;">
      <img class="card-img-top" src="images/slider3.jpg" alt="Card image cap" style="width: 10em">
      <div class="card-body">
        <h5 class="card-title"> <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Old Title" value="Some Old Title"></h5>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Edit Photo</a>
        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">Delete Photo</a>
      </div>
    </div>
    <div class="card" style="width: 11rem;">
      <img class="card-img-top" src="images/slider3.jpg" alt="Card image cap" style="width: 10em">
      <div class="card-body">
        <h5 class="card-title"> <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Old Title" value="Some Old Title"></h5>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Edit Photo</a>
        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">Delete Photo</a>
      </div>
    </div>
    <div class="card" style="width: 11rem;">
      <img class="card-img-top" src="images/slider3.jpg" alt="Card image cap" style="width: 10em">
      <div class="card-body">
        <h5 class="card-title"> <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Old Title" value="Some Old Title"></h5>
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Edit Photo</a>
        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">Delete Photo</a>
      </div>
    </div>
    <br><br><br><br><br>
    <center><button id="button1id" name="button1id" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1" >Update</button></center>
    </div>
  </div>
</div>





<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <center> <img class="card-img-top" src="images/slider3.jpg" alt="Card image cap" style="width: 16em"></center>
        <label>Add new Banner</label>
        <input type="file" class="form-control">
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Change</button>
      <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
      </div>
    </div>
  </div>
</div>
<?php include "include/footer.php";?> 


<script type="text/javascript">

  $(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
      e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div> <input type="file" class="form-control" placeholder="add image"/><a href="#" class="remove_field">Remove</a> </div>'); // add input boxes.
          }
        });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
      e.preventDefault(); $(this).parent('div').remove(); x--;
    })
  });
</script>
