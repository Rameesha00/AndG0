<!DOCTYPE html>
<html>

<head>
  <title>Social Media Clone - Add Post</title>
  <style>
    body {
      background-color: darkblue;
      color: blue;
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

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: bold;
      margin-bottom: 10px;
    }

    input[type="file"] {
      margin-bottom: 20px;
    }

    textarea {
      padding: 10px;
      margin-bottom: 20px;
      border: none;
      border-radius: 3px;
      resize: vertical;
      min-height: 100px;
    }

    input[type="submit"] {
      background-color: darkblue;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #003366;
    }
  </style>
  <script>
    function addPost() {
      const fileInput = document.getElementById('image');
      const postText = document.getElementById('post-text').value;

      // Perform post creation logic here
      console.log('Post added');
      console.log('Image:', fileInput.files[0]);
      console.log('Text:', postText);
    }
  </script>
</head>

<body>
  <div class="container">
    <h2>Add Post</h2>
    <form>
      <label for="image">Image</label>
      <input type="file" id="image" accept="image/*">

      <label for="post-text">Post Text</label>
      <textarea id="post-text" required></textarea>

      <input type="submit" value="Add Post" onclick="addPost()">
    </form>
  </div>
</body>

</html>
