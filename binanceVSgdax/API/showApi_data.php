<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("database.php");

$sql= "SELECT * FROM compareApi_data ORDER BY id DESC LIMIT 1000";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}
?>
<style>
	table.gdax_data th {
    text-align: left;
}
</style>
<div class="content table-responsive table-full-width">
                                    <table class="gdax_data">
                                         <thead>
                                            <th width="20%">LTC/BTC (GDAX)</th>
                                            <th width="20%">LTC/BTC (BINANCE)</th>
                                            <th width="15%">% Difference</th>
                                            <th width="15%">Timestamp</th>
                                         </thead>
                                        <tbody>

                                            <?php

                                              if (mysqli_num_rows($result) > 0) {
                                             // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) {

                                            ?>
                                                <tr>
                                                  
                                                    <td>
                                                        <?php echo $row['gdaxPrice']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['binancePrice']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['difference']; ?>
                                                    </td>
                                                     <td>
                                                        <?php echo $row['timestamp']; ?>
                                                    </td>
                                                   
                                                </tr>
                                                <?php

                                                }
                                                }
                                                 ?>

                                        </tbody>
                                    </table>
                                 </div>
                                 <script>
									 setTimeout(function(){
   window.location.reload(1);
}, 40000);
                                 </script>
