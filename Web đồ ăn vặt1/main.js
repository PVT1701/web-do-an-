let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 3000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};



//tim kiem
function toggleSearch() {
    const searchBar = document.querySelector('.search-bar');
    searchBar.classList.toggle('active');
  }
  
  function toggleMenu() {
    const userMenu = document.querySelector('.user-menu');
    userMenu.classList.toggle('show');
  }
  
//dang nhap dang ky
function toggleMenu() {
    const menu = document.querySelector('.user-menu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
  }
  
  // Đóng menu khi nhấp ra ngoài
  document.addEventListener('click', function(event) {
    const menu = document.querySelector('.user-menu');
    const icon = document.querySelector('.user-icon');
    
    if (!menu.contains(event.target) && !icon.contains(event.target)) {
      menu.style.display = 'none';
    }
  });
  