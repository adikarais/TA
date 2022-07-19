<html>
<head>
	<title></title>
	<style>
	body {
		margin: 10%;
		background-color: DarkSlateGray;
	}
	input {
		text-align: center;
		font-family: Arial;
		padding: 13px;
		background-color: Gainsboro;
	}
	.ftr {
		color: white;
	}
	</style>
</head>
<body>
	<center>
	<?php include("Home.html");  ?>
	<FORM NAME="RES">
    <table border="1">
        <tr>
            <th rowspan="4">
                <input  TYPE="text" NAME="Input" Size="20">
            </th>
        </tr>
    </table><table border="1">	
        <tr>
        	<td><input TYPE="button" NAME="one" VALUE=" 1 " OnClick="RES.Input.value += '1'"></td>
           	<td><input TYPE="button" NAME="two" VALUE=" 2 " OnCLick="RES.Input.value += '2'"></td>
           	<td><input TYPE="button" NAME="three" VALUE=" 3 " OnClick="RES.Input.value += '3'"></td>
           	<td><input TYPE="button" NAME="plus" VALUE=" + " OnClick="RES.Input.value += ' + '"></td>
        </tr>
        <tr>
        	<td><input TYPE="button" NAME="four" VALUE=" 4 " OnClick="RES.Input.value += '4'"></td>
            <td><input TYPE="button" NAME="five" VALUE=" 5 " OnCLick="RES.Input.value += '5'"></td>
            <td><input TYPE="button" NAME="six" VALUE=" 6 " OnClick="RES.Input.value += '6'"></td>
            <td><input TYPE="button" NAME="minus" VALUE=" - " OnClick="RES.Input.value+= ' - '"></td>
        </tr>
       	 <tr>
        	<td><input TYPE="button" NAME="seven" VALUE=" 7 " OnClick="RES.Input.value += '7'"></td>
            <td><input TYPE="button" NAME="eight" VALUE=" 8 " OnCLick="RES.Input.value += '8'"></td>
            <td><input TYPE="button" NAME="nine" VALUE=" 9 " OnClick="RES.Input.value += '9'"></td>
            <td><input TYPE="button" NAME="times" VALUE=" x " OnClick="RES.Input.value += ' * '"></td>
        </tr>
        <tr>
        	<td><input TYPE="button" NAME="clear" VALUE=" C " OnClick="RES.Input.value = ''"></td>
            <td><input TYPE="button" NAME="zero" VALUE=" 0 " OnClick="RES.Input.value += '0'"></td>
            <td><input TYPE="button" NAME="DoIt" VALUE=" = " OnClick="RES.Input.value = eval(RES.Input.value)"></td>
            <td><input TYPE="button" NAME="div" VALUE=" / " OnClick="RES.Input.value += ' / '"></td>
        </tr>
    </table>    
    <?php 
	include("ftr.html"); ?>
    </center>
</body>
