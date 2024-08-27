(async function() {
    const url = new URL(window.location.href).searchParams.get('url');
    if (url) {
        try {
            const response = await fetch(url);
            const text = await response.text();
            document.write(text);
        } catch (error) {
            document.write('Error fetching content.');
        }
    } else {
        document.write('No URL provided.');
    }
})();
