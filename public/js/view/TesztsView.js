import TesztView from "./TesztView.js";

class TesztsView{
    constructor(tomb, szuloelem){
        console.log("TesztsView Hali!");
        szuloelem.html(`
        <div id="kerdesek">
        </div>`)
        this.divElem = szuloelem.children("div:last-child");
        tomb.forEach(adat => {
            const adatom = new TesztView(adat, this.divElem);
        });
    }
}

export default TesztsView;