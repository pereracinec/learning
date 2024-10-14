<!DOCTYPE html>
<html>
<head>
    <title>Home | Video Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e6dcf6;
        }
        .menu {
            background-color: #010000;
            overflow: hidden;
            height: 50px;
        }
        .menu a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        .menu a:hover {
            background-color: #a68dc1;
            color: black;
        }
        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            gap: 10px;
            padding: 10px;
        }
        .grid-item {
            border: 2px solid #333;
            padding: 20px;
            text-align: center;
            background-color: #8D77A8;
            border-radius: 8px;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .grid-item:hover {
            background-color: #65537b;
            transform: scale(1.05);
        }
        .grid-item h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: rgb(226, 215, 233);
        }
        .grid-item p {
            font-size: 14px;
            color: rgb(212, 203, 218);
        }
        .price {
            font-weight: bold;
            color: #ff5722;
            margin-top: 10px;
        }
        .cart {
            float: right;
        }
        #datetime {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<center>
    <!-- Menu -->
    <div class="menu">
        <a href="#">Home</a>
        <a href="#">Courses</a>
        <a href="#">Affiliations</a>
        <a href="#">How to Join</a>
        <a href="#">Testimonials</a>
        <div class="cart">
            <img src="data:image/png;base64,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" alt="Cart" width="50" height="50">
        </div>
    </div>

    <!-- Welcome Message -->
    <div>
        <h2>Welcome <?php echo htmlspecialchars($_POST['name']); ?> (<?php echo htmlspecialchars($_POST['email']); ?>)</h2>
    </div>

     <!-- Date and time display -->
     <div id="datetime"></div>

    <!-- Grid of courses -->
    <div class="grid-container">
        <div class="grid-item">
            <h3>EC0001</h3>
            <p>Quantitative Analysis in Business (45 Hours)</p>
            <p class="price">Rs. 35,000/-</p>
        </div>
        <div class="grid-item">
            <h3>EC0002</h3>
            <p>Information Technology in Retailing (45 Hours)</p>
            <p class="price">Rs. 35,000/-</p>
        </div>
        <div class="grid-item">
            <h3>EC0003</h3>
            <p>Brand Innovation & Development (30 Hours)</p>
            <p class="price">Rs. 25,000/-</p>
        </div>
        
        <div class="grid-item">
            <h3>EC0004</h3>
            <p>Packaging & Logistic Management (30 Hours)</p>
            <p class="price">Rs. 25,000/-</p>
        </div>
        <div class="grid-item">
            <h3>EC0005</h3>
            <p>Service Marketing (40 Hours)</p>
            <p class="price">Rs. 30,000/-</p>
        </div>
        <div class="grid-item">
            <h3>EC0006</h3>
            <p>E-Commerce (45 Hours)</p>
            <p class="price">Rs. 35,000/-</p>
        </div>
    </div>

    <script>
        function updateTime() {
            var now = new Date();
            document.getElementById("datetime").innerHTML = now.toDateString() + " " + now.toLocaleTimeString();
        }
        setInterval(updateTime, 1000);
    </script>
</center>
</body>
</html>
