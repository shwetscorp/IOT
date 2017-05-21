    var A= ["Soup", "Juice", "Tea","Others"];
    var B= ["Soup","Juice","Water", "Others"];
    var C= ["Soup","Juice","Coffee", "Tea","Others"];

var changeCat = function changeCat(firstList) {
    var newSel = document.getElementById("category");
    //if you want to remove this default option use newSel.innerHTML=""
    newSel.innerHTML="<option value=\"\">Select</option>"; // to reset the second list everytime
    var opt;

      //test according to the selected value
      switch (firstList.options[firstList.selectedIndex].value) {
          case "A":
              for (var i=0; len=A.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = A[i];
                    opt.text = A[i];
                    newSel.appendChild(opt);
              }
              break;
          case "B":
              for (var i=0; len=B.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = B[i];
                    opt.text = B[i];
                    newSel.appendChild(opt);
              }
              break;
          case "C":
              for (var i=0; len=C.length, i<len; i++) {
                    opt = document.createElement("option");
                    opt.value = C[i];
                    opt.text = C[i];
                    newSel.appendChild(opt);
              }
              break;
      }

}