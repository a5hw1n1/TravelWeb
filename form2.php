<html>
<head>
  <title>Home Page</title>
</head>
<style>
.banner
{
  width:100%;
  height: 150px;
  background: rgba(0,0,0,0);
}
.banner h1
{
  font-family: sans-serif;
  padding-left: 425px;
  padding-top:50px;
  font-size: 50px;
  color: #111;
}
body
{
  margin:0;
  padding: 0;
  font-family: sans-serif;
  background: url(img/travel.jpg);
  background-size: cover;
}
.box
{
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%,-50%);
  width: 400px;
  padding:40px;
  background: rgba(0,0,0,.8);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.5);
  border-radius: 10px;
}
.box h2
{
  margin:0;
  padding-top: 0;
  padding-bottom: 15px;
  color: #fff;
  text-align: center;
}
.box .inputBox
{
  position: relative;
}
.box .inputBox input
{
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color:#fff;
  margin-bottom: 30px;
  border: none;
  border: 1px solid #fff;
  outline: none;
  background:transparent;
}
.box .inputBox label
{
  position:absolute;
  top:3px;
  left: 5px;
  padding-bottom: 10px 0;
  font-size: 16px;
  color: #03a9f4;
  pointer-events: none;
  transition: .5s;
}
.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label
{
  top: -18px;
  left:0;
  color: #fff;
  font-size: 12px;
}
.box input[type = 'submit']
{
  background: transparent;
  border: none;
  outline: none;
  color:#fff;
  background: #03a9f4;
  padding: 10px 20px;
  cursor: pointer;
  border-radius: 5px;
}
a
{
  padding-top:50px;
  position: absolute;
  text-align: center;
  font-size: 15px;
  padding-left:45px;
  color:#fff;
}
a:hover {
  color: #03a9f4;
}
a:active {
  color: yellow;
}
</style>
<body>
  <div class = "banner">
  <h1> TRAVEL WEBSITE</h1>
</div>
  <div class = "box">
    <h2>Login</h2>
    <form action="process1.php" method="POST">
      <div class = "inputbox">
        <input type = "text" name = "user" id="user" required="">
        <label>Username</label>
      </div>
      <div class = "inputbox">
        <input type="password" name="pass" id="pass" required="">
        <label>Password</label>
      </div>
      <input type="submit" id ="btn" value = "Login" onclick="process1.php">
    </form>
  </div>
</body>
</html>