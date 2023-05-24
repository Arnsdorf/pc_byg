export default class Builds {
    constructor() {
        this.rootElement = document.querySelector(".build");
    }

    async init(){
        await this.render();
    }

    async render(){
        const data = await this.getData();


        const storage = this.rootElement.querySelector('.storage_ssd');
        storage.innerHTML = data.component_name;


    }


    async getData(){
        return JSON.parse(localStorage.getItem('storage'));
    }

}

