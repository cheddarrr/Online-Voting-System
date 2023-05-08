<!DOCTYPE html>
<html>
<head>
<title>Candidate - Home</title>
<style>
        .top {
            background-color: darkslategrey; 
            color: white;
            padding: 1px;
            font-family: Trebuchet MS;
        }
        html, body {
            margin: 0px;
            padding: 0px;
        }
        button {
            padding: 9px 12px;
            margin-left: 5px;
            background-color: lightslategray;
            color: white;
            border-radius: 4px;
            border: 2px solid darkslategrey
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            margin-left: 50px;
            margin-bottom: 50px;
            text-align: center;
            font-family: Calibri, Helvetica, sans-serif;
            width: 50%;
            float: left;
            padding: 20px;
            background-color: wheat;
        }
        .flex-container {
            border: 3px solid #fff;
            //padding: 20px;
        }
        .link {
            border-radius: 10px;
            border: 1px solid black;
            padding: 20px; 
            width: 150px;
            text-align: center;
            height: 0.5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        button {
            padding: 9px 12px;
            margin-left: 25px;
            background-color: lightslategray;
            color: white;
            border-radius: 4px;
            border: 2px solid darkslategrey;
        }
        a {
            text-decoration: none;
            font-size: 14px;
            color: black;
        }
</style>
</head>
<body>

<div class="top"><h1>&nbsp;&nbsp;&nbsp;Hey! Welcome to Candidate Page.</h1>
<button type="submit"><a href="logout.php">Log out</a></button><br><br>
</div><br><br>
<div class="flex-container">
<div class="card">
  <img src="pictures/profile.jpg.png" alt="Profile" height=200px style="width:100%;margin: 0px 0px 0px 0px;" >
  <br><br><center><div class="link"><a href="./profile.php">Manage/Edit Profile</a></div></center>
</div>
<div class="card">
    <img src="pictures/helpline.jpg" alt="Profile" height=200px style="width:100%;">
    <br><br><center><div class="link"><a href="./helpline.php">Helpline</a></div></center>
</div>
<div class="card">
    <img src="pictures/candpic.jpg" height="200px" alt="Profile" style="width:100%">
    <br><br><center><div class="link"><a href="./contest.php">Contest</a></div></center>
</div>
<div class="card" style="margin-left:250px;">
    <img src="pictures/votepic.jpg" height="200px" alt="Profile" style="width:100%">
    <br><br><center><div class="link"><a href="candvote.php">Vote</a></div></center>
</div>
<div class="card">
    <img src="pictures/pos.jpg" height="200px" alt="Profile" style="width:100%">
    <br><br><center><div class="link"><a href="./pos.php">View Positions</a></div></center>
</div>
  </div>
</body>
</html>
