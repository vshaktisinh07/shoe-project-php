// import Swal from 'sweetalert2';

const container = document.querySelector(".container");
const registerbtn = document.querySelector(".register-btn");
const loginbtn = document.querySelector(".login-btn");

      registerbtn.addEventListener("click", () => {
        container.classList.add("active");
      });

      loginbtn.addEventListener("click", () => {
        container.classList.remove("active");
      });


// ===== REGISTER =====
document.querySelector(".registation form").addEventListener("submit", function(e) {
  e.preventDefault();

  const inputs = this.querySelectorAll("input");
  const username = inputs[0].value;
  const email = inputs[1].value;
  const password = inputs[2].value;

  let users = JSON.parse(localStorage.getItem("users")) || [];



  const exists = users.find(u => u.email === email);
  if (exists) {
  Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "user is Already log in! ",
   confirmButtonColor: "#916245", 
  cancelButtonColor: "#f44336", 
  footer: '<a href="#">Why do I have this issue?</a>'
});
    return;
  }
  users.push({ username, email, password });
  localStorage.setItem("users", JSON.stringify(users));

  const loggedUser = { username, email };
  localStorage.setItem("loggedInUser", JSON.stringify(loggedUser));

  Swal.fire({
    title: "Success",
    text: "Registration successful! Now Login",
    icon: "success",
    confirmButtonColor: "#916245",})
    .then(() => {
    window.location.href = "shoe.php";
  });
});

// ===== LOGIN =====
document.querySelector(".login form").addEventListener("submit", function(e) {
  e.preventDefault();

  const inputs = this.querySelectorAll("input");
  const username = inputs[0].value;
  const password = inputs[1].value;

  let users = JSON.parse(localStorage.getItem("users")) || [];

  const user = users.find(
    u => u.username === username && u.password === password
  );


 const exists = users.find(u => u.email === email);
  if (exists) {
  Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "user is Already log in! ",
   confirmButtonColor: "#916245", 
  cancelButtonColor: "#f44336", 
  footer: '<a href="#">Why do I have this issue?</a>'
});
    return;
  }


  if (user) {
    localStorage.setItem("loggedInUser", JSON.stringify(user));
        Swal.fire({
  title: "Success",
  text: "Login successful",
  icon: "success",
  confirmButtonColor: "#916245", 
  cancelButtonColor: "#f44336",   
}).then(() => {
    window.location.href = "shoe.php";
  });
      
  } else {
    Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "User have No Registation",
   confirmButtonColor: "#916245", 
  cancelButtonColor: "#f44336", 
  footer: '<a href="#">Why do I have this issue?</a>'
});
 

  }
});



