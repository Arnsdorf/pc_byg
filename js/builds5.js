export default class Builds5 {
    constructor() {
        this.rootElement = document.querySelector(".build");
    }

    async init(){
        await this.render();
    }

    async render(){
        const data = await this.getData();


        const ram = this.rootElement.querySelector('.ram');
        ram.innerHTML = data.component_name;


    }


    async getData(){
        return JSON.parse(localStorage.getItem('ram'));
    }

}