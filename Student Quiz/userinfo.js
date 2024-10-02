let user_name = sessionStorage.getItem("name");
let user_points = sessionStorage.getItem("points");

document.querySelector("span.name").innerHTML = user_name;
document.querySelector("span.points").innerHTML = user_points;