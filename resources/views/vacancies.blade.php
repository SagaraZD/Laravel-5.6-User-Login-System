@extends('theme.master')

@section('content')
  <div class="container">
    <h2>Add new vacancy</h2>
     @include('includes.message')

    <form action="" method="post" class="col-md-8">


    
      <div class="form-group">
        <label for="text"> Email </label>
        <input type="text" id="vacancy_email" name="vacancy_email" class="form-control  {{$errors->has('vacancy_email') ? 'has-error' : '' }}" value="{{Request::old('vacancy_email')}}">
      </div>

       <div class="form-group">
        <label for="text">Title:</label>
        <input type="text" name="vacancy_title" class="form-control {{$errors->has('vacancy_title') ? 'has-error' : '' }}" value="{{Request::old('vacancy_title')}}">
      </div>

        <div class="form-group">
        <label for="text">Closing Date:</label>
        <input type="date" id="vacancy_closing_date" name="vacancy_closing_date" class="form-control {{$errors->has('vacancy_closing_date') ? 'has-error' : '' }}" value="{{Request::old('vacancy_closing_date')}}">
        </div>


        <div class="form-group">
        <label for="text">Company URL:</label>
        <input type="text" name="vacancy_company_url" class="form-control {{$errors->has('vacancy_company_url') ? 'has-error' : '' }}" value="{{Request::old('vacancy_company_url')}}">
        </div>

         <div class="form-group">
        <label for="text">Description:</label>
          <textarea id="vacancy_description" name="vacancy_description" class="form-control {{$errors->has('vacancy_description') ? 'has-error' : '' }}" value="{{Request::old('vacancy_description')}}"> </textarea>
        </div>


        <div class="form-group">
        <label for="text">Special notes:</label>
        <textarea id="vacancy_special_notes" name="vacancy_special_notes" class="form-control {{$errors->has('vacancy_special_notes') ? 'has-error' : '' }}" value="{{Request::old('vacancy_special_notes')}}"> </textarea>
        </div>

      

       <button id="submit" type="submit" class="btn btn-default">Save</button>
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </form>
       

    <script type="text/javascript">

 
    $("#submit").click(function(e){

        e.preventDefault();

        var vacancy_email = $("#vacancy_email").val();
        var vacancy_title = $("input[name=vacancy_title]").val();
        var vacancy_closing_date = $("#vacancy_closing_date").val();
        var vacancy_company_url = $("input[name=vacancy_company_url]").val();
        var vacancy_description = $("#vacancy_description").val();
        var vacancy_special_notes = $("#vacancy_special_notes").val();

        var token = $("input[name=_token]").val();

        $.ajax({
           type:'POST',
           url:'/postAddNewVacancy',
           data:{
            vacancy_email:vacancy_email, 
            vacancy_title:vacancy_title,
            vacancy_closing_date:vacancy_closing_date,
            vacancy_company_url:vacancy_company_url,
            vacancy_description:vacancy_description,
            vacancy_special_notes:vacancy_special_notes,
            _token:token
          },
           success:function(data){
              alert(data.success);
           }
        });

  });

function getVacancies(){
      $.get("/getvacancies", function(data, status){
        console.log(data);

    });

}

$(document).ready(function(){
  getVacancies();
});

</script>
      
    </div>
@endsection