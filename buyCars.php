<html>
<head>
    <link rel="stylesheet" type="text/css" href="design.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="buyCars.js"></script>
    <?php
        include'navbar.php';
    ?>
</head>
<body onload="javascript:showBuy();">
    <div class="bc">
    <table id="buyCarsList" width=100%>
        <tr>
            <th class="left2">
                <img id="progressCar0" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress" id="progress_target">
                    <div class="bar" id="bar0"></div>
                </div>
                <input type="number" id="sum0" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/White_Volvo_XC90.png">
                <div>
                    Price: 29000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar1" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar1"></div>
                </div>
                <input type="number" id="sum1" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/White_Tesla_X.png">
                <div>
                    Price: 38000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar2" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar2"></div>
                </div>
                <input type="number" id="sum2" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/White_Lexus_GS450h.png">
                <div>
                    Price: 31000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar3" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar3"></div>
                </div>
                <input type="number" id="sum3" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/White_BMW_750i.png">
                <div>
                    Price: 40000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar4" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar4"></div>
                </div>
                <input type="number" id="sum4" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/White_Audi_RS7.png">
                <div>
                    Price: 34000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar5" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar5"></div>
                </div>
                <input type="number" id="sum5" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/Red_Tesla_S.jpeg">
                <div>
                    Price: 29000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar6" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar6"></div>
                </div>
                <input type="number" id="sum6" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/Red_Tesla_S.jpeg">
                <div>
                    Price: 40000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar7" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar7"></div>
                </div>
                <input type="number" id="sum7" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/Gray_Lexus_GS450h.png">
                <div>
                    Price: 38000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar8" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar8"></div>
                </div>
                <input type="number" id="sum8" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/White_Tesla_3.jpeg">
                <div>
                    Price: 30000€
                </div>
            </th>
        </tr>
        <tr>
            <th class="left2">
                <img id="progressCar9" width="150px" height="50px" src="Images/CarsBuy/Progress_Car.png">
                <div class="progress">
                    <div class="bar" id="bar9"></div>
                </div>
                <input type="number" id="sum9" value=0 step=100 min=0>
            </th>
            <th class="right2">
                <img class="car_logo" src="Images/CarsBuy/Blue_Tesla_3.png">
                <div>
                    Price: 30000€
                </div>
            </th>
        </tr>
    </table>
    <br>
    <br>
    <button type="button" onclick="javascript:showBuy();">Invest</button>
    </div>
<style>
    .bc{background-color: #e6f2ff;}
</style>
    <?php include'footer.php'; ?>
</body>
</html>
