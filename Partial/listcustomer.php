
﻿<div class="row gridContainer customersTable show-hide-animation" >
    <div class="col-md-10">
        <div>
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th>&nbsp;</th>
                        <th >Name</th>
                        <th >Location</th>
                        <th >Orders</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($pdo->querySql('SELECT `id`, `fname`, `lname`, `gender`, `email`, `address`, `city`, `state`, `zip` FROM `customers` WHERE 1') as $row) {
                        ?>
                        <tr class="repeat-animation">
                            <td><a href="customeredit"><img src="Content/images/female.png" class="cardImage" alt="Customer Image" /></a></td>
                            <td><a href="Editcustomer"><?php
                        echo $row['lname'];
                        echo " " . $row['fname'];
                        ?></a></td>
                            <td><?php echo $row['state'] . ", " . $row['address']; ?></td>
                            <td>
                                <a href="customerorder" class="btn-link">
                                    99
                                    <span> 
                                    </span>
                                </a>
                            </td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>

    <?php
}
?>
                </tbody>

            </table>

        </div>

    </div>
</div>
