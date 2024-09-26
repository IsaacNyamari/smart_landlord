<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packages</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            margin-bottom: 40px;
            color: #333;
        }
        .row {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .card {
            position: relative;
            width: 300px;
            height: 400px;
            perspective: 1000px;
            margin: 20px;
        }
        .card-inner {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .card:hover .card-inner {
            transform: rotateY(180deg);
        }
        .card-front, .card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            backface-visibility: hidden;
        }
        .card-front {
            background: white;
        }
        .card-back {
            background: #007bff;
            color: white;
            transform: rotateY(180deg);
            padding: 5px;
            text-align: center;
        }
        .card-header {
            padding: 20px;
            text-align: center;
        }
        .card-body {
            padding: 20px;
            text-align: center;
        }
        .card-price {
            font-size: 2rem;
            font-weight: bold;
            margin: 15px 0;
            color: #007bff;
        }
        .list-unstyled {
            list-style: none;
            padding: 0;
        }
        .list-unstyled li {
            margin: 10px 0;
            color: #666;
        }
        .btn {
            background-color: #a07aff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #aa56b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Our Packages</h1>
        <div class="row">
            <!-- Basic Package -->
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-header">
                            <h2>Basic</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-price">$10/month</div>
                            <ul class="list-unstyled">
                                <li>5GB Storage</li>
                                <li>Email Support</li>
                                <li>Access to Basic Features</li>
                            </ul>
                            <button class="btn" onclick="location.href='checkout.php?package=basic'">Choose Basic</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <h2>Basic Package Details</h2>
                        <p>Exclusive offers, monthly reports, and basic feature updates.</p>
                        <button class="btn" onclick="location.href='checkout.php?package=basic'">Select Basic</button>
                    </div>
                </div>
            </div>

            <!-- Standard Package -->
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-header">
                            <h2>Standard</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-price">$20/month</div>
                            <ul class="list-unstyled">
                                <li>50GB Storage</li>
                                <li>Priority Email Support</li>
                                <li>Access to Standard Features</li>
                            </ul>
                            <button class="btn" onclick="location.href='checkout.php?package=standard'">Choose Standard</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <h2>Standard Package Details</h2>
                        <p>Includes everything in Basic plus priority support and more features.</p>
                        <button class="btn" onclick="location.href='checkout.php?package=standard'">Select Standard</button>
                    </div>
                </div>
            </div>

            <!-- Premium Package -->
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-header">
                            <h2>Premium</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-price">$30/month</div>
                            <ul class="list-unstyled">
                                <li>100GB Storage</li>
                                <li>Phone & Email Support</li>
                                <li>Access to Premium Features</li>
                            </ul>
                            <button class="btn" onclick="location.href='checkout.php?package=premium'">Choose Premium</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <h2>Premium Package Details</h2>
                        <p>All features plus unlimited support and premium features.</p>
                        <button class="btn" onclick="location.href='checkout.php?package=premium'">Select Premium</button>
                    </div>
                </div>
            </div>

            <!-- Gold Package -->
            <div class="card">
                <div class="card-inner">
                    <div class="card-front">
                        <div class="card-header">
                            <h2>Gold</h2>
                        </div>
                        <div class="card-body">
                            <div class="card-price">$50/month</div>
                            <ul class="list-unstyled">
                                <li>Unlimited Storage</li>
                                <li>24/7 Phone Support</li>
                                <li>Access to All Features</li>
                            </ul>
                            <button class="btn" onclick="location.href='checkout.php?package=gold'">Choose Gold</button>
                        </div>
                    </div>
                    <div class="card-back">
                        <h2>Gold Package Details</h2>
                        <p>Everything you need with unlimited resources and premium service.</p>
                        <button class="btn" onclick="location.href='checkout.php?package=gold'">Select Gold</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
