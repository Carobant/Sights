function getRecords(){
  $.get( "/test", function( data ) {
  console.log(data);

  for(i = 0; i < data.length; i++){
    
    console.log(data[i]);
   
    $("ol").append("<li>"+data[i]+"</li>");
  }
  }, "json" );
}

$(document).ready(function() {
	getRecords();
}