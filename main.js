var myicon = document.getElementById("myicon");
var mypopup = document.getElementById("mypopup");

myicon.addEventListener("mouseover", showPopup);
myicon.addEventListener("mouseout", hidePopup);

function showPopup(evt) {
  var iconPos = myicon.getBoundingClientRect();
  mypopup.style.left = (iconPos.right + 20) + "px";
  mypopup.style.top = (window.scrollY + iconPos.top - 60) + "px";
  mypopup.style.display = "block";
}

function hidePopup(evt) {
  mypopup.style.display = "none";
}
