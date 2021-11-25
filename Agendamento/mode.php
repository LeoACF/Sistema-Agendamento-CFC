<!-- <html>
<head>
<style>

body {
	margin: auto;
  width: 50%;
  border: 3px solid green;
  padding: 10px;
}

</style>
</head> -->

<?php

<button type="button" id="online" onclick="online()" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
  Aula Online
</button>
<button type="button" id="presencial" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
Aula Presencial
</button>
	
</head>



</html>


<script>
function online(){
    window.location.replace("addAulaPresencial.php");
};

function online(){
    window.location.replace("addAulaOnline.php");
};
</script>