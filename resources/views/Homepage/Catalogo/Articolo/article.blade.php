<x-main :namePage="$namePage">

    <div class="hv-100 pt-5 text-center">
        
        <p class="lead fst-italic pt-5">
            {{$catalog['category']}}
        </p>
        <h2 class="pt-1 fw-bold display-3">
        {{$catalog['name']}}
        </h2>
        <p class="pt-3 lead fw-bold">
        {{$catalog['brand']}}
        </p>
        <div class="d-flex justify-content-center">
            <p class="w-50 pt-2 fst-italic">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, doloremque culpa consequuntur soluta, enim non consectetur architecto optio sapiente id, sed cupiditate vel quae aut assumenda ratione nesciunt accusamus ipsam!
            </p>
        </div>
            <p class="pt-2 pb-5 lead fw-bold">Price: {{$catalog['price']}}€</p>
            <a class="link-offset-2 link-underline link-underline-opacity-0 fst-italic" href="{{route('Catalog')}}">Indietro</a>
    </div>


</x-main>