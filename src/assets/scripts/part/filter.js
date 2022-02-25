export default function filter() {
	const filterCta = document.getElementById("filter__cta");
	const filterClose = document.getElementById("filter__close");
    const filterDrawer = document.querySelector(".filter__wrapper");
    const overlay = document.querySelector(".archive-store__inner");
    
    filterCta.addEventListener('click', ()=>{
        filterDrawer.classList.add('open');
        overlay.classList.add('open');
    });

    filterClose.addEventListener('click', ()=>{
        filterDrawer.classList.remove('open');
        overlay.classList.remove('open');
    })

    // CLose filter if click outside
    const page = document.querySelector('.archive-store__inner')

    page.addEventListener('click' , (e)=>{
        if(e.target.className === "archive-store__inner content-block open"){
            filterDrawer.classList.remove('open');
            overlay.classList.remove('open');
        }
    })
    
    
}