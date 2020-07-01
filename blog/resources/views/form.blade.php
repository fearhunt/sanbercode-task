<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SanberCode Form</title>
    <style>
      input[type="text"] {
        margin-bottom: 15px;
      }
    </style>
  </head>

  <body>
    <h1>Buat Akun Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
      @csrf
      <label for="firstName">First Name</label><br>
      <input name="firstName" id="firstName" type="text" required><br>
      
      <label for="lastName">Last Name</label><br>
      <input name="lastName" id="lastName" type="text" required><br>

      <p>Gender:</p>
      <input id="male" type="radio" name="gender" value="male" required>
      <label for="male">Male</label><br>
      <input id="female" type="radio" name="gender" value="female">
      <label for="female">Female</label><br>
      <input id="other" type="radio" name="gender" value="other">
      <label for="other">Other</label><br><br>
      
      <label for="nationality">Nationality</label><br>
      <select name="nationality" id="nationality" required>
        <option value="indonesia">Indonesian</option>
        <option value="america">American</option>
        <option value="arab">Arabian</option>
      </select>

      <p>Language Spoken:</p>
      <input type="checkbox" id="lang1" value="Indonesia">
      <label for="lang1">Bahasa Indonesia</label><br>
      <input type="checkbox" id="lang2" value="English">
      <label for="lang2">English</label><br>
      <input type="checkbox" id="lang3" value="Other">
      <label for="lang3">Other</label><br><br>

      <label for="bio">Bio:</label><br>
      <textarea required name="bio" id="bio" cols="30" rows="10"></textarea><br><br>

      <input type="submit" value="Sign Up">
    </form>
  </body>
</html>