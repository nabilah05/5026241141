<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Everyone - Pricing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #d8eedb; 
            color: #555;
        }

        .header-container {
            padding-top: 50px;
            padding-bottom: 30px;
        }

        .header-box {
            background-color: white;
            padding: 60px 40px;
            max-width: 1000px; 
            margin: 0 auto;
        }

        .price-card {
            border: none;
            border-radius: 0;
            background: white;
            min-height: 500px;
            margin-bottom: 30px;
        }

        .bg-free { background-color: #f1c40f ; }
        .bg-premium { background-color: #66c1a1; }
        .bg-premium-dark { background-color: #9cd4bc ; }
        .bg-family { background-color: #f39c12 ; }

        .card-header {
            color: white;
            border-bottom: none;
            font-weight: 600;
            letter-spacing: 2px;
            padding: 15px;
            border-radius: 0;
        }

        .popular-label {
            font-size: 11px;
            padding: 8px;
            letter-spacing: 2px;
        }

        .price-value {
            font-size: 70px;
            font-weight: 300;
            color: #999;
            margin: 20px 0;
        }

        .currency {
            font-size: 24px;
            vertical-align: top;
            position: relative;
            top: 15px;
        }

        .duration {
            font-size: 14px;
            color: #ccc;
            text-transform: uppercase;
        }

        .feature-list {
            list-style: none;
            padding: 0;
            margin: 30px 0;
        }

        .feature-list li {
            padding: 12px 0;
            border-bottom: 1px solid #f2f2f2;
            font-size: 14px;
        }

        .feature-list b {
            color: #444;
            font-weight: 600;
        }

        .btn-upgrade {
            border-radius: 4px;
            padding: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            border: none;
            color: white;
            width: 100%;
            pointer-events: none;
        }

        .btn-free { background-color: #eeeeee ; color: #aaaaaa ; }
        .btn-premium { background-color: #66c1a1 ; color: white ; }
        .btn-family { background-color: #f39c12 ; color: white ; }

        .btn-upgrade:hover { background-color: inherit; opacity: 1; }

        .premium-container {
            margin-top: -25px;
        }
    </style>
</head>
<body>

    <div class="header-container">
        <div class="container">
            <div class="header-box text-center shadow-sm">
                <h1 class="font-weight-bold mb-4">Music for Everyone.</h1>
                <p class="text-muted mx-auto" style="max-width: 650px; line-height: 1.6;">
                    Choose the plan that hits the right note for you. Enjoy millions of songs, exclusive podcasts, 
                    and high-fidelity audio without a single ad interruption. Upgrade or cancel anytime.
                </p>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row no-gutters align-items-center">
            
            <div class="col-md-4 px-2">
                <div class="card price-card text-center shadow-sm">
                    <div class="card-header bg-free">FREE</div>
                    <div class="card-body px-4">
                        <div class="price-value">
                            <span class="currency">$</span>0<span class="duration">/MO</span>
                        </div>
                        <ul class="feature-list">
                            <li><b>Standard</b> audio quality</li>
                            <li><b>Only</b> shuffle mode</li>
                            <li><b>With</b> advertisement</li>
                            <li><b>Only</b> listening online</li>
                            <li><b>Basic</b> skips</li>
                        </ul>
                        <button class="btn btn-upgrade btn-free mt-3">YOU NOW</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 px-2 premium-container">
                <div class="card price-card text-center shadow">
                    <div class="popular-label bg-premium-dark text-white font-weight-bold">POPULAR</div>
                    <div class="card-header bg-premium">PREMIUM</div>
                    <div class="card-body px-4">
                        <div class="price-value">
                            <span class="currency">$</span>10<span class="duration">/MO</span>
                        </div>
                        <ul class="feature-list">
                            <li><b>Lossless</b> audio quality</li>
                            <li><b>On-demand</b> playback</li>
                            <li><b>Zero</b> advertisement</li>
                            <li><b>Offline</b> downloads</li>
                            <li><b>Unlimited</b> skips</li>
                        </ul>
                        <button class="btn btn-upgrade btn-premium mt-3">UPGRADE</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 px-2">
                <div class="card price-card text-center shadow-sm">
                    <div class="card-header bg-family">FAMILY</div>
                    <div class="card-body px-4">
                        <div class="price-value">
                            <span class="currency">$</span>17<span class="duration">/MO</span>
                        </div>
                        <ul class="feature-list">
                            <li><b>6</b> independent profiles</li>
                            <li><b>Lossless</b> audio quality</li>
                            <li><b>On-demand</b> playback</li>
                            <li><b>Zero</b> advertisement</li>
                            <li><b>Offline</b> downloads</li>
                        </ul>
                        <button class="btn btn-upgrade btn-family mt-3">UPGRADE</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>