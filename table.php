<?php
require_once 'includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
$total =0;
function payableAmount($totalPrice){    
   // calculate total price here
   global $total;
    $total += $totalPrice;
    echo $total;
}
?>

<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
        
            <div class="card horizontal cardIcon waves-effect waves-dark">
            <div class="card-image red">
            <i class="material-icons dp48">import_export</i>
            </div>
            <div class="card-stacked red">
            <div class="card-content">
            <div class="count"><?php   $result= mysqli_query($conn,"SELECT SUM(UnitPrice) AS totalsale FROM order_details");
                    $row = mysqli_fetch_assoc($result); 
                    $sum = $row['totalsale'];
                    echo $sum
            ?>
            </div>
            </div>
            <div class="card-action">
            <strong>Total Sale</strong>
            </div>
            </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
        
            <div class="card horizontal cardIcon waves-effect waves-dark">
            <div class="card-image orange">
            <i class="material-icons dp48">shopping_cart</i>
            </div>
            <div class="card-stacked orange">
            <div class="card-content">
            <div class="count"><?php  $result= mysqli_query($conn,"SELECT OrderID FROM orders");
                                    $row=mysqli_num_rows($result);
                                    echo $row
                                    ?>
            
            </div>
            </div>
            <div class="card-action">
            <strong>Total Order</strong>
            </div>
            </div>
            </div> 
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
    
    </div>
   </div>