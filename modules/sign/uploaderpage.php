

        <!-- Content Header (Page header) -->
        <section class="content-header" >
          <h1>
            Upload Signatures 
            <small>Control Panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Upload Signatures Area</li>
          </ol>
        </section>
 <hr>




<script>
      function countChar(val) {
      	var max = 40;
        var len = val.value.length;
        if (len >= max) {
          val.value = val.value.substring(0, 40);
          $('#charNum').text('You have reached the limit');
        } else {
          var char = max - len;
          $('#charNum').text(char + ' characters left');
        }
     };      
</script>

<script>
      function countChar0(val) {
        var max = 1;
        var len = val.value.length;
        if (len >= max) {
          val.value = val.value.substring(0, 1);
          $('#charNum0').text('You have reached the limit');
        } else {
          var char = max - len;
          $('#charNum0').text(char + ' characters left');
        }
     };      
</script>


<script>
      function countChar1(val) {
      	var max = 40;
        var len = val.value.length;
        if (len >= max) {
          val.value = val.value.substring(0, 40);
          $('#charNum1').text('You have reached the limit');
        } else {
          var char = max - len;
          $('#charNum1').text(char + ' characters left');
        }
     };      
</script>

<script>
      function countChar2(val) {
        var max = 40;
        var len = val.value.length;
        if (len >= max) {
          val.value = val.value.substring(0, 40);
          $('#charNum2').text('You have reached the limit');
        } else {
          var char = max - len;
          $('#charNum2').text(char + ' characters left');
        }
     };      
</script>

<script>
      function countChar3(val) {
        var max = 11;
        var len = val.value.length;
        if (len >= max) {
          val.value = val.value.substring(0, 11);
          $('#charNum3').text('You have reached the limit');
        } else {
          var char = max - len;
          $('#charNum3').text(char + ' characters left');
        }
     };      
</script>

</head>

<body style="background-color: blue;">

<div style="position:relative; width:1000px; margin:1em auto; padding:5px; background-color: #ffffff;" class="table-bordered">
	
 <div class="banner" style="width:100%;" >
 	<div style="width:100%;	height:100px; margin:1px auto; background-color: #0a0;	background-image:url('banner/NEW.png');	background-repeat: no-repeat;"></div>	
 </div>	

<hr style="border-color: #d8d8d8;" />
 <div class="status" style="width:100%;" align="center">
        <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo "<ul class='error'> ";
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li> <strong><font color="red">',$msg ,'</font></strong></li>'; 
		}echo "</ul>";
		unset($_SESSION['ERRMSG_ARR']);
	}
?> 
</div> 


<div  align="center">
  <form class="form-horizontal span6" action="upload.php" method="POST" enctype="multipart/form-data">
<!-- <form action="controller.php?action=add" method="post" enctype="multipart/form-data" name="upload" style="margin:5px;"> -->

  <fieldset>
                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="col-md-4 control-label">First Name:</label>

                      <div class="col-md-10">
                        <input  name="pname" type="hidden" value="">
                         <input autofucos id="upr" class="form-control input-sm" name="fname" placeholder=
                            "First Name" type="text" onkeyup='countChar(this)' autocomplete="false" required><label id='charNum' style="color: blue;"></label> <br/>
                      </div>
                    </div>


                     <div class="col-md-6">
                      <label class="col-md-4 control-label">Middle Initial:</label>

                      <div class="col-md-10">
                        <input name="cutoff" type="hidden" value="">
                         <input maxlength="1" id="upr" class="form-control input-sm"  name="mi" placeholder=
                            "Middle Initial" type="text" onkeyup='countChar0(this)' autocomplete="false" required><label id='charNum0' style="color: blue;"></label><br/>
                      </div>
                    </div>
                    </div>


                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="col-md-4 control-label">Last Name:</label>

                      <div class="col-md-10">
                        <input name="projectname" type="hidden" value="">
                         <input id="upr" class="form-control input-sm" name="lname" placeholder=
                            "Last Name" type="text" onkeyup='countChar1(this)' autocomplete="false" required><label id='charNum1' style="color: blue;"></label> <br/>
                      </div>
                    </div>


                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="col-md-4 control-label">Address:</label>

                      <div class="col-md-10">
                        <input name="projectname" type="hidden" value="">
                         <input id="upr" class="form-control input-sm" name="address" placeholder=
                            "Address" type="text" onkeyup='countChar2(this)' autocomplete="false" required><label id='charNum2' style="color: blue;"></label> <br/>
                      </div>
                    </div>
                     </div>




                  <div class="form-group">
                    <div class="col-md-6">
                      <label class="col-md-4 control-label">Contact:</label>

                      <div class="col-md-10">
                        <input name="projectname" type="hidden" value="">
                         <input maxlength="11" id="upr" class="form-control input-sm" name="contact" placeholder=
                            "Contact" type="number" onkeyup='countChar3(this)' autocomplete="false" required><label id='charNum3' style="color: blue;"></label> <br/>
                      </div>
                    </div>

                     <div class="form-group">
                    <div class="col-md-6">
                      <label class="col-md-4 control-label">Date Uploaded:</label>

                      <div class="col-md-10">
                        <input name="projectname" type="hidden" value="">
                         <input type="date" id="upr" class="form-control input-sm" name="duploaded" placeholder=
                            "Date Uploaded" type="text" onkeyup='countChar2(this)' autocomplete="false" required><label id='charNum2' style="color: blue;"></label> <br/>
                      </div>
                    </div>

                    </div>
 


           <div class="col-md-6">
          <label class="col-md-4 control-label">File Uploader :</label>
          <div class="col-md-10" </label>
<?php 
  echo '[ '.$_SESSION['acct_id'] .' / '. $_SESSION['type'].' ]';
?>  
<br /><br />
           </div>
           </div>



           <div class="col-md-6">
          <div class="col-md-10" </label>

<input name="uploaded_file" type="file" class="input-xlarge" required/>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
<br /><br />
           </div>
           </div> 
 

 <br><br> <br><br>
           <div class="col-md-6">
          <div class="col-md-10" </label>

<button style="background:#0a0;color:white; box-shadow:0px 2px 2px 1px #777; outline:none; border-radius:50px 50px ;" type="submit" class="btn btn-default" name="Uploader"><i class="fa fa-upload"></i> Upload Chosen File</button>
 
      </div>
    </div>
</fieldset>



 <br><br> <br><br>
 <br><br><center><div class="box box-danger" style="color:red;">Note: File will be uploaded only if the size is less than 350Kb!</div> </center>


</form>
</div>

<!-- <hr style="border-color: #d8d8d8;" />
 -->
