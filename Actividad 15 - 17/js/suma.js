class Suma {
    constructor() {
        this.valor1 = 0;
        this.valor2 = 0;
    }
    
    primerValor(v) {
        this.valor1 = v;
    }
    
    segundoValor(v) {
        this.valor2 = v;
    }
    
    retornarResultado() {
        return this.valor1 + this.valor2;
    }
}

let s = new Suma();
s.primerValor(10);
s.segundoValor(20);
document.write('La suma de los dos valores es: ' + s.retornarResultado());