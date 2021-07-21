<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show CD</title>
</head>
<body>
    <select name="artist" onchange="showcd(this.value)">
        <option value="">Select a CD:</option>
        <option value="Bob Dylan">Bob Dylan</option>
        <option value="Bee Gees">Bee Gees</option>
        <option value="Cat Stevens">Cat Stevens</option>
    </select>
    <div id="cd-info">
        <b>As informações do cd serão listadas aqui...</b>
    </div>
</body>
<script>
    function showcd($value){
        var $ajax = new XMLHttpRequest();

        $ajax.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("cd-info").innerHTML = this.responseText;
                console.log(this.responseText);
            }
        }
        

        $ajax.open("GET", "getcd.php?artist="+$value);
        $ajax.send()
    }
</script>
</html>