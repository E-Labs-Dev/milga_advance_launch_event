

     
     var x = document.getElementById("myVideo");

     function showVideo() { 
        document.getElementById('layer1').style.display = "none";
        document.getElementById('layer2').style.display = "block";
        x.autoplay = true;
        x.load();
     } 
     

     // The data/time we want to countdown to
     var countDownDate = new Date("july 30, 2021 18:10").getTime();
 
     // Run myfunc every second
     var myfunc = setInterval(function() {
 
     var now = new Date().getTime();
     var timeleft = countDownDate - now;
         
     // Calculating the days, hours, minutes and seconds left
     var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
     var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
         
     // Result is output to the specific element
     document.getElementById("days").innerHTML = days + "<br>" + "Days "
     document.getElementById("hours").innerHTML = hours + "<br>" + "Hours " 
     document.getElementById("mins").innerHTML = minutes + "<br>" + "Minutes " 
         
     // Display the message when countdown is over
     if (timeleft < 0) {
         clearInterval(myfunc);
         document.getElementById("days").innerHTML = ""
         document.getElementById("hours").innerHTML = "" 
         document.getElementById("mins").innerHTML = ""
         document.getElementById("days").style.display = "none";
         document.getElementById("hours").style.display = "none";
         document.getElementById("mins").style.display = "none";
         document.getElementById("end").innerHTML = "TIME UP!!";
     }
     }, 1000);
 