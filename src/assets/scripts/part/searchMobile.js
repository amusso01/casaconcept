export default function searchMobile() {
	const searchIcon = document.getElementById("searchMobile");
	const searchMobile= document.getElementById("searchformMobile");

  searchIcon.addEventListener('click', ()=>{
    console.log(searchMobile);
    searchMobile.classList.toggle('is-active')
  })

}
