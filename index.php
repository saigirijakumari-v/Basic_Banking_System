<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="css\styles.css">
    <!-- fontawesome link -->
    <link rel="stylesheet" href="css\fontawesome\css\all.min.css">
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.6/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
</head>

<body>
    <div class="bank">
        <?php require 'navbar.html' ?>
        
        <div class="get-started" style="background-image:url('assets/k.svg');">
            <div class="content">
                <h1>Basic Banking System</h1>
                <p>A simple way to transer money among people.</p>
                <button onClick="window.location.href = 'customers.php'">Get Started</button>
            </div>
            <img src="assets\4209052.jpg" alt="image" class="share-image">
        </div>

        <div class="features">
            <h2>Features</h2>
            <div class="features-content">
                <a href="customers.php">
                    <div class="section">
                        <img src="assets\customers.png" alt="customers" class="customers">
                        <h3>View Customers</h3>
                        <p>It displays all customers details like Customer Nsame, Email Id etc.,</p>
                    </div>
                </a>
                <a href="transfer.php">
                    <div class="section">
                        <img src="assets\transfer.png" alt="transfer" class="transfer">
                        <h3>Transfer Money</h3>
                        <p>It transfers money from one customer to another.</p>
                    </div>
                </a>
                <a href="transactions.php">
                    <div class="section">
                        <img src="assets\transactions.png" alt="transactions" class="transactions">
                        <h3>View Transactions</h3>
                        <p>It displays recent 10 transctions done by the customers.</p>
                    </div>
                </a>
            </div>

            <div class="flow">
                <h2>Flow of the Project</h2>
                <p>Home Page > Get Started or View Customers or Customers > Select View and Transfer one Customer >  Select sender, receiver and tranfer amount > Transfer > View all Transactions > Home page</p>
            </div>
            <?php require 'footer.html'?>
        </div>
    </div>
   <script src="script.js"></script>
</body>

</html>
