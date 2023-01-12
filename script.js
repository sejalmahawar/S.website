const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');
  
if (bar) {
    bar.addEventListner('click',() => {
      nav.classList.add('active');
    })
}
if (close) {
    bar.addEventListner('click',() => {
      nav.classList.remove('active');
    })
}
