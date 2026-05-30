
  //function to show sidebar
  function showSidebar(){
    const sidebar = document.querySelector('.sidebar')
    sidebar.style.display = 'flex'
}

//function to hide sidebar
function hideSidebar(){
  const hidesidebar = document.querySelector('.sidebar')
  hidesidebar.style.display = 'none'
}


document.addEventListener("DOMContentLoaded", () => {

  const progressBars = document.querySelectorAll(".progress");

  const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

      if(entry.isIntersecting){

        entry.target.classList.add("animate");

      }

    });

  }, {
    threshold: 0.5
  });

  progressBars.forEach(bar => {
    observer.observe(bar);
  });

});



const detailButtons = document.querySelectorAll('.details-btn');
const modals = document.querySelectorAll('.project-modal');
const closeButtons = document.querySelectorAll('.close-btn');

detailButtons.forEach((btn, index) => {

    btn.addEventListener('click', () => {
        modals[index].style.display = 'flex';
    });

});

closeButtons.forEach((btn, index) => {

    btn.addEventListener('click', () => {
        modals[index].style.display = 'none';
    });

});

window.addEventListener('click', (e) => {

    modals.forEach((modal) => {

        if(e.target === modal){
            modal.style.display = 'none';
        }

    });

});