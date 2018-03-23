<?php    
include('../include/admin.php');

?>

<div class="container ">
<div class="row btm">

 <div class="col-md-12">


 
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h3> Employees</h3>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
			  
			    <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-example-modal-lg">New employee</button>
              </div>
          
            </div>
          </div>
		  
		  
 <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">username</th>
	  <th scope="col">Email</th>
	  <th scope="col">Password</th>
	  <th scope="col">Role</th>
	   <th scope="col">Department</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>mpha</td>
      <td>mpha</td>
      <td>@mdo</td>
      <td>mpha</td>
      <td>mpha</td>
      <td>@mdo</td>
	   <td>@mdo</td>
	  
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>mpha</td>
      <td>mpha</td>
      <td>@mdo</td>
      <td>mpha</td>
      <td>mpha</td>
      <td>@mdo</td>
	   <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>mpha</td>
      <td>mpha</td>
      <td>@mdo</td>
      <td>mpha</td>
      <td>mpha</td>
      <td>@mdo</td>
	   <td>@mdo</td>
    </tr>
  </tbody>
</table>


 

</div>




</div>

</div>



































<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
	
<div class="modal-content">	
<div class="container">
  <h4 class="text-center">New Staff</h4><hr/>
		  <form class="row">

		  <div class="form-group col-md-6">
				<label for="exampleInput">Firstname</label>
				<input type="text"  name="firstname"class="form-control"  placeholder="Enter first name">
		  </div>
		  
		  <div class="form-group col-md-6">
				<label for="exampleInput">Lastname</label>
				<input type="text" name="lastname" class="form-control"  placeholder="Enter last name">
		  </div>
		  
		  <div class="form-group col-md-6">
				<label for="exampleInput">Username</label>
				<input type="text" name="username" class="form-control"  placeholder="Enter username">
		  </div>
		  
		  <div class="form-group col-md-6">
				<label for="exampleInput">Email</label>
				<input type="text" name="email" class="form-control"  placeholder="Enter email">
		  </div>
		  
		  <div class="form-group col-md-6">
				<label for="exampleInput">Password</label>
				<input type="text" name="password" class="form-control"  placeholder="Enter password">
		  </div>
		  
		  <div class="form-group col-md-6">
				<label for="exampleInput">Username</label>
				<input type="text" name="username" class="form-control"  placeholder="Enter username">
		  </div>
		
		 <div class="form-group col-md-6">
			<label for="exampleInput">Role</label>
				<select class="form-control" name="role">
																			
				<option value="staff" >Staff</option>														
					<option value="staff" >Student</option>	
						
				</select>			
		</div>			  
		  
		  

		  
	
		
		
		</form>
</div>

</div><!--end body modal-->


      <div class="modal-footer">
     
        <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
		   <button type="button" class="btn btn-outline-info">Save changes</button>
      </div>


    </div>
  </div>
</div>


<?php    
include('../include/footer.php');

?>
