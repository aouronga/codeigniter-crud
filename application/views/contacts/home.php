<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts Book</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
<h1>Contacts Book</h1>
<hr>
    <?php echo form_open(base_url().'store', array('id' => 'userform')); ?>
    <input type="hidden" name="id" value="">
    <label for="">First Name:</label>
    <input type="text" name="fname">
    <label for="">Last Name</label>
    <input type="text" name="lname">
    <label for="">Mobile: </label>
    <input type="text" name="mobile">
    <input type="submit" value="Submit">
<?php echo form_close(); ?>
<h1>Contact List</h1>
<?php if(!empty($flash_msg)): ?>
<p id="flash_msg"><?php echo $flash_msg; ?></p>
<?php endif; ?>
<?php if(!empty($values)){ ?>
<table border="1px solid black">
<thead>
<tr><th>First Name</th><th>Last Name</th><th>Mobile</th><th>Action</th></tr>
</thead>
    <tbody>
    <?php
    foreach ($values as $value){
        ?>
    <tr>
        <td class="fname"><?php echo $value->firstname; ?></td>
        <td class="lname"><?php echo $value->lastname; ?></td>
        <td class="mobile"><?php echo $value->mobile; ?></td>
        <td><a data-id="<?php echo $value->id; ?>" class="edit" href="#">Edit</a> <a href="<?php echo base_url()."delete/".$value->id; ?>">Delete</a> </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
<?php } else { ?>
<h5>No Data Posted!</h5>
<?php } ?>
<script src="js/scripts.js"></script>
</body>
</html>