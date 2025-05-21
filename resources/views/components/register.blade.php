
    <div class="container">
        <h1>Register Your Vehicle Breakdown</h1>
        <form action="#" method="POST" class="registration-form">
            <h2>User Information</h2>
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <h2>Vehicle Information</h2>
            <label for="make">Vehicle Make:</label>
            <input type="text" id="make" name="make" required>

            <label for="model">Vehicle Model:</label>
            <input type="text" id="model" name="model" required>

            <label for="year">Year of Manufacture:</label>
            <input type="number" id="year" name="year" required>

            <label for="license">License Plate Number:</label>
            <input type="text" id="license" name="license" required>

            <h2>Breakdown Details</h2>
            <label for="location">Current Location:</label>
            <input type="text" id="location" name="location" required>

            <label for="description">Description of the Issue:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Register Breakdown</button>
        </form>
    </div>
