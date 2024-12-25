<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akhi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('home/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    @include('home.header')
     
       @yield('content')
    
    @include('home.footer')

  
    <script src="{{ asset('home/script.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#search-bar').on('keyup', function () {
            let query = $(this).val();
            if (query.length > 0) {
                $.ajax({
                    url: "{{ route('product.search') }}",
                    type: "GET",
                    data: { query: query },
                    success: function (data) {
                        let results = '';
                        if (data.length > 0) {
                            data.forEach(function (product) {
                                results += `
                                    <li class="dropdown-item">
                                        <strong>${product.name}</strong> - $${product.price}
                                    </li>`;
                            });
                        } else {
                            results = '<li class="dropdown-item">No products found</li>';
                        }
                        $('#search-results').html(results).show();
                    },
                    error: function () {
                        $('#search-results').html('<li class="dropdown-item">Error fetching results</li>').show();
                    }
                });
            } else {
                $('#search-results').hide();
            }
        });

        $(document).click(function (e) {
            if (!$(e.target).closest('#search-bar').length) {
                $('#search-results').hide();
            }
        });
    });
</script>


</body>
</html>