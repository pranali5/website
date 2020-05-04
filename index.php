
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Pranali Sancheti</title>
<style type="text/css">
    img{width:600px;height:450px;border:0;}
    .show{display:block;}
    .hide{display:none;}
</style>
<script type="text/javascript">
    function showImg()
    {
    var obj=document.getElementById('image01');
    obj.className = 'show';
    }
</script>
</head>


</html>
<body>
<h1>Pranali Sancheti</h1>
<h2>About me</h2>
<p>Here comes a paragraph</p>
<a href="https://www.cse.iitb.ac.in/~onkard/aboutme.html">Guess who??</a>
<br/>
<img id="image01" src="pic.jpg" class="hide">
<br/>
<input type="button" onclick = "showImg()" value= "Show image">
</body>
</html>
