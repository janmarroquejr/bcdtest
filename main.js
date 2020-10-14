const checkbox = document.querySelector("input[name=checkbox]");
const submitBtn = document.querySelector(".submit-btn");
const agreeBtn = document.getElementById("agree");

checkbox.addEventListener("change", (e) => {
  if (e.target.checked) {
    submitBtn.disabled = false;
    submitBtn.classList.remove("btn-disabled");
  } else {
    submitBtn.disabled = true;
    submitBtn.classList.add("btn-disabled");
  }
});

agreeBtn.addEventListener("click", () => {
  checkbox.checked = true;
  submitBtn.disabled = false;
  submitBtn.classList.remove("btn-disabled");
});
