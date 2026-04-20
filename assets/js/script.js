const body = document.body;
const themeToggle = document.getElementById('themeToggle');
const pageThemeSwitch = document.getElementById('pageThemeSwitch');
const storedTheme = localStorage.getItem('olshcoTheme');

const applyTheme = (isDark) => {
    body.classList.toggle('dark', isDark);
    if (themeToggle) {
        themeToggle.textContent = isDark ? 'Light Mode' : 'Dark Mode';
    }
    if (pageThemeSwitch) {
        pageThemeSwitch.checked = isDark;
    }
};

if (storedTheme === 'dark') {
    applyTheme(true);
} else {
    applyTheme(false);
}

themeToggle?.addEventListener('click', () => {
    const isDark = body.classList.toggle('dark');
    themeToggle.textContent = isDark ? 'Light Mode' : 'Dark Mode';
    updatePageSwitch(isDark);
    localStorage.setItem('olshcoTheme', isDark ? 'dark' : 'light');
});

if (pageThemeSwitch) {
    pageThemeSwitch.checked = body.classList.contains('dark');
    pageThemeSwitch.addEventListener('change', () => {
        const isDark = pageThemeSwitch.checked;
        applyTheme(isDark);
        localStorage.setItem('olshcoTheme', isDark ? 'dark' : 'light');
    });
}

function updatePageSwitch(isDark) {
    if (pageThemeSwitch) {
        pageThemeSwitch.checked = isDark;
    }
}

const postingTabs = document.querySelectorAll('.posting-tab');
const viewSections = document.querySelectorAll('.view-section');
postingTabs.forEach((tab, index) => {
    tab.addEventListener('click', () => {
        postingTabs.forEach(t => t.classList.remove('active'));
        viewSections.forEach(section => section.classList.remove('active'));
        tab.classList.add('active');
        if (viewSections[index]) {
            viewSections[index].classList.add('active');
        }
    });
});