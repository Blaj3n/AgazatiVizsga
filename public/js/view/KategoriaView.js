class KategoriaView {
    #elem;
    constructor(elem, szuloelem) {
        console.log("KategoriaView Hali!");
        this.#elem = elem;
        szuloelem.append(`
        <select class="kategoria">
            <option>${elem.kategorianev}</option>
            <option>${elem.kategorianev}</option>
            <option>${elem.kategorianev}</option>
            <option>${elem.kategorianev}</option>
        </select>
        `);
    }
}
export default KategoriaView;
