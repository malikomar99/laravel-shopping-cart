<section class="vh-80 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Update User</h2>

              <form action="{{route("updateproduct")}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}"/>
                <div class="form-outline mb-4 " >
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="title"  value="{{$product->title}}"/>
                  <label class="form-label" for="form3Example1cg">title</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="description"  value="{{$product->description}}"/>
                  <label class="form-label" for="form3Example3cg">description</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="price"  value="{{$product->price}}"/>
                  <label class="form-label" for="form3Example3cg">price</label>
                </div>
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="quantity"  value="{{$product->quantity}}"/>
                  <label class="form-label" for="form3Example3cg">quantity</label>
                </div>

               


                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

