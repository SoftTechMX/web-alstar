import 'bootstrap';

// Axios
// =================================================================================== //
//                             _    __  _____ ___  ____                                //  
//                            / \   \ \/ /_ _/ _ \/ ___|                               //
//                           / _ \   \  / | | | | \___ \                               //
//                          / ___ \  /  \ | | |_| |___) |                              //
//                         /_/   \_\/_/\_\___\___/|____/                               //
//                        https://axios-http.com/docs/intro                            //
//                               npm install axios                                     //
// =================================================================================== //
import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

var axios_config = {
    headers: { 'Content-Type': 'multipart/form-data' }
};


// AOs
// =================================================================================== //
//                                  _    ___                                           //
//                                 / \  / _ \ ___                                      //
//                                / _ \| | | / __|                                     //
//                               / ___ \ |_| \__ \                                     //
//                              /_/   \_\___/|___/                                     //
//                                                                                     //
//                       https://github.com/michalsnik/aos                             //
//                          npm install --save aos@next                                //
// =================================================================================== //
import Aos from 'aos';
import 'aos/dist/aos.css';

window.Aos = Aos;
window.AOS = Aos;

// Inicializacion por default
const init_aos = () => {
    Aos.init({
        duration: 1000,
        easing: 'ease-in-out',
        once: true,
        mirror: false
    });
}

window.addEventListener('DOMContentLoaded', () => {
    init_aos();
});

// Listener para Livewire 3
window.addEventListener('init-aos', event => {
    init_aos();
});

// Bootstrap
// =================================================================================== //
//                   ____              _       _                                       //
//                  | __ )  ___   ___ | |_ ___| |_ _ __ __ _ _ __                      //
//                  |  _ \ / _ \ / _ \| __/ __| __| '__/ _` | '_ \                     //
//                  | |_) | (_) | (_) | |_\__ \ |_| | | (_| | |_) |                    //
//                  |____/ \___/ \___/ \__|___/\__|_|  \__,_| .__/                     //
//                                                          |_|                        //
//                          https://getbootstrap.com                                   //
//                           npm i bootstrap --save                                    //
// =================================================================================== //

import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

document.addEventListener('DOMContentLoaded', function () {

    // ============================================================================== //
    // Inicializamos los tooltips de Bootstrap
    // ============================================================================== //
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // ============================================================================== //
    // Inicializamos las alertas de Bootstrap
    // ============================================================================== //
    const alertList = document.querySelectorAll('.alert');
    const alerts = [...alertList].map(element => new bootstrap.Alert(element));

    // ============================================================================== //
    // Inicializamos los modales de Bootstrap
    // ============================================================================== //
    // var lista_de_modales = [].slice.call(document.querySelectorAll('.modal'));
    // lista_de_modales.map(function (element) {
    //     return new bootstrap.Modal(element);
    // });
});

// GLightbox
// =================================================================================== //
//                    ____ _     _       _     _   _                                   //
//                   / ___| |   (_) __ _| |__ | |_| |__   _____  __                    //
//                  | |  _| |   | |/ _` | '_ \| __| '_ \ / _ \ \/ /                    //
//                  | |_| | |___| | (_| | | | | |_| |_) | (_) >  <                     //
//                   \____|_____|_|\__, |_| |_|\__|_.__/ \___/_/\_\                    //
//                                 |___/                                               //
//                                                                                     //
//                      https://www.npmjs.com/package/glightbox                        //
//                           npm install glightbox --save                              //
// =================================================================================== //
import GLightbox from 'glightbox';
window.GLightbox = GLightbox;

// Este listener es el encargado de inicializar los elementos de glightbox cada vez que 
// se hace una paginacion.

document.addEventListener('livewire:init', () => {
    
    // Inicializacion Comun
    let lightbox = GLightbox({ 
        selector: '.glightbox'
    });

    let galleryLightbox = GLightbox({
        selector: '.gallery-lightbox'
    });

    let portfolioLightbox = GLightbox({
        selector: '.portfolio-lightbox'
    });

    // Re-initialize despues de cada actualizacion de componente livewire
    Livewire.hook('morph.added', ({ el }) => {
        lightbox = GLightbox({ selector: '.glightbox' });
        galleryLightbox = GLightbox({ selector: '.glightbox' });
        portfolioLightbox = GLightbox({ selector: '.glightbox' });
    });
});

// jQuery
// =================================================================================== //
//                          _  ___                                                     //
//                         (_)/ _ \ _   _  ___ _ __ _   _                              //
//                         | | | | | | | |/ _ \ '__| | | |                             //
//                         | | |_| | |_| |  __/ |  | |_| |                             //
//                        _/ |\__\_\\__,_|\___|_|   \__, |                             //
//                       |__/                       |___/                              //
//                                                                                     //
//                             https://jquery.com/                                     //
//                          npm install jquery --save                                  //
// =================================================================================== //
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;

// Toastr
// =================================================================================== //
//                            _____               _                                    //
//                           |_   _|__   __ _ ___| |_ _ __                             //
//                             | |/ _ \ / _` / __| __| '__|                            //
//                             | | (_) | (_| \__ \ |_| |                               //
//                             |_|\___/ \__,_|___/\__|_|                               //
//                                                                                     //
//                      https://www.npmjs.com/package/toastr                           //
//                           npm install --save toastr                                 //
// =================================================================================== //
import toastr from 'toastr';
import 'toastr/toastr';

window.toastr = toastr;


// Swiper JS
// =================================================================================== //
//                   ____          _                    _ ____                         //
//                  / ___|_      _(_)_ __   ___ _ __   | / ___|                        //
//                  \___ \ \ /\ / / | '_ \ / _ \ '__|  | \___ \                        //
//                   ___) \ V  V /| | |_) |  __/ | | |_| |___) |                       //
//                  |____/ \_/\_/ |_| .__/ \___|_|  \___/|____/                        //
//                                |_|                                                  //
//                                                                                     //
//                       https://swiperjs.com/get-started                              //
//                          npm install swiper --save                                  //
// =================================================================================== //
import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';

// import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

window.swiper = Swiper;
window.Swiper = Swiper;

// Isotope JS
// =================================================================================== //
//                   ___           _                         _ ____                    //
//                  |_ _|___  ___ | |_ ___  _ __   ___      | / ___|                   //
//                   | |/ __|/ _ \| __/ _ \| '_ \ / _ \  _  | \___ \                   //
//                   | |\__ \ (_) | || (_) | |_) |  __/ | |_| |___) |                  //
//                  |___|___/\___/ \__\___/| .__/ \___|  \___/|____/                   //
//                                         |_|                                         //
//										                                               //
//                         https://isotope.metafizzy.co/                               //
//                       npm install isotope-layout --save                             //
// =================================================================================== //
import Isotope from 'isotope-layout';
window.Isotope = Isotope;