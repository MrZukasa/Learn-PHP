<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        html, body {
            font-family:Verdana, sans-serif; 
            font-size: 15px;
            line-height:1.5;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
            height: 100%;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 300px;
            padding: 50px;
        }
        input[type=text] {
            width: 100%;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px #ddd;
            border-radius: 4px;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding-left: 20px;
            padding-right: 20px;
            padding-top: 12px;
            padding-bottom: 12px;
        }
        input[type=submit]{
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="input-group">
  <select class="form-select" id="JSONSelection" aria-label="Example select with button addon">
    <option selected>Che JSON apro?</option>
    <option value="1">Pokedex</option>
    <option value="2">Colori</option>
  </select>
  <button class="btn btn-outline-secondary" type="button" onClick="readJSON()">Applica</button>
</div>
    <script>
        function readJSON(){
            let formData = new FormData();
            if (JSONSelection.value=="1"){
                formData.append('data','pokedex');
            } else if (JSONSelection.value=="2"){
                    formData.append('data','colori');
            } else {
                console.log("Selezione non valida, ci hai provato :D ");
                return;
            }
            fetch('api.php', {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => console.log(data));
        }
    </script>
    <div class="container">
    <figure class="text-center">
        <blockquote class="blockquote">
            <p>Lettura di due diversi tipi di JSON nella console</p>
        </blockquote>
        <figcaption class="blockquote-footer">Controllare il codice</figcaption>
    </figure>
    </div>
</body>
</html>