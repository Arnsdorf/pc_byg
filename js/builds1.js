// Eksporterer Builds1-klassen som standard (så den kan importeres andre steder)
export default class Builds1 {
    constructor() {
        this.rootElement = document.querySelector(".build");
    }

    // Initialiserer metode - kaldes for at starte rendering
    async init(){
        await this.render();
    }

    // Renderingsmetode - henter data og opdaterer DOM'en
    async render(){
        // Henter data ved at kalde getData-metoden
        const data = await this.getData();

        // Finder det element i DOM'en med klassen '.cabinet'
        const cabinet = this.rootElement.querySelector('.cabinet');

        // Opdaterer indholdet af 'cabinet'-elementet med 'component_name' fra data
        cabinet.innerHTML = data.component_name;
    }

    // Metode til at hente data fra localStorage
    async getData(){
        // Henter data fra localStorage ved hjælp af nøglen 'case'
        // og parser det som JSON, inden det returneres
        return JSON.parse(localStorage.getItem('case'));
    }
}
