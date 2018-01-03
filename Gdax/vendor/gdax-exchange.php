<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
	 
    <title>Gdax Exchange Markets</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
   //  var callAjax =function(){
		  $('#display td').empty();
          $.ajax({
            type:"post",
            dataType:"json",
            url:"getRecord.php",
            data : {},
            success:function(data){
				for(var i=0;i<data.length; i++){
				console.log(data[i].value);
				 $('<td id="ghgh">'+data[i].value+'</td>').appendTo('#display');
				 save_data(data[i]);
				}
				
		
		
            }
          });
    
        var callAjax =function(){
		  $('#display td').remove();
          $.ajax({
            type:"post",
            dataType:"json",
            url:"getRecord.php",
            data : {},
            success:function(data){
			//console.log(data);
	for(var i=0;i<data.length; i++){
				//console.log(data[i].value);
				 $('<td id="ghgh">'+data[i].value+'</td>').appendTo('#display');
				save_data(data[i]);
				}
				
            }
          });
       }
       setInterval(callAjax,30000);
       
     function save_data(key_data){

		$.ajax({
           type:"post",
           url:"insert.php",
           data : key_data,
           success:function(data){
				console.log(data);
			}
			});

	
	}
});
    </script>
    <style>
    
      table th{text-align:left; padding:10px;}
       table td{padding:10px;}
      
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
	 <table id="display" border="1" cellspacing="0" width="100%">
    <thead>
     
      <th>Price of ETH/BTC</th>
       <th>Price of LTC/BTC</th>
       <th>Price of BTC/USD</th>
    
 
    </thead>
    <tbody></tbody>
</table>

  </body>
</html>
