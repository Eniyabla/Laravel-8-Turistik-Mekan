
            <div class="container-fluid">
                <h2>Category</h2>
                <hr>
                @foreach ($datalist as $data)
                 <p>{{ $data->title }}</p>
                @endforeach

            </div>
           