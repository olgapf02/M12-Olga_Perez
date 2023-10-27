window.addEventListener('scroll', function() {
    var footer = document.querySelector('.footer');
    var windowHeight = window.innerHeight;
    var fullHeight = document.body.scrollHeight;
    var scrolled = window.scrollY;
  
    if (scrolled >= fullHeight - windowHeight) {
      footer.style.display = 'block';
    } else {
      footer.style.display = 'none';
    }
  });
