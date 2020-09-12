<?php include "include/header.php";?>

<div id="page-wrapper">
			<div class="main-page">
				<br>
				<center><h2 class="title1" style="color:red;">Pending <span id="na"></span> Querries</h2>
            
                <button type="button" class="btn btn-primary"  id="b" onclick="yes()"><span id="b1">Customer</span></button>
		<button type="button" class="btn btn-primary"  id="b2" onclick="no()"><span id="b1">Vendor</span></button>
            </center>
				
				
<table class="responstable" id="cus_table" style="display:none">
  
	<tr style="border:5px solid #024457;">
		<th data-th="Driver details"><span>Customer ID</span></th>
	  <th>Customer Name</th>
	
	  <th>Customer Phone</th>
      <th>Query</th>
      <th>Date of Querry</th>
      <th>Status</th>
	</tr>
	
	<tr>
	  <center>
		<td>10</td>
		  <td>Jhon Deo</td>
		 
		  <td class="number">1234567890</td>
	  <td class="q">I am unable to get my service done!kindly look into the isse as soon as possible</td>
	<td class="date">10/03/2020</td>
      <td><button type="button" class="btn btn-danger last">UNSOLVED</button>
    </td>

	 
	
	  </center>
	</tr>
	<tr>
		<center>
		<td>10</td>
		  <td>Jhon Deo</td>
		 
		  <td class="number">1234567890</td>
	  <td class="q">I am unable to get my service done!kindly look into the isse as soon as possible</td>
	<td class="date">10/03/2020</td>
      <td><button type="button" class="btn btn-danger last" >UNSOLVED</button>
    </td>
	  
		</center>
	  </tr>
	  <tr>
		<center>
        <td>10</td>
		  <td>Jhon Deo</td>
		 
		  <td class="number">1234567890</td>
	  <td class="q">I am unable to get my service done!kindly look into the isse as soon as possible</td>
	<td class="date">10/03/2020</td>
      <td><button type="button" class="btn btn-danger last" >UNSOLVED</button>
    </td>
	   
	  
		</center>
	  </tr>
	
	
  </table>
								
<table class="responstable" id="ven_table" style="display:none;" >
  
<tr style="border:5px solid #024457;">
		<th data-th="Driver details"><span>Vendor ID</span></th>
	  <th>Vendor Name</th>
	
	  <th>Vendor Phone</th>
      <th>Query</th>
      <th>Date of Querry</th>
      <th>Status</th>
	</tr>
	
	<tr>
	  <center>
		<td>10</td>
		  <td>Jhon Deo</td>
		 
		  <td class="number">1234567890</td>
	  <td class="q">I have an issue regarding my aggrement</td>
	<td class="date">10/03/2020</td>
      <td><button type="button" class="btn btn-danger last">UNSOLVED</button>
    </td>

	 
	
	  </center>
	</tr>
	<tr>
		<center>
		<td>10</td>
		  <td>Jhon Deo</td>
		 
		  <td class="number">1234567890</td>
          <td class="q">I have an issue regarding my aggrement</td>
	<td class="date">10/03/2020</td>
      <td><button type="button" class="btn btn-danger last" >UNSOLVED</button>
    </td>
	  
		</center>
	  </tr>
	  <tr>
		<center>
        <td>10</td>
		  <td>Jhon Deo</td>
		 
		  <td class="number">1234567890</td>
          <td class="q">I have an issue regarding my aggrement</td>
	<td class="date">10/03/2020</td>
      <td><button type="button" class="btn btn-danger last" data-toggle="modal" data-target="#exampleModal2">UNSOLVED</button>
    </td>
	   
	  
		</center>
	  </tr>
</table>
		 
				 
		</div>
			</div>
		</div>
                
		<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Block</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
				<table class="responstable" >
    
                  <tr style="border:5px solid #024457;">
                    <th>Solved By</th>
                    <th>Sub-Admin ID</th>
                    <th data-th="Driver details"><span>Solved On</span></th>
                    <
                    <!-- <th>Pending Queries</th>
                    <th>Revenue Genererated</th> -->
                    
                  </tr>
                  
                  <tr>
                    <center>
                      <td>Person 1</td>
                      <td>100</td>
                      <td>02/04/2020</td>
                    <!-- <td></td> -->
                    <!-- <td></td> -->
                  
                    </center>
                  </tr>
                  
                  
                  
                </table>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="yes()">Block</button>
				  <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
				</div>
			  </div>
			</div>
		  </div>
		 

		  <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
			  <div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="exampleModalLabel">Unblock</h5>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				<div class="modal-body">
                <table class="responstable" >
    
                  <tr style="border:5px solid #024457;">
                    <th>Solved By</th>
                    <th>Vendor ID</th>
                    <th data-th="Driver details"><span>Solved On</span></th>
                    <
                    <!-- <th>Pending Queries</th>
                    <th>Revenue Genererated</th> -->
                    
                  </tr>
                  
                  <tr>
                    <center>
                      <td>Person 1</td>
                      <td>100</td>
                      <td>02/04/2020</td>
                    <!-- <td></td> -->
                    <!-- <td></td> -->
                  
                    </center>
                  </tr>
                  
                  
                  
                </table>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Ok</button>
				  <button type="button" class="btn btn-primary" data-dismiss="modal">Back</button>
				</div>
			  </div>
			</div>
		  </div>
		  <style type="text/css">
		  	td:nth-child(6)
		  	{
		  		width: 20%;
		  	}
	td:nth-child(4)
		  	{
		  		width: 20%;
		  	}

		  </style>
<?php include "include/footer.php"?>