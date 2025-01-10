// script/blog.js

let loggedIn = false;
let posts = [];
let currentPostId = null;

// Function to log in
function login() {
    const email = prompt("Enter your email:");
    const password = prompt("Enter your password:");
    // Simple login check (replace with real authentication)
    if (email === 'user@example.com' && password === 'password') {
        loggedIn = true;
        alert("Login successful!");
        renderPosts();
    } else {
        alert("Invalid credentials!");
    }
}

// Function to log out
function logout() {
    loggedIn = false;
    alert("Logged out successfully!");
    document.getElementById('postContainer').innerHTML = '';
}

// Function to render posts
function renderPosts() {
    const postContainer = document.getElementById('postContainer');
    postContainer.innerHTML = ''; // Clear existing posts
    posts.forEach((post, index) => {
        const postDiv = document.createElement('div');
        postDiv.className = 'post';
        postDiv.innerHTML = `
            <h3>${post.title}</h3>
            <p>${post.content}</p>
            <button onclick="deletePost(${index})">Delete Post</button>
            <button onclick="showComments(${index})">View Comments</button>
        `;
        postContainer.appendChild(postDiv);
    });
}

// Function to submit a new post
document.getElementById('submitPost').addEventListener('click', function() {
    if (!loggedIn) {
        alert("You must be logged in to post!");
        return;
    }
    const title = document.getElementById('postTitle').value;
    const content = document.getElementById('postContent').value;
    if (title && content) {
        posts.push({ title, content });
        document.getElementById('postTitle').value = '';
        document.getElementById('postContent').value = '';
        renderPosts();
    } else {
        alert("Please fill in both fields.");
    }
});

// Function to delete a post
function deletePost(index) {
    posts.splice(index, 1);
    renderPosts();
}

// Function to show comments for a post
function showComments(postIndex) {
    currentPostId = postIndex;
    const commentSection = document.getElementById('commentSection');
    commentSection.style.display = 'block';
    renderComments();
}

// Function to render comments
function renderComments() {
    const commentsDiv = document.getElementById('comments');
    commentsDiv.innerHTML = ''; // Clear existing comments
    const comments = posts[currentPostId]?.comments || [];
    comments.forEach((comment, index) => {
        const commentDiv = document.createElement('div');
        commentDiv.className = 'comment';
        commentDiv.innerHTML = `
            <p>${comment}</p>
            <button onclick="deleteComment(${index})">Delete Comment</button>
        `;
        commentsDiv.appendChild(commentDiv);
    });
}

// Function to add a comment
document.getElementById('addComment').addEventListener('click', function() {
    const commentInput = document.getElementById('commentInput');
    const comment = commentInput.value;
    if (comment) {
        if (!posts[currentPostId].comments) {
            posts[currentPostId].comments = [];
        }
        posts[currentPostId].comments.push(comment);
        commentInput.value = '';
        renderComments();
    } else {
        alert("Please enter a comment.");
    }
});

// Function to delete a comment
function deleteComment(index) {
    posts[currentPostId].comments.splice(index, 1);
    renderComments();
}

// Event listeners for login and logout
document.getElementById('postLink').addEventListener('click', function() {
    if (!loggedIn) {
        login();
    } else {
        document.getElementById('postForm').style.display = 'block';
    }
});

document.getElementById('logoutLink').addEventListener('click', function() {
    logout();
});

// Initial login prompt
login();