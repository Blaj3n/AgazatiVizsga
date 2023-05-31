class TesztView{
    #elem;
    constructor(elem, szuloelem){
        console.log("TesztView Hali!");
        this.#elem = elem;
        szuloelem.append(`
        <div class="kerdes">
            <h2>${elem.kerdes}</h2>
            <button>${elem.v1}</button>
            <button>${elem.v2}</button>
            <button>${elem.v3}</button>
            <button>${elem.v4}</button>
        </div>
        `)
    }
}

export default TesztView;