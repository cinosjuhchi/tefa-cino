<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Add Class</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
    .cover {
    background-color: rgba(255, 255, 255, 0.97);
}

    @media screen and (max-width: 992px) {
    .container {
        margin: auto !important;
        padding: 0 !important;
    }
    
    .right {
        display: none !important;
    }
    }
    </style>
  </head>
  <body>
    <div class="container my-5">
      <div class="row shadow-lg rounded-3">
        <div class="col-lg col-md-12">
          <div class="cover px-4 py-4 rounded-3">
            <div class="headline mb-3">
              <h1 class="fw-bold">Add Class</h1>
              <hr class="text-warning opacity-100 border-4 rounded" />
            </div>

            <form action="{{ route('uclass.form.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name Class</label>
                <input type="text" required name="nama" class="form-control shadow-sm" id="exampleFormControlInput1" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category</label>
                <select class="form-select" required name="kategori_id" aria-label="select example">
                  <option selected>Pilih Kategori</option>
                  @foreach($kategori as $kategorisu)
                  <option value="{{ $kategorisu->id }}">{{ $kategorisu->title }}</option>                  
                  @endforeach
                </select>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price Class</label>
                <input type="number" name="harga" required class="form-control shadow-sm" id="exampleFormControlInput1">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-1">Thumbnail Image</label>
                <img src="{{ Vite::asset('resources/assets/img/uclass/accountimage.png') }}" alt="" class="rounded-3 thumbnail mb-2" style="object-fit: cover; width: 100%; height: 230px" />
                <input class="form-control shadow-sm" name="gambar" required type="file" id="formFile" />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control shadow-sm" name="deskripsi" required id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="button d-flex justify-content-end gap-2">
                <a href="../admin-class/class.html" class="btn btn-danger fw-bold">CANCEL</a>
                <button type="submit" class="btn btn-success fw-bold">ADD</button>
              </div>
            </form>
          </div>
        </div>

        <div class="col-lg-6 col-sm-0 d-flex align-items-center justify-content-center bg-warning right rounded-end-3">
          <img src="{{ Vite::asset('resources/assets/img/uclass/form.png') }}" alt="" style="width: 360px" />
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
