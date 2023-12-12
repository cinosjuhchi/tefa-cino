<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beli Kelas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        @media screen and (max-width: 992px) {
             /* dev-cino */
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
        <div class="col-lg-6 col-md-12">
          <div class="cover px-4 py-4 rounded-3">
            <div class="headline mb-3">
              <h1 class="fw-bold">Order Class</h1>
              <hr class="text-warning opacity-100 border-4 rounded" />
            </div>

            <form action="{{ route('user.uclass.form.store') }}" method="POST">
              @csrf
              <input type="hidden" name="idKelas" value="{{ $kelas->id }}">
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name Class</label>
                <input type="text" value="{{ $kelas->nama }}" class="form-control shadow-sm" id="exampleFormControlInput1" placeholder="Coding" disabled />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category</label>
                <select class="form-select" aria-label="Disabled select example" disabled>
                  <option selected>{{ $kategori }}</option>                  
                </select>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Price Class</label>
                <input type="hidden" name="total" value="{{ $kelas->harga }}" class="form-control shadow-sm"/>
                <input type="text" value="Rp. {{ number_format($kelas->harga, 0, ',', '.') }}" class="form-control shadow-sm" disabled />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="text" name="nama" required class="form-control shadow-sm" />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" required class="form-control shadow-sm" placeholder="example@email.com" />
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-1">Preview Class</label>
                <img src="{{ asset('assets/img/' . $kelas->gambar) }}" alt="" class="rounded-3 thumbnail mb-2" style="object-fit: cover; width: 100%; height: 230px" />              
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control shadow-sm" name="deskripsi" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="button d-flex justify-content-end gap-2">
                <a href="{{ route('user.uclass.index') }}" class="btn btn-danger fw-bold">CANCEL</a>
                <button class="btn btn-success fw-bold" type="submit">BELI</button>
              </div>
            </form>
          </div>
        </div>

        <div class="right col-lg-6 d-flex align-items-center justify-content-center bg-warning rounded-end-3">
          <img src="{{ Vite::asset('resources/assets/img/uclass/form.png') }}" alt="" style="width: 20rem" class=""/>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
