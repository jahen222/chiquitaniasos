<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Home
            // Images
            $table->string('home_header_image')->default('/images/settings/home/home_header_image.png')->nullable();
            $table->string('home_slider1_image')->default('/images/settings/home/home_slider1_image.png')->nullable();
            $table->string('home_slider2_image')->default('/images/settings/home/home_slider2_image.png')->nullable();
            $table->string('home_slider3_image')->default('/images/settings/home/home_slider3_image.png')->nullable();
            $table->string('home_slider4_image')->default('/images/settings/home/home_slider4_image.png')->nullable();
            $table->string('home_categories_image')->default('/images/settings/home/home_categories_image.png')->nullable();
            $table->string('home_publicity1_image')->default('/images/settings/home/home_publicity1_image.png')->nullable();
            $table->string('home_events_image')->default('/images/settings/home/home_events_image.png')->nullable();
            $table->string('home_video_image')->default('/images/settings/home/home_video_image.png')->nullable();
            $table->string('home_publicity2_image')->default('/images/settings/home/home_publicity2_image.png')->nullable();
            // Texts
            $table->text('home_slider1_text1')->nullable();
            $table->text('home_slider1_text2')->nullable();
            $table->text('home_slider2_text')->nullable();
            $table->text('home_slider3_text')->nullable();
            $table->text('home_slider4_text')->nullable();
            $table->text('home_categories_text')->nullable();
            $table->text('home_publicity2_text')->nullable();
            // Video
            $table->string('home_video')->default("https://www.youtube.com/watch?v=LuDN2bCIyus")->nullable();
            // Categories
            $table->integer('subcategory_id_1')->nullable()->unsigned();
            $table->integer('subcategory_id_2')->nullable()->unsigned();
            $table->integer('subcategory_id_3')->nullable()->unsigned();
            $table->integer('subcategory_id_4')->nullable()->unsigned();

            // Service
            // Images
            $table->string('service_header_image')->default('/images/settings/service/service_header_image.png')->nullable();
            $table->string('service_poligon_image')->default('/images/settings/service/service_poligon_image.png')->nullable();
            // Text
            $table->text('service_header_text')->nullable();
            $table->text('service_intermediate_text')->nullable();
            $table->text('service_info_text')->nullable();

            // Company
            // Images
            $table->string('company_header_image')->default('/images/settings/company/company_header_image.png')->nullable();
            $table->string('company_poligon1_image')->default('/images/settings/company/company_poligon1_image.png')->nullable();
            $table->string('company_poligon2_image')->default('/images/settings/company/company_poligon2_image.png')->nullable();
            // Text
            $table->text('company_intermediate_text')->nullable();
            $table->text('company_poligon1_text1')->nullable();
            $table->text('company_poligon1_text2')->nullable();
            $table->text('company_poligon1_text3')->nullable();
            $table->text('company_poligon2_text1')->nullable();
            $table->text('company_poligon2_text2')->nullable();

            // Blog
            // Image
            $table->string('blog_header_image')->default('/images/settings/blog/blog_header_image.png')->nullable();
            // Text
            $table->text('blog_header_text')->nullable();

            // Contact
            // Image
            $table->string('contact_header_image')->default('/images/settings/contact/contact_header_image.png')->nullable();
            // Text
            $table->text('contact_header_text')->nullable();
            // Mail
            $table->text('contact_mail_driver')->nullable();
            $table->text('contact_mail_host')->nullable();
            $table->text('contact_mail_port')->nullable();
            $table->text('contact_mail_username')->nullable();
            $table->text('contact_mail_password')->nullable();
            $table->text('contact_mail_encryption')->nullable();

            // FAQ
            // Images
            $table->string('faq_header_image')->default('/images/settings/faq/faq_header_image.png')->nullable();
            // Text
            $table->text('faq_header_text')->nullable();
            $table->text('faq_div_text1')->nullable();
            $table->text('faq_div_text2')->nullable();
            $table->text('faq_div_text3')->nullable();
            $table->text('faq_div_text4')->nullable();

            // Footer
            // Text
            $table->text('footer_youtube')->nullable();
            $table->text('footer_twitter')->nullable();
            $table->text('footer_instagram')->nullable();
            $table->text('footer_facebook')->nullable();
            $table->text('footer_phone')->nullable();
            $table->text('footer_email')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
