<!DOCTYPE html>
<html lang="pt">
    <head>
    <meta charset="utf-8">
    

    </head>
    <body>
        <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form action="/cadastrar-animal" method="POST">
                @csrf
                <div class="form-outline mb-4">
                    <label class="form-label" for="lblNome">Nome:</label>
                    <input type="text" name="nome"  class="form-control form-control-lg"
                    placeholder="Nome" />
                </div>

                
                <div class="form-outline mb-3">
                    <label class="form-label" for="lblValor">Especie:</label>
                    <input type="text" name="especie" class="form-control form-control-lg"
                    placeholder="ex. Cachorro" />
                </div>


                <div class="text-center text-lg-start mt-4 pt-2">
                    <button class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Cadastrar</button>
                    <a href=https://github.com/VG149/Crud/tree/Crd2>teste</a>
                </div>

                </form>

            </div>
            </div>
        </div>
        
            
        </div>
        </section>
    </body>
</hmtl>