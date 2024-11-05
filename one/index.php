<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>???</title>
    <style>
        * {
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    background-color: #ffcad4; 
}

.form-container {
    width: 480px;
    padding: 30px;
    border-radius: 12px;
    background: linear-gradient(145deg, #ffffff, #f0e3e8);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
}

h2 {
    text-align: center;
    font-size: 2rem;
    color: #d03e5b; 
    margin-bottom: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    margin-bottom: 15px;
}

.form-row {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}

.form-row .form-group {
    flex: 1;
}

label {
    font-size: 1rem;
    color: #555; 
    font-weight: 600;
    margin-bottom: 5px;
}

input,
select {
    padding: 12px;
    font-size: 1rem;
    width: 100%;
    border: 1px solid #ddd; 
    border-radius: 8px;
    margin-top: 5px;
    background-color: #fff; 
    transition: border-color 0.3s, box-shadow 0.3s;
}

input:focus,
select:focus {
    outline: none;
    border-color: #d03e5b; 
    box-shadow: 0 0 5px rgba(208, 62, 91, 0.5); 
}

input::placeholder {
    color: #aaa; 
}

button {
    width: 100%;
    padding: 12px;
    font-size: 1.1rem;
    color: #fff;
    background-color: #6dcff6; 
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
    margin-top: 15px;
}

button:hover {
    background-color: #4fb1e0; 
    transform: translateY(-2px); 
}

    </style>
</head>
<body>
    <div class="form-container">
        <h2>😭</h2>


        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == '200') {
                echo '<p class="success-message">Registration successful!</p>';
            } elseif ($_GET['status'] == '404') {
                echo '<p class="error-message">Registration failed. Please try again.</p>';
            }
        }
        ?>


        <form action="register.php" method="post">
            <div class="form-row">
                <div class="form-group">
                    <label for="first-name">First Name</label>
                    <input type="text" id="first-name" name="first-name" placeholder="First Name" required>
                </div>
                <div class="form-group">
                    <label for="last-name">Last Name</label>
                    <input type="text" id="last-name" name="last-name" placeholder="Last Name" required>
                </div>
            </div>
            
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" placeholder="Email address" required>
            </div>
            
            <div class="form-group">
                <label for="address1">Address Line 1</label>
                <input type="text" id="address1" name="address1" placeholder="Address Line 1" required>
            </div>
            
            <div class="form-group">
                <label for="address2">Address Line 2</label>
                <input type="text" id="address2" name="address2" placeholder="Address Line 2">
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" id="city" name="city" placeholder="City" required>
                </div>
                
                <div class="form-group">
                    <label for="state">State</label>
                    <select id="state" name="state" required>
                        <option value="">Select State</option>
                        <option value="west_bengal">West Bengal</option>
                        <option value="jharkhand">Jharkhand</option>
                        <option value="ende">Ende</option>
                        <option value="vietnam">Vietnam</option>
                        <option value="lossantos">Los Santos</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="zip">Zip Code</label>
                    <input type="text" id="zip" name="zip" placeholder="Zip Code" required>
                </div>
            </div>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
