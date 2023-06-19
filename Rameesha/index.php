<!DOCTYPE html>
<html>

<head>
  <title>Social Media Clone</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="script.js"></script>
</head>

<body>
  <header>
    <div class="header-container">
      <h1><span class="website-name">&GO</span></h1>
      <nav>
        <ul>
          <li><a href="signin.php">Signin</a></li>
          <li><a href="register.php">Register</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="body-container">
    <div class="post">
      <img src="post1.jpg" alt="Post 1">
      <div class="post-options">
        <button class="like-button" onclick="likePost(1)">Like</button>
        <button class="dislike-button" onclick="dislikePost(1)">Dislike</button>
        <button class="comment-button" onclick="commentPost(1)">Comment</button>
        <button class="delete-button" onclick="deletePost(1)">Delete</button>
      </div>
    </div>

    <div class="post">
      <img src="post2.jpg" alt="Post 2">
      <div class="post-options">
        <button class="like-button" onclick="likePost(2)">Like</button>
        <button class="dislike-button" onclick="dislikePost(2)">Dislike</button>
        <button class="comment-button" onclick="commentPost(2)">Comment</button>
        <button class="delete-button" onclick="deletePost(2)">Delete</button>
      </div>
    </div>

    <div class="post">
      <img src="post3.jpg" alt="Post 3">
      <div class="post-options">
        <button class="like-button" onclick="likePost(3)">Like</button>
        <button class="dislike-button" onclick="dislikePost(3)">Dislike</button>
        <button class="comment-button" onclick="commentPost(3)">Comment</button>
        <button class="delete-button" onclick="deletePost(3)">Delete</button>
      </div>
    </div>

    <div class="post">
      <img src="post4.jpg" alt="Post 4">
      <div class="post-options">
        <button class="like-button" onclick="likePost(4)">Like</button>
        <button class="dislike-button" onclick="dislikePost(4)">Dislike</button>
        <button class="comment-button" onclick="commentPost(4)">Comment</button>
        <button class="delete-button" onclick="deletePost(4)">Delete</button>
      </div>
    </div>

    <div class="post">
      <img src="post5.jpg" alt="Post 5">
      <div class="post-options">
        <button class="like-button" onclick="likePost(5)">Like</button>
        <button class="dislike-button" onclick="dislikePost(5)">Dislike</button>
        <button class="comment-button" onclick="commentPost(5)">Comment</button>
        <button class="delete-button" onclick="deletePost(5)">Delete</button>
      </div>
    </div>

    <div class="post">
      <img src="post6.jpg" alt="Post 6">
      <div class="post-options">
        <button class="like-button" onclick="likePost(6)">Like</button>
        <button class="dislike-button" onclick="dislikePost(6)">Dislike</button>
        <button class="comment-button" onclick="commentPost(6)">Comment</button>
        <button class="delete-button" onclick="deletePost(6)">Delete</button>
      </div>
    </div>
  </div>

  <footer >
    <p>© 2023 Social Media Clone. All rights reserved.</p>
  </footer>

</body>

</html>
