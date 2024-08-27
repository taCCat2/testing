(async function() {
    try {
        const response = await fetch(targetUrl);
        const text = await response.text();
        document.open();
        document.write(text);
        document.close();
    } catch (error) {
        document.body.innerHTML = 'Error fetching content: ' + error.message;
    }
})();
