<?php include "db.php"?>

<?php if (isset($_POST['submit'])) {
    $Street_Address = $_POST['Street_Address'];
    $Street_Address_2 = $_POST['Street_Address_2'];
    $City = $_POST['City'];
    $Region = $_POST['Region'];
    $Postal = $_POST['Postal'];
    $Country = $_POST['Country'];
    $Cake_Types = $_POST['Cake_Types'];
    $Phone = $_POST['Phone'];
    $Full_Name = $_POST['Full_Name'];


    $query = "INSERT INTO Cake(Street_Address, Street_Address_2, City, Region, Postal, Country, Cake_Types, Phone, Full_Name) VALUES('{$Street_Address}', '{$Street_Address_2}', '{$City}', '{$Region}', '{$Postal}', '{$Country}', '{$Cake_Types}', '{$Phone}', '{$Full_Name}')";

    $add_order = mysqli_query($conn, $query);

    if (!$add_order) {
        echo "Something went wrong" . mysqli_error($conn);
    } else {
        echo "<script type='text/javascript'>alert('Order added successfully!')</script>";
    }
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="" method="post">

    <div class="form-group">
            <label for="Full_Name" class="form-label" > Full Name: </label><br>
            <input type="text" name="Full_Name" required class="form-label"> 
        </div>

        <div class="form-group">
            <label for="Street_Address" class="form-label" >Street Address: </label><br>
            <input type="text" name="Street_Address" required class="form-label"> 
        </div>  

        <div class="form-group">
            <label for="Street_Address_2" class="form-label" >Street Address 2: </label><br>
            <input type="text" name="Street_Address_2"  class="form-label"> 
        </div>  

        <div class="form-group">
            <label for="City" class="form-label" >City: </label><br>
            <input type="text" name="City" required class="form-label"> 
        </div>  
        <div class="form-group">
            <label for="Refion" class="form-label" >Region: </label><br>
            <input type="text" name="Region" required class="form-label"> 
        </div>  
        <div class="form-group">
            <label for="Postal" class="form-label" >Postal/Zip Code: </label><br>
            <input type="number" name="Postal" required class="form-label"> 
        </div>  
        <div class="form-group">
            <label for="Country" class="form-label" > Country: </label><br>
            <select name="Country"required> 
                <option value="USA">USA</option>
                <option value="Mexico">Mexico</option>
                <option value="Canada">Canada</option>
</select>
        </div> 


        <div class="form-group">
            <label for="Cake_Types" class="form-label" > Best option for you: </label>
            <input type="radio" name="Cake_Types" value="Wild Berry Cake">Wild Berry Cake </br>
            <input type="radio" name="Cake_Types" value="Chocolate, Vanilla and Caramel Cake">Chocolate, Vanilla and Caramel Cake </br>
            <input type="radio" name="Cake_Types" value="Tiramisu">Tiramisu </br>
            <input type="radio" name="Cake_Types" value="Carrot and Pumpkin Cake">Carrot and Pumpkin Cake </br>
            <input type="radio" name="Cake_Types" value="Cheesecake with Raspberry">Cheesecake with Raspberry </br>
            <input type="radio" name="Cake_Types" value="Amandina Cake">Amandina Cake 
        </div>  

        <div class="form-group">
            <label for="Phone" class="form-label" >Phone number: </label><br>
            <input type="number" name="Phone" required class="form-label"> 
        </div>

        <input type="submit" name="submit" value="submit">


</body>
</html>