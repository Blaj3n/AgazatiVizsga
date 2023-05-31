import KategoriaView from "./KategoriaView.js";

class KategoriasView{
    constructor(tomb, szuloelem){
        console.log("KategoriasView Hali");
        szuloelem.html(`
        <div id="kategoriak">
        </div>`)
        this.divElem = szuloelem.children("div:last-child");
        tomb.forEach(adat => {
            const adatom = new KategoriaView(adat, this.divElem);
        });
    }
}

export default KategoriasView;