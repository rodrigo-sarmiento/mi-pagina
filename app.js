function actualizarReloj() {
    const relojElement = document.getElementById('reloj');
    if (!relojElement) return; // Sale si el elemento no existe
    
    const ahora = new Date();
    const horas = ahora.getHours().toString().padStart(2, '0');
    const minutos = ahora.getMinutes().toString().padStart(2, '0');
    const segundos = ahora.getSeconds().toString().padStart(2, '0');
    relojElement.textContent = `${horas}:${minutos}:${segundos}`;
}

// Solo inicia el intervalo si el elemento existe
if (document.getElementById('reloj')) {
    setInterval(actualizarReloj, 1000);
    actualizarReloj(); // Llama una vez al cargar
}
