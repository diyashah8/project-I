<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add an Address</title>
    <link rel="stylesheet" href="address.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #faeeee;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.address-container {
    background-color: #ffffff;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-align: center;
    width: 320px;
}

h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #222;
}

form {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-size: 15px;
}

.btn {
    background-color: #8faecf;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 8px;
    cursor: pointer;
    margin-top: 10px;
    font-size: 16px;
}

.btn:hover {
    background-color: #7d9fc0;
}

.return {
    display: block;
    margin-top: 15px;
    color: #666;
    text-decoration: none;
    font-size: 14px;
}

.return:hover {
    text-decoration: underline;
}

</style>
<body>
    <div class="address-container">
        <h2>Add an Address</h2>

        <form class="">
            <input type="text" placeholder="First name" required>
            <input type="text" placeholder="Last name" required>
            <input type="text" placeholder="Street address" required>
            <input type="text" placeholder="City" required>
            <input type="text" placeholder="Zip code" required>

            <button type="submit" class="btn">Add address</button>
        </form>
        <a href="cheakout.php" class="return">Return</a>
    </div>
</body>
</html>
