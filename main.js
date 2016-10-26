

$(function(){

var $orders = $('#orders');
var $orders1 = $('#orders1');
var $orders2 = $('#orders2');
var $orders3 = $('#orders3');
var $orders4 = $('#orders4');
var $orders5 = $('#orders5');
var $orders6 = $('#orders6');
var $orders7 = $('#orders7');
var $orders8 = $('#orders8');

$.ajax({

	type: 'GET',
	url: 'http://hackerearth.0x10.info/api/ctz_coders?type=json&query=list_submissions&page=2',
	success: function(orders){


		console.log(orders);
/*console.log(orders.paths[0]);
console.log(orders.quote_max);
console.log(orders.paths[0].id);
console.log(orders.paths[0].name);
console.log(orders.paths[0].image);
console.log(orders.paths[0].tags);
console.log(orders.paths[0].learner);
console.log(orders.paths[0].hours);
console.log(orders.paths[0].description);
console.log(orders.paths[0].sign_up);

$orders2.append('<li>' +  orders.paths[0].description + '</li>');
$orders1.append('<img  src="' +orders.paths[0].image+'">');
$orders3.append( ' ' +orders.paths[0].learner + "  " +"Learners" );
$orders4.append( ' ' +orders.paths[0].hours + " " +"Hours" );
$orders5.append('<h4>'+ '<bold>'+orders.paths[0].name+'</bold>'+'</h4>'  );
$orders6.append( orders.paths[0].tags   );
$orders7.append(  '<center><a href="'+orders.paths[0].sign_up+'"' + ' class="btn btn-info btn-lg" target="_blank"   role="button" >' + '<span class="glyphicon glyphicon-paperclip"></span>' +" View Curriculum"+'</a> </center'  );



for (var i=0; i<orders.paths.length; i++) {
 console.log(orders.paths[i].name);

 $orders.append('<center><h3><b><u> ' +  orders.paths[i].name + '</u></b></h3>' +  ' </br><img  src="' +orders.paths[i].image+'">'+'<p>'+ orders.paths[i].description+'</p>'  +' </center> <hr>');

}

     $orders8.append( orders.paths.length );  */
		

console.log(orders.quote_max);

console.log(orders.websites[0]);
console.log(orders.websites[0].title);

for (var i=0; i<2; i++) {

//$orders.append('<h4  class="pull-left">   <span class="label label-success"> '+ orders.websites[i].metadata.level+'</span> </h4>' +'<h3> <center>'+ '<b>'+orders.websites[i].title+'</b>'+'</center></h3>'  +'<h4  pull-left>   <span class="label label-primary"> '+'Rating: '  +orders.websites[i].metadata.rating+ '  |  '+ 'Attempted by: '+orders.websites[i].metadata.users_attempted+'</span> </h4>'  );

//$orders1.append( '<h4  class="pull-right">   <span class="label label-info"> '+ orders.websites[i].compiler_status+ ' | ' +orders.websites[i].language +'</span> </h4>' );

$orders2.append('<h4  class="pull-left">   <span class="label label-success"> '+ orders.websites[i].metadata.level+'</span> </h4>' +'<h3> <center>'+ '<b>'+orders.websites[i].title+'</b>'+'</center></h3>'  +'<h4  pull-left>   <span class="label label-primary"> '+'Rating: '  +orders.websites[i].metadata.rating+ '  |  '+ 'Attempted by: '+orders.websites[i].metadata.users_attempted+'</span> </h4>'  +'<h4  class="pull-right">   <span class="label label-info"> '+ orders.websites[i].compiler_status+ ' | ' +orders.websites[i].language +'</span> </h4>' +'<div class="straight"> <p> <code>'+ orders.websites[i].source_code+' </code></p> </div></br>' );


}




var h=0;
var m=0;
var e=0;
for (var i=0; i<orders.websites.length; i++) {
 //console.log(orders.websites[i]);

 localStorage.setItem("level", orders.websites[i].metadata.level);
if(localStorage.level=="Hard"){
	h++;
}

if(localStorage.level=="Medium"){
	m++;
}
if(localStorage.level=="Easy"){
	e++;
}

}

 $orders3.append( '<li >'+'Easy '+'<span class="badge">'+e+'</span></li> ' +'<li >'+'Medium '+'<span class="badge">'+m+'</span></li>'+'<li >'+'Hard '+'<span class="badge">'+h+'</span></li>' +'</p>');




			 
		}
	});
});


