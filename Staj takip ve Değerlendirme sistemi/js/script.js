function arama() {
  var e, t, n, a, l;
  for (e = document.getElementById("kutu").value.toUpperCase(), t = document.getElementById("ara").getElementsByTagName("tr"), l = 1; l < t.length; l++) {
    t[l].style.display = "none", n = t[l].getElementsByTagName("td");
    for (var m = 0; m < n.length; m++)
      if ((a = t[l].getElementsByTagName("td")[m]) && a.innerHTML.toUpperCase().indexOf(e) > -1) {
        t[l].style.display = "";
        break
      }
  }
}