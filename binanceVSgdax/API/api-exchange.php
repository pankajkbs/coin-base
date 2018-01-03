<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
	 
    <title>Gdax Exchange Markets</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
		  $('#display td').empty();
          $.ajax({
            type:"post",
            dataType:"json",
            url:"api-data.php",
            data : {},
            success:function(data){
				console.log(data);
				 $('<td id="ghgh">'+data.value1+'</td>').appendTo('#display');
				 $('<td>'+data.value2+'</td>').appendTo('#display');
				 $('<td>'+data.value3+'</td>').appendTo('#display');
				save_data(data);	
            }
          });
    
        var callAjax =function(){
		  $('#display td').remove();
          $.ajax({
            type:"post",
            dataType:"json",
            url:"api-data.php",
            data : {},
            success:function(data){
			//console.log(data);
				 $('<td id="ghgh">'+data.value1+'</td>').appendTo('#display');
				 $('<td>'+data.value2+'</td>').appendTo('#display');
				 $('<td>'+data.value3+'</td>').appendTo('#display');
				save_data(data);
					
            }
          });
       }
       setInterval(callAjax,30000);
       
     function save_data(key_data){

		$.ajax({
           type:"post",
           url:"insert.php",
           data :key_data,
           success:function(data){
			  // console.log(data);
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
     
      <th>Price of LTC/BTC (GDAX)</th>
       <th>Price of LTC/BTC (BINANCE)</th>
       <th>% Difference</th>
    
 
    </thead>
    <tbody></tbody>
</table>

  </body>
</html>
