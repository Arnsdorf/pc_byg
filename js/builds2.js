// Eksporterer Builds1-klassen som standard (så den kan importeres andre steder)
export default class Builds2 {
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

        // Finder det element i DOM'en med klassen '.gpu'
        const gpu = this.rootElement.querySelector('.gpu');
        gpu.innerHTML = data.component_name;

    }

    // Metode til at hente data fra localStorage
    async getData(){
        // Henter data fra localStorage ved hjælp af nøglen 'gpu'
        // og parser det som JSON, inden det returneres
        return JSON.parse(localStorage.getItem('gpu'));
    }

}