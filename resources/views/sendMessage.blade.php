
<!-- saved from url=(0035)https://apurva91.github.io/ACI.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>Send Message</title>

<link rel="stylesheet" type="text/css" href="hello.css">

</head>
<body>
<div class="notifications">
    <form method="POST" id="form2" action="/tasks">
    {{ csrf_field()}}
            <pre>Title         : <input type="text" name="title"></pre>
            <pre>Message       : <input type="text" name="msg"></pre>
            <pre>Type          : <input type="text"  name="type" value="none"></pre>
            <input type="submit" value="Notification">
            <input type="button" value="Preview" onclick="notp()">
			<input type="button" value="Close&Clear" onclick="notpdash()">
    </form>
<div id="notnone">
	<h2 id="notdef">Preview</h2>
	<p id="notdet"> Description</p>

</div>
<script>
		function notp(){
					document.getElementById("notnone").style.display="block";
			var x = document.getElementById("form2");
			var t = x.elements[0].value;
			var y = x.elements[1].value;
			if(t!="")document.getElementById("notdef").innerHTML=t;
			if(y!="")document.getElementById("notdet").innerHTML=y;
			document.getElementById("notnone").style.display="inherit";
		}
		function notpdash(){
		document.getElementById("notnone").style.display="none";
		document.getElementById("form2").reset();
		}
	</script>
</div>

<hr class="tech">

<div class="update3">
    <form method="POST" id="frm3" action="/tasks">
      {{ csrf_field()}}
            <pre>Title         : <input type="text" name="title"></pre>
            <pre>Message       : <input type="text" name="msg"></pre>
            <pre>Type          : <input type="text"  name="type" value="tcard"></pre>
            <pre>Count2        : <input type="int" name="count"></pre>
            <pre>Title         : <input type="text" name="title2"></pre>
            <pre>Description   : <input type="text" name="descrp"></pre>
            <pre>Link2         : <input type="text" name="link"></pre>

            <input type="submit" value="TCard">
			<input type="button" onclick="recenttcard()" value="Preview">
			<input type="button" value="Close&Clear" onclick="tdash()">
    </form>
	<div id="tcardh">
	<h4 id="tcardhead">Default</h4>
	<hr>
	<a id="tcarda" href="https://www.technothlon.techniche.org">Click Here</a>
	</div>
	<div id="nottcard">
	<h2 id="notdef3">Preview</h2>
	<p id="notdet3"> Description</p>
</div>
<script>
function recenttcard() {
		document.getElementById("tcardh").style.display="block";

			var x=document.getElementById("frm3");
			if(x.elements[6].value!="") document.getElementById("tcarda").href=x.elements[6].value;
			if(x.elements[4].value!="") document.getElementById("tcardhead").innerHTML=x.elements[4].value;
			if(x.elements[5].value!="")document.getElementById("tcarda").innerHTML=x.elements[5].value;
		var t = x.elements[0].value;
			var y = x.elements[1].value;
			if(t!="")document.getElementById("notdef1").innerHTML=t;
			if(y!="")document.getElementById("notdet1").innerHTML=y;

	document.getElementById("nottcard").style.display = "inherit";

		}
	function tdash(){
		document.getElementById("nottcard").style.display="none";
				document.getElementById("tcardh").style.display="none";
		document.getElementById("frm3").reset();
		}
	</script>

</div>

<hr class="tech">

<div class="update1">
    <form method="POST" id="frm1" action="/tasks">
      {{ csrf_field()}}
            <pre>Title         : <input type="text" name="title"></pre>
            <pre>Message       : <input type="text" name="msg"></pre>
            <pre>Type          : <input type="text"  name="type" value="update"></pre>
            <pre>Count2        : <input type="int" name="count"></pre>
            <pre>Update        : <input type="text" name="updatemsg"></pre>
            <input type="submit" value="Update">
			<input type="button" onclick="recentupdate()" value="Preview">
			<input type="button" value="Close&Clear" onclick="adash()">
    </form>
