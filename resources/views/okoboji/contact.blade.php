@extends('layouts.app')

@section('content')

   <section id="section-okoboji">
       @include('okoboji.nav')
       <footer class="container p-3">

           <div class="row">
               <div class="col-sm">
                   <p class="slide-text text-left"><span class="badge badge-secondary">Dining Hours</span></p>
                   <p>Tuesday-Thursday 5:00-9:00 PM</p>
                   <p>Friday-Saturday 5:00-10:00 PM</p>
               </div>
               <div class="col-sm">
                   <p class="slide-text text-left"><span class="badge badge-secondary">Get Directions</span></p>
                   <p>Kazarelli's at Miller's Bay</p>
                   <p>1127 Lakeside Ave, Wahpeton, IA 51351</p>
                   <p>712-337-3238</p>
               </div>
               <div class="col-sm">
                   <p class="slide-text text-left"><span class="badge badge-secondary">Reservations</span></p>
                   <p>Reservations are not required but greatly appreciated.</p>
                   <p>To make your reservation call us at 712-337-3238</p>
               </div>
           </div>
           <div class="map" style="width: 100%"><iframe width="100%" height="400" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1127%20Lakeside%20Ave%2C%20Wahpeton%2C%20IA%2051351+(Kazarelli's)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div>
       </footer>
       @include('okoboji.footer')
   </section>

@endsection
