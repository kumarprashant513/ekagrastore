let cart = [];
let totalAmount = 0;

function addToCart(product, price) {
    cart.push({ product, price });
    totalAmount += price;
    updateCartSummary();
}

function updateCartSummary() {
    const cartItems = document.getElementById('cart-items');
    const totalAmountDisplay = document.getElementById('total-amount');

    cartItems.innerHTML = '';
    cart.forEach(item => {
        const div = document.createElement('div');
        div.textContent = `${item.product} - $${item.price}`;
        cartItems.appendChild(div);
    });

    totalAmountDisplay.textContent = `Total: $${totalAmount}`;
}

function checkout() {
    const paymentMethod = document.querySelector('input[name="payment-method"]:checked');
    if (!paymentMethod) {
        alert('Please select a payment method.');
        return;
    }

    alert(`You have selected ${paymentMethod.value}. Total amount to be paid: $${totalAmount}`);
    // Here you can add further logic to handle the checkout process.
}
