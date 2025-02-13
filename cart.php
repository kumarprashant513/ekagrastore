<?php
session_start();

// Function to get cart data from cart.json
function getCartData() {
    if (file_exists('cart.json')) {
        $json = file_get_contents('cart.json');
        return json_decode($json, true) ?: [];
    }
    return [];
}

// Function to save cart data to cart.json
function saveCartData($cart) {
    file_put_contents('cart.json', json_encode($cart, JSON_PRETTY_PRINT));
}

// Handling add to cart
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $cart = getCartData();
    $id = htmlspecialchars($_POST['id']);
    $name = htmlspecialchars($_POST['name']);
    $price = floatval($_POST['price']);
    $quantity = intval($_POST['quantity']);
    $image = htmlspecialchars($_POST['image']);

    if ($_POST['action'] == 'add') {
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'image' => $image
            ];
        }
    } elseif ($_POST['action'] == 'remove') {
        unset($cart[$id]);
    } elseif ($_POST['action'] == 'clear') {
        $cart = [];
    }
    
    saveCartData($cart);
    echo json_encode(['status' => 'success']);
    exit;
}

$cart = getCartData();
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; }
        table { width: 80%; margin: auto; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; }
        th { background-color: #f4f4f4; }
        img { width: 50px; }
        .cart-buttons { margin-top: 20px; }
        .btn { padding: 10px 20px; cursor: pointer; border: none; }
        .btn-remove { background-color: red; color: white; }
        .btn-clear { background-color: orange; color: white; }
    </style>
</head>
<body>
    <h2>Shopping Cart</h2>
    <table>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Subtotal</th>
            <th>Action</th>
        </tr>
        <?php if (!empty($cart)) : ?>
            <?php foreach ($cart as $id => $item) : ?>
                <tr>
                    <td><img src="<?php echo $item['image']; ?>" alt="<?php echo $item['name']; ?>"></td>
                    <td><?php echo $item['name']; ?></td>
                    <td>₹<?php echo number_format($item['price'], 2); ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td>₹<?php echo number_format($item['price'] * $item['quantity'], 2); ?></td>
                    <td><button class="btn btn-remove" onclick="removeFromCart('<?php echo $id; ?>')">Remove</button></td>
                </tr>
                <?php $total += $item['price'] * $item['quantity']; ?>
            <?php endforeach; ?>
        <?php else : ?>
            <tr><td colspan="6">Your cart is empty</td></tr>
        <?php endif; ?>
    </table>
    <h3>Total: ₹<?php echo number_format($total, 2); ?></h3>
    <div class="cart-buttons">
        <button class="btn btn-clear" onclick="clearCart()">Clear Cart</button>
    </div>

    <script>
        async function removeFromCart(id) {
            await fetch('cart.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `action=remove&id=${id}`
            });
            location.reload();
        }
        
        async function clearCart() {
            await fetch('cart.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'action=clear'
            });
            location.reload();
        }
    </script>
</body>
</html>
