export default class Builds2 {
    constructor() {
        this.rootElement = document.querySelector(".build");
    }

    async init(){
        await this.render();
    }

    async render(){
        const data = await this.getData();


        const gpu = this.rootElement.querySelector('.gpu');
        gpu.innerHTML = data.component_name;

    }


    async getData(){
        return JSON.parse(localStorage.getItem('gpu'));
    }

}