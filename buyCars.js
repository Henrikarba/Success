function move(elem, target) {
  var width = 0;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= target) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
    }
  }
}
function showBuy(oneCar){
    var funded = 
        [29000,                     7000,               1000,                   3000,                   13000,  0,      2000,   24000,  17000,  19000];
    var total = 
        [29000,                     38000,              31000,                  40000,                  34000,  29000,  40000,  38000,  30000,  39000];
    var picture =
        ['Black_Mercedes_S.png',    'Red_Tesla_S.jpeg', 'White_Tesla_3.jpeg',   'White_Tesla_X.png',    'White_Volvo_XC90.png', '', '', '', '', ''];
    var ids = ["bar0", "bar1", "bar2", "bar3", "bar4", "bar5", "bar6", "bar7", "bar8", "bar9"];
    var cars = ["progressCar0", "progressCar1", "progressCar2", "progressCar3", "progressCar4", "progressCar5", "progressCar6", "progressCar7", "progressCar8", "progressCar9"];
    var sums = ["sum0", "sum1", "sum2", "sum3", "sum4", "sum5", "sum6", "sum7", "sum8", "sum9"];
    
    
    for(var i=0; i<10; i++){
        funded[i] = Math.min(total[i], funded[i]+parseInt(document.getElementById(sums[i]).value));
        var curBar = document.getElementById(ids[i]);
        
        var perc = Math.round(funded[i]/total[i]*100);
        
        var target_bar = document.getElementById("progress_target");
        
        var bar_pixels = target_bar.offsetWidth * perc / 100;
        var curCar = document.getElementById(cars[i]);
        var screenWidth = window.innerWidth || document.body.clientWidth;
        //move(curBar, perc);
        curBar.style.width = bar_pixels;
        //var pixels = curBar.offsetWidth;
        console.log(curBar.offsetWidth);
        //console.log(curElem.width);
        curCar.style.paddingLeft = bar_pixels;
        
    }
    console.log("finish");
}
function myTest(){
    var ids = ["bar0", "bar1", "bar2", "bar3", "bar4", "bar5", "bar6", "bar7", "bar8", "bar9"];
    for(var i=0; i<10; i++){
        var curBar = document.getElementById(ids[i]);
        console.log(curBar.offsetWidth);
    }
    console.log("finish2");
}