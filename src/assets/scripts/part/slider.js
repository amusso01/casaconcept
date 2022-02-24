import Glide from '@glidejs/glide'

const slider = document.querySelectorAll('.glide')

slider.forEach(item=>{
  new Glide(item, {
    type: 'carousel',
    autoplay: 5000
  }).mount()
})