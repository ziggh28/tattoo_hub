document.addEventListener('DOMContentLoaded', () => {
    const styleSearch = document.getElementById('styleSearch');
    const styleList = document.getElementById('styleList');
    const styles = styleList.getElementsByTagName('li');

    styleSearch.addEventListener('keyup', () => {
        const filter = styleSearch.value.toLowerCase();

        Array.from(styles).forEach(style => {
            const text = style.textContent || style.innerText;
            if (text.toLowerCase().indexOf(filter) > -1) {
                style.style.display = '';
            } else {
                style.style.display = 'none';
            }
        });
    });
});

