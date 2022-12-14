@extends('layouts.appPortal')

@section('content')

<!-------------------------------------------------------------------------------->
<div class="breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="breadcrumbs-title">الاسئلة
          <span>الشائعة</span>
        </h2>
        <ul class="breadcrumb-list">
          <li><a href="{{ URL :: to ('/')}}">الرئيسية</a></li>
          <li>الاسئلة الشائعة
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-------------------------------------------------------------------------------->
<main>



  <div class="common-question">

    <div class="container">
      <div class="card card-container">
        <div class="row">
          <div class="col-12">
            <div class="section-tittle">
              <h2> الاسئلة الشائعة </h2>
            </div>
          </div>
          <div class="col-12">

            <div class="collapse-wrapper">
            @foreach($allData as $data)
              <div class="accordion" id="accordionExample{{ $data->id}}">
                <div class=" d-block">
                  <div class="accordion" id="accordionExample{{ $data->id}}">


                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne{{ $data->id}}">
                        <button class="accordion-button" type="button" 
                        data-bs-toggle="collapse" data-bs-target="#collapseOne{{ $data->id}}" 
                        aria-expanded="true" aria-controls="collapseOne{{ $data->id}}">
                        {{$data->category_id}}
                        </button>
                      </h2>
                      <div id="collapseOne{{ $data->id}}" class="accordion-collapse collapse show" 
                      aria-labelledby="headingOne{{ $data->id}}" 
                      data-bs-parent="#accordionExample{{ $data->id}}">
                        <div class="accordion-body">
                          <strong>{{$data->question_ar}}
                      <br>
                      {{ $data->answer_ar}}</strong> 
                      
                        </div>
                      </div>
                    </div>
                    
                  
                    


                  </div>


                </div>
              </div>
<br/>
              @endforeach

            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</main>




@endsection