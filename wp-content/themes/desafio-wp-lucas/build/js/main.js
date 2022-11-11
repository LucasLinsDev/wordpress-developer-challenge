const menu = document.getElementsByClassName("menu");

console.log(menu);

menu[0].firstChild.addEventListener("mouseover", function () {
  menu[0].firstChild.children[1].style = "display:block";

  //console.log((menu[0].firstChild.children[1].style = "display:block"));
});

menu[0].addEventListener("mouseout", function () {
  console.log((menu[0].firstChild.children[1].style = "display:none"));
});
