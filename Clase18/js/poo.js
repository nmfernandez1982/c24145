var auto="Audio";

/*
float ---> aca voy a guardar un dato. --> 1545.34;
Float ---> wrapper --> guardar un dato y hacer otras cosas.
*/ 

//Mi primer objeto
var miAuto=new Object();
miAuto.marca='Renault'
miAuto.tipo='Clio'
miAuto.modelo=2015
console.log("EL auto es:"+miAuto.marca+"-"+miAuto.tipo+"-"+miAuto.modelo);

//otro objeto
var MiSegundoAuto={
    //propiedades
    marca:'Fiat',
    tipo:'Cronos',
    modelo:'2021',
    cantCombustible:4,
    //metodos
    detalleAuto: function(){return "Marca Del Auto:"+this.marca+" Modelo:"+this.modelo},
    acelerar:function()
    {
        if(this.cantCombustible>0)
        {
            this.cantCombustible--; //cantCombustible=cantCombustible-1;
            return "Acelerando , quedan "+this.cantCombustible +" litros de nafta";
        }
        else
        {
            return "hay que cargar nafta";
        }
        
    }
}

//console.log("EL auto es:"+MiSegundoAuto.marca+"-"+MiSegundoAuto.tipo+"-"+MiSegundoAuto.modelo);


console.log(MiSegundoAuto.detalleAuto());
console.log(MiSegundoAuto.acelerar());
console.log(MiSegundoAuto.acelerar());
console.log(MiSegundoAuto.acelerar());
console.log(MiSegundoAuto.acelerar());
console.log(MiSegundoAuto.acelerar());

