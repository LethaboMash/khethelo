function showTab(tabName) {
    // Hide all tab lists
    const tabLists = document.querySelectorAll('.tab-list');
    tabLists.forEach(tab => {
        tab.style.display = 'none';
    });

    // Remove active link from all tab links
    const tabLinks = document.querySelectorAll('.tab-links');
    tabLinks.forEach(link => {
        link.classList.remove('active-link');
    });

    // Show the selected tab and add active class to the clicked tab
    document.getElementById(tabName).style.display = 'block';
    document.querySelector(`.tab-links[onclick="showTab('${tabName}')"]`).classList.add('active-link');
}

// Show the skills tab by default
showTab('skills');
