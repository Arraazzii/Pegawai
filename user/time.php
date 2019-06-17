<!DOCTYPE html>
<html>
<body>

<p>Click the button to get your coordinates.</p>

<form action="save.php" method="post">
  <input type="text" name="lat" id="lat">
  <input type="text" name="long" id="long">
  <button onclick="getLocation()" name="get"type="reset">Try It</button>
  <button type="submit" name="submit">Try It</button>
  
</form>


<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  document.getElementById('lat').value = position.coords.latitude;
  document.getElementById('long').value = position.coords.longitude;
}
</script>

</body>
</html>
