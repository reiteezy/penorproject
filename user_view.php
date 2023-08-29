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

a {
    display: inline-block;
    margin-right: 10px;
    text-decoration: none;
    color: #007bff;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: white;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

a.edit-link {
    color: green;
}

a.delete-link {
    color: red;
}

    </style>
    <head>
        <title>Codeigniter 4 CRUD</title>
</head>
<body>
    <div class="container">
    <p><h1>Codeigniter 4 CRUD Application.</h1></p>
<div class="">
    <a href="<?php echo site_url('/user-form')?>" class="">Add User</a>
</div>
<table class="" id="users-list" border="1">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Date of Birth</th>
            <th>Address</th>
            <th>Action</th>
</tr>
</thead>
    <tbody>
        <?php if($users): ?>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?php echo $user['first_name']; ?></td>
            <td><?php echo $user['last_name']; ?></td>
            <td><?php echo $user['contact_no']; ?></td>
            <td><?php echo $user['birthday']; ?></td>
            <td><?php echo $user['address']; ?></td>
        <td>
        <a href="<?php echo base_url('edit-view/'.$user['id']);?>" class="edit-link">Edit</a>
        <a href="<?php echo base_url('delete/'.$user['id']);?>" class="delete-link">Delete</a>
</td>
</tr>
        <?php endforeach; ?>
        <?php endif; ?>


    </table>
</div>
</body>
</html>