document.addEventListener("DOMContentLoaded", function() {
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const resetButton = document.getElementById('resetButton');
    const serviceContainer = document.getElementById('serviceContainer');
    
    let allCards = document.querySelectorAll('.card');
    
    searchButton.addEventListener('click', function() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        if (searchTerm === '') return;
        
        allCards.forEach(function(card) {
            if (card.id.toLowerCase().includes(searchTerm)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
        
        resetButton.style.display = 'inline-block';
    });
    
    resetButton.addEventListener('click', function() {
        allCards.forEach(function(card) {
            card.style.display = 'block';
        });
        resetButton.style.display = 'none';
        searchInput.value = '';
    });
});