var color = ['orange','pink','violet','aquablue','#fdf584','#f44336','#e91e63','#e91e63','#03a9f4','#00bcd4','#009688','#ffeb3b','#795548'];
const getColor = () => {return color[parseInt(Math.random()*color.length)]}

setInterval(changeBrandColor,1000);
setInterval(changeContentColor,4000);

// .content
function changeContentColor()
{ 
    let content = document.getElementsByClassName("content");
    for(let i = 0; i < content.length; i++)
        content[i].style.boxShadow = "0px 35px 70px " + getColor();
}

// .navbar-brand
function changeBrandColor()
{
    let brand = document.getElementsByClassName("navbar-brand");
    brand[0].style.color = getColor();
}

// register page
function changeAge()
{
    let childAge = document.getElementById("childAge");
    let dob = new Date(document.getElementById("childDOB").value);
    childAge.value = calculateAge(dob);
}

// userDetail page
function updateAge()
{
    let childAgeUP = document.getElementById("childAgeUP");
    let dob = new Date(document.getElementById("childDOBUP").value);
    childAgeUP.value = calculateAge(dob);
}

function calculateAge(dob)
{
    let currentDate = new Date();
    let age = currentDate.getFullYear() - dob.getFullYear();
    let month = currentDate.getMonth() - dob.getMonth();
    if(month < 0 || (month === 0 && currentDate.getDate() < dob.getDate()))
        age--;
    return age;
}

// userDetail page - enable form controls
function enableUserUpdate()
{
    var parentNameUP = document.getElementById("parentNameUP");
    var childNameUP = document.getElementById("childNameUP");
    var childDOBUP = document.getElementById("childDOBUP");
    var childAgeUP = document.getElementById("childAgeUP");
    var parentEmailUP = document.getElementById("parentEmailUP");
    var parentAddressUP = document.getElementById("parentAddressUP");
    var parentContactUP = document.getElementById("parentContactUP");
    var passwordUP = document.getElementById("passwordUP");
    var commentUP = document.getElementById("commentUP");
    var memberUpdate = document.getElementById("memberUpdate");
    var btnUserUpdate = document.getElementById("btnUserUpdate");

    parentNameUP.readOnly = childNameUP.readOnly = childDOBUP.readOnly = childAgeUP.readOnly = parentEmailUP.readOnly = parentAddressUP.readOnly = parentContactUP.readOnly = passwordUP.readOnly = commentUP.readOnly = memberUpdate.disabled = false;

    // change btnUserUpdate
    btnUserUpdate.className = "btn btn-danger";
    btnUserUpdate.onclick = disableUserUpdate;
    btnUserUpdate.innerHTML = "Forbid update";
}
// userDetail page - disable form controls
function disableUserUpdate()
{
    parentNameUP.readOnly = childNameUP.readOnly = childDOBUP.readOnly = childAgeUP.readOnly = parentEmailUP.readOnly = parentAddressUP.readOnly = parentContactUP.readOnly = passwordUP.readOnly = commentUP.readOnly = memberUpdate.disabled = true;

    // change btnUserUpdate
    btnUserUpdate.className = "btn btn-warning";
    btnUserUpdate.onclick = enableUserUpdate;
    btnUserUpdate.innerHTML = "Allow update";
}

// set cookie
function cookieAgree()
{
    cookieSection = document.getElementById("cookie-section");
    cookieSection.parentNode.removeChild(cookieSection);
    setCookie("lcdc","testCookie",1);
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}