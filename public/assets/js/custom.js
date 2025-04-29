function toggleTab(tab) {
    var monthlyTabContent = document.getElementsByClassName('monthlyTabContent');
    var annualyTabContent = document.getElementsByClassName('annualyTabContent');
    
    if (tab === 'monthly') {
        for (var i = 0; i < monthlyTabContent.length; i++) {
            monthlyTabContent[i].style.display = 'block';
        }
        for (var i = 0; i < annualyTabContent.length; i++) {
            annualyTabContent[i].style.display = 'none';
        }
        document.getElementById('monthly').classList.add('active');
        document.getElementById('annualy').classList.remove('active');
    } else if (tab === 'annualy') {
        for (var i = 0; i < monthlyTabContent.length; i++) {
            monthlyTabContent[i].style.display = 'none';
        }
        for (var i = 0; i < annualyTabContent.length; i++) {
            annualyTabContent[i].style.display = 'block';
        }
        document.getElementById('monthly').classList.remove('active');
        document.getElementById('annualy').classList.add('active');
    }
    return false; // Prevent default anchor behavior
}
