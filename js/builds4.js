export default class Builds4 {
    constructor() {
        this.rootElement = document.querySelector(".build");
    }

    async init(){
        await this.render();
    }

    async render(){
        const data = await this.getData();


        const motherboard = this.rootElement.querySelector('.motherboard');
        motherboard.innerHTML = data.component_name;


    }


    async getData(){
        return JSON.parse(localStorage.getItem('motherboard'));
    }

}