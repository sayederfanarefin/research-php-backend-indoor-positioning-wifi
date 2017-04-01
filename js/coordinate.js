
function point_it(event){
	pos_x = event.offsetX?(event.offsetX):event.pageX-document.getElementById("pointer_div").offsetLeft;
	pos_y = event.offsetY?(event.offsetY):event.pageY-document.getElementById("pointer_div").offsetTop;
	name2 = document.getElementById("name").value;
macy = document.getElementById("mac").value;
idd = document.getElementById("map_id").value;

	//alert (pos_x+" , " +pos_y);
	/*document.getElementById("cross").style.left = (pos_x-1) ;
	document.getElementById("cross").style.top = (pos_y-15) ;
	document.getElementById("cross").style.visibility = "visible" ;
	document.pointform.form_x.value = pos_x;
	document.pointform.form_y.value = pos_y;
	*/

$.post("add_coordinates.php",
    {

        name1: name2,
        mac1: macy,
        x: pos_x,
        y: pos_y,
        id: idd
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });


/*
	$.ajax({
      type: "POST",
      url: "add_coordinates.php",
      data: form_data,
      dataType: "text",
      success: function(resultData) { 
      	alert (resultData);
      }});
*/

}

