
<?php include "include/header.php";?>

<div id="page-wrapper">
			<div class="main-page">
				<br>
          <center><h2 class="title1" style="color: red;">EDIT SUB ADMINS PROFILE</h2></center>
        

    <div class="container">
        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6  column col-sm-offset-0 col-md-offset-2 col-lg-offset-3">
          <div class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
           
            <!-- Select Basic -->
          

<br><br>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="textinput">Name</label>  
              <div class="col-md-9">                     
                <input id="textinput" name="textinput" type="text" placeholder="Name" class="form-control input-md">
              </div>


<!-- Multiple Radios (inline) -->

  <label class="col-md-3 control-label" for="radios">Gender</label>
  <div class="col-md-9"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Male
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Female
    </label> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="textinput">Phone </label>  
  <div class="col-md-4">
    <input id="textinput" name="textinput" type="number" placeholder="Phone" class="form-control input-md">
  </div>
              
  <label class="col-md-1 control-label" for="textinput">Email </label>  
  <div class="col-md-4">
    <input id="textinput" name="textinput" type="email" placeholder="Email" class="form-control input-md">
  </div>
 </div>
    <div class="form-group">
  <label class="col-md-3 control-label" for="textinput">State </label>  
  <div class="col-md-4">
    <input id="textinput" name="textinput" type="text" placeholder="State" class="form-control input-md">
  </div>
              
  <label class="col-md-1 control-label" for="textinput">City </label>  
  <div class="col-md-4">
    <input id="textinput" name="textinput" type="text" placeholder="City" class="form-control input-md">
  </div>
 </div>
  
  <!-- Textarea -->
  <div class="form-group">
  <label class="col-md-3 control-label" for="textarea">Location</label>
  <div class="col-md-9">                     
    <input id="textinput" name="textinput" type="text" placeholder="Location" class="form-control input-md">
  </div>
</div>
  <!-- Textarea -->
<div class="form-group">
  <label class="col-md-3 control-label" for="textarea">Password</label>
  <div class="col-md-9">                     
    <input id="textinput" name="textinput" type="password" placeholder="Password" class="form-control input-md">
  </div>
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

      



 
			<?php include "include/footer.php"?>	 

