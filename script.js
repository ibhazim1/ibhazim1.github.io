function chkOwnerName () {
    var owner = document.getElementById("fname").value;
    sessionStorage.owner = owner;
}  
function getBooking(){ 
    document.getElementById("dd").innerHTML = sessionStorage.owner; 
    document.getElementById("didi").innerHTML = sessionStorage.owner; 
} 
function init() {
    var regForm = document.getElementById("form");
    regForm.onsubmit = chkOwnerName;  
} 
function reject(){
    alert("Wrong answer. Think again. \nHint: The correct answer is in the green box.")
}
window.onload = init;