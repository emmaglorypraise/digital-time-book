const input = document.querySelector('input');
const btn = document.querySelector('button');
const errorMsg = document.querySelector('.errorMsg');
let query = ' ';

btn.addEventListener('click', (e) => {
  e.preventDefault();
  query = input.value;
  console.log("result:", query);
  verifyPassword();
});

function verifyPassword(){
  if(query === "password"){
    console.log("what next?");
    window.location.href = "sign-up.php";
  } else {
    errorMsg.innerHTML = "Error...Try again";
    console.log("Error password...Tufiakwa!");
  }
}