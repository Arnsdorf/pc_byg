export default class Builds3 {
    constructor() {
        this.rootElement = document.querySelector(".build");
    }

    async init(){
        await this.render();
    }

    async render(){
        const data = await this.getData();


        const cpu = this.rootElement.querySelector('.cpu');
        cpu.innerHTML = data.component_name;


    }


    async getData(){
        return JSON.parse(localStorage.getItem('cpu'));
    }

}