// Post data
const posts = [
    { id: 1, likes: 0, dislikes: 0, comments: [] },
    { id: 2, likes: 0, dislikes: 0, comments: [] },
    { id: 3, likes: 0, dislikes: 0, comments: [] },
    { id: 4, likes: 0, dislikes: 0, comments: [] },
    { id: 5, likes: 0, dislikes: 0, comments: [] },
    { id: 6, likes: 0, dislikes: 0, comments: [] },
  ];
  
  // Like post
  function likePost(id) {
    const post = posts.find((p) => p.id === id);
    if (post) {
      post.likes += 1;
      console.log(`Liked post ${id}. Total likes: ${post.likes}`);
    }
  }
  
  // Dislike post
  function dislikePost(id) {
    const post = posts.find((p) => p.id === id);
    if (post) {
      post.dislikes += 1;
      console.log(`Disliked post ${id}. Total dislikes: ${post.dislikes}`);
    }
  }
  
  // Comment on post
  function commentPost(id) {
    const post = posts.find((p) => p.id === id);
    if (post) {
      const comment = prompt('Enter your comment:');
      if (comment) {
        post.comments.push(comment);
        console.log(`Commented on post ${id}. Comment: ${comment}`);
      }
    }
  }
  
  // Delete post
  function deletePost(id) {
    const index = posts.findIndex((p) => p.id === id);
    if (index !== -1) {
      posts.splice(index, 1);
      console.log(`Deleted post ${id}`);
      // Remove post from the DOM
      const postElement = document.querySelector(`.post:nth-child(${index + 1})`);
      if (postElement) {
        postElement.remove();
      }
    }
  }
  