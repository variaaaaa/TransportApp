var total = 158,
    buttons = document.querySelector('.buttonsSt'),
    pie = document.querySelector('.pieTest'),
    activeClass = 'active';

var continents = {
    Комсомольская: 100,
  ВДНХ: 97,
  Щёлковская: 95,
  Новогиреево: 94,
  Выхино: 92
};

// work out percentage as a result of total
var numberFixer = function(num){
  var result = ((num * total) / 100);
  return result;
}

// create a button for each station
for(property in continents){
  var newEl = document.createElement('buttonSt');
  newEl.innerText = property;
  newEl.setAttribute('data-name', property);
  buttons.appendChild(newEl);
}

// when you click a button setPieChart and setActiveClass
  buttons.addEventListener('click', function(e){
    if(e.target != e.currentTarget){
      var el = e.target,
          name = el.getAttribute('data-name');
      setPieChart(name);
      setActiveClass(el);
    }
    e.stopPropagation();
  });

var setPieChart = function(name){
  var number = continents[name],
      fixedNumber = numberFixer(number),
      result = fixedNumber + ' ' + total;
  
  pie.style.strokeDasharray = result;
}

var setActiveClass = function(el) {
  for(var i = 0; i < buttons.children.length; i++) {
    buttons.children[i].classList.remove(activeClass);
    el.classList.add(activeClass);
  }
}

// Set up default settings
setPieChart('Комсомольская');
setActiveClass(buttons.children[0]);