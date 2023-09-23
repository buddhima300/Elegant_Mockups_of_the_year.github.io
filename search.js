const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults').getElementsByTagName('li');

searchInput.addEventListener('input', function() {
  const query = this.value.toLowerCase();

  for (let i = 0; i < searchResults.length; i++) {
    const item = searchResults[i];

    if (item.textContent.toLowerCase().indexOf(query) > -1) {
      item.style.display = '';
    } else {
      item.style.display = 'none';
    }
  }
});
