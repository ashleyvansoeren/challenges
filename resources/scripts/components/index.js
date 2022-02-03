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

var button = document.getElementById("add");

button.addEventListener('click', function() {
  var inputVal = document.getElementById("grid-task").value; //text out of input

  var li = document.createElement("li"); //create a new li
      li.id = 'taskitem'; //set id for li
      li.setAttribute("class", "w-full max-w-md relative odd:bg-sky-200 py-2 px-8 text-black hover:border-2 hover:border-sky-500 hover:odd:border-2 hover:odd:border-sky-400 pointer-events-auto before:invisible"); //sets class for li
      var t = document.createTextNode(inputVal); //create text of the input
  li.appendChild(t); //bind text to li

  document.getElementById("output").appendChild(li); //bind the li to the ul
  document.getElementById("grid-task").value = "";

  var btn = li.appendChild(document.createElement(`button`));
  var iconclose = btn.appendChild(document.createElement(`i`));
  btn.setAttribute("class", "absolute right-0 top-0 hover:bg-red-600 h-10 w-10 px-4"); //set class btn
  iconclose.setAttribute("class", "fas fa-times"); //set class icon

  var icondone = li.appendChild(document.createElement(`i`)); //create i for the check icon
  icondone.setAttribute("class", "fas fa-check absolute left-2.5 top-3 invisible"); //set class for the check icon
  li.appendChild(icondone); //bind i to the li el

}, false);

var list = document.querySelector('ul');

list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle("line-through");
    //ev.target.classList.toggle("before:invisible"); this gives line trough check

  }

  if (ev.target.tagName === 'BUTTON') {
    ev.target.parentElement.classList.toggle("hidden"); //remove the li when clicked on close button
  }
}, false);
