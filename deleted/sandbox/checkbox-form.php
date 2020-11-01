

<form id="frm-example" action="" method="POST">
<?php
//require_once "../../vendor/autoload.php";  
use GuzzleHttp\Client;
$client = new GuzzleHttp\Client();
try {
       $responseArray = $client->request('GET', 'http://ssapi.shipstation.com/orders?customerName=headhoncho@whitehouse.gov&page=1&pageSize=15', ['auth' => ['c5deeb1c82fb4dbfa46e0935802e0f10', '7826d3edc0f747c69bcbc174a2f32c4a']]);   
       if($responseArray->getStatusCode()!= 200){
         throw new Exception("Error");
       }
       $body = $responseArray->getBody();
       $arr_body = json_decode($body, true);
   }
   catch(Exception $e) {
      echo 'Message: Connection Error ' .$e->getMessage();
    }
?>
<table id="example" class="display" cellspacing="0" width="100%">
   <thead>
      <tr>
         <th></th>
         <th>Order ID</th>
         <th>Service</th>
         <th>Receipient</th>
         <th>Ship Date</th>
         <th>PDF</th>
      </tr>
   </thead>
   <tbody>
   <?php for($x = 0; $x < count($arr_body["orders"]); $x++ ) { ?>
      <tr>    
     
      <td><input type="checkbox" name="id[]" class="other" value="<?php echo $arr_body["orders"][$x]["orderId"]; ?>"></td>
         <td> <?php echo $arr_body["orders"][$x]["orderId"]  ?></td>
         <td><?php echo $arr_body["orders"][$x]["carrierCode"]  ?></td>
         <td><?php echo $arr_body["orders"][$x]["billTo"]["name"]  ?></td>
         <td><?php
         $now = new DateTime($arr_body["orders"][$x]["shipByDate"] );
         echo $now->format('Y-m-d') 
          ?></td>
         <td>
            <button class="ui green compact labeled icon button" style="margin-left:10px;" id="new-order-button">
               <i class="file pdf icon"></i>
                  Order Form
               </button>
         </td>
      </tr>   

   <?php }?>             
   </tbody>
   <tfoot>
      <tr>
        <th></th>
         <th>Order ID</th>
         <th>Service</th>
         <th>Receipient</th>
         <th>Ship Date</th>
         <th>PDF</th>
      </tr>
   </tfoot>
</table>

<hr>

<p>Press <b>Submit</b> and check console for URL-encoded form data that would be submitted.</p>
<input type="submit" name="submit1" value="delete selected">
<p><button>Submit</button></p>

<p><b>Selected rows data:</b></p>
<pre id="example-console-rows"></pre>

<p><b>Form data as submitted to the server:</b></p>
<pre id="example-console-form"></pre>

</form>
<?php
if(isset($_POST["submit1"]))
{
   $box=$_POST['id'];
      while(list ($key,$val) = @each ($box))
      {
         echo "$val";
         $response = $client->request('DELETE', 'http://ssapi.shipstation.com/orders/'.$val, ['auth' => ['c5deeb1c82fb4dbfa46e0935802e0f10', '7826d3edc0f747c69bcbc174a2f32c4a']]);
      }
   ?>
   <script type="text/javascript">
   window.location.href=window.location.href;
   </script>
   <?php
   
}
?>
