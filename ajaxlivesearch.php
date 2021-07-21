<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search</title>
</head>
<body>
    <form>
        <input type="text" size="30" onkeyup="showlinks(this.value)">
        <div id="links"></div>
    </form>
    
</body>
<script>

    function showlinks(str){
        if(str.legth == 0){
            document.getElementById("links").innerHTML="";
            document.getElementById("links").style.border="0px";
            return;
        }else{
            var xml = new XMLHttpRequest();
            xml.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("links").innerHTML = this.responseText;
                document.getElementById("links").style.border="1px solid #A5ACB2";
            }
        }

        xml.open("GET", "getlinks.php?str="+str);
        xml.send();
        }

        

    }
    
</script>
</html>