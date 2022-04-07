
class Urlap {

    constructor(elem, adat) {

        this.elem = elem;
        this.adat = adat;

        this.osztaly = this.elem.children("#osztalyok").children("option");
        this.tevekenyseg = this.elem.children("#tevekenysegek").children("option");


        this.setAdatok(this.adat);
    }


    setAdatok(adat) {

        adat.forEach(element => {
            

        });
    }

}