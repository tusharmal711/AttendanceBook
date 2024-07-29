let popup777 = document.getElementById("popup777");
document.onreadystatechange = function () {
if (document.readyState !== "complete") {

popup777.style.visibility='visible';
// show loading indicator and hide body
} else {
popup777.style.visibility='hidden';

// show body, and hide loading indicator
}
};