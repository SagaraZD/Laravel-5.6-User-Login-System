<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
              $table->increments('id');
              $table->text('user_id');
              $table->text('vacancy_referance');
              $table->text('category_id');
              $table->text('vacancy_email');
              $table->text('vacancy_title');
              $table->text('vacancy_closing_date');
              $table->text('vacancy_description');
              $table->text('location_id');
              $table->text('vacancy_attachment');
              $table->text('vacancy_company_url');
              $table->text('vacancy_customer_status');
              $table->text('vacancy_admin_status');
              $table->text('vacancy_special_notes');
              $table->text('vacancy_views');
              $table->text('vacancy_total_applicants');
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
        Schema::dropIfExists('vacancies');
    }
}
