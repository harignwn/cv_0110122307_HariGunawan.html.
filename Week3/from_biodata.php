<!DOCTYPE html>
<html>
<head>
    <title>Membuat Form Input Biodata PHP</title>

</head>
<body style="margin: 50px; padding: 4px;">
    <h3>
        Black Goose Bistro | Pizza-On-Demand
    </h3>
    <p>
        Our 1 2* wood-fries pizzas are available for delivery. Build your custom pizza and we'll deliver if within an hour
    </p>
        <form action="proses.php" method="POST">
        <h4 >Your Information</h4>

            <table border="0" style="margin-left: 80px;">
                <tr>
                    <td>
                        <div>
                            <label>Name :</label> <br>
                            <input name="nama" type="text">
                         </div>
                    </td>

                    <td>
                         <div>
                            <label>No Hp :</label> <br>
                            <input name="no_hp" type="text">
                         </div>
                    </td>
                    <td rowspan="4">
                       <img src="customer.jfif" alt="" width="200"> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>Jenis Kelamin :</label> <br>                
                        </div>
                    </td>
                    <td>
                            <input name="jenis_kelamin" value="Laki_laki" type="radio">Laki-laki
                            <input name="jenis_kelamin" value="Perempuan" type="radio">Perempuan
                    </td>
                  
                </tr>
                <tr>
                    <td>
                        <div>
                            <label>Email :</label> <br>
                            <input name="Email" type="email">
                        </div>
                    </td>
                    <td>
                        <div>
                            <label>Address :</label> <br>
                            <input name="alamat" type="text">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div>
                            <label>Delivery Instructions</label> <br>
                            <textarea name="inst"  cols="50" rows="5" maxlength="400">
                            </textarea>
                        </div>
                    </td>
                </tr>
            </table>
            <h4>Desain Your Dream Pizza</h4>
            <table border="0" cellspacing ="3" cellpadding="2" style="margin-left: 80px;">
                <tr>
                    <td colspan="2">
                        <p>Pizza Specs</p>
                    </td>
                    <td rowspan="8">
                       <img src="pizza.jfif" alt="" width="200"> 

                    </td>
                </tr>
                <tr>
                    <td rowspan="4">
                        <div>
                            <label>Crust (Choose One)</label> <br>                
                            </div>
                    </td>
                    <td>
                        <input name="Crus" value="White" type="radio">Classic White

                    </td>
                </tr>
                <tr>
                    <td>
                    <input name="Crus" value="ChesStuf" type="radio">Cheese-Stuffed crust
                    </td>
                </tr>
                <tr>
                    <td>
                    <input name="Crus" value="MultiGrain" type="radio">Multigrain

                    </td>
                </tr>
                <tr>
                    <td>
                    <input name="Crus" value="GiuFree" type="radio">Giuten-Free

                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        Topping (Choose as many as you want):
                    </td>
                </tr>
                    <tr>
                        <td>
                            <div>
                                    <input type="checkbox" id="Top1" name="Top[]" value="Red Sauce">
                                    <label for="Top1">Red Sauce</label>
                                <br>
                                    <input type="checkbox" id="Top2" name="Top[]" value="White Sauce">
                                    <label for="Top2">White Sauce</label>
                                <br>
                                    <input type="checkbox" id="Top3" name="Top[]" value="Mozzarella Cheese">
                                    <label for="Top3">Mozzarella Cheese</label>
                                <br>
                                    <input type="checkbox" id="Top4" name="Top[]" value="Paperoni">
                                    <label for="Top4">Paperoni</label>
                                <br>
                                
                            </div>
                        </td>
                    <td>
                    <input type="checkbox" id="Top5" name="Top[]" value="Mushrooms">
                                <label for="Top5">Mushrooms</label>
                            <br>
                                <input type="checkbox" id="Top6" name="Top[]" value="Peppers">
                                <label for="Top6">Peppers</label>
                            <br>
                                <input type="checkbox" id="Top7" name="Top[]" value="Anchovies">
                                <label for="Top7">Anchovies</label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div>
                            <h5>Number</h5>
                                <label>How many pizzas</label>
                                <input type="number" name="JumPiz"  style="width: 38px;" min="1">
                        </div>
                    </td>
                </tr>
            </table>
            <hr>
                <input type="submit" value="Bring Me Pizza">
                <input type="reset" value="Reset">
        </form>
    </body>
</html>
