
    
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
            background-color: #ff0000; /* Red */
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
        <div class="logo">
            <img src="auto-miraj-logo.png" alt="Auto Miraj Logo"> 
        </div>
        <nav>
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">BRANCHES</a></li>
                <li><a href="#">PACKAGES</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">CONTACT</a></li>
            </ul>
        </nav>
        <a href="#" class="cta-button">BOOK NOW ></a>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>#1 CAR SERVICE CHAIN IN SRI LANKA</h1>
            <p>Unmatched Excellence of 28 Years</p>
            <p>Island Wide 40 Centres in Sri Lanka</p>
            <p>Guaranteed 100% Satisfaction</p>
            <a href="#" class="learn-more">Learn more</a>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Auto Miraj. All rights reserved.</p>
    </footer>
