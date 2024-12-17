const hora = document.getElementById('hora');
const minutos = document.getElementById('minutos');
const segundos = document.getElementById('segundos');
const dia = document.getElementById('dias');
const mes = document.getElementById('mes');
const ano = document.getElementById('ano');

const relogio = setInterval(function time(){

    let hoje = new Date();
    let h = hoje.getHours();
    let m = hoje.getMinutes();
    let s = hoje.getSeconds();
    let d = hoje.getUTCDate() ;
    let me = hoje.getMonth() + 1;
    let a = hoje.getFullYear();


    if (h < 10) h = '0' + h;
    if (m < 10) m = '0' + m;
    if (s < 10) s = '0' + s;


    hora.textContent = h;
    minutos.textContent = m;
    segundos.textContent = s;
    dia.textContent = d;
    mes.textContent = me;
    ano.textContent = a;

})
 