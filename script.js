document.getElementById("login-form").addEventListener("submit", function(event) {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var errorMessage = document.getElementById("error-message");
  
    if (!username || !password) {
      event.preventDefault();
      errorMessage.textContent = "Please enter both username and password.";
    } else {
      errorMessage.textContent = "";
    }
  });
  