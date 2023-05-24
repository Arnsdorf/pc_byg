export default class Builds1 {
    constructor() {
        this.rootElement = document.querySelector(".build");
    }

    async init(){
        await this.render();
    }

    async render(){
        const data = await this.getData();


        const cabinet = this.rootElement.querySelector('.cabinet');
        cabinet.innerHTML = data.component_name;

    }


    async getData(){
        return JSON.parse(localStorage.getItem('case'));
    }

}