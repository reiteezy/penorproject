<!DOCTYPE html>
<html>
<style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h1 {
    color: #333;
}

form {
    background-color: white;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

form input[type="text"],
form input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

form button {
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

form button:hover {
    background-color: #0056b3;
}

        </style>
    <head>
        <title>Codeigniter 4 CRUD</title>
</head>
<body>
    <div class="container">
    <p><h1>Codeigniter 4 CRUD Application.</h1></p>
    <div class="">
        <div class=""></div>
        <div class="">
            <form method="post" id="update_user" name="update_user" action="<?php echo site_url('/update') ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $user_obj['id']; ?>">
                <div class="">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="" value="<?php echo $user_obj['first_name']; ?>" required>
            </div>
                <div class="">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="" value="<?php echo $user_obj['last_name']; ?>" required>
            </div>
                <div class="">
                    <label>Contact Number</label>
                    <input type="text" name="contact_no" class="" value="<?php echo $user_obj['contact_no']; ?>" required>
            </div>
                <div class="">
                    <label>Date of Birth</label>
                    <input type="date" name="birthday" class="" value="<?php echo $user_obj['birthday']; ?>" required>
            </div>
                <div class="">
                    <label>Address</label>
                    <input type="text" name="address" class="" value="<?php echo $user_obj['address']; ?>" required>
            </div>
            <div class=""><br/>
                <button type="submit" class="" >Save</button>
            </div>
        </form>
        </div>
        <div class=""></div>
    </div>
    </div>
</body>
</html>

