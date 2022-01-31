/**
 * Calls a supplied function once
 * document has loaded.
 *
 * @param  {CallableFunction} onReady
 * @return {void}
 */
export const domReady = (onReady) => {
  window.requestAnimationFrame(function check() {
    document.body ? onReady() : window.requestAnimationFrame(check);
  });
};

var button = document.getElementById("add")

button.addEventListener('click', function() {
  var inputVal = document.getElementById("grid-task").value; //text out of input

  var li = document.createElement("li"); //creat a new li
  var t = document.createTextNode(inputVal); //create text of the input
  li.appendChild(t); //bind text to li

  document.getElementById("output").appendChild(li); //bind the li to the ul

  document.getElementById("grid-task").value = "";

 // document.getElementById("output").appendChild(inputVal);
}, false);
