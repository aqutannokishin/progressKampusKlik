
const toc = document.getElementById('toc');

toggleToc.addEventListener('click', function() {

  if (toc.style.display === 'none') {
    toc.style.display = 'block';
    this.textContent = 'Hide';
  } else {
    toc.style.display = 'none';
    this.textContent = 'Show';
  }
});
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
  
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  

  