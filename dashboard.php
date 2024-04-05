<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Trebuchet MS, Helvetica, sans-serif;
            background-color: #fdf5e6;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dashboard-container {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .dashboard-heading {
            font-size: 42px;
            color: #836953;
            margin-bottom: 80px;
			margin-top:10px;
        }

        .dashboard-content {
            display: flex;    
            gap: 20px;
            justify-content: center;
            align-items: center;
        }

        .dashboard-item {
            padding: 20px;
            border-radius: 10px;
            background-color: #a67b5b;
            color: #fff;
            text-align: center;
            transition: transform 0.3s ease;	
        }

        .dashboard-item:hover {
            transform: scale(1.05);
        }

        .dashboard-item img {
            max-width: 100%;
            height: 50vh;
            border-radius: 35%;
            margin-bottom: 10px;
        }

        .dashboard-item h1 {
            font-size: 34px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <h1 class="dashboard-heading">Choose an Animal category to Adopt 🐾</h1>
        <div class="dashboard-content">
            <div class="dashboard-item">
                <img src="image1.jpg" alt="Image 1">
                <h1>Dog</h1>                
            </div>
            <div class="dashboard-item">
                <img src="image2.jpg" alt="Image 2">
                <h1>Cat</h1>               
            </div>
            <div class="dashboard-item">
                <img src="image3.jpg" alt="Image 3">
                <h1>Rabbit</h1>               
            </div>
        </div>
    </div>
</body>
</html>