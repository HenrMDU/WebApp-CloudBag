// Create a "close" button and add (append) it to each list item
var addClose = document.getElementsByClassName('listItem'); //addClose = elements with the class="itemList"
var i;
for (i = 0; i < addClose.length; i++) { //???------------
  var span = document.createElement ('SPAN'); //Create <span>
  var txt = document.createTextNode('\u00D7'); //add text "symbol x"
  span.className = 'close'; //add class="close"
  span.appendChild(txt); //<span> apply "txt" variable in it
  addClose[i].appendChild(span); //run array
}

// Click on a close button to delete the list item
var close = document.getElementsByClassName('close'); //close = elements with the class="close"
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() { //????-------------
    var div = this.parentElement; //div = the span with class="close" is inside an li element (the parent)
    div.style.display = 'none';
  };
}

// Add a "checked" symbol when clicking on a list item
var checked = document.getElementById('fullList');
checked.addEventListener('click', function(ev) {
  ev.target.classList.toggle('checked');
}, false);

// Create a new list item when clicking on the "Add" button
function addItem() {
  var listItem = document.createElement('li'); //create li elements
  var itemName = document.getElementById('inputItem').value; //inputItem = the element with id="inputItem" + its value (what's written in the input)
  var t = document.createTextNode(itemName);
  listItem.appendChild(t); //elements in an element with the class listItem
  if (itemName === '') {
    alert('You have to write something');
  } else {
    document.getElementById('fullList').appendChild(listItem);
  }
  document.getElementById('inputItem').value = ''; //get the value of the element with id="inputItem"

  //Create close button again
  var span = document.createElement ('SPAN');
  var txt = document.createTextNode('\u00D7');
  span.className = 'close';
  span.appendChild(txt);
  listItem.appendChild(span);

  //when you click the close button display none
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() { //????-------------
      var div = this.parentElement; //div = the span with class="close" is inside an li element (the parent)
      div.style.display = 'none';
    };
  }
}
//Fundet ved w3school gennem denne link https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp
function myFunction() {
    var x = document.getElementById('fullList');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}