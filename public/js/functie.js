// Deze functie schakelt tussen lichte en donkere modus door de achtergrond en tekstkleur van het body-element rechtstreeks te wijzigen
function toggleDarkMode() {
    var body = document.body;

    // Controleer of de huidige achtergrondkleur donker is om te bepalen of donkere modus actief is
    if (body.style.backgroundColor === "rgb(30, 30, 30)") { // Als donkere modus actief is
        // Verander de achtergrondkleur naar lichte modus
        body.style.backgroundColor = "#ffffff"; // Lichtmodus achtergrondkleur
        // Verander de tekstkleur naar lichte modus
        body.style.color = "#000000"; // Lichtmodus tekstkleur
    } else {
        // Verander de achtergrondkleur naar donkere modus
        body.style.backgroundColor = "#1e1e1e"; // Donkere modus achtergrondkleur
        // Verander de tekstkleur naar donkere modus
        body.style.color = "#ffffff"; // Donkere modus tekstkleur
    }
}
