// Cargar
function cargar(){
  $('#loader').fadeIn();
}
// Descargar
function descargar(){
  $('#loader').fadeOut();
}
// carga asincronica de las imagenes
var bLazy = new Blazy({ 
  selector: '.lazyImg' // all images
});

// Gestos en Movil
 var consulta = window.matchMedia('(max-width: 990px)');
 consulta.addListener(mediaQuery);

 var $burguerButton = document.getElementById('burguer-button');
 var $menu = document.getElementById('menu');
 function toggleMenu(){
   $menu.classList.toggle('active-menu');
 };
 function showMenu(){
  $menu.classList.add('active-menu');
 };
 function hideMenu(){
   $menu.classList.remove('active-menu');
 };

 function mediaQuery() {
   if (consulta.matches) {
           // si se cumple hagamos esto
           console.log('se cumplió la condicion');
           $burguerButton.addEventListener('touchstart', toggleMenu);
         } else {
          $burguerButton.removeEventListener('touchstart', toggleMenu);
           // si no se cumple hagamos esto
          console.log('no se cumplió la condicion');
         }
       }
mediaQuery();
// Gestos touch
var $body = document.body;

var gestos = new Hammer($body);
gestos.on('swipeleft', hideMenu);
gestos.on('swiperight', showMenu);

//  MODAL

$('#viewModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('src') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('.modal-body img').attr('src', recipient)
})
$('#viewModalVideo').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('src') // Extract info from data-* attributes
  var modal = $(this)
  modal.find('.modal-body video').attr('src', recipient)
})


// Video
var video = document.getElementById("myVideo");
function play(){
  video.play();
}
function stop(){
  video.pause();
}
function fullScreen(){
  video.webkitEnterFullScreen();
}

// Bx Slider
$(document).ready(function(){
  descargar();
  $('.bxslider').bxSlider({
    pagerCustom: '#bx-pager'
  });
});

// Validacion del formulario
$('form').validate(  {
  rules: {
    nombre: {
      required: true,
      minlength: 5
    },
    telefono: {
      required: true,
      minlength: 7
    },
    correo: {
      email: true,
      required: true,

    },
    empresa: {
      required: true,
    },
    sector: {
      required: true,
    },
    empleados: {
      required: true,
    },
    cargo: {
      required: true,
    }
  },
  messages: {
    nombre: {
      required: "Por favor escribe tu nombre",
      minlength: "Tu nombre es demasiado corto"
    },
    telefono: {
      required: "Por favor escribe tu teléfono",
      minlength: "Tu teléfono es demasiado corto"
    },
    correo: {
      required: "Por favor escribe tu E-mail",
      minlength: "Escribe un E-mail valido"
    },
    empresa: {
      required: "Por favor completa este campo",
    },
    sector: {
      required: "Por favor selecciona un opsión",
    },
    empleados: {
      required: "Por favor completa este campo",
    },
    cargo: {
      required: "Por favor completa este campo",
    }

  },
  submitHandler: function(form) {
    $(form).ajaxSubmit({
      type:"POST",
      data: $(form).serialize(),
      url:"includes/validation.php",
      success: function() {
        window.location.href = "/gracias";
      },
      error: function() {
        $('form').fadeTo( "slow", 0.15, function() {
          $('#error').fadeIn();
        });
      }
    });
  }

});