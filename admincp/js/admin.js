var links =  document.querySelectorAll('li>a');

links.forEach(function(link) {
     link.addEventListener('click', function(){
          link.classList.add('active');
     })
     link.classList.remove('active');
});

var Models = document.querySelector('.model');
function iconAddPr()
{
     Models.style.display = 'flex';
}


function closseAddPr()
{
       Models.style.display = 'none';
}
// var Models = document.querySelector('.modelud');
// function updataPr(){
//      Models.style.display = 'flex';
// }
var Modelsp = document.querySelector('.modelsp');
function iconAddSp()
{
     Modelsp.style.display = 'flex';
}

function closseAddSp()
{
     Modelsp.style.display = 'none';
}

let Modeltt = document.querySelector('.modeltt');
function iconAddTt(){
     Modeltt.style.display = 'flex';
}
let Modeltd = document.querySelector('.modeltd');
function closseAddTd(){
     Modeltd.style.display = 'none';
}

function iconAddTd()
{
     Modeltd.style.display = 'flex';
}