<!DOCTYPE html>

<html lang="en">
    
    <head>
        <title> Issue 6 </title>
        <script>

            function myFunction(str) {

                if (str == '') {
                    document.getElementById("txtHint").innerHTML = ""
                    return
                }

                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.repsonseText
                    }
                }

                xmlhttp.open("GET", "getcd.php?q=" + str, true)
                xmlhttp.send();
            }

        </script>
    </head>

    <body>
        <form> 
            Select a CD: 
            <select name="cds" onchange=myFunction(this.value)>
                <option value=""> Select a CD: </option>
                <option value="Bob Dylan"> Bob Dylan </option>
                <option value="Bee Gees"> Bee Gees </option>
                <option value="Cat Stevens"> Cat Stevens </option>
            </select>
        </form>
        <div id="txtHint"><b> CD info will be listed here... </b></div>

    </body>

</html>