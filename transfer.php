<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer</title>
    <link rel="stylesheet" href="css\fontawesome\css\all.min.css">
    <link rel="stylesheet" href="css\styles.css">
    <link rel="stylesheet" href="css\transfer.css">
</head>
<body>
    <div class="transfer">
        <?php require 'navbar.html' ?>

        <form action="" method="POST" >
                <?php
                require 'connection.php';
                $query =  mysqli_query($con, "SELECT * from customers");
                $customers = mysqli_fetch_all($query);?>
                <h2>TRANSFER</h2>
                <div class="form">
                    <select name="sender" required>
                        <option value=""  disabled selected>Select Sender</option>
                        <?php
                            foreach ($customers as $sender){?>
                        <option value="<?php echo $sender[0]; ?>" >
                                    
                                    
                                    <?php echo $sender[1];?></option>
                        <?php }  ?>
                    </select>
                    <select name="receiver" required>
                        <option value="" disabled selected> Select Receiver</option>
                    <?php
                            foreach ($customers as $receiver){?>
                                <option value="<?php echo $receiver[0];?>"><?php echo $receiver[1];?></option>
                                <?php }  ?>
                    </select>
                    <input type="text" name="amount" placeholder="Enter Amount" required>
                    <button type="submit" name ="submit">Transfer</button>
                </div>
        </form>
        <?php
        if(isset($_POST['submit'])){
            if(!empty($_POST['sender']) && !empty($_POST['receiver']) && !empty($_POST['amount'])) {
                $sender = $_POST['sender'];
                $receiver = $_POST['receiver'];
                $amount = $_POST['amount'];
                $from = mysqli_fetch_array(mysqli_query($con,"SELECT * from customers where customer_id = '$sender'"));
                $sender_name = $from['customer_name'];
                $to = mysqli_fetch_array(mysqli_query($con, "SELECT * from customers where customer_id = '$receiver'"));
                $receiver_name = $to['customer_name'];

                if ($amount<=0)
                {
                     echo '<script type="text/javascript"> alert("Oops! Negative values or Zero value cannot be transferred")</script>';
                 }

                elseif ($amount > $from['current_balance']){
                    echo '<script type="text/javascript"> alert("Bad Luck! Insufficient Balance");</script>';  
                }   

                else{
                    $sender_balance = $from['current_balance'] - $amount;
                    $update = mysqli_query($con, "update customers set current_balance = '$sender_balance' where customer_id = '$sender'");
                    $receiver_balance = $to['current_balance'] + $amount;
                    $update = mysqli_query($con, "update customers set current_balance = '$receiver_balance' where customer_id = '$receiver'");
                    $date = date("Y-m-d h:i:s A");
                    $modify = mysqli_query($con, "Insert into transactions(sender,receiver,money,time) values('$sender_name','$receiver_name','$amount','$date')");
                    if($modify){?>
                        <script type="text/javascript"> 
                            var balance = <?php echo json_encode($sender_balance); ?>;
                            if(confirm("Transaction Successful \r\n Your Current Balance is " + balance + "\r\n Do you want to see the transaction History?")){
                                window.location="transactions.php";
                            }
                            else{
                                window.location="index.php";
                            }
                        </script>';
                    <?php
                    }
                }
            }          
        }?>

        <?php require 'footer.html';?>
        <script src="script.js"></script>
       
    </div>
</body>
</html>