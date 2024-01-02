<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Order.css">
    <title>Order</title>
</head>
<body>
    <nav>
        
        <img src="logo.PNG" class="logo"  > 
        <h1><span style="color:blueviolet;">P</span><span style="color:blue;">E</span>
            <span style="color:skyblue;">A</span><span style="color:green;">C</span>
            <span style="color:red;">E</span></h1>
        <div class="menue">
            <ul>
                <li><a href="Peace.php">Home</a></li>
                <li><a href="contactUs.php">Contact</a></li>
                <li><a href="AboutUs.php">About Us</a></li>

            </ul>
        </div>
        
    </nav>

    <main>
        <div class="container">
            <form action="Data.php" method="POST">
                <legend>Order Details</legend><br>
                <input type="text" name="fname" placeholder="Customer Name" required ><br>
                <input type="number" name="fcode" placeholder="Design Code" required><br>
                <input type="email" name="femail" placeholder="Email" required><br>
                <input type="number" name="fcontact" placeholder="Contact Number" required><br>
                <input type="text" name="faddress" placeholder="Address" required><br>
                <button>Order</button>
            </form>
        </div>
    </main>

    <footer class="footer">
        

        <br>
            <div class="copyright">
                <h4 >Copyright @2023; Design by 
                    <span style="font-weight: lighter; color: darkgray;">TAIEN</span></h4>
            </div>
    </div>
</footer>

</body>
</html>