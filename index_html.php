<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e LocalStorage</title>
</head>
<body>

    <li>index.html para ter o auto do intellisense funcionar, depois gravar como index.php</li>

    <h1>LOCAL STORAGE</h1>
    <script>

        localStorage.setItem("valorA", "hugo1");

        //var dados = localStorage.setItem("valorA", "hugo1");
        console.log(localStorage)

        //localStorage.clear();  //remove tudo

        localStorage.removeItem("valorB")

        if(localStorage.getItem("valorA") != null){
            console.log("O valor existe! ")
        } else {
            console.log("NÂO EXISTE!")
        }

        

    </script>
    
</body>
</html>