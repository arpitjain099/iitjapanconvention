<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IIT Japan Convention 2017</title>
	<!-- Bootstrap min css -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all">
	<!-- bxSlider CSS file -->
	<link href="css/jquery.bxslider.css" rel="stylesheet" />
	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="css/owl.carousel.css">
    <!-- Full Calender stylesheet -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<!-- Typo css -->
	<link rel="stylesheet" href="css/typo.css" type="text/css" media="all">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
	<!-- Font Awesome css -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
	<!-- Ihover css -->
	<link href="css/ihover.css" rel="stylesheet">
    <!-- Widget css -->
	<link href="css/widget.css" rel="stylesheet">
    <!-- Style css -->
	<link rel="stylesheet" href="style.css" type="text/css" media="all">
	<!--RESPONSIVE MENU-->
    <link rel="stylesheet" href="css/jquery.sidr.dark.css" type="text/css" media="all">
    <!-- Responsive css -->
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="all">
	<!-- Color css -->
	<link rel="stylesheet" href="css/color.css" type="text/css" media="all">
	
</head>
<body>

<script>

examplejson={'name':'randomname',
'orders':[
{
	'name':'We have partnered with MTIJ',
	'orderid':'<b>PAN IIT Japan Convention now in association with MTIJ</b>',
	'remarks':'',
		'order':[
		{
			'item':'Announcing our partnership with MTIJ to organize PAN IIT Japan Convention 2017 at Makuhari Messe, Chiba on 1st Dec 2017.',
			'price':200,
		'quantity':2
		}
		],
	'total':1
}
]
};

console.log(examplejson.orders.length);
</script>
<div id="wrapper">
	<div id="mobile-header">
        <a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
    </div>
	<?php require('header.php'); ?>

	<div class="content">
		<!-- Kode-Header End -->
		<div class="sub-header">
			<!-- SUB HEADER -->
		</div>
		<!-- Kode-Slider End -->
		<!--Kode-our-speaker-strip start-->
		<div class="Kode-page-heading">
			<div class="container">
				<!--ROW START-->
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2>Notifications</h2>
					</div>
				</div>
				<!--ROW END-->
			</div>
		</div>
		<!--Kode-our-speaker-strip End-->
		<!--kode-Member-Fiest start-->
		<div class="kode-background-first">
			<div class="container">
				<!-- ROW START-->
				<div class="row">
					<div class="kode-conference-schedule">
			<div class="container">
				<span style="font-size:18px">
					Please click on each message to get more details.
				</span><br/><br/><br/>
				<div class="kf_heading_1">
                  <div class="inputs" id="orderlist"></div>
</div>

<div class="kf_heading_1">
                   
                   
</div>

    <br/>
    <div>       
    </div>

			</div>
		</div>
		
				</div>
			</div>
		</div>
		



	</div>
	<!---Content End-->
<style>
.form-group{
	margin-bottom:0;
}
</style>	

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" id="ordertotal"></h4>
        </div>
        <div class="modal-body" ><div id="bodycontentmodal"></div>
          <div class="modal-body">
<script>
function fa(stsda){
	
	ls="";
	//ls=ls.concat("Total: ").concat(stsda['total']).concat("<br><br>");
	ls=ls.concat('<table style="width:100%"> ');
	for(i=0;i<stsda.order.length;i++)
	{
		ls=ls.concat('<tr><td>').concat(stsda.order[i].item).concat('</td></tr>');
	}
	ls=ls.concat("</table>")
document.getElementById("bodycontentmodal").innerHTML=ls;
}
</script>
    
        </div>
        </button>

        
      </div>
      
    </div>
  </div>
  </div>


<script type="text/javascript">


function passforalertbox(stsda){
	document.getElementById("ordertotal").innerHTML="".concat(stsda.name);
fa(stsda);
	 $("#myModal").modal();
	console.log(stsda);
	ls="";
	ls=ls.concat("Name:").concat(stsda['name']).concat("\n");
	ls=ls.concat("Total:").concat(stsda['total']).concat("\n");
	for(i=0;i<stsda.order.length;i++)
	{
		ls=ls.concat(stsda.order[i].item).concat(" ").concat(stsda.order[i].quantity).concat(" ").concat(stsda.order[i].price).concat("\n");
	}
	//prompt('<table style="width:100%"> <tr> <td>Jill</td> <td>Smith</td> <td>50</td> </tr> <tr> <td>Eve</td> <td>Jackson</td> <td>94</td> </tr> <tr> <td>John</td> <td>Doe</td> <td>80</td> </tr> </table>',"new");
	//var person = prompt(ls, "Pin");
    
}

//document.getElementById("header").innerHTML=examplejson.name;

    	for(var i=0;i<examplejson.orders.length;i++){

    		sts="";
    		sts=sts.concat('<div  onclick=\'passforalertbox(');
    			sts=sts.concat(JSON.stringify(examplejson.orders[i]));
    			sts=sts.concat(')\') > <div >');
    		sts=sts.concat(examplejson.orders[i].orderid);
    		sts=sts.concat('</div>  <div >');
    		//sts=sts.concat('<div class="panel-body">');
    		sts=sts.concat(''.concat(examplejson.orders[i].name).concat('<br>'));

    		//sts=sts.concat(''.concat(examplejson.orders[i].remarks).concat("<hr><hr>"));
    		//sts=sts.concat('</div>');

    		sts=sts.concat('</div> </div><hr style="border-top: 1px solid black; margin-top:10px"><br/>');
    		console.log(sts);
    	$(sts).fadeIn('slow').appendTo('.inputs');
}

var sts="{";
    // device APIs are available
    //


</script>

<script src="billing.js"></script>
	<?php require('footer.php'); ?>
</div>


    <!--Jquery Lib-->
<script src="js/jquery.js"></script>
<!--Bootstrap Javascript File-->
<script src="js/bootstrap.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.js"></script>
<!-- OWL Javascript file -->
<script src="js/owl.carousel.min.js"></script>
<!--Image Filterable Gallery-->
<script src="js/jquery-filterable.js"></script>
<!--Number Count Script-->
<script src="js/waypoints-min.js"></script>
<!--Full Calender Script-->
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<!--Time Counter Script-->
<script src="js/jquery.downCount.js"></script>
<!--Internet Explore Script-->
<script src="js/ie.js"></script>
<!--GOOGLE MAP-->
<script src="http://maps.googleapis.com/maps/api/js"></script>
<!--RESPONSIVE MENU-->
<script src="js/jquery.sidr.min.js"></script>
<!--Custom Scripts-->
<script src="js/custom.js"></script>
<script>
$('document').ready(function(){
	document.getElementById("regist").style.display="none";
	document.getElementById("logincolright").style.display="none";
});
</script>
</body>
</html>