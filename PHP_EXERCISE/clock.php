<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Clock</title>
    
    <style>
      
        body {
            background-color: #000;
            width: 80%;
            margin-left: 180px;
        }
       
        .clock_cus td {
            text-align: center;
            color: #e01b21;
        }
       
       
       
        
       
        
       
        
    </style>
</head>
<body>
    <div >
        <table class="clock_cus" width="100%" style=" background: #000;
            color: #fff;
            padding: 20px;
            border: 3px solid #5a6163;
            border-radius: 30px;">
            <tr class="date">
                <th colspan="2">DATE</th>
                <th colspan="4">MONTH</th>
                <th colspan="3">YEAR</th>
            </tr>
            <tr class="date_div" style="font-size: 150px;">
                <td colspan="2"><?php echo date("d"); ?></td>
                <td colspan="4"><?php echo date("m"); ?></td>
                <td colspan="3"><?php echo date("y"); ?></td>
            </tr>
            <tr class="clock_time" style="color: #aabdc1;
            font-size: 50px;">
                <th colspan="2">HOUR</th>
                <th colspan="4">MINUTE</th>
                <th colspan="3">SECOND</th>
            </tr>
            <tr class="time_div" style="font-size: 150px;">
                <td colspan="2" >1</td>
                <td colspan="1">:</td>
                <td colspan="2" >20</td>
                <td colspan="1">:</td>
                <td colspan="2" >21</td>
              
                
            </tr>
            <tr >
                <td><input type="radio" > <label for="sun">SUN</label></td>
                <td><input type="radio" > <label for="mon">MON</label></td>
                <td><input type="radio" > <label for="tue">TUE</label></td>
                <td><input type="radio" > <label for="wed">WED</label></td>
                <td><input type="radio" > <label for="thu">THU</label></td>
                <td><input type="radio" > <label for="fri">FRI</label></td>
                <td><input type="radio" > <label for="sat">SAT</label></td> 
            </tr>
        </table>
       
    </div>


   
</body>
</html>