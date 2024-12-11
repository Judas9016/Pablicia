popupWhatsApp = () => {
  
    let btnClosePopup = document.querySelector('.closePopup');
    let btnOpenPopup = document.querySelector('.whatsapp-button');
    let popup = document.querySelector('.popup-whatsapp');
    let sendBtn = document.getElementById('send-btn');
  
    btnClosePopup.addEventListener("click",  () => {
      popup.classList.toggle('is-active-whatsapp-popup')
    })
    
    btnOpenPopup.addEventListener("click",  () => {
      popup.classList.toggle('is-active-whatsapp-popup')
       popup.style.animation = "fadeIn .6s 0.0s both";
    })
    
    sendBtn.addEventListener("click", () => {
    let msg = document.getElementById('whats-in').value;
    let relmsg = msg.replace(/ /g,"%20");
       
     window.open('https://wa.me/521557153381?text='+relmsg, '_blank'); 
    
    });
  
    setTimeout(() => {
      popup.classList.toggle('is-active-whatsapp-popup');
    }, 3000);
  }
  
  popupWhatsApp();

   // Función para volver al inicio
   function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }

  /* funcionalidad de formulario */
  function validateForm() {
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const message = document.getElementById('message').value.trim();
  
    // Validación del nombre
    if (name === '') {
      alert('Por favor, ingrese su nombre.');
      return false;
    }
  
    // Validación del correo
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
      alert('Por favor, ingrese un correo electrónico válido.');
      return false;
    }
  
    // Validación del teléfono
    const phonePattern = /^[0-9]{7,15}$/;
    if (!phonePattern.test(phone)) {
      alert('Por favor, ingrese un número de teléfono válido (solo números, 7-15 dígitos).');
      return false;
    }
  
    // Validación del mensaje
    if (message === '') {
      alert('Por favor, ingrese un mensaje.');
      return false;
    }
  
    alert('Formulario enviado exitosamente.');
    return true; // Permite el envío del formulario si todo es válido
  }
  