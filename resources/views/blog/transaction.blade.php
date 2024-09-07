<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS Transaction Page</title>
    <link rel="stylesheet" href="{{ asset('transaction.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>POS System</h1>
        </div>
    </header>

    <section class="pos">
        <div class="container">
            <div class="pos-container">
                <div class="product-list">
                    <h2>Available Products</h2>
                    <ul>
                        <li>
                            <span class="product-name">Product 1</span>
                            <span class="product-price">$10.00</span>
                            <button class="btn-add">Add</button>
                        </li>
                        <li>
                            <span class="product-name">Product 2</span>
                            <span class="product-price">$15.00</span>
                            <button class="btn-add">Add</button>
                        </li>
                        <li>
                            <span class="product-name">Product 3</span>
                            <span class="product-price">$20.00</span>
                            <button class="btn-add">Add</button>
                        </li>
                    </ul>
                </div>

                <div class="cart">
                    <h2>Shopping Cart</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Cart items will be dynamically added here -->
                            <tr>
                                <td>Product 1</td>
                                <td>$10.00</td>
                                <td>1</td>
                                <td>$10.00</td>
                                <td><button class="btn-remove">Remove</button></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="cart-summary">
                        <p>Subtotal: <span>$10.00</span></p>
                        <p>Tax (10%): <span>$1.00</span></p>
                        <p>Total: <span>$11.00</span></p>
                    </div>
                    <button class="btn-checkout">Checkout</button>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
