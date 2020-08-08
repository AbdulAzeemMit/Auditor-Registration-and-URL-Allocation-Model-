function edit()
{
   $('#confirm_delete').removeClass('btn btn-danger');

    document.getElementById("d1").hidden = true;
    document.getElementById("d2").hidden = true;
    document.getElementById("d3").hidden = true;
    document.getElementById("d4").hidden = true;
    document.getElementById("d6").hidden = true;
    document.getElementById("delete").hidden = true;

    document.getElementById("save").hidden = false;
    document.getElementById("savetd").hidden = false;

    document.getElementById("text1").hidden = false;
    document.getElementById("text2").hidden = false;
    document.getElementById("text3").hidden = false;
    document.getElementById("text4").hidden = false;
    document.getElementById("text6").hidden = false;
}


function save()
{
  document.getElementById("save").hidden = true;
}


function del()
{   
  $('#save').removeClass('btn btn-success');

  document.getElementById("delete").hidden = true;
  document.getElementById("savetd").hidden = false;
  document.getElementById("confirm_delete").hidden = false;


}
//edit//	
	function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}