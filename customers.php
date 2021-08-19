<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers </title>
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="css\customers.css">
</head>
<body>
    <div class="customers">
        <?php require 'navbar.html'; 
        require 'connection.php';
        $query = "SELECT * from customers";
        $customers = mysqli_query($con, $query);
        ?>
        <div class="customers_data">
            <h2>CUSTOMERS</h2>
            <table>
                <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Email ID</th>
                    <th>Current Balance</th>
                    <th>Transaction</th>
                </tr>
                <?php
                if(mysqli_num_rows($customers)>0){
                    while($customer = mysqli_fetch_array($customers)){ ?>
                        <tr>
                            <td><?php echo $customer['customer_id']?></td>
                            <td><?php echo $customer['customer_name']?></td>
                            <td><?php echo $customer['email_id']?></td>  
                            <td><?php echo $customer['current_balance']?></td>
                            <td class="button"><a href="transfer.php?id=<?php echo $customer['customer_id'];?>">View and Transfer</a></td>
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