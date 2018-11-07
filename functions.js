function img_sizer(image){
    var pageWidth = window.innerWidth || document.body.clientWidth;
    var factor = pageWidth / image.style.width;
    image.style.width = pageWidth;
    image.style.height = image.style.height * factor;
}

function map_cycler(){
    console.log("cycle");
    var map1 = document.getElementById('pilt');
    console.log(map1.src);
    console.log("https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_1.png");
    if(map1.src=="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_1.png"){
        map1.src="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_2.png";
    }
    else if(map1.src=="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_2.png"){
        map1.src="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_3.png";
    }
    else if(map1.src=="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_3.png"){
        map1.src="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_4.png";
    }
    else if(map1.src=="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_4.png"){
        map1.src="https://teamsuccess32768.000webhostapp.com/Laphack2018/Images/Map/Map_5.png";
    }
}

function start_sizer(){
    var img0 = document.getElementById('start_img0');
    img_sizer(img0);
    var img1 = document.getElementById('start_img1');
    img_sizer(img1);
    var img2 = document.getElementById('start_img2');
    img_sizer(img2);
    
    box = document.getElementById('transbox2');
    var pageWidth = window.innerWidth || document.body.clientWidth;
    var boxWidth = box.offsetWidth;
    box.style.left = pageWidth - boxWidth / 2;
    box.style.top = "100px";
}

function FAQ_resize(){
    var img1234 = document.getElementById('img1234');
    img_sizer(img1234);
    
    box = document.getElementById('transbox');
    var pageWidth = window.innerWidth || document.body.clientWidth;
    var boxWidth = box.offsetWidth;
    box.style.left = pageWidth - boxWidth / 2;
    box.style.top = "200px";
}

function team_resize(){
    var img12 = document.getElementById('img12');
    img_sizer(img12);
}

function map_resize(){
    var myMap = document.getElementById('pilt');
    var pageWidth = window.innerWidth || document.body.clientWidth;
    var factor = pageWidth / myMap.style.width;
    myMap.style.width = pageWidth;
    myMap.style.height = myMap.style.height * factor * 0.3;
}

function map_change(){
    var map1 = document.getElementById('pilt');
    
    map1.src = "Images/Map/Map_Route_2.png";
}
function map_change_to_2(){
    var map1 = document.getElementById('pilt');
    map1.src = "Images/Map/Map_Route_3.png";
}

function map_change_to_3(){
    var map1 = document.getElementById('pilt');
    map1.src = "Images/Map/Map_Route_4.png";
}

function map_change_to_4(){
    var map1 = document.getElementById('pilt');
    map1.src = "Images/Map/Map_Route_5.png";
}

function map_change_to_5(){
    var map1 = document.getElementById('pilt');
    map1.src = "Images/Map/Map_Route_1.png";
}

function homepage_resize(){
    var box = document.getElementById('transbox');
    var pageHeight = window.innerHeight || document.body.clientHeight;
    var factor = pageHeight / box.style.height;
    box.style.width = box.style.width * factor;
    box.style.height = pageHeight-200;
}

function homepage_resize2(){
    var img123 = document.getElementById('img123');
    img_sizer(img123);
}

function whyUs_resize(){
    var img3 = document.getElementById('img3');
    img_sizer(img3);
}

function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status === 0)
            {
                var allText = rawFile.responseText;
                alert(allText);
            }
        }
    }
    rawFile.send(null);
}

function addNewUser(){
    //readTextFile("users.csv");
    
    //PHP_FUNCTION.writeToFile('users.csv', "Hello, world");
    //writeTextFile("users.csv", "Hello, world");
    //write("Hello, world");
    alert("You have been registered");
    var newUsername = document.getElementById("username_register").value;
    var newPassword = document.getElementById("password_register").value;
}

function Forgot(){
    
}

function Login(showhide){
	if(showhide == "show"){
		document.getElementById('popupboxLogin').style.visibility="visible";
	}else if(showhide == "hide"){
		document.getElementById('popupboxLogin').style.visibility="hidden"; 
	}
}

function Register(showhide){
	if(showhide == "show"){
		document.getElementById('popupboxRegister').style.visibility="visible";
	}else if(showhide == "hide"){
		document.getElementById('popupboxRegister').style.visibility="hidden"; 
	}
}