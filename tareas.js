function fHora(){
    vDate = new Date();
    vNumHora= ceroantes(vDate.getHours());
    vMinutos= ceroantes(vDate.getMinutes());
    vSegundos = ceroantes(vDate.getSeconds());   
    vHora= vNumHora + ":" + vMinutos + ":" + vSegundos;
    document.getElementById('txtHora').value = vHora;
    window.setTimeout('fHora()',1000);
}
/* function fFechaHora(){
    vAno = vDate.getFullYear();
    vMes = ceroantes(vDate.getMonth() + 1);
    vDia = ceroantes(vDate.getDate());
    vFecha = vAno + "-" +vMes +"-"+ vDia;
    document.getElementById('txtHora').value = vFecha + " " + vHora;
} */

function ceroantes(vNumero){
    return (vNumero < 10 ? '0' : '') + vNumero;
}

window.onload = function(){window.setTimeout('fHora()',1);}
