<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanberbook</title>
</head>
<body>

<h1> Buat Account Baru! </h1>

  <h3> Sign Up Form </h1>

 <form action="/welcome" method="POST"> 
 @csrf
  <label for="first"> First name: </label>
  <br><br>
  <input type="text" name="first" id="first"> <br><br>

  <label for="last"> Last name: </label>
  <br><br>
  <input type="text" name="last" id="last"> <br><br>

  <label> Gender: </label> <br><br>
  <input type="radio" name="gender" value="0"> Male <br>
  <input type="radio" name="gender" value="1"> Female <br>
  <input type="radio" name="gender" value="2"> Other <br><br>

  <label> Nationality: </label> <br><br>
  <select>
   <option value="Indonesian"> Indonesian </option>
   <option value="Malaysian"> Malaysian </option>
   <option value="Singapore"> Singapore </option>
  </select>
  <br><br>

  <label> Language Spoken: </label> <br><br>
  <input type="checkbox" name="language" value="0"> Bahasa Indonesia <br>
  <input type="checkbox" name="language" value="1"> English <br>
  <input type="checkbox" name="language" value="2"> Other <br><br>

  <label for="bio"> Bio: </label> <br><br>
  <textarea cols="40" rows="10" id="bio"> </textarea> <br><br>
  <input type="submit" value="sign up">
 </form action="/welcome">

</body>
</html>