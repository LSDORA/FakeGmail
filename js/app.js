function changeSection(sectionName) {
    document.querySelectorAll('section').forEach(section => {
        section.style.zIndex = 1;
        section.style.display = 'none'
    });
    if (sectionName == 'create'){
    document.querySelector('.acceuil').style.zIndex = 5;
    document.querySelector('.acceuil').style.display = 'block';  
    }
    document.querySelector('.' + sectionName).style.zIndex = 5;
    document.querySelector('.' + sectionName).style.display = 'block';
    
    
}

