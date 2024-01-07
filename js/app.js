function changeSection(sectionName) {
    document.querySelectorAll('section').forEach(section => {
        section.style.zIndex = 1;
        section.style.opacity = 0;
    });
    document.querySelector('.' + sectionName).style.zIndex = 5;
    document.querySelector('.' + sectionName).style.opacity = 1;
}

