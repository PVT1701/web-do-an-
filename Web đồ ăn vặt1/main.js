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

  let cart = [];

// Hàm thêm sản phẩm vào giỏ hàng
function addToCart(productName, productPrice, productImage) {
    // Tạo đối tượng sản phẩm
    let product = {
        name: productName,
        price: productPrice,
        image: productImage
    };

    // Lấy giỏ hàng hiện tại từ localStorage, nếu không có thì khởi tạo giỏ hàng mới
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Thêm sản phẩm vào giỏ hàng
    cart.push(product);

    // Lưu giỏ hàng vào localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Cập nhật giỏ hàng hiển thị trên icon giỏ hàng
    updateCart();  // Hàm này sẽ sử dụng số lượng sản phẩm trong giỏ hàng để cập nhật

    // Hiển thị thông báo
    showNotification(productName + " đã được thêm vào giỏ hàng!");
}

// Hàm hiển thị thông báo
function showNotification(message) {
    // Tìm hoặc tạo phần tử thông báo
    let notification = document.getElementById('notification');
    if (!notification) {
        notification = document.createElement('div');
        notification.id = 'notification';
        document.body.appendChild(notification);
    }

    // Đặt nội dung và hiển thị
    notification.textContent = message;
    notification.classList.add('show');

    // Ẩn thông báo sau 2 giây
    setTimeout(() => {
        notification.classList.remove('show');
    }, 1000);
}

// Hàm cập nhật giỏ hàng hiển thị trên biểu tượng giỏ hàng
function updateCart() {
    // Lấy giỏ hàng từ localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Cập nhật số lượng sản phẩm trong giỏ
    const cartCount = cart.length;
    document.getElementById('cart-count').textContent = cartCount;

    // Cập nhật tooltip dựa trên số lượng sản phẩm trong giỏ
    updateCartCount(cartCount);
}

// Hàm cập nhật thông báo giỏ hàng
function updateCartCount(count) {
    const cartTooltip = document.querySelector('.cart-tooltip');
    
    if (count > 0) {
        cartTooltip.textContent = "Có sản phẩm trong giỏ hàng.";  // Thông báo có sản phẩm
        cartTooltip.classList.remove('empty');  // Loại bỏ lớp "empty" khi có sản phẩm
    } else {
        cartTooltip.textContent = "Không có sản phẩm nào trong giỏ hàng.";  // Thông báo giỏ trống
        cartTooltip.classList.add('empty');  // Thêm lớp "empty" khi giỏ trống
    }
}

// Cập nhật giỏ hàng khi trang được tải
window.onload = function() {
    updateCart();  // Cập nhật giỏ hàng khi trang được tải
};
