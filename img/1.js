// Get references to the input and button elements
const phoneInput = document.getElementById("NoHp");
const ktpInput = document.getElementById("nama-ktp");
const button = document.getElementById("kirim");

// Add event listeners for the input events
phoneInput.addEventListener("input", checkForm);
ktpInput.addEventListener("input", checkForm);

function checkForm() {
  // Check if both input fields have any text
  if (phoneInput.value.length > 9) {
    // If both fields have text, enable the button
    button.disabled = false;
  } else {
    // If either field is empty, disable the button
    button.disabled = true;
  }
}