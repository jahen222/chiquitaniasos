<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting;
        // Home
        $setting->home_slider1_text1 = 'Accelerate Your Dreams';
        $setting->home_slider1_text2 = 'Buy and sell your car on Impel car dealer';
        $setting->home_slider2_text = "We're Your One Stop <br/> Destination for That !";
        $setting->home_slider3_text = "We're Your One Stop <br/> Destination for That !";
        $setting->home_slider4_text = "We're Your One Stop <br/> Destination for That !";
        $setting->home_categories_text = '¿Por qué limitarse a permanecer en lo común,  cuando puedes pertenecer a lo exclusivo.?';
        $setting->home_publicity2_text = "<h4>Publicidad.</h4><br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";
        $setting->subcategory_id_1 = 1;
        $setting->subcategory_id_2 = 4;
        $setting->subcategory_id_3 = 6;
        $setting->subcategory_id_4 = 8;
        // Service
        $setting->service_header_text = '<h3>Lorem ipsum dolor sit</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        $setting->service_intermediate_text = 'Classic Cars';
        $setting->service_info_text = '<h1>Search Your Car</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        // Company
        $setting->company_intermediate_text = 'Materializamos tus sueños, el lugar donde todo es posible.';
        $setting->company_poligon1_text1 = 'En estos 8 años hemos cumplido con tus exigencias y seguiremos haciéndolo porque entendemos que tu vehículo es más que un medio de transporte, es el reflejo de tu personalidad.';
        $setting->company_poligon1_text2 = 'Nuestra prioridad es dar respuestas rápidas y hacerte llegar hasta la comodidad de tu hogar u oficina esa pieza que deseas.';
        $setting->company_poligon1_text3 = 'Nuestro compromiso es brindarte la posibilidad de encontrar en un sólo y único lugar todo lo que abarca el mundo automotriz.';
        $setting->company_poligon2_text1 = '<p>“Con nosotros obtienes asesoramiento continuo, alternativas, originalidad, calidad y garantía para que tu vehículo quede como una obra de arte”</p>
        <h4 >Valores.</h4><br>
        <p>*Innovación</p>
        <p>*Compromiso</p>
        <p>*Rapidez</p>
        <p>*Sencillez</p>
        <p>*Variedad</p>';
        $setting->company_poligon2_text2 = '<h4>Misión.</h4><br>
        <p>Es colocar a tu disposición los 365 días del año, productos y piezas de última generación, para que puedas construir tu proyecto donde quiera que estés, en el menor tiempo posible. Sin restricciones ni contratiempos.</p>
        <h4>Visión.</h4><br>
        <p>Ser la primera y más completa opción que tengas al momento de adquirir cualquier pieza que necesites. Ya sea para modificar, restaurar o acondicionar tu auto.</p>
        <h4 style="padding-top: 300px"></h4>';
        // Blog
        $setting->blog_header_text = '<h3>Lorem ipsum dolor sit</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>';
        // Contact
        $setting->contact_header_text = 'Con nosotros consigues todo lo que quieras del mundo automotriz. ¡Contáctanos!';
        $setting->contact_mail_driver = 'smtp';
        $setting->contact_mail_host = 'smtp.gmail.com';
        $setting->contact_mail_port = '587';
        $setting->contact_mail_username = 'henryjaimes.peli@gmail.com';
        $setting->contact_mail_password = 'lemfgnkkfvtqrbnr';
        $setting->contact_mail_encryption = 'tls';
        // fAQ
        $setting->faq_header_text = '<h3>Preguntas frecuentes</h3>
        <p>Estas FAQ buscan aclarar dudas básicas sobre Carprojects, Si tienes mas dudas ponte en contacto con nosotros a través de nuestro formulario de contacto.</p>';
        $setting->faq_div_text1 = '<h6>¿Debo estar registrado para realizar una compra?</h6>
        <p>Sí, debes registrarte previamente en (hipervínculo directo a sección de registro).</p>
        <h6>¿Qué beneficios obtengo al registrarme?</h6>
        <p>Promociones, tendrás acceso a los artículos más recientes. Podrás crear un listado de tus artículos favoritos y realizar comparaciones, entre otras.</p>';
        $setting->faq_div_text2 = '<h6>¿Dónde obtener soporte al momento de realizar una compra?</h6>
        <p>Contáctanos y te atenderemos gustosamente a la brevedad posible (hipervínculo directo a la sección de contáctanos).</p>
        <h6>¿Los precios incluyen la comisión de PayPal?</h6>
        <p>Sí, ya los costos reflejados son los valores totales de cada producto.</p>
        <h6>¿Los precios incluyen el costo de envío?</h6>
        <p>No están incluidos, pues eso depende de la empresa de envíos y de la región o país.</p>
        <h6>¿Tienen diferentes formas de pago?</h6>
        <p>Sí, a través de PayPal.</p>';
        $setting->faq_div_text3 = '<h6>¿Los productos son originales?</h6>
        <p>Sí, todos los productos que aparecen en nuestra plataforma son originales.</p>
        <h6>¿Cuánto tiempo ofrecen de garantía?</h6>
        <p>La garantía de cada producto es estipulada por los fabricantes de las mismas.</p>
        <h6>¿Los productos que ofrecen son nuevos?</h6>
        <p>Sí, son nuevos sin ningún tipo de uso y en sus respectivas cajas originales.</p>
        <h6>¿Ustedes cambian o instalan las piezas o repuestos?</h6>
        <p>Solo vendemos.</p>';
        $setting->faq_div_text4 = '<h6>¿Hacen envíos a nivel mundial?</h6>
        <p>Sí, hacemos envíos a nivel mundial.</p>
        <h6>¿Cuáles son las empresas de transporte con las que trabaja actualmente?</h6>
        <p>Trabajamos con varias empresas de envío entre ellas FedEx, DHL, UPS.</p>
        <h6>¿Cuál es el tiempo de entrega?</h6>
        <p>Depende de la empresa de transporte y el país.</p>
        <h6>¿Puedo retirar los productos en sus instalaciones?</h6>
        <p>Los artículos adquiridos en nuestra plataforma serán despachados a la dirección suministrada por nuestros usuarios. Será entregado en manos del consumidor final.</p>';
        // Contact
        $setting->footer_youtube = 'carprojects';
        $setting->footer_twitter = 'TheCarprojects';
        $setting->footer_instagram = 'car.projects';
        $setting->footer_facebook = 'carprojectsofficial';
        $setting->footer_phone = '+58 414-9710220';
        $setting->footer_email = 'carprojects@gmail.com';

        $setting->save();
    }
}
