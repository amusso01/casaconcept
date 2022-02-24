import Glide from '@glidejs/glide'

export default function slider(){
  const slider = document.querySelectorAll('.glide')

  slider.forEach(item=>{
    new Glide(item, {
      type: 'carousel',
      autoplay: 5000
    }).mount()
  })
}