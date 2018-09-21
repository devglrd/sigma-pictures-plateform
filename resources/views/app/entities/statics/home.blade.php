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
             <div class="container">
                 <div class="row mb-3">
                     <div class="col rounded mr-3 bg-secondary">
                         <div class="row">
                            <div class="col-3 pt-3">
                                <img src="http://www.agence-loremipsum.fr/wp-content/uploads/2017/03/logo-agence.jpg" width="100%">
                            </div>
                             <div class="col-9">
                                 <div class="font-weight-bold">
                                     Lorem Ipsum
                                 </div>
                                 <div>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis pulvinar arcu. Proin ornare ipsum nisl, a mollis purus auctor et. Praesent eleifend molestie feugiat. Curabitur sagittis mi eu dolor egestas ornare sed eu elit.
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col rounded mr-3 bg-secondary">
                         <div class="row">
                             <div class="col-3 pt-3">
                                 <img src="http://www.agence-loremipsum.fr/wp-content/uploads/2017/03/logo-agence.jpg" width="100%">
                             </div>
                             <div class="col-9">
                                 <div class="font-weight-bold">
                                     Lorem Ipsum
                                 </div>
                                 <div>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis pulvinar arcu. Proin ornare ipsum nisl, a mollis purus auctor et. Praesent eleifend molestie feugiat. Curabitur sagittis mi eu dolor egestas ornare sed eu elit.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="row mb-3">
                     <div class="col rounded mr-3 bg-secondary">
                         <div class="row">
                             <div class="col-3 pt-3">
                                 <img src="http://www.agence-loremipsum.fr/wp-content/uploads/2017/03/logo-agence.jpg" width="100%">
                             </div>
                             <div class="col-9">
                                 <div class="font-weight-bold">
                                     Lorem Ipsum
                                 </div>
                                 <div>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis pulvinar arcu. Proin ornare ipsum nisl, a mollis purus auctor et. Praesent eleifend molestie feugiat. Curabitur sagittis mi eu dolor egestas ornare sed eu elit.
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col rounded mr-3 bg-secondary">
                         <div class="row">
                             <div class="col-3 pt-3">
                                 <img src="http://www.agence-loremipsum.fr/wp-content/uploads/2017/03/logo-agence.jpg" width="100%">
                             </div>
                             <div class="col-9">
                                 <div class="font-weight-bold">
                                     Lorem Ipsum
                                 </div>
                                 <div>
                                     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc venenatis pulvinar arcu. Proin ornare ipsum nisl, a mollis purus auctor et. Praesent eleifend molestie feugiat. Curabitur sagittis mi eu dolor egestas ornare sed eu elit.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
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