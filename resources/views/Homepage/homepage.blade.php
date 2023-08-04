<x-main :namePage="$namePage">

    
    <div class="text-center pt-5">
        <h1 class="pt-5 display-3 fw-bold">
            {{config("app.name")}}
        </h1>
    </div>
    <div class="container pt-3">
        <div class="row pb-5">
            <div class="col-0 col-md-3"></div>
            <div class="col-12 col-md-6 lead text-center">
                {{$description}}
            </div>
            <div class="col-0 col-md-3"></div>
        </div>
    </div>
    <div class="container pt-5">
        <div class="row pt-5 align-items-center">
            <div class="col-0 col-xl-2"></div>
            <div class="col-12 col-md-8 col-xl-5 lead text-center ps-xl-5">

                <span class="ps-md-5">Consulta subito il nostro {{$title}}:</span>

            </div>

            <div class="col-12 col-md-4 col-xl-2 text-center pt-4 pt-md-0 pe-xl-5">

                <a href="{{route('Catalog')}}" class="btn btn-primary px-2">Vai al Catalogo</a>

            </div>

            <div class="col-0 col-xl-4"></div>
        </div>
    </div>

    
</x-main>