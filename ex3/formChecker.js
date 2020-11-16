  
function Check()
{
    var password=document.getElementById("password").value;
    var co=document.getElementById ("cost").value;
    if(password=="")
    {
        alert("Password can not be blank");
        return false;
    }
    if(co=="")
    {
        alert("Please choose one shipping option");
        return false;
    }
    var n1=document.getElementById ("num_k70").value;
    var n2=document.getElementById ("num_k95").value;
    var n3=document.getElementById ("num_k100").value;
    if(n1==""||n2==""||n3=="")
    {
        alert("Quantities can not be blank");
        return false;
    }
    else if (n1<0||n2<0||n3<0)
    {
        alert("Quantities can not be negative");
        return false;
    }

    return true;
}