<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
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
    <form action="caricamento.php" method="POST" enctype="multipart/form-data">
        <h2>Carica File</h2>        
        <label for="fileSelect">File</label>
        <input type="file" name="photo" id="fileSelect">
        <input type="submit" value="Upload">
        <p><strong>Nota: </strong> Sono permessi solo i formati .jpg, .jpeg, .gif, .png con una dimensione massima di 5MB</p>
    </form>    
</body>
</html>

