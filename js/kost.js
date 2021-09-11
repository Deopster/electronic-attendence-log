
function block(m) {
    if (m != 1) 
        (document.getElementById("AOSMD").style.display = "none");
    if (m != 2) 
        (document.getElementById("Matan").style.display = "none");
    if (m != 3) 
        (document.getElementById("Konf").style.display = "none");
    if (m != 4) 
        (document.getElementById("CalcMat").style.display = "none");
    if (m != 5) 
        (document.getElementById("filosof").style.display = "none");
    if (m != 6) 
        (document.getElementById("ACM&S").style.display = "none");
    if (m != 7) 
        (document.getElementById("SIAOD").style.display = "none");
    if (m != 8) 
        (document.getElementById("Eng").style.display = "none");
    if (m != 9) 
        (document.getElementById("Java").style.display = "none");
}
function change(x) {
if (x == 1) 
    (document.getElementById("AOSMD").style.display = "inline-block"); 
if (x == 2) 
    (document.getElementById("Matan").style.display = "inline-block");
if (x == 3) 
    (document.getElementById("Konf").style.display = "inline-block");
if (x == 4) 
    (document.getElementById("CalcMat").style.display = "inline-block");
if (x == 5) 
    (document.getElementById("filosof").style.display = "inline-block");
if (x == 6) 
    (document.getElementById("ACM&S").style.display = "inline-block");
if (x == 7) 
    (document.getElementById("SIAOD").style.display = "inline-block");
if (x == 8) 
    (document.getElementById("Eng").style.display = "inline-block");
if (x == 9) 
    (document.getElementById("Java").style.display = "inline-block");
block(x);
}
