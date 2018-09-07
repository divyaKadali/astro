
<html>
<head>
    <title>Astro</title>    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style type="text/css">
 		b{font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 13px;
    line-height: 1.42857143;
    margin-left:30px;
    float: left;
   margin-top:-16px;
    
    }
    .removeparentclick {
    cursor: pointer;
}
.parentclick {
    cursor: pointer;
}
    
        .fa-angle-down  { width: 20px; height: 20px; border-radius: 50%; text-align: center; line-height: 1.4;   vertical-align: middle; border: 1px solid #c6c6c6; font-size:15px; margin-right: 20px;}
        .fa-angle-right { width: 20px; height: 20px; border-radius: 50%; text-align: center; line-height: 1.4; vertical-align: middle; border: 1px solid #c6c6c6; font-size: 15px; background-color: #dcdcdc; margin-right: 20px;}
        .table-responsive table tr th {background-color: #e2e2e2;}
        .table {margin-bottom: 0px;}
        .table td[colspan="4"] {padding: 0px;}
        .table td[colspan="4"] table tr:first-child td {border-top: none;}
        .shani{color:#171cee;}
        .budha{color:#009933;}
        .kethu{color:#a6746d}
        .shukra{color:#ff60d1}
        .surya{color:#ff9872}
        .chandra{color:#0cc0d4}
        .mangala{color:#d1090f}
        .rahu{color: #a0279f}
        .guru{color: #f8925d}
        .rasitable ul {width: 100%; float: left; position: relative;}
        .rasitable ul.header {background: #e2e2e2;}
        .rasitable ul, .rasitable ul li { margin: 0px; padding: 0px; list-style: none;}
        .rasitable ul li {float: left;}
        .rasitable ul li {min-width: 25%; padding: 5px 0 5px 5px;}
        .rasitable .parent li {border-bottom: 1px solid #e2e2e2;}
        .rasitable .child1 li span {padding-left: 10px;}
        .rasitable .child2 li span {padding-left: 20px;}
        .rasitable .child3 li span {padding-left: 30px;}
        .rasitable .child4 li span {padding-left: 40px;}
        .rasitable .child5 li span {padding-left: 50px;}
        .rasitable .child6 li span {padding-left: 60px;}
        .extracls span{padding-left: 85px !important;}
        .rasitable ul li:nth-child(4) {text-align: center;}
        .rshcls{text-align: center;}
        @media screen and (max-width:768px) {
            body{font-size: 11px;}
            .rasitable ul li:nth-child(1), .rasitable ul li:nth-child(4) {min-width: 40%;}
            .rasitable .parent li:nth-child(1) {min-width: 40%;}
            .rasitable .parent li:nth-child(4) {min-width: 24.5%;}
            .rasitable .child1 li:nth-child(4) {min-width: 23.9%;}
            .rasitable .child2 li:nth-child(4) {min-width: 22.1%;}
            .rasitable .child3 li:nth-child(4) {min-width: 23.7%;}
            .rasitable .child4 li:nth-child(4) {min-width: 17.6%;}
            .rasitable .child5 li:nth-child(4) {min-width: 17%;}
            .rasitable .child6 li:nth-child(4) {min-width: 9.9%;}
            .fa-angle-down  { width: 20px; height: 20px; border-radius: 50%; text-align: center; line-height: 1.4;   vertical-align: middle; border: 1px solid #c6c6c6; font-size: 10px;}
        .fa-angle-right { width: 20px; height: 20px; border-radius: 50%; text-align: center; line-height: 1.4; vertical-align: middle; border: 1px solid #c6c6c6; font-size: 10px; background-color: #dcdcdc;}
        }
    </style>
</head>
    <body>
        <div class="container">
            <div class="row rasitable">
                <ul class="header">
                    <li class="rshcls">Planet</li>
                    <li>Start Period</li>
                    <li>End Period</li>
                    <li></li>
                </ul>
                <?php for($i=0; $i<count($finalAry); $i++){?>
                <?php 
                $class="budha";
                if($finalAry[$i]['planet'] == 'Mercury')
                {
                	$class="budha";
                }
                if($finalAry[$i]['planet'] == 'Ketu')
                {
                	$class="kethu";
                }
                if($finalAry[$i]['planet'] == 'Venus')
                {
                	$class="shukra";
                }
                if($finalAry[$i]['planet'] == 'Sun')
                {
                	$class="surya";
                }
                if($finalAry[$i]['planet'] == 'Moon')
                {
                	$class="chandra";
                }
                if($finalAry[$i]['planet'] == 'Mars')
                {
                	$class="mangala";
                }
                if($finalAry[$i]['planet'] == 'Rahu')
                {
                	$class="rahu";
                }
                if($finalAry[$i]['planet'] == 'Jupiter')
                {
                	$class="guru";
                }
                if($finalAry[$i]['planet'] == 'Saturn')
                {
                	$class="shani";
                }
                ?>
                <ul class="parent" id="newparent<?= $i+1 ?>">
                    <li class="<?= $class ?> ?>"><i class="fa fa-angle-right arrow parentclick" aria-hidden="true" parentprop="1" parentdays="<?= $finalAry[$i]['nofDays'] ?>" fromdate="<?= $finalAry[$i]['from_date'] ?>" newparent="<?= $i+1 ?>" id="clciknewparentid<?= $i+1 ?>" planetname="<?= $finalAry[$i]['planet']; ?>" ><b><?= $finalAry[$i]['planet'] ?></b></i></li>
                    <li><?= date('Y-m-d',strtotime($finalAry[$i]['from_date'])) ?></li>
                    <li><?= date('Y-m-d',strtotime($finalAry[$i]['end_date'])) ?></li>
                    
                    
                </ul>
                <?php } ?>
                
            </div>            
        </div>
    </body> 
    <?php $url = Yii::$app->urlManager->createUrl(['/site/dynamicdashas']);?>
    <script>

$(document.body).on('click', '.parentclick' ,function(e){
	//console.log($(this).closest('ul').attr('id'));
	var parentid = $(this).closest('ul').attr('id');		
	var clickid =  $(this).attr('id');
	
	var childno = $(this).attr('parentprop');	
	//console.log(parentid);
	var newchild = 1;
	var overallchild = childno+newchild;	
	var newparentid = $(this).attr('newparent');	
	var fromdate = $(this).attr('fromdate');
	
	var nodays = $(this).attr('parentdays');
	var useridnew = '<?php echo $userId;?>';
	var planetname = $(this).attr('planetname');
	//var newhtml = '<ul class="child1">  <li class="shani"><span>Shani</span></li>        <li>1996-09-14  14:27:31</li>        <li>1996-09-14  14:27:31</li>        <li><i class="fa fa-angle-right arrow parentclick" aria-hidden="true"></i></li>';
		//$(this).append(newhtml);
	//$("#newparent1 ").append(newhtml);
	//$(this).removeClass("fa-angle-right").addClass("fa-angle-down");
	
	if(childno <= 5){

	 $.ajax({
	        url: "<?php echo $url; ?>",
	        type: "get",
	        data: {fromdate:fromdate,nodays:nodays,childno:childno,parentid:parentid,useridnew:useridnew,planetname:planetname} ,
	        success: function (response) {
	        	$("#"+parentid).append(response);
	        	$("#"+clickid).removeClass("fa-angle-right").addClass("fa-angle-down");
	        	$("#"+clickid).removeClass("parentclick").addClass("removeparentclick");
	        	//$(this).removeClass("fa-angle-right");         

	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	           console.log(textStatus, errorThrown);
	        }

	    });
	}
});

$(document.body).on('click', '.removeparentclick' ,function(e){
	//console.log($(this).closest('ul').attr('id'));
	var parentid = $(this).closest('ul').attr('id');
	var clickid =  $(this).attr('id');
	var childno = $(this).attr('parentprop');
	//console.log(clickid);
	var newchild = 1;
	var overallchild = childno+newchild;
	var newparentid = $(this).attr('newparent');
	var fromdate = $(this).attr('fromdate');
	var nodays = $(this).attr('parentdays');

	$("#"+parentid).find('ul').remove();
	$("#"+clickid).removeClass("fa-angle-down").addClass("fa-angle-right");
	$("#"+clickid).removeClass("removeparentclick").addClass("parentclick");
		
});

    </script>   
</html>