<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy as Vacancies;

class VacancyController extends Controller
{
   public function addNew(Request $request){

   		$vacancies = new Vacancies();

   		$vacancies->vacancy_referance = rand(10,100);
   		$vacancies->category_id = rand(10,100);
   		$vacancies->location_id = rand(10,100);
   		$vacancies->vacancy_attachment = rand(10,100);
   		$vacancies->vacancy_customer_status = rand(10,100);
   		$vacancies->vacancy_admin_status = rand(10,100);
   		$vacancies->vacancy_views = rand(10,100);
   		$vacancies->vacancy_total_applicants = rand(10,100);

   		$vacancies->vacancy_email = $request['vacancy_email'];
   		$vacancies->vacancy_title= $request['vacancy_title'];
   		$vacancies->vacancy_closing_date = $request['vacancy_closing_date'];
   		$vacancies->vacancy_description = $request['vacancy_description'];
   		$vacancies->vacancy_company_url = $request['vacancy_company_url'];
   		$vacancies->vacancy_special_notes = $request['vacancy_special_notes'];

   		if($request->user()->vacancies()->save($vacancies)){
   			echo 'Goda';
   		}

   }


   public function get(){
   		
   		$vacancies =  Vacancies::all();
   		return $vacancies->toJson();
   		
   }

}
