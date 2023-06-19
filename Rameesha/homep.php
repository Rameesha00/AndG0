<!DOCTYPE html>
<html>

<head>
  <title>Social Media Clone - Home</title>
  <style>
    body {
      background-color: darkblue;
      color: darkblue;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: white;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .website-name {
      color: black;
    }

    nav ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }

    nav ul li {
      display: inline;
      margin-left: 10px;
    }

    nav ul li a {
      text-decoration: none;
      color: darkblue;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      padding: 20px;
    }

    .post {
      flex-basis: calc(33.33% - 20px);
      margin: 10px;
      background-color: white;
      padding: 20px;
    }

    .post img {
      width: 100%;
      height: auto;
    }

    .post-options button {
      margin-right: 10px;
    }

    footer {
      background-color: white;
      padding: 20px;
      text-align: center;
    }
  </style>
  <script>
    function handleLike(button) {
      console.log('Liked');
      const likeCount = button.nextElementSibling;
      likeCount.textContent = parseInt(likeCount.textContent) + 1;
    }

    function handleDislike(button) {
      console.log('Disliked');
      const dislikeCount = button.nextElementSibling;
      dislikeCount.textContent = parseInt(dislikeCount.textContent) + 1;
    }

    function handleComment(button) {
      const commentSection = button.parentElement.nextElementSibling;
      const commentTextArea = commentSection.querySelector('textarea');
      const commentList = commentSection.querySelector('.comment-list');

      const comment = commentTextArea.value;
      if (comment) {
        const listItem = document.createElement('li');
        listItem.textContent = comment;
        commentList.appendChild(listItem);
        commentTextArea.value = '';
      }
    }

    function handleDelete(button) {
      const commentListItem = button.parentElement;
      commentListItem.remove();
      console.log('Comment deleted');
    }
  </script>
</head>

<body>
  <header>
    <h1 class="website-name">&GO</h1>
    <nav>
      <ul>
        <li><a href="index.php">Logout</a></li>
        <li><a href="addpost.php">Add Post</a></li>
        <li><a href="pro.php">Profile</a></li>
      </ul>
    </nav>
  </header>

  <div class="container">
    <div class="post">
      <img src="post1.jpg" alt="Post Image">
      <div class="post-options">
        <div>
          <button onclick="handleLike(this)">Like</button>
          <span class="like-count">0</span>
          <button onclick="handleDislike(this)">Dislike</button>
          <span class="dislike-count">0</span>
        </div>
        <div>
          <button onclick="handleComment(this)">Comment</button>
        </div>
      </div>
      <div class="comment-section">
        <textarea placeholder="Add a comment"></textarea>
        <ul class="comment-list"></ul>
      </div>
    </div>

    <div class="post">
      <img src="post2.jpg" alt="Post Image">
      <div class="post-options">
        <div>
          <button onclick="handleLike(this)">Like</button>
          <span class="like-count">0</span>
          <button onclick="handleDislike(this)">Dislike</button>
          <span class="dislike-count">0</span>
        </div>
        <div>
          <button onclick="handleComment(this)">Comment</button>
        </div>
      </div>
      <div class="comment-section">
        <textarea placeholder="Add a comment"></textarea>
        <ul class="comment-list"></ul>
      </div>
    </div>

    <div class="post">
      <img src="post3.jpg" alt="Post Image">
      <div class="post-options">
        <div>
          <button onclick="handleLike(this)">Like</button>
          <span class="like-count">0</span>
          <button onclick="handleDislike(this)">Dislike</button>
          <span class="dislike-count">0</span>
        </div>
        <div>
          <button onclick="handleComment(this)">Comment</button>
        </div>
      </div>
      <div class="comment-section">
        <textarea placeholder="Add a comment"></textarea>
        <ul class="comment-list"></ul>
      </div>
    </div>

    <div class="post">
      <img src="post4.jpg" alt="Post Image">
      <div class="post-options">
        <div>
          <button onclick="handleLike(this)">Like</button>
          <span class="like-count">0</span>
          <button onclick="handleDislike(this)">Dislike</button>
          <span class="dislike-count">0</span>
        </div>
        <div>
          <button onclick="handleComment(this)">Comment</button>
        </div>
      </div>
      <div class="comment-section">
        <textarea placeholder="Add a comment"></textarea>
        <ul class="comment-list"></ul>
      </div>
    </div>

    <div class="post">
      <img src="post5.jpg" alt="Post Image">
      <div class="post-options">
        <div>
          <button onclick="handleLike(this)">Like</button>
          <span class="like-count">0</span>
          <button onclick="handleDislike(this)">Dislike</button>
          <span class="dislike-count">0</span>
        </div>
        <div>
          <button onclick="handleComment(this)">Comment</button>
        </div>
      </div>
      <div class="comment-section">
        <textarea placeholder="Add a comment"></textarea>
        <ul class="comment-list"></ul>
      </div>
    </div>

    <div class="post">
      <img src="post6.jpg" alt="Post Image">
      <div class="post-options">
        <div>
          <button onclick="handleLike(this)">Like</button>
          <span class="like-count">0</span>
          <button onclick="handleDislike(this)">Dislike</button>
          <span class="dislike-count">0</span>
        </div>
        <div>
          <button onclick="handleComment(this)">Comment</button>
        </div>
      </div>
      <div class="comment-section">
        <textarea placeholder="Add a comment"></textarea>
        <ul class="comment-list"></ul>
      </div>
    </div>
  </div>

  <footer>
    &copy; 2023 Social Media Clone
  </footer>

  <script>
    const commentButtons = document.querySelectorAll('.post-options button:nth-child(3)');
    const deleteButtons = document.querySelectorAll('.comment-section button');

    commentButtons.forEach(button => {
      button.addEventListener('click', () => {
        handleComment(button);
      });
    });

    deleteButtons.forEach(button => {
      button.addEventListener('click', () => {
        handleDelete(button);
      });
    });
  </script>
</body>

</html>
