<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Pesan Barang</title>
</head>
<body>
<div class="header" style="background-color: darkslategray; width: 100%;height: 50px; margin-bottom: 10px;">			
        <div class="menu" style="margin-bottom: 10px;">
                    <ul style="	padding: 0;margin: 0;overflow: hidden;">
                    <li style="	float: left;list-style-type: none;padding: 10px;">
                            <a href=""></a>
                    </li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><a href="#"><i class="	fa fa-arrow-left" style="font-size:24px"></i></a></li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><a href="#"><i class="	fa fa-arrow-right" style="font-size:24px"></i></a></li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><a href="#"><i class="	fa fa-close" style="font-size:24px"></i></a></li>
                    <li style="	float: left; list-style-type: none; padding: 10px;"><a href="#"><i class="fa fa-home" style="font-size:24px"></i></a></li>
            <form action=" formulir.html" method="get"  align ="center" style="margin-top: 10px;">
                <input type="text" name="Email" placeholder="https:/" size="120px">
                <button type="submit"  style="margin-top: -5px; background-color: rgb(13, 90, 79); color: white;">   <i class="fa fa-search" style="font-size:16px"></i></button>
            </form>
                    </ul>
        </div>
        
</div>
       
<div style ="margin:auto ; width: 50%;">
            <div class="menu" style="background-color: #fcf4d9;">
                        <ul style="	padding: 0;margin: 0;overflow: hidden;">
                            <li style="	float: left; list-style-type: none; padding: 10px;"><a href="#">Home </a></li>
                            <li style="	float: left; list-style-type: none; padding: 10px;"><a href="#">Generate Link </a></li>
                            <li style="	float: left; list-style-type: none; padding: 10px;"><a href="#">Transaction History </a></li>
                            <li style="	float: left; list-style-type: none; padding: 10px;"><a href="#">Policy </a></li>
                            <li style="	float: right; list-style-type: none; padding: 10px;"><a href="#">Logout</a></li>
                        </ul>
            </div>
</div>
    <div class="sidebar" style="   margin-top: 4%;float: left;	width: 25%;height: 60%;" >
            <div class="tablesummary" style="padding-left: 9px;text-align: center;">
                  <img src="laptop.jfif" alt="" width="200"><br>
                  <div style="margin-top: 20px; text-align: center;">
                  <input type="submit" value="Upload Picture">
                  </div>
            </div>
        </div>
        <div style="margin-top: 20px;">
        <form action="link.php" method="POST">
        <table border="0" cellspacing = "10">
            <tr>
                <td>
                    <label >Title Here</label>
                </td>
                <td>
                    <input type="text" name="Title" size="42">
                </td>
            </tr>
            <tr>
            <td>
                    <label >Description</label>
                </td>
                <td>
                    <textarea name="Descrip" id="" cols="40" rows="2"></textarea>
                </td>
            </tr>
            <tr>
            <td>
                    <label >Account Number</label>
                </td>
                <td>
                    <input type="text" name="AccNum" size="42">
                </td>
            </tr>
            <tr>
            <td>
                    <label >Bank</label>
                </td>
                <td>
                <select name="Bank" style="width: 318px;">  
                    <option value = "BCA"> BCA</option>  
                    <option value = "HSBC"> HSBC</option>  
                    <option value = "Mandiri"> Mandiri </option>  
                    <option value = "Bni"> BNI</option>  
                </select>
                </td>
            </tr>
            <tr>
            <td>
                    <label >Account Holder</label>
                </td>
                <td>
                <input type="text" name="AccHol" size="42">

                </td>
            </tr> 
            <tr>
            <td>
                    <label >Transaction</label>
                </td>
                <td>
                    <input type="number" name="Trans" style="width: 40px;">
                    <i>How many do you want for transaction</i>
                </td>
            </tr>
            <tr>
            <td>
                </td>
                <td>
                    <p><i> "if Transaction is for 3 person, choose 3 from the drop-down list</i></p>
                </td>
            </tr>
            <tr>
            <td></td>
                <td>
                    <div style="color: green;">
                          <input type="checkbox" id="Top1" name="MobOrEmail[]" value="Red Sauce">
                          <label for="Top1"><em> Send To Mobile Phone</em></label>
                            <br>
                          <input type="checkbox" id="Top2" name="MobOrEmail[]" value="White Sauce">
                          <label for="Top2"><em> Send To Email</em></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <label >Send To Mobile Phone</label>
                </td>
                <td>
                    <input type="text" name="MobPhone" size="42">
                </td>
            </tr>
            <tr>
                <td>
                    <label >Send To email</label>
                </td>
                <td>
                    <input type="email" name="mail" size="42">
                </td>
            </tr>
        </table>
        <div style="text-align: center;">
        <input type="submit" style="background-color: green; color: white;" value="Generate Nabr Link">

        </div>
    </form>
        
        </div>
        <div class="footer" style="    background-color: darkslategray;margin-top: 40px;padding: 20px 10px;">
            <div class="menufoot">
            <ul style="	padding: 0;margin: 0;overflow: hidden;">
                    <li style="	float: left;list-style-type: none;padding: 10px;">
                            <a href=""></a>
                    </li>
                    <li style="	float: left; list-style-type: none;padding: 10px;">BoleanMarket</li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><a href="">Categori 1</a> </li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><a href="">Categori 2</a> </li>
                    <li style="	float: left; list-style-type: none; padding: 10px;"><a href="">Categori 3</a> </li>
                    </ul>
                    <ul style="	padding: 0;margin: 0;overflow: hidden;">
                    <li style="	float: left;list-style-type: none;padding: 10px;">
                            <a href=""></a>
                    </li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><i class="fa fa-cc-visa" style="font-size:24px"></i></li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><i class="fa fa-cc-mastercard" style="font-size:24px"></i></li>
                    <li style="	float: left; list-style-type: none;padding: 10px;"><i class="fa fa-cc-amex" style="font-size:24px"></i></li>
                    </ul>
            </div>
		</div>
       
      
</body>
</html>