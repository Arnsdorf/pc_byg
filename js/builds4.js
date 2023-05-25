// Eksporterer Builds1-klassen som standard (så den kan importeres andre steder)
export default class Builds4 {
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

        // Finder det element i DOM'en med klassen '.motherboard'
        const motherboard = this.rootElement.querySelector('.motherboard');
        motherboard.innerHTML = data.component_name;
    }

    // Metode til at hente data fra localStorage
    async getData(){
        // Henter data fra localStorage ved hjælp af nøglen 'motherboard'
        // og parser det som JSON, inden det returneres
        return JSON.parse(localStorage.getItem('motherboard'));
    }

}