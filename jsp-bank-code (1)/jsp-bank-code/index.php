<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jsp</title>
  
  <style>

    body {
      margin: 0;
      box-sizing: border-box;
    }
     /* CSS for main element */
    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 650px;
      background-image: url('j.jpg');
background-size: 100% 100%;
      background-position: center;
      background-repeat: no-repeat;
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      text-shadow: 0 0 100px #0040ff, 0 0 5px #00ffff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }
  </style>
</head>

<body>
  <main>
    <div class="intro">
      <h1>Next Generation Digital Banking</h1>
      <p>start your account at our bank to enjoy our services.</p>
<form>
      <button type="submit" formaction="jsphome.php">Get Started</button>
</form>
    </div>
</html>