function check()
{
if (document.getElementById("email").value ==""||!document.getElementById("email").value.includes("@")||!document.getElementById("email").value.endsWith(".com"))
{
    alert("Ivalid username: Username must be in the form of an email address!")
    return false;
}
if (document.getElementById("password").value=="")
{
alert("Invalid password.");
return false;
}
if(document.getElementById("auras").value==""||document.getElementById("book").value==""||document.getElementById("circle").value=="")
{
    alert("Invalid quantity: The quantity can't be blank.")
    return false;
}
if (document.getElementById("auras").value<0||document.getElementById("book").value<0||document.getElementById("circle").value<0)
{
    alert("Invalid quanitity: The quantity can't be negative.")
    return false;
}
if (isNaN(document.getElementById("auras").value)||isNaN(document.getElementById("book").value)||isNaN(document.getElementById("circle").value))
{
    alert("Invalid quantity: The quantity only can be a number.")
    return false;
}
if (document.getElementsByName("shipping")[0].checked==false&&document.getElementsByName("shipping")[1].checked==false&&document.getElementsByName("shipping")[2].checked==false)
{
    alert("Please choose one shipping method.")
    return false;
}


}