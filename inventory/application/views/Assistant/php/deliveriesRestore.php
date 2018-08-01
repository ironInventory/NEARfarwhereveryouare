<?php
$conn=mysqli_connect('localhost','root','','itproject')
    or die("connection failed".mysqli_errno());

if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="SELECT * FROM purchase_orders JOIN purchase_order_bm USING(purchase_order_uniq_id) WHERE purchase_order_id=$id";
    $run_sql=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($run_sql)){
        $per_po_uniq_id=$row[0];
        $per_po_id=$row[1];
        $per_orderDate=$row[2];
        $per_quantity=$row[3];
        $per_unit=$row[4];
        $per_po_remarks=$row[5];
        $per_description=$row[6];
        $per_deliveryDate=$row[7];
        $per_supply_type=$row[8];
        $per_supplier=$row[9];
        $per_unitprice=$row[10];
        $per_total=$row[11];
        $per_po_key=$row[12];
        $per_quantityDelivered=$row[13];
        $per_itemDeliveryRemarks=$row[14];
        $per_purch_id=$row[16];
        $per_orderCreateDate=$row[17];        
        $per_purchOrderName=$row[18];
        $per_purchOrderStatus=$row[19];
        $per_purchOrderRemarks=$row[20];
        $per_gtotal=$row[21];
        $per_soft_deleted=$row[24];
    }//end while
?>
    <form class="form-horizontal" method="post" action ="">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-2">
                                                <img src="../assets/dist/img/user3-128x128.png" alt="User Image" style="width:80px;height:80px;">
                                            </div>
                                            <div class="col-md-8">
                                                
                                                <div class="margin">
                                                    <center><h5>Assumption Medical Diagnostic Center </h5></center>
                                                    <center><h6>10 Assumption Rd., Baguio City</h6></center>
                                                    <center><h6>Philippines</h6></center>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end of modal header -->
                                        <div class="modal-body">
                 <center><h3 class="modal-title"><b>Do you want to restore this item?</b></h3></center>
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                             <div class="form-group">
                            <label hidden="true" class="col-sm-4 control-label" for="txtid">Supply ID</label>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" id="txtid" name="txtid" hidden value="<?php echo $per_purch_id;?>" readonly>
                            </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cancel</button>
                <button type="submit" class="btn btn-success" name="deliveryRestore"><i class="fa fa-repeat"></i> Restore</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>