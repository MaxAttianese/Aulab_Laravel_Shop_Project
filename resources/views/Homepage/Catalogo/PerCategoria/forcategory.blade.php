<x-main :namePage="$namePage">
    <div class="container pt-5">
        <div class="row pt-5">
            
        <h2 class="text-center display-5 fw-bold pt-2 pb-4">Articoli del catalogo per categoria scelta:</h2>

        <div class="nav ps-2">
            @foreach($link as $item) 
                <a class="nav-link" href="{{route('Catalog.category',$item)}}">{{$item}}</a>
            @endforeach
        </div>

        @foreach($catalogfiltered as $key => $item)
            <div class="col-6 col-md-4 col-xl-3 px-3 py-4">
                <div class="card">
                    <div class="card-header small fst-italic">
                        <span>{{$item['category']}}</span>
                    </div>
                    <div class="card-body">
                        <a class="link-offset-2 link-underline link-underline-opacity-0 text-primary" href="{{route('Catalog.article', $key)}}"><h5 class="card-title">{{$item['name']}}</h5></a>
                        <p class="card-text pt-2 fw-bold">{{$item['brand']}}</p>
                        <div class="d-flex justify-content-end">
                            <span>{{$item['price']}}€</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach 
        <a class="link-offset-2 link-underline link-underline-opacity-0 fst-italic pt-5 text-center" href="{{route('Catalog')}}">Indietro</a>
        </div>
    </div>
</x-main>