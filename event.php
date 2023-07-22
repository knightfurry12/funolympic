<!DOCTYPE html>
<html>
<head>
    <title>Event Form</title>
    <style>
        .form-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f2f2f2;
        }
        
        .form-container h2 {
            text-align: center;
        }
        
        .form-container label {
            display: block;
            margin-bottom: 10px;
        }
        
        .form-container input[type="text"],
        .form-container input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        .form-container input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Event Form</h2>
        <form action="manage.php" method="post">
            <label for="event_name">Event Name:</label>
            <input type="text" id="event_name" name="event_name" required>
            
            <label for="event_date">Event Date:</label>
            <input type="date" id="event_date" name="event_date" required>
            
            <label for="event_location">Event Location:</label>
            <input type="text" id="event_location" name="event_location" required>
            
            <input type="submit" value="Submit">
        </form>
    </div>
   
</body>
</html>
