<?php
date_default_timezone_set('Asia/Jakarta');
$date = date('m/d/Y h:i:s', time());
?>
<input type="text" id="tanggal" value="<?= $date ?>" name="">
<div class="block">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6">
          <button class="date" onClick="myFunction();">
            Check In
          </button>
          <input type="text" id="check_in">
        </div>
      </div>
    </div>
  </div>
</div>
<br>

<div class="block">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6">
          <button class="date" onClick="myFunction_1();">
            Check Out
          </button>
          <input type="text" id="check_out">
        </div>
      </div>
    </div>
  </div>
</div>
<br/>
<div class="block">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6">
          <label>Jam</label>
          <input type="text" id="jam">
          <label>Menit</label>
          <input type="text" id="menit">
          <label>Jam Menit Detik</label>
          <input type="text" id="jmd">
        </div>
      </div>
    </div>
  </div>
</div>

<h2>Time difference:</h2>

<dl id="diff">
</dl>

<script>
	function addZero(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function addZero1(i) {
  if (i < 10) {
    i = "0" + i;
  }
  return i;
}

function myFunction() {
  // var d = new Date();
  // var x = document.getElementById("check_in");
  // var h = addZero(d.getHours());
  // var m = addZero(d.getMinutes());
  // var s = addZero(d.getSeconds());
  // document.getElementById("check_in").value= h + ":" + m + ":" + s;

  $x = document.getElementById("tanggal").value;

  document.getElementById("check_in").value = x;
}

function myFunction_1() {
  var d = new Date();
  var x = document.getElementById("check_out");
  var h = addZero1(d.getHours());
  var m = addZero1(d.getMinutes());
  var s = addZero1(d.getSeconds());
  document.getElementById("check_out").value = h + ":" + m + ":" + s;


}
</script>
<script>
  
</script>