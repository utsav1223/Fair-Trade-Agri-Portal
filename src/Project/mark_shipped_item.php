
<!-- I created This -->
<?php
include 'config1.php'; // database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['order_item_id_farmer'])) {
    $order_item_id = $_POST['order_item_id_farmer'];

    // Query to update delivery status
    $update_query = "UPDATE order_items SET delivery_status = 'Shipped' WHERE id = $order_item_id";

    if (mysqli_query($conn, $update_query)) {
        // Redirect back to previous page
        header("Location: ".$_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "❌ Error updating order status: " . mysqli_error($conn);
    }
} else {
    echo "⚠️ Invalid request.";
}
?>
