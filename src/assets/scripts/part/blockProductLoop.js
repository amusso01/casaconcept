export default function blockProductLoop(){
  const figures =  document.querySelectorAll('.wc-block-grid__products .wc-block-grid__product')

  figures.forEach(element => {
    element.addEventListener('mouseenter',  showBtn)
  })

  figures.forEach(element => {
    element.addEventListener('mouseleave',  hideBtn)
  })

}

function showBtn(e){
  const btn = e.target.children[e.target.children.length - 1].children[0]
  btn.style.opacity = 1
  btn.style.pointerEvents = 'all'
}
function hideBtn(e){
  const btn = e.target.children[e.target.children.length - 1].children[0]
  btn.style.opacity = 0
  btn.style.pointerEvents = 'none'
}