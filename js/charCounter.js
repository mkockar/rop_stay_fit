let current = document.getElementById("charcount");
const textarea = document.getElementById("msg");

textarea.addEventListener("input", () => {
  const numOfChars = textarea.value.length;
  current.innerHTML = numOfChars;
  
});