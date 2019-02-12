    @extends('layouts.nav')

@section('content')
<div class="uk-container  uk-container-xsmall">

        <table id="myTable" class="uk-text-center uk-table uk-table-hover uk-table-divider uk-table-responsive">
    <thead>
        <tr>
            <th class="uk-text-center" onclick="sortTable(0)">No</th>
            <th class="uk-text-center"onclick="sortTable(1)">Waktu</th>
            <th class="uk-text-center"onclick="sortTable(2)">Tanggal</th>
            <th class="uk-text-center">Action</th>
        </tr>
    </thead>
            @foreach($magrib as $key=>$sub)
    <tbody>
        <tr>
            <td>{{$magrib->firstItem() + $key}}</td>
            <td>{{$sub->sholat}}</td>
            <td>{{date('d-M-Y', strtotime($sub->tanggal_tinggal))}}</td>
             <td><a class="uk-button uk-button-primary" href="/qadhasolat/{{$sub->id}}">Qadha</a></td>
</tr>
    @endforeach
</tbody>
</table>
<ul class="uk-pagination uk-flex-center" uk-margin>
    {!!$magrib->links()!!}
</ul>
</div>
<script>
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
</script>
@endsection