<div class="row cardContainer show-hide-animation">
    <?php
    $result=$pdo->querySql('SELECT `id`, `fname`, `lname`, `gender`, `email`, `address`, `city`, `state`, `zip` FROM `customers` WHERE 1');
    
    foreach ( $result as $row) {
        ?>




        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <a href="?id=<?php echo $row['id']?>">
                    <button class="btn close cardClose" title="Delete Customer">&times;</button>
                </a>
                <div class="cardHeader">
                    <a href="CU_customer.php?action=<?php echo $row['id']?>" class="white"><?php 
                   
                    echo $row['lname'];
                    echo " ". $row['fname'];?>
                        <i class="icon-edit icon-white editIcon"></i></a></div>
                <div class="cardBody">
                    <div class="clearfix">
                        <div class="pull-left cardBodyLeft">
                            <a href="#" class="white"><img src="Content/images/female.png" class="cardImage" /></a>
                        </div>
                        <div class="pull-left cardBodyRight">
                            <div class="cardBodyContent"><?php echo $row['state'].", ".$row['address']; ?></div>
                            <div>
                                <a href="Customerorder" class="btn-link">
                                    99
                                    <span>Orders</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
?>
</div>