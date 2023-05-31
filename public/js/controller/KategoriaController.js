import AdatFeldolgozModel from "../model/AdatFeldolgozModel.js";
import KategoriasView from "../view/KategoriasView.js";

class KategoriaController{
    constructor(){
        console.log("KategoriaController Hali!")
        const token = $(`meta[name="csrf-token"]`).attr("content");
        const adatFeldolgozModel = new AdatFeldolgozModel;
        this.vegpont = "/kategoriaks";
        adatFeldolgozModel.adatBe(this.vegpont, this.macskaAdatok);
    }
    kategoriaAdatok(tomb){
        const szuloelem = $("header")
        new KategoriasView(tomb, szuloelem);
    }
}

export default KategoriaController;