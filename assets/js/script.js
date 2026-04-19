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

// Handle posting tabs
const postingTabs = document.querySelectorAll('.posting-tab');
postingTabs.forEach((tab) => {
    tab.addEventListener('click', () => {
        postingTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
    });
});

// Handle posting form submission
const postingForm = document.querySelector('.posting-form');
if (postingForm) {
    postingForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const title = document.getElementById('post-title').value;
        const category = document.getElementById('post-category').value;
        const content = document.getElementById('post-content').value;
        
        if (title.trim() && content.trim()) {
            alert(`Post published!\nTitle: ${title}\nCategory: ${category}`);
            postingForm.reset();
        } else {
            alert('Please fill in both title and content.');
        }
    });
}

// Handle file upload
const fileInput = document.getElementById('post-file');
const fileUploadArea = document.querySelector('.file-upload-area');
if (fileUploadArea) {
    fileUploadArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        fileUploadArea.style.borderColor = 'var(--accent-strong)';
        fileUploadArea.style.backgroundColor = 'rgba(163, 27, 31, 0.12)';
    });
    
    fileUploadArea.addEventListener('dragleave', () => {
        fileUploadArea.style.borderColor = 'var(--border)';
        fileUploadArea.style.backgroundColor = 'rgba(255,214,87,0.08)';
    });
    
    fileUploadArea.addEventListener('drop', (e) => {
        e.preventDefault();
        fileUploadArea.style.borderColor = 'var(--border)';
        fileUploadArea.style.backgroundColor = 'rgba(255,214,87,0.08)';
        
        if (e.dataTransfer.files.length > 0) {
            fileInput.files = e.dataTransfer.files;
        }
    });
}
