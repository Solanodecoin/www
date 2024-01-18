<form action="datos.php" method="get">

<label for="num1">Dame el numero1:   </label>
<input type="double" name="num1" required>
<label for="num2">Dame el numero2:   </label>
<input type="double" name="num2" required>


<label for="calculadora">Selecciona que quiere hacer</label>

<select name="signo" id="signo">
  <option value="suma">suma</option>
  <option value="resta">resta</option>
  <option value="multiplicacion">multiplicacion</option>
  <option value="division">division</option>
</select>
<br>
<button type="submit">Enviar</button>