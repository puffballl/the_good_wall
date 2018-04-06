let random = ["urine","kak"]

function mijnFunctie(argument) {

  let groet = Math.floor(Math.random()*argument.length);
  return argument[groet];
}

window.addEventListener("load", function(event) {
  console.log("All resources finished loading!");
});
document.getElementById('demo').innerHTML = mijnFunctie(random);
})
