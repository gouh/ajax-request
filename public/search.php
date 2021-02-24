<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <label for="search">Busca un texto y revisa tu consola</label> <br />
    <input type="text" name="search" id="search">

    <script type="application/javascript">
        (function(){
            /**
             * This function search cars by word
             *
             * @param word
             * @returns {Promise<Response>}
             */
             async function searchCar(word)  {
                let dataSend = new FormData();
                dataSend.append('word', word);
                 return await fetch('http://localhost/car', {
                    method: 'POST',
                    body: dataSend
                });
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Get input element and add event keyup
                let searchInput = document.getElementById('search');
                searchInput.addEventListener('keyup', async function() {
                    console.info("Buscando espera por favor...");
                    let result = await searchCar(searchInput.value);
                    let cars = await result.json();
                    cars.forEach(function(car){
                        console.log(car);
                    });
                });
            });
        })();
    </script>
</body>
</html>