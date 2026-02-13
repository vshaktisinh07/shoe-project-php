const step1 = document.querySelector(".step1");
const step2 = document.querySelector(".step2");

const emailAddress = document.getElementById("emailAddress");
const verifyEmail = document.getElementById("verifyEmail");

const inputs = document.querySelectorAll(".otp-group input");

const nextbutton = document.querySelector(".nextbutton");
const verifyButton = document.querySelector(".verifyButton");

let generatedOTP = "";

// INIT
window.addEventListener("load", () => {
  emailjs.init("yFtM_OTxEdt38vpFA");

  step2.style.display = "none";
  nextbutton.classList.add("disable");
  verifyButton.classList.remove("disable");
});

// EMAIL VALIDATION
function validateEmail(email) {
  const re = /\S+@\S+\.\S+/;
  if (re.test(email)) {
    nextbutton.classList.remove("disable");
  } else {
    nextbutton.classList.add("disable");
  }
}

// GENERATE OTP
function createOTP() {
  return Math.floor(1000 + Math.random() * 9000).toString();
}

// SEND OTP
const serviceID = "service_rzoxgc6";
const templateID = "template_zeinz3r";

nextbutton.addEventListener("click", () => {
  if (!emailAddress.value) {
    alert("Enter email first");
    return;
  }

  generatedOTP = createOTP();

  const params = {
    from_name: "OTP Service",
    OTP: generatedOTP,
    reply_to: emailAddress.value,
  };

  emailjs.send(serviceID, templateID, params)
    .then(() => {
      alert("OTP Sent!");

      step1.style.display = "none";
      step2.style.display = "block";
      verifyEmail.innerText = emailAddress.value;
    })
    .catch(err => {
      console.log(err);
      alert("Failed to send OTP");
    });
});

// OTP INPUT AUTO MOVE
inputs.forEach((input, index) => {
  input.addEventListener("input", () => {
    if (input.value.length === 1 && index < inputs.length - 1) {
      inputs[index + 1].focus();
    }
  });
});

verifyButton.addEventListener("click", () => {
  let enteredOTP = "";

  inputs.forEach(input => {
    enteredOTP += input.value;
  });

  if (enteredOTP === generatedOTP) {
    alert("OTP Verified ");

    window.location.href = "shoe.php"; 
  } else {
    alert("Wrong OTP ");
  }
});