function validateForm() {
  var email = document.getElementById("email").value;
  var stuNum = document.getElementById("stuNum").value;
  var password = document.getElementById("password").value;
  var cpassword = document.getElementById("cpassword").value;

  // Validation 1: Check if email is in the correct format
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  if (!email.match(emailPattern)) {
      alert("Please enter a valid email address.");
      return false;
  }

  // Validation 2: Check if stuNum contains only numbers and has a length of 8
  var stuNumPattern = /^\d{8}$/;
  if (!stuNum.match(stuNumPattern)) {
      alert("Student Number must be an 8-digit number.");
      return false;
  }

  // Validation 3: Check if password matches the confirmation password
  if (password !== cpassword) {
      alert("Passwords do not match.");
      return false;
  }

  // Validation 4: Check if password contains a combination of numbers and letters
  var passwordPattern = /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/;
  if (!password.match(passwordPattern)) {
      alert("Password must contain at least one letter and one number, and be at least 8 characters long.");
      return false;
  }

  var emailValidationPromise = new Promise(function (resolve, reject) {
      fetch("validate-email.php?email=" + encodeURIComponent(email))
          .then(function (response) {
              if (!response.ok) {
                  reject("Error checking email availability");
              }
              return response.json();
          })
          .then(function (json) {
              if (json.available) {
                  resolve();
              } else {
                  reject("Email is already taken");
              }
          })
          .catch(function (error) {
              reject(error);
          });
  });

  // Use Promise.all to wait for all promises to resolve before submitting the form
  Promise.all([emailValidationPromise])
      .then(function () {
          // All validations passed; continue with form submission
          
      })
      .catch(function (errorMessage) {
          alert(errorMessage);
      });

  // If all validations pass, return true to submit the form
  return true;
}

