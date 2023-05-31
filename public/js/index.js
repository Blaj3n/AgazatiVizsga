import TesztController from "./controller/TesztController.js";
import KategoriaController from "./controller/KategoriaController.js";


$(function () {
    console.log("index.js");
    new KategoriaController();
    new TesztController();
});