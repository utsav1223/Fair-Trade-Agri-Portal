
<!-- I created This -->

<?php
session_start();

if (!isset($_GET['order_id'])) {
    header("Location: index.php");
    exit();
}

$order_id = $_GET['order_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Successful</title>
    <link rel="stylesheet" href="../output.css">
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 shadow-lg rounded-lg text-center">
        <h1 class="text-3xl font-bold text-green-600">🎉 Order Placed Successfully!</h1>
        <p class="text-lg text-gray-700 mt-2">Your Order ID: <strong>#<?php echo htmlspecialchars($order_id); ?></strong></p>
        <p class="mt-4">Thank you for shopping with us! You will receive an update once your order is shipped.</p>
        <a href="index.php" class="mt-6 inline-block bg-blue-500 text-white px-6 py-3 rounded-lg">Back to Home</a>
    </div>
</body>
</html>
