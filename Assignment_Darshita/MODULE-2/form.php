<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
         fieldset {
            width: 750px;
            margin-left: 25%;
            background-color:rgba(227, 247, 45, 0.754);
        } 
        textarea {
            width: 500px;
            border-radius: 5px;
            box-shadow: 1px 5px blue;
        }

        textarea:focus {
            background-color: rgb(183, 205, 206);
        }

        input[type=submit] {
            width: auto;
            line-height: 40px;
            font-weight: 80px;
            background-color: blue;
            color: white;
            font-size: 20px;
            border-color: white;
            border-radius: 50px;
            border: 1px solid;
        }

        input[type=submit]:hover {
            background-color: rgb(76, 81, 90);
            color: rgb(21, 202, 81);

        }

        input:focus {
            background-color: rgb(183, 205, 206);
        }

        .step1 input {
            border: none;
            width: 500px;
            line-height: 40px;
            border-radius: 7px;
            box-shadow: 1px 5px blue;
        }

        .step2 input {
            width: 500px;
            line-height: 40px;
            border-radius: 5px;
            box-shadow: 1px 5px blue;
        }

        .step3 input[type=radio] {
            width: 60px;
            line-height: 20%;
            background-color: blue;
            height: 25px;
        }

        .step3 input[type=number],
        [type=password] {
            width: 500px;
            line-height: 35px;
            box-shadow: 1px 5px blue ;
            border-radius: 7px;
        }

        table tr td {
            font-size: 20px;
            font-weight: 500;
        }
        .step3 input {
            border: none;
            width: 500px;
            line-height: 40px;
            border-radius: 7px;
            box-shadow: 1px 5px blue;
        }
</style>
</head>
<body>
    <form>
  <fieldset>
    <font color="blue">
            <h2><center><b><u>STEP 1: YOUR DETAILS</center></h2>
            <hr class="border border-lg border-red w-25 mx-auto">
    </font>
            <table class="step1" border="0px solid" cellpadding="5" cellspacing="0" align="center">
    
                <tr>
                    <td>Name:</td>
                    
                    <td><input type="text" name="name" placeholder="first and last name" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" placeholder="example@gmail.com" required></td>
                </tr>

                <tr>
                    <td>Phone:</td>
                    <td><input type="number" name="number" placeholder="Eg. +1234567890" required></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <form>
        <fieldset>
            
    <font color="blue">
            <h2><center>STEP 2: DELIVERY ADDRESS</center></h2>
            <hr class="border border-lg border-white w-25 mx-auto">
    </font>
            <table class="step2" border="0px solid" cellpadding="5" cellspacing="0" align="center">
                <tr>
                    <td>Address:
                    <td><textarea name="address" rows="5" cols="10"></textarea></td>
                </tr>

                <tr>
                    <td>Post code:</td>
                    <td><input type="code" name="code"required></td>
                </tr>

                <tr>
                    <td>country:</td>
                    <td><input type="text" name="phone"required></td>
                </tr>
                </table>
        </fieldset>
    </form>
 <form>
         <fieldset>
            
    <font color="blue">
            <h2><center>STEP 3: CARD DETAILS</center></h2>
            <hr class="border border-lg border-white w-25 mx-auto">
    </font>
            <table style="margin-left:40px;" class="step3" border="0px solid" cellpadding="5px" cellspacing="0" >
                <tr>
                    <td>Card Type:</td>
                    <td>
                     <input type="radio" name="cardtype">VISA
                    <input type="radio" name="cardtype">EMEX
                    <input type="radio" name="cardtype">MASTERCARD
            </td>
           </tr>
            <tr>
                <td>Card Number:</td>
                <td><input type="number" name="num" required></td>
            </tr>
            <tr>
                <td>Security Code:</td>
                <td><input type="password" name="security" required></td>
            </tr>
            <tr>
                <td>Name on card:
                <td><input type="text" name="nameofcard" placeholder="Exact name as on the card" required></td>
            </tr>
            <tr>
            <td id="content" colspan="2" align="center"><input type="submit" name="submit" value="BUY IT!"></td>
 
            </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>