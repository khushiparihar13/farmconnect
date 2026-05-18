const pages = [
    'joblisting.html',
    'shop.html',
    'community.html'
];

function search() {
    const query = document.getElementById('search-bar').value.toLowerCase();
    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = ''; // Clear previous results

    pages.forEach(page => {
        fetch(page)
            .then(response => response.text())
            .then(data => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(data, 'text/html');
                const textContent = doc.body.textContent || doc.body.innerText;

                if (textContent.toLowerCase().includes(query)) {
                    const resultItem = document.createElement('div');
                    resultItem.innerHTML = <a href="${page}">${page}</a>;
                    resultsContainer.appendChild(resultItem);
                }
            });
    });
}
