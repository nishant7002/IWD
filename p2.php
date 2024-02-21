<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input, .form-group select {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
        }
        .form-group button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>User Information Form</h1>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="result">
                Name: <?php echo htmlspecialchars($_POST['name']); ?><br>
                Email: <?php echo htmlspecialchars($_POST['email']); ?><br>
                Gender: <?php echo htmlspecialchars($_POST['gender']); ?><br>
                Age: <?php echo htmlspecialchars($_POST['age']); ?><br>
                Enrollment Number: <?php echo htmlspecialchars($_POST['enrollment']); ?><br>
                Phone Number: <?php echo htmlspecialchars($_POST['phone']); ?><br>
                Birth Date: <?php echo htmlspecialchars($_POST['birthdate']); ?><br>
            </div>
        <?php else: ?>
            <form method="post">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" min="1" required>
                </div>
                <div class="form-group">
                    <label for="enrollment">Enrollment Number:</label>
                    <input type="text" id="enrollment" name="enrollment" pattern="[0-9]{10}" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="birthdate">Birth Date:</label>
                    <input type="date" id="birthdate" name="birthdate" required>
                </div>
                <div class="form-group">
                    <button type="submit">Submit</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
