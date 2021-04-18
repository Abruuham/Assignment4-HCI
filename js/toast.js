
$(document).ready(function() {
    var child = document.getElementById('clonemother');
    var clone = child.cloneNode(true);
    
    var ls = localStorage.getItem('namespace.visited');
    if (ls == null) {
    localStorage.setItem('namespace.visited', 1)

    

    var node = document.getElementById("toasts").appendChild(clone);
    
    setTimeout(function() {
      if(node) {
        node.childNodes[1].childNodes[5].childNodes[1].innerHTML = "Update the status of your homework to stay ahead!"
      }
    },2000);
    setTimeout(function() {
      if(node) {
        node.style.animation = "toast .9s ease-out forwards";
        setTimeout(() => {node.remove();} ,2000);
      }
    },5000);
}

  })
 
  
  function deletethis() {
    var e = window.event;
    var grand = e.target.parentNode.parentNode;
    grand.style.animation = "toast .9s ease-out forwards";
    setTimeout(() => {grand.remove();} ,2000);
  }