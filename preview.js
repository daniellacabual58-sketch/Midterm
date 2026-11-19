const root = document.documentElement;
const storedTheme = localStorage.getItem('midtermPreviewTheme');
if (storedTheme === 'light' || storedTheme === 'dark') root.dataset.theme = storedTheme;
document.getElementById('themeButton').addEventListener('click', () => {
    root.dataset.theme = root.dataset.theme === 'dark' ? 'light' : 'dark';
    localStorage.setItem('midtermPreviewTheme', root.dataset.theme);
});
document.querySelectorAll('[data-filter]').forEach(button => {
    button.addEventListener('click', () => {
        document.querySelectorAll('.project').forEach(card => {
            card.hidden = button.dataset.filter !== 'all' && card.dataset.category !== button.dataset.filter;
        });
    });
});