<div id="update">
<h1> Recent Updates</h1>
<ul id="uu1">
<li>Technopedia is Live!!</li>
<li>Go to our official Discussion forum for Technothlon question paper.</li>
</ul>
</div>
<div id="notupdate">
	<h2 id="notdef1">Preview</h2>
	<p id="notdet1"> Description</p>
</div>
<script>
function recentupdate() {
	var x = document.getElementById("frm1");
	var y = x.elements[3].value;
	var liList = document.getElementById("uu1").getElementsByTagName("li");
	var c = liList.length-2;
	if(y>c){
		var node = document.createElement("li");                 // Create a <li> node
		var textnode = document.createTextNode(x.elements[4].value);         // Create a text node
		node.appendChild(textnode);
		node.setAttribute("id" , y);                            // Append the text to <li>
		document.getElementById("uu1").appendChild(node);
	}
	var i;
	for(i=1; i<=c; i++){
		if(y==i){
			document.getElementById(i).innerHTML = x.elements[4].value;
		}
	}

			var t = x.elements[0].value;
			var y = x.elements[1].value;
			if(t!="")document.getElementById("notdef1").innerHTML=t;
			if(y!="")document.getElementById("notdet1").innerHTML=y;

	document.getElementById("update").style.display = "inherit";
	document.getElementById("notupdate").style.display = "inherit";
}
function adash(){
		document.getElementById("notupdate").style.display="none";
				document.getElementById("update").style.display="none";
		document.getElementById("frm1").reset();
		}
</script>
</div>

<hr class="tech">

<div class="update2">
    <form method="POST" id="frm2" action="/tasks">
      {{ csrf_field()}}
		<pre>Title         : <input type="text" name="title"></pre>
		<pre>Message       : <input type="text" name="msg"></pre>
		<pre>Type          : <input type="text"  name="type" value="coup"></pre>
		<pre>ImageUrl      : <input type="text" name="imageurl"></pre>
		<pre>ImageText(alt): <input type="text" name="imagetext"></pre>
		<pre>Id            : <input type="int" name="id"></pre>
		<input type="submit" value="Coup">
		<input type="button" onclick="recentcoupnotif()" id="coupbutton" value="Preview">
		<input type="button" value="Close&Clear" onclick="bdash()">
    </form>
	<div id="coupup">
		<img id="coimg" src="photo.jpg" alt="default">
		<h3 id="cohe">Techno Coup D'oeil</h3>
		<p id="come">Here's Techno Coup D'oeil E0402 </p>
	</div>
	<div id="notcoup">
	<div id="notcouptext">
		<h2 id="notdef2">Preview</h2>
		<p id="notdet2"> Description</p>
	</div>
	<div id="notcoupimg">
		<img id="coupimgn" src="photo.jpg" alt="d">
	</div>
	<script>
	function recentcoupnotif(){
	document.getElementById("notcoup").style.display = "inherit";
	var x=document.getElementById("frm2");
	var t = x.elements[0].value;
			var y = x.elements[1].value;
			if(t!="")document.getElementById("notdef2").innerHTML=t;
			if(y!="")document.getElementById("notdet2").innerHTML=y;
			if(x.elements[3].value!="") document.getElementById("coupimgn").src=x.elements[3].value;
	recentcoup();
	}
	function bdash(){
		document.getElementById("notcoup").style.display="none";
				document.getElementById("coupup").style.display="none";
		document.getElementById("frm2").reset();
		}
	</script>
	</div>
	<script>
		function recentcoup() {
		document.getElementById("coupup").style.display="block";

			var x=document.getElementById("frm2");
			if(x.elements[3].value!="") document.getElementById("coimg").src=x.elements[3].value;
			if(x.elements[4].value!="") document.getElementById("coimg").alt=x.elements[4].value;
			if(x.elements[5].value!="")document.getElementById("come").innerHTML="Here's Techno Coup D'oeil E"+ x.elements[5].value;


		}
	</script>
</div>

<hr class="tech">

