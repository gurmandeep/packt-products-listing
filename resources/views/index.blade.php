<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="https://api.packt.com/img/favicon.ico" />
    <title>Packt Products</title>
    <style>
        .card-img-bottom {
            position: absolute;
            bottom: 0;
            right: 13px;
            font-size: 13px;
            text-align: right;
        }
    </style>
</head>
<body>    

    {{-- Header --}}
    <header class="bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-center py-3 mb-4">
                <a href="{{ route('home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                    <img src="https://www.packtpub.com/images/logo-new.svg" alt="packt">
                </a>
                <ul class="nav nav-pills">
                    <li class="nav-item"><a style="background-color:#f97141;text-transform:uppercase" href="https://www.packtpub.com/checkout/subscription/monthly-packt-subscription-vz22?freeTrial" target="_blank" class="nav-link active" aria-current="page">Try for Free</a></li>
                </ul>
            </div>
        </div>    
    </header>

    {{-- Products List --}}
    <div class="container">
        <div class="row">
            @foreach($data['products'] as $product) 
                <div class="col-sm-12 col-md-4">
                    <div class="card mb-4" style="height: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product['title'] }}</h5>
                            <h6 class="card-subtitle mt-1 mb-2 text-muted">{{ $product['concept'] }}</h6>
                            <p class="card-img-bottom">{{ implode(', ', $product['authors']) }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Pagination --}}
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
            
                @php
                    $firstDisabled = $data['current_page'] == 1 ? true : false;
                    $lastDisabled = $data['current_page'] == $data['last_page'] ? true : false;
                    $prevPage =  $data['current_page'] - 1;
                    $nextPage =  $data['current_page'] + 1;
                @endphp

                <li @class(['page-item', 'disabled' => $firstDisabled])>
                    <a class="page-link" href="{{ config('app.url') }}?page={{ $prevPage }}" aria-label="Previous">
                        <span aria-hidden="true">Previous</span>
                    </a>
                </li>
                <li @class(['page-item', 'disabled' => $lastDisabled])>
                    <a class="page-link" href="{{ config('app.url') }}?page={{ $nextPage }}" aria-label="Next">
                        <span aria-hidden="true">Next</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
    
   

</body>
</html>