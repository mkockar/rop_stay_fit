const form = document.getElementById("form");
const fname = document.getElementById("fname");
const lname = document.getElementById("lname");
const email = document.getElementById("email");
const msg = document.getElementById("msg");
// const successMsg = document.getElementsByClassName("success-msg");
// const countSuccess = 0;

form.addEventListener("submit", (e) => {
  e.preventDefault();

  checkInputs();
});

function checkInputs() {
  //get values from inputs
  const fnameValue = fname.value.trim();
  const lnameValue = lname.value.trim();
  const emailValue = email.value.trim();
  const msgValue = msg.value.trim();

  if (fnameValue === "") {
    //add error class
    setErrorFor(fname, "Prosím napíš svoje krstné meno");
  } else {
    //add success class
    setSuccessFor(fname);
    //countSuccess++;
  }

  if (lnameValue === "") {
    //add error class
    setErrorFor(lname, "Prosím napíš svoje priezvisko");
  } else {
    //add success class
    setSuccessFor(lname);
    //countSuccess++;
  }

  if (emailValue === "") {
    setErrorFor(email, "Prosím zadaj svoju e-mailovú adresu");
  } else if (!isEmail(emailValue)) {
    setErrorFor(email, "Prosím použi platnú e-mailovú adresu");
  } else {
    setSuccessFor(email);
    //countSuccess++;
  }

  if (msgValue.length < 20) {
    setErrorFor(msg, "Správa musí obsahovať minimálne 20 znakov");
  } else {
    setSuccessFor(msg);
    //countSuccess++;
  }

//   if (countSuccess === 4) {
//     successMsg.className = 'success-msg success';
//   }
}

function setErrorFor(input, message) {
  //returns parent of input == inputBox
  const inputBox = input.parentElement;
  const errorMsg = inputBox.querySelector(".error-msg");

  //adds error message
  errorMsg.innerText = message;

  //inputBox.classList.add('error');
  inputBox.className = "inputBox error";
}

function setSuccessFor(input) {
  const inputBox = input.parentElement;

  inputBox.className = "inputBox success";
}

function isEmail(email) {
  return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(
    email
  );
}
