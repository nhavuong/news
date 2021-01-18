var isFormValid = true;

// validation for register
const register = document.getElementById("register");
const username2 = document.getElementById("username2");
const email2 = document.getElementById("email2");
const password1 = document.getElementById("password1");
const letter = document.getElementById("letter");
const capital = document.getElementById("capital");
const number = document.getElementById("number");
const length = document.getElementById("length");
const password2 = document.getElementById("password2");
const login = document.getElementById("login");

// validation for login
const username = document.getElementById("username");
const password = document.getElementById("password");
login.addEventListener("submit", (e) => {
  // e.preventDefault();
  var isLoginFormValid = true;

  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  if (usernameValue === "") {
    setErrorFor(username, "Username is required");
  } else if ((usernameValue.length < 3) | (usernameValue.length > 30)) {
    setErrorFor(username, "At least 3 characters");
  } else {
    setSuccessFor(username);
  }

  if (passwordValue === "") {
    setErrorFor(password, "Password is required");
  } else {
    setSuccessFor(password);
  }

  // if login form valid, then submit
  if (!isLoginFormValid) {
    e.preventDefault();
  }
});

var formObject = [
  { fieldName: username2, valid: false },
  { fieldName: email2, valid: false },
  { fieldName: password1, valid: false },
  { fieldName: password2, valid: false },
];

register.addEventListener("submit", (e) => {
  console.log("On submit");
  // e.preventDefault();
  checkInputs();

  if (
    formObject[0].valid == true &&
    formObject[1].valid == true &&
    formObject[2].valid == true &&
    formObject[3].valid == true
  ) {
    console.log("Form is valid. ");
    // register.submit();
  } else {
    console.log("Form is not valid. ");
	e.preventDefault();
  }
});

// show password condition when user click on the password field
password1.onfocus = function () {
  document.getElementById("pwd1-message").style.display = "block";
};

// hide it when click outside
password1.onblur = function () {
  document.getElementById("pwd1-message").style.display = "none";
};

// start type sth in password field
password1.onkeyup = function () {
  //lowercase
  var lowerCaseLetters = /[a-z]/g;
  if (password1.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  //capital
  var upperCaseLetters = /[A-Z]/g;
  if (password1.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if (password1.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if (password1.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
};

function checkInputs() {
  const username2Value = username2.value.trim();
  const email2Value = email2.value.trim();
  const password1Value = password1.value.trim();
  const password2Value = password2.value.trim();

  if (username2Value === "") {
    setErrorFor(username2, "Username is required");
  } else if ((username2Value.length < 3) | (username2Value.length > 30)) {
    setErrorFor(username2, "At least 3 characters");
  } else {
    setSuccessFor(username2);
  }

  var emailRegEx = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (email2Value === "") {
    setErrorFor(email2, "Email is required");
  } else if (!emailRegEx.test(String(email2Value).toLowerCase())) {
    setErrorFor(email2, "Email is invalid.");
  } else {
    setSuccessFor(email2);
  }

  if (password1Value === "") {
    setErrorFor(password1, "Password is required");
  } else {
    setSuccessFor(password1);
  }

  if (password2Value === "") {
    setErrorFor(password2, "Confirm password is required");
  } else if (password1Value !== password2Value) {
    setErrorFor(password2, "Passwords does not match!");
  } else {
    setSuccessFor(password2);
  }
}

function setErrorFor(input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");

  small.innerText = message;
  formControl.className = "form-row error";
  formObject.forEach((item) => {
    if (item.fieldName == input) {
      item.valid = false;
    }
  });
}

function setSuccessFor(input) {
  const formControl = input.parentElement;
  formControl.className = "form-row success";
  formObject.forEach((item) => {
    if (item.fieldName == input) {
      item.valid = true;
    }
  });
}
