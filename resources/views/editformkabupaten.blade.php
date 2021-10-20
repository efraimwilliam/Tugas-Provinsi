<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="{{ asset('css/formcss.css') }}" rel="stylesheet">
<div class="formcss">

<div class="container" id="registrasi">
        
        <div class="row justify-content-center align-items-center" style="height:50px">
            <div class="col-4">
            <p class="text-center">Edit Kabupaten</p>
                <div class="card">
                    <div class="card-body">
                        <form action="/submiteditkabupaten/{{$kabupaten->id}}" method="POST">
                        @csrf
                        @method('PUT') 

                            <label for="validationCustom01" class="form-label">Kabupaten</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" value="{{$kabupaten->nama}}">
                            </div>        
                            <br>
                            <select class="form-select form-select-lg mb-3 col-12"  name=id_provinsi aria-label="Default select example">
                                <option disabled="Pilih Provinsi" selected>{{$kabupaten->provinsi->nama}}</option>
                                    @foreach($provinsi as $prov)
                                <option value="{{$prov->id}}">{{$prov->nama}}</option>
                                    @endforeach
                            </select>      
                                <a href="/">                  
                                  <button type="button" class="btn btn-danger">Close</button> 
                                </a>
                              <button type="submit" class="btn btn-primary">Submit</button>                    
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>