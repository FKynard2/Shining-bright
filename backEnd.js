const form = document.querySelector('form');
const usernameInput = document.querySelector('#username');
const passwordInput = document.querySelector('#password');

form.addEventListener('submit', e => {
  e.preventDefault();
  
  const username = usernameInput.value;
  const password = passwordInput.value;
  
  if (password === "Admin" && username === "fkynard" || username === "KarmenK") {
    window.location.href = "backEnd.html";
  } else {   
    alert("Password or Username incorrect, Please try again");
  }
});


