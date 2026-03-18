<html>
<head>
    <title>Transaction Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="shadow p-3 mb-5 bg-white rounded">
            <h2>Transaction Status</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="orderId">Enter Order ID:</label>
                    <input type="text" class="form-control" id="orderId" name="orderId">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Check Status</button>
            </form>
            <?php 
                if(isset($_POST['submit'])) {
                    $orderStatus = $_POST['orderId'];
                    require_once "config.php";
                    $transactionResult = transactionStatus($orderStatus);
            ?>
                <table class="table table-bordered">
                    <?php foreach($transactionResult['body'] as $key => $value){ ?>
                        <tr>
                            <td><?php echo $key; ?></td>
                            <td><?php echo is_array($value)?json_encode($value):$value; ?></td>
                        </tr>
                    <?php } ?>
                </table>
            <?php } ?>
        </div>
    </div>
</body>
</html>