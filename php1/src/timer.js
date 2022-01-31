function PierwszyJS()
{
  var data = new Date();

  var min = data.getMinutes();
  var sec = data.getSeconds();

  if(min < 10) min = "0"+min;
  if(sec < 10) sec = "0"+sec;

  document.getElementById("timer").innerHTML = 
  data.getFullYear()+"/"+data.getMonth()+"/"+data.getDay()+" "+data.getHours()
  +":"+min+":"+sec;

  setTimeout("PierwszyJS()", 1000);
}

function sprawdzanie()
{
  var x = document.getElementById("value5").value;
  var y = document.getElementById("value6").value;
  document.getElementById("resultt").innerHTML = "";

  if(x==y) document.getElementById("resultt").innerHTML = "Liczby nie mogą byc takie same.";
  else if(x > y)
    for(var i=x; i>=y; i--)
      document.getElementById("resultt").innerHTML += i + " ";
  else if(x<y)
    for(var i=y; i>=x; i--)
      document.getElementById("resultt").innerHTML += i + " "; 
  else
  document.getElementById("resultt").innerHTML = "Wpisz liczby";
}

var slider_id = 0;
var timer1;

function MySlider()
{
  slider_id++;
  if(slider_id>3) slider_id=1;
  
  document.getElementById("slider_bg").innerHTML = "<img src='/php1/src/images/img" + slider_id + ".jpg' width='750' height='350' style='border-radius: 7px;'/>";

  timer1 = setTimeout("MySlider()", 2500);
}

function changeSlider(id)
{
  if(id != slider_id)
  {
    clearTimeout(timer1);
    slider_id = id;
    document.getElementById("slider_bg").innerHTML = "<img src='/php1/src/images/img" + slider_id + ".jpg' width='750' height='350' style='border-radius: 7px;'/>";
    timer1 = setTimeout("MySlider()", 2500);
  }
}