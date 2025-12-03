function checkNumber() {
  const number = document.getElementById("numberInput").value;
  const result = document.getElementById("result");

  if (number === "") {
    result.textContent = "⚠️ Please enter a number!";
    result.style.color = "red";
    return;
  }

  if (number % 2 === 0) {
    result.textContent = number + " is EVEN ✅";
    result.style.color = "green";
  } else {
    result.textContent = number + " is ODD 🔹";
    result.style.color = "blue";
  }
}
