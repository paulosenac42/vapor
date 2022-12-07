// FUNÇÃO PARA MOSTRAR O RELOGIO

function obterDataHoraAtual() {
    const data = new Date()
    let horas = data.getHours()
    let minutos = data.getMinutes()
    let segundos = data.getSeconds()
    let dia = data.getDate() 
    let mes = data.getMonth()+1
    let ano = data.getFullYear()
    
    if(horas <= 9) {
      horas = "0" + hora
    }
  
    if(minutos <= 9) {
      minutos = "0" + minutos
    }
  
    if(segundos <= 9) {
      segundos = "0" + segundos
    }
  
  
    let dataAtual = dia + "/" + mes + "/" + ano + " - " + horas + ":" + minutos + ":" + segundos; 
  
  
    return dataAtual
  }

  function updateClock() {

    const clock = document.getElementById('clock')
    clock.innerHTML = obterDataHoraAtual()

    setInterval(function () {
      clock.innerHTML = obterDataHoraAtual()
      1000
    })

  }

  //FUNÇÃO PARA MUDAR AS CORES

  
function cor_aleatorio(){
const r = Math.floor(Math.random() * 256)
const g = Math.floor(Math.random() * 256)
const b = Math.floor(Math.random() * 256)
const cor = "rgb(" + r + "," + g + "," + b + ")" 
document.getElementById("header").style.color = cor


}

  function iniciar_mudanca_de_cor(){
    setInterval(cor_aleatorio, 1000)
  }
    

    
  
  function transformar_texto_em_maiusculo(elemento){
    elemento.value = elemento.value.toUpperCase()
  }

  

    function transformar_primeira_letra_em_maiusculo(elemento){
    elemento.value = elemento.value[0].toUpperCase() + elemento.value.slice(1).toLowerCase()
  }
    
