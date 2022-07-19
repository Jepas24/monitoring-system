 <?php if($_SESSION['type']=='Administrator'){?>


        <!-- Content Header (Page header) -->
        <section class="content-header" >
          <h1>
            Users 
            <small>Control Panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Add New Users</li>
          </ol>
        </section>
 <hr>


      
 

            <form class="form-horizontal span6" action="controller.php?action=add" method="POST" enctype="multipart/form-data">

          <fieldset>
                     
           

<div class="form-group">
                    <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "fname">Employee ID:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input id="upr" class="form-control input-sm" id="id" name="id" placeholder=
                            "Employee ID" type="number" value="" required>
                      </div>
                    </div>

 </div>


                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "fname">First Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input id="upr" class="form-control input-sm" id="fname" name="fname" placeholder=
                            "First Name" type="text" value="" required>
                      </div>
                    </div>


                     <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "lname">Last Name:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input id="upr" class="form-control input-sm" id="lname" name="lname" placeholder=
                            "Last Name" type="text" value="" required>
                      </div>
                       </div>


                       <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "mname">Middle:</label>

                      <div class="col-md-8">
                        <input name="deptid" type="hidden" value="">
                         <input id="uprall" maxlength="4" class="form-control input-sm" id="mname" name="mname" placeholder=
                            "Optional" type="text" value="">
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "username">Address:</label>

                      <div class="col-md-8">
                        <input name="address" type="hidden" value="">
                         <input id="upr" class="form-control input-sm" name="address" placeholder=
                            "Address" type="text" value="" required>
                      </div>                                                                                                                                                      
                    </div>
                 
                   
                    <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "pass">Contac:</label>

                      <div class="col-md-8">
                        <input name="contact" type="hidden" value="">
                         <input class="form-control input-sm" id="pass" name="contact" placeholder=
                            "Contact" type="number" value="" required>
                      </div>
                    </div>
                
                    <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "type">Position:</label>

                      <div class="col-md-8">
                       <select class="form-control input-sm" name="position" id="type">
                       <option>Select Position</option>
                       <option value="Admin Assistant">Admin Assistant</option>
                       <option value="Senior Project Coordinator">Senior Project Coordinator</option>
                       <option value="Warehouse Supervisor">Warehouse Supervisor</option>
                       <option value="Finance Assistant">Finance Assistant</option>
                          <option value="Project Coordinator">Project Coordinator</option>
                          <option value="Team Leader">Team Leader</option>
                           <option value="Brand Abassador">Brand Abassador</option>
                            <option value="Sampling Assistant">Sampling Assistant</option>
                            <option value="Warehouseman">Warehouseman</option>
                        
                  
                        </select> 
                      </div>
                    </div>
                  </div>

 
         
<style>
#uprall {
    text-transform:uppercase;
}

#upr {
    text-transform:capitalize;
}
 


input {
    border: none;
    overflow: auto;
    outline: none;
COLOR:BLACK;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
</style>

                  <div class="form-group">
                    <div class="col-md-4">
                      <label class="col-md-4 control-label" for=
                      "image">Profile Pic:</label>

                      <div class="col-md-8">
                      
  <input type="file" style=" font-size:19px; height:28.5px;  border: 1px solid #765942;border-radius: 10px; background:red; color:white;" name="uploaded_file" required/><br/>
 
                      </div>
                    </div>
                  </div>

 <br>

          <div class="pull-right">
          <button style="background:#0a0;color:white; box-shadow:0px 2px 2px 1px #777; outline:none; border-radius:50px 50px ;" type="submit" name="save" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
             <button style="background:#0a0;color:white; box-shadow:0px 2px 2px 1px #777; outline:none; border-radius:50px 50px ;" type="submit" name="saveandadd" class="btn btn-default"><span class="glyphicon glyphicon-floppy-save"></span> Save and Add New</button>
                
        </div>
     
            

              
          </fieldset> 

       
        </form>
      
 
 <?php   }else{

 redirect('../../errorpage/page_404.html');
 

}
?>
  

 
 