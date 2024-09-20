const translations = {
    en: {
        header: "Welcome",
        text: "Hello, world!"
    },
    fr: {
        header: "Bienvenue",
        text: "Bonjour, le monde!"
    },
    es: {
        header: "Bienvenido",
        text: "¡Hola, mundo!"
    }
};

function changeLanguage(lang) {
    document.getElementById('header').innerText = translations[lang].header;
    document.getElementById('text').innerText = translations[lang].text;
}
