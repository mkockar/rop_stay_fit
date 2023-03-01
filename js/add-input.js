const addBtn = document.querySelector(".delete-image");

const input = document.querySelector("tbody");

function removeInput() {
  this.parentElement.parentElement.remove();
}

function addInput() {
  const ingredientWrapper = document.createElement("td");
  const weightWrapper = document.createElement("td");
  const delWrapper = document.createElement("td");

  const ingredientLabel = document.createElement("label");
  ingredientLabel.htmlFor = "ingredient";
  ingredientLabel.innerHTML = "Ingrediencia";

  const weightLabel = document.createElement("label");
  weightLabel.htmlFor = "weight";
  weightLabel.id = "weight";
  weightLabel.innerHTML = "Gramáž";

  const ingredientInput = document.createElement("input");
  ingredientInput.type = "text";
  ingredientInput.setAttribute("name", "ingredient[]");
  ingredientInput.id = "ingredient";
  ingredientInput.placeholder = "Ingrediencia";

  const weightInput = document.createElement("input");
  weightInput.type = "text";
  weightInput.setAttribute("name", "weight[]");
  weightInput.id = "weight";
  weightInput.placeholder = "Gramáž";

  const delImg = document.createElement("img");
  delImg.src = "./media/icons/delete-admin.png";

  delImg.addEventListener("click", removeInput);

  ingredientWrapper.appendChild(ingredientLabel);
  ingredientWrapper.appendChild(ingredientInput);

  weightWrapper.appendChild(weightLabel);
  weightWrapper.appendChild(weightInput);

  delWrapper.appendChild(delImg);

  const row = document.createElement("tr");
  row.className = "input-box";
  input.appendChild(row);
  row.appendChild(ingredientWrapper);
  row.appendChild(weightWrapper);
  row.appendChild(delWrapper);
}

addBtn.addEventListener("click", addInput);
