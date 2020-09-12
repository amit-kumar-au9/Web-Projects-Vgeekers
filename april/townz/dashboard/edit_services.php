<?php include "include/header.php";?>


<div id="page-wrapper">
			<div class="main-page">
				<br>
				<center><h2 class="title1" style="color: red;">Edit Serivce</h2></center>
				


    <div class="container">
	      <div class="row">
		        		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
          <div class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
           
            <!-- Select Basic -->
          


            <!-- Text input-->
            <div class="form-group">
                <label class="control-label" for="exampleFormControlSelect1"> Category<span class="star">*<span></label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Electrician</option>
                  <option>Plumber</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group">
                <label  class="control-label" for="exampleFormControlSelect1">Sub-Category(optional)</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Electrician</option>
                  <option>Plumber</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
            <div class="form-group">
              <label class="control-label" for="textinput"> Service Name<span class="star">*<span></label>  
              <div>                     
                <input id="textinput" name="textinput" type="text" placeholder=" Service Name" class="form-control input-md">
              </div>
              </div>
              <div class="form-group">
                <label class="control-label" for="textinput"> Service Cost<span class="star">*<span></label>  
                <div>                     
                  <input id="textinput" name="textinput" type="number" placeholder=" Service Cost" class="form-control input-md">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label" for="textinput"> Service Icon<span class="star">*<span></label>  
                <div>                     
                  <input id="textinput" name="textinput" type="file" placeholder=" Add Icon" class="form-control input-md">
                </div>
                </div>
                <div class="form-group">
                <label class="control-label" for="textinput"> Service Images<span class="star">*<span></label>  
                 <div class="input_fields_wrap ">
            

              <label class="control-label" for="textinput"></label>  
              <div>                     
                <input id="textinput" name="mytext[1]" type="file" placeholder=" Add image" class="form-control input-md"><br>
              </div>
              <button class="add_field_button btn btn-success">Add More Images</button><br><br>
              </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Serive Description<span class="star">*<span></label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>



<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-3 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1" >Update</button>
  
  </div>
</div>

</fieldset>
</div>
		</div>
		
	</div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h4>Are you sure you want to save changes?</h4>
         </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" >Yes</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
        </div>
      </div>
    </div>
  </div>    
<script type="text/javascript">
  $(document).ready(function() {
    var max_fields      = 3; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div> <input type="file" name="mytext[' + x + ']" class="form-control input-md"/> <a href="#" class="remove_field">Remove</a> </div>'); // add input boxes.
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
<?php include "include/footer.php"?>
