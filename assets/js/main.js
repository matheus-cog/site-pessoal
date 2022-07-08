const themeButton = document.getElementById('theme-button');
const darkTheme = 'dark-theme';
const iconTheme = 'ri-sun-line';
const selectedTheme = localStorage.getItem('selected-theme');
const selectedIcon = localStorage.getItem('selected-icon');
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light';
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-moon-line' : iconTheme;

if (selectedTheme) {
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme);
  themeButton.classList[selectedIcon === 'ri-moon-line' ? 'add' : 'remove'](iconTheme);
}

themeButton.addEventListener('click', () => {
    document.body.classList.toggle(darkTheme);
    themeButton.classList.toggle(iconTheme);
    localStorage.setItem('selected-theme', getCurrentTheme());
    localStorage.setItem('selected-icon', getCurrentIcon());
});

document.getElementById("theme-button").click();

function getTimeDifference(date){
    let currentDate = new Date();
    let referenceDate = new Date(date);
    let resultYears = currentDate.getFullYear() - referenceDate.getFullYear();
    let resultMonths = (currentDate.getMonth() - referenceDate.getMonth()) / 12;
    return (resultYears + resultMonths).toFixed(1);
}

dev.innerText = getTimeDifference("2021/02/01");
tech.innerText = getTimeDifference("2006/11/28");
drummer.innerText = getTimeDifference("2017/05/05");

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400
});

sr.reveal(`.profile_border`);
sr.reveal(`.profile_name`, { delay: 500 });
sr.reveal(`.profile_profession`, { delay: 600 });
sr.reveal(`.profile_social`, { delay: 700 });
sr.reveal(`.profile_info-group`, { interval: 100, delay: 700 });
sr.reveal(`.filters_content`, { delay: 800 });
sr.reveal(`.filters`, { delay: 900 });
