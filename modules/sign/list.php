<?php /*if($_SESSION['type']=='Administrator'){ */?>
 

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Graph Value
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Graph Value</li>
          </ol>
        </section>
        <hr>

          <div class="row">
          <div style="background-color:aliceblue;padding:20px;">
            <h1 style="margin-left:450px;margin-bottom:50px;">Agricultre Monitoring System(Graph)</h1>
            <div style="display:flex;">
              <h4 style="margin-left:450px;">Moisture  Value </h4>
              <h4 style="margin-left:400px;">Temperature Value </h4>
            </div>
                
                <iframe width="450" height="260" style="border: 1px solid #cccccc; margin-left:280px;" src="https://thingspeak.com/channels/1801053/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                <iframe width="450" height="260" style="border: 1px solid #cccccc;margin-left:100px;" src="https://thingspeak.com/channels/1801053/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>


                  <div style="display:flex;">
              <h4 style="margin-left:450px;">Humidity Value </h4>
              <h4 style="margin-left:440px;">Motion  Value </h4>
            </div>
                <iframe width="450" height="260" style="border: 1px solid #cccccc; margin-left:280px;" src="https://thingspeak.com/channels/1801053/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
                <iframe width="450" height="260" style="border: 1px solid #cccccc;margin-left:100px;" src="https://thingspeak.com/channels/1801053/charts/4?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15"></iframe>
            </div>
          </div><!-- /.row -->
 











 
<?php
/*   }else{

 redirect('../../errorpage/page_404.html');
 

}*/
?>




