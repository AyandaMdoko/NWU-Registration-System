document.getElementById("updatePOR").addEventListener("click", function () {

  const checkboxes = document.querySelectorAll('table#Second-Year-M input[type="checkbox"]');

  const selectedModules = [];

  checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
          selectedModules.push(checkbox.parentElement.nextElementSibling.textContent);
      }
  });

  // Open POR.html with selected modules as a query parameter
  const url = `POR.php?modules=${selectedModules.join(',')}`;
  window.open(url, '_blank');
})

document.getElementById("updatePORE").addEventListener("click", function () {

  const checkboxes = document.querySelectorAll('table#Second-Year-E input[type="checkbox"]');

  const selectedModules = [];

  checkboxes.forEach((checkbox) => {
      if (checkbox.checked) {
          selectedModules.push(checkbox.parentElement.nextElementSibling.textContent);
      }
  });

  // Open POR.html with selected modules as a query parameter
  const url = `POR.php?modules=${selectedModules.join(',')}`;
  window.open(url, '_blank');
})