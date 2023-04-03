<script>
  // Get the button
const toggleButton = document.querySelector('.navbar-toggler');

// Add an event listener to the button
toggleButton.addEventListener('click', function() {

  // Get the navbar collapse element
  const navbarCollapse = document.getElementById('navbarHeader');

  // Toggle the class 'show' on the navbar collapse element
  navbarCollapse.classList.toggle('show');
});

</script>
</body>

</html>