
    <style>
        /* Basic Styling (You'll need a proper CSS file for a polished look) */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #f0f0f0; /* Light gray background */
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul {
            list-style: none;
            display: flex;
        }
        nav ul li {
            margin-left: 20px;
        }
        .cta-button {
            background-color: #007bff; /* Blue */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .hero {
            background-image: url('your-hero-image.jpg'); /* Replace with the actual image */
            background-size: cover;
            background-position: center;
            height: 500px; /* Adjust as needed */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: white;
            text-align: center;
        }
        .hero-content {
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background for text */
            padding: 20px;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="holiday-notice">
            <p>WE WILL BE CLOSED ON SATURDAY, JULY 3RD IN OBSERVANCE OF INDEPENDENCE DAY.</p>
        </div>
        <div class="hiring-banner">
            <p>We're Growing...Now Hiring</p>
            <a href="#" class="cta-button">Apply Now</a>
        </div>
        <div class="main-header">
            <div class="logo">
                <img src="honest1-logo.png" alt="Honest-1 Auto Care Logo"> 
            </div>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Vehicles</a></li>
                    <li><a href="#">Coupons</a></li>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Reviews</a></li>
                </ul>
            </nav>
            <div class="hours">
                <p>UPDATED HOURS:</p>
                <p>MON - FRI: 7:00 AM - 6:00 PM</p>
                <p>SAT: 8:00 AM - 5:00 PM</p>
            </div>
        </div>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Honest-1 Auto Care Uptown</h1>
            <p>FULL SERVICE AUTO REPAIR</p>
            <p>The Most Important Part is You!</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Honest-1 Auto Care. All rights reserved.</p>
    </footer>
