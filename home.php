<?php
 include('includes/initialize.php');
 // include('db.php');
  //login confirmation
 confirm_logged_in();

 ?>

 
 
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard 
            <small>Control Panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>
        <br>


<!-- UPDATE ACCOUNTS TO ONLINE -->

<?php
      // echo "SELECT oic_id FROM accounts WHERE acct_id = '$_SESSION[acct_id]'";
      // $user = $conn->prepare("SELECT oic_id FROM accounts WHERE acct_id = '$_SESSION[acct_id]'")->execute();
      // $res =  $user->fetch();

      $stmt = $conn->prepare("UPDATE accounts SET status = 'Online' WHERE oic_id = '$_SESSION[oic_id]'");
      $stmt->execute();
 
 ?>
<!-- END UPDATE -->







<br>  





 <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="sensor1">
            <h1 >Agricultre Monitoring System</h1>
            <div class="text-sensor">
              <h4 >Moisture Sensor Value </h4>
              <h4 style="margin-left:400px;">Temperature Value </h4>
            </div>
                
                <iframe  style="border: 1px solid #cccccc; margin-left:280px;" src="https://thingspeak.com/channels/1801053/widgets/495277"></iframe>
                <iframe  style="border: 1px solid #cccccc;margin-left:100px;" src="https://thingspeak.com/channels/1801053/widgets/495279"></iframe>


                  <div style="display:flex;">
              <h4 style="margin-left:450px;">Humidity Value </h4>
              <h4 style="margin-left:440px;">Motion Sensor Value </h4>
            </div>
                <iframe  style="border: 1px solid #cccccc; margin-left:280px;" src="https://thingspeak.com/channels/1801053/widgets/495283"></iframe>
                <iframe  style="border: 1px solid #cccccc;margin-left:100px;" src="https://thingspeak.com/channels/1801053/widgets/495284"></iframe>
            </div>
          </div><!-- /.row -->




 

 