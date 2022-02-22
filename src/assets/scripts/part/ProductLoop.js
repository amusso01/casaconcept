export default function productLoop(){
  const figures = document.querySelectorAll('.products .product')

  figures.forEach(element => {
    element.addEventListener('mouseenter',  showBtn)
  })

  figures.forEach(element => {
    element.addEventListener('mouseleave',  hideBtn)
  })

}

function showBtn(e){
  const btn = e.target.children[1]
  btn.style.opacity = 1
  btn.style.pointerEvents = 'all'
}
function hideBtn(e){
  const btn = e.target.children[1]
  btn.style.opacity = 0
  btn.style.pointerEvents = 'none'
}