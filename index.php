<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head lang="vi">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <script src="js/jquery-3.2.0.min.js"></script>


        <script src="js/bootstrap.min.js"></script>

        <title>lo`</title>
    </head>
    <body>
        <div class="container">
            <h1>Product</h1>
            <form class="form">
                <div class="col-md-9">
                    <input type="text" class="form-control" placeholder="search product" />
                </div>
                <button type="button" class="btn btn-success col-md-3" data-toggle="modal" data-target="#modalThang">
                    <span class="glyphicon glyphicon-cloud"></span> Thêm mới
                </button>


            </form>






            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    try {
                        $dbo = new PDO("mysql:host=$server;dbname=phdthang", $user, $pass);
                    } catch (Exception $ex) {
                        echo"Connection Failed: " . $e->getMessage();
                    }
                    $sql = "select * from products";
                    $result = $dbo->query($sql);

                    while ($row = $result->fetch(PDO::FETCH_BOTH)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td>
                                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalThang">
                                    <span class="glyphicon glyphicon-star"></span> Edit
                                </button>
                                <button class="btn btn-primary" type="button">
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </button>
                            </td>
                        </tr>
    <?php
}
?>
                </tbody>
            </table>

            <a href="/TaskManager.html" class="btn btn-success" role="button">Bai 2</a>


            <!--Modal-->
            <div class="modal fade" id="modalThang" role="dialog">
                <div class="modal-dialog">
                    <!--Modal content-->
                    <form class="form" role="form" action="xldulieu.php" id="form1">
                        <div class="modal-content">
                            <div class="modal-header">

                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4>Edit Product</h4>
                            </div>
                            <div class="modal-body">
                                <div class="well" style="padding:0;margin:0">
                                    <table class="table table-bordered" style="margin:0">

                                        <tr>
                                            <th class="text-center">
                                                Name
                                                
                                                    <input id="name" type="text" class="form-control" placeholder="typename" />
                                                
                                            </th>
                                            <th class="text-center">
                                                Price 
                                                    <input id="price" type="text" class="form-control" placeholder="typename" />
                                               
                                            </th>
                                            <th class="text-center">
                                                Description 
                                                    <input id="des" type="text" class="form-control" placeholder="typename" />
                                                
                                            </th>
                                        </tr>
                                    </table>
                                </div>            
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success" type="button" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" form="form1" ><span class="glyphicon glyphicon-off"></span> Save change</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </body>
</html>
