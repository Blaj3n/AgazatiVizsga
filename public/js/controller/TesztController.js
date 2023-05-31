import AdatFeldolgozModel from "../model/AdatFeldolgozModel.js";
import TesztsView from "../view/TesztsView.js";

class TesztController{
    constructor(){
        console.log("TesztController Hali!")
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel;
        this.vegpont = "/tesztek";
        adatFeldolgozModel.adatBe(this.vegpont, this.macskaAdatok);
    }
    tesztAdatok(tomb){
        const szuloelem = $("article")
        new TesztsView(tomb, szuloelem);
    }
}

export default TesztController;