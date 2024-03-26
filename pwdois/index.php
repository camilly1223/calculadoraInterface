<!DOCTYPE html>
<html>
<head>
<title>Calculadora</title>
<style>
       body {
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 0;
           background-color: #f0f0f0;
       }
       .calculator {
           width: 300px;
           margin: 50px auto;
           border: 2px solid #333;
           border-radius: 10px;
           background-color: #666;
           padding: 20px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
       }
       .calculator input[type="button"] {
           width: 50px;
           height: 50px;
           font-size: 20px;
           margin: 5px;
           cursor: pointer;
           border: none;
           border-radius: 5px;
       }
       .calculator input[type="text"] {
           width: calc(100% - 10px);
           height: 50px;
           font-size: 20px;
           margin-bottom: 10px;
           padding: 5px;
           box-sizing: border-box;
           
           border: none;
           border-radius: 5px;
       }
       .row:after {
           content: "";
           display: table;
           clear: both;
       }
</style>
</head>
<body>
<div class="calculator">
<input type="text" id="display" readonly>
<div class="row">
<input type="button" value="7" onclick="addToDisplay('7')">
<input type="button" value="8" onclick="addToDisplay('8')">
<input type="button" value="9" onclick="addToDisplay('9')">
<input type="button" value="/" onclick="addToDisplay('/')">
</div>
<div class="row">
<input type="button" value="4" onclick="addToDisplay('4')">
<input type="button" value="5" onclick="addToDisplay('5')">
<input type="button" value="6" onclick="addToDisplay('6')">
<input type="button" value="*" onclick="addToDisplay('*')">
</div>
<div class="row">
<input type="button" value="1" onclick="addToDisplay('1')">
<input type="button" value="2" onclick="addToDisplay('2')">
<input type="button" value="3" onclick="addToDisplay('3')">
<input type="button" value="-" onclick="addToDisplay('-')">
</div>
<div class="row">
<input type="button" value="0" onclick="addToDisplay('0')">
<input type="button" value="." onclick="addToDisplay('.')">
<input type="button" value="=" onclick="calculate()">
<input type="button" value="+" onclick="addToDisplay('+')">
</div>
<div class="row">
<input type="button" value="C" onclick="clearDisplay()">
</div>
</div>
<script>
       function addToDisplay(value) {
           document.getElementById('display').value += value;
       }
       function calculate() {
           var display = document.getElementById('display');
           display.value = eval(display.value);
       }
       function clearDisplay() {
           document.getElementById('display').value = '';
       }
</script>
</body>
</html>