<div class="update4">
	<form method="POST" id="frm4" action="/tasks">
    {{ csrf_field()}}
            <pre>Title         : <input type="text" name="title"></pre>
            <pre>Message       : <input type="text" name="msg"></pre>
            <pre>Type          : <input type="text"  name="type" value="link"></pre>
            <pre>Link2         : <input type="text" name="link"></pre>
            <input type="submit" value="Link">
			<input type="button" onclick="recentlink()" value="Preview">
			<input type="button" value="Close&Clear" onclick="cdash()">
    </form>
<a style="display:block" id="clickablediv" href="http://technothlon.techniche.org/" target="_blank">
<div id="notlink">
	<h2 id="notdef4">Technothlon</h2>
	<p id="notdet4"> This is a notification which when clicked opens a link.</p>

</div>
</a>
<script>
		function recentlink(){
					document.getElementById("notlink").style.display="block";
			var x = document.getElementById("frm4");
			var t = x.elements[0].value;
			var y = x.elements[1].value;
			if(t!="")document.getElementById("notdef4").innerHTML=t;
			if(y!="")document.getElementById("notdet4").innerHTML=y;
			if(x.elements[3].value!="") document.getElementById("clickablediv").setAttribute("href", x.elements[3].value);
		}
		function cdash(){
		document.getElementById("notlink").style.display="none";
		document.getElementById("frm4").reset();
		}
	</script>
	</div>

<hr class="tech">

<div class="update5">
    <form method="POST" id="frm5" action="/tasks">
      {{ csrf_field()}}
            <pre>Title         : <input type="text" name="title"></pre>
            <pre>Message       : <input type="text" name="msg"></pre>
            <pre>Type          : <input type="text"  name="type" value="icard"></pre>
            <pre>Count2        : <input type="int" name="count"></pre>
            <pre>Title         : <input type="text" name="title2"></pre>
            <pre>Description   : <input type="text" name="descrp"></pre>
            <pre>ImageUrl      : <input type="text" name="imageurl"></pre>
            <pre>ImageText     : <input type="text" name="imagetext"></pre>
            <input type="submit" value="ICard">

<input type="button" onclick="recenticardnotif()" id="coupbutton" value="Preview">
<input type="button" value="Close&Clear" onclick="ddash()">
    </form>
<div id="icardt">
<img id="icardimg" src="photo.jpg" alt="default">
<h3 id="icardhead">Techno Blog</h3>
<p id="icardpara">Description</p>
</div>
<div id="noticard">
	<div id="noticardtext">
		<h2 id="notdef6">Preview</h2>
		<p id="notdet6"> Description</p>
	</div>
	<div id="noticardimg">
		<img id="icardimgn" src="photo.jpg" alt="d">
	</div>
	<script>
	function recenticardnotif(){
	document.getElementById("noticard").style.display = "inherit";
	var x=document.getElementById("frm5");
	var t = x.elements[0].value;
			var y = x.elements[1].value;
			if(t!="")document.getElementById("notdef6").innerHTML=t;
			if(y!="")document.getElementById("notdet6").innerHTML=y;
			if(x.elements[6].value!="") document.getElementById("icardimgn").src=x.elements[6].value;
	recenticard();
	}
	function ddash(){
		document.getElementById("noticard").style.display="none";
				document.getElementById("icardt").style.display="none";
		document.getElementById("frm5").reset();
		}
	</script>
	</div>

<script>
function recenticard() {

document.getElementById("icardt").style.display="block";
	var x=document.getElementById("frm5");
	if(x.elements[6].value!="") document.getElementById("icardimg").src=x.elements[6].value;
	if(x.elements[7].value!="") document.getElementById("icardimg").alt=x.elements[7].value;
	if(x.elements[4].value!="") document.getElementById("icardhead").alt=x.elements[4].value;
	if(x.elements[5].value!="")document.getElementById("icardpara").innerHTML=x.elements[5].value;
}
</script>
</div>

    <hr class="tech">


</body></html>
