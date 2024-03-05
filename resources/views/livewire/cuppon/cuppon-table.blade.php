<div>
    <table class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Code</th>
                <th scope="col">Value</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
              </tr>
        </thead>
        <tbody>
         @foreach ($cuppons as $cuppon)
            <tr>
              <th scope="col">{{$cuppon->id}}</th>
              <th scope="col">{{Str::limit($cuppon->title,5)}}</th>
              <th scope="col">{{$cuppon->code}}</th>
              <th scope="col">{{$cuppon->amount}}</th>
              <th scope="col">{{$cuppon->type}}</th>
              <th scope="col">
                <a href="" 
                class="btn btn-xl btn-info mx-2 text-green">
                <i class="bi bi-pencil-square"></i>
              </a>

              <a href="" 
              class="btn btn-xl btn-danger mx-2 text-green">
              <i class="bi bi-trash3-fill"></i>
            </a>

              </th>
            </tr>
                      
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Code</th>
                <th scope="col">Value</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
              </tr>
        </tfoot>
        <div class="text-center my-2 mx-2 p-2">
            {{ $cuppons->links('vendor.pagination.bootstrap-5') }}
        </div>
    </table>
</div>
