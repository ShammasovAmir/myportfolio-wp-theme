const menuBtn = document.getElementsByClassName('menu-btn')
const mobileMenu = document.getElementsByClassName('mobile-menu')
const mobileMenuLinks = document.querySelectorAll('.mobile-menu a')

const clickedBtn = () => mobileMenu[0].classList.toggle('active')

menuBtn[0].addEventListener('click', clickedBtn)

mobileMenuLinks.forEach((mobileMenuLink) =>
  mobileMenuLink.addEventListener('click', () =>
    mobileMenu[0].classList.remove('active')
  )
)

// console.log(menuBtn[0])
