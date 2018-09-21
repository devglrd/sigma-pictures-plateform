@extends('app')


@section('css')

@stop

@section('content')
   <section>
      <div class="container">
         <div class="row">
            <div class="col d-flex justify-content-center align-items-start">
               <div class="btn">Btn</div>
               Afficher les news de la societe
            </div>
         </div>
      </div>
   </section>
@stop

@section('js')
   <script>
      $(document).ready(() => {
          console.log("docu", this);
          
          $('.btn').on('click', () => {
              console.log("docu", this);
          })
      })
   </script>
@stop