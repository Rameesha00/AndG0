<!DOCTYPE html>
<html>

<head>
  <title>Social Media Clone - Profile</title>
  <style>
    body {
      background-color: darkblue;
      color: darkblue;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 600px;
      margin: 100px auto;
      background-color: white;
      padding: 20px;
      border-radius: 5px;
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .profile-picture {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin: 0 auto;
      display: block;
      background-color: lightgray;
      background-image: url("profile-image.jpg");
      background-size: cover;
    }

    .profile-info {
      margin-top: 20px;
    }

    .profile-info label {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .profile-info p {
      margin: 0;
    }

    .reset-password-link {
      text-align: center;
      margin-top: 20px;
    }

    .reset-password-form {
      display: none;
      margin-top: 20px;
    }

    .reset-password-form label,
    .reset-password-form input[type="submit"] {
      display: block;
      margin-bottom: 10px;
    }

    .reset-password-success {
      color: green;
      margin-top: 10px;
    }
  </style>
  <script>
    function showResetPasswordForm() {
      const resetPasswordLink = document.querySelector('.reset-password-link');
      const resetPasswordForm = document.querySelector('.reset-password-form');
      resetPasswordLink.style.display = 'none';
      resetPasswordForm.style.display = 'block';
    }

    function resetPassword() {
      const newPassword = document.getElementById('new-password').value;
      const confirmPassword = document.getElementById('confirm-password').value;

      if (newPassword === confirmPassword) {
        // Perform password reset logic here
        console.log('Password reset successful');
        const resetSuccessMessage = document.querySelector('.reset-password-success');
        resetSuccessMessage.textContent = 'Password reset successful.';
      } else {
        console.log('Passwords do not match');
      }
    }
  </script>
</head>

<body>
  <div class="container">
    <h2>Profile</h2>
    <div class="profile-picture"></div>
    <div class="profile-info">
      <label>Name</label>
      <p>Rameesha</p>
      <label>Password:</label>
      <p>Rameesha123</p>
    </div>
    <div class="reset-password-link">
      <a href="#" onclick="showResetPasswordForm()">Reset Password</a>
    </div>
    <form class="reset-password-form">
      <label for="new-password">New Password:</label>
      <input type="password" id="new-password" required>
      <label for="confirm-password">Confirm Password:</label>
      <input type="password" id="confirm-password" required>
      <input type="submit" value="Reset Password" onclick="resetPassword()">
    </form>
    <p class="reset-password-success"></p>
  </div>
</body>

</html>
