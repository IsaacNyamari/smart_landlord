<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script>
        // Script to extract URL parameters and dynamically display selected package details
        function getPackageDetails() {
            const urlParams = new URLSearchParams(window.location.search);
            const packageName = urlParams.get('package');
            const packagePrices = {
                'basic': { name: 'Basic', price: '$10/month' },
                'standard': { name: 'Standard', price: '$20/month' },
                'premium': { name: 'Premium', price: '$30/month' },
                'gold': { name: 'Gold', price: '$50/month' }
            };
            
            // Display package details
            if (packagePrices[packageName]) {
                document.getElementById('packageName').textContent = packagePrices[packageName].name;
                document.getElementById('packagePrice').textContent = packagePrices[packageName].price;
            }
        }
    </script>
</head>
<body onload="getPackageDetails()">
    <div class="container my-5">
        <h1 class="text-center mb-5">Checkout</h1>

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3 id="packageName"></h3>
                    </div>
                    <div class="card-body text-center">
                        <p>Price: <strong id="packagePrice"></strong></p>
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="cardNumber" class="form-label">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="expiration" class="form-label">Expiration Date</label>
                                <input type="text" class="form-control" id="expiration" required>
                            </div>
                            <div class="mb-3">
                                <label for="cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cvv" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
