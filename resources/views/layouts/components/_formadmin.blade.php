<div class="row my-5">

    @if (isset($registro->imagem))
        <div class="col-12 col-lg-12 d-flex justify-content-center mb-5">
            <div class="imagem">
                <img width="120" height="115" class="rounded-circle" src="{{isset($registro->imagem) ? $registro->imagem : ''}}" alt="">
            </div>
        </div>
    @endif

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control" name="name"
                value="">
        </div>
    </div>

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email"
                value="">
        </div>
    </div>

    <div class="col-12 col-lg-6">

        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control"
                value="">
        </div>
    </div>

    <div class="col-12 col-lg-6 d-flex align-items-end">

        <div class="form-group">
            <input type="file" name="imagem" value="">
        </div>
    </div>


</div>
