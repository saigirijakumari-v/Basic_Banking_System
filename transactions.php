<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transactions </title>
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="css\customers.css">
</head>
<body>
    <div class="transactions">
        <?php require 'navbar.html'; 
        require 'connection.php';
        $query = "SELECT * from (SELECT * FROM `transactions` ORDER by id desc limit 10)as history order by id ASC";

        $transactions = mysqli_query($con, $query);
        ?>

        <div class="customers_data">
            <h2>TRANSACTIONS</h2>
            <table >
                <tr>
                    <th>S.NO</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Transfered Amount</th>
                    <th>Time</th>
                </tr>
                <?php
                if(mysqli_num_rows($transactions)>0){
                    while($transaction = mysqli_fetch_array($transactions)){ ?>
                        <tr>
                            <td><?php echo $transaction['id']?></td>
                            <td><?php echo $transaction['sender']?></td>
                            <td><?php echo $transaction['receiver']?></td>  
                            <td><?php echo $transaction['money']?></td>
                            <td><?php echo $transaction['time']?></td>
                        </tr>
                        <?php
                    }
                }
                    
                ?>
            </table>
        </div>
        <?php require 'footer.html'?>
    </div>
    <script src="script.js"></script>
</body>
</html>