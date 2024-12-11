@extends('admin.layout.app')
@section('title', 'Credores')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{-- <h1>Credores</h1> --}}
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Credores</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: #D2670E">
                            <h3 class="card-title">Credores</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control"
                                        placeholder=" Defina o nome do seu credor (carteira de cobrança). Esté é só um identificador, pois a razão social será definida depois.">
                                </div>
                                <div class="form-group">
                                    <label for="">E-mail</label>
                                    <input type="email" class="form-control"
                                        placeholder="E-mail do responsável pelo credor para recebimento de mensagens do sistema. ">
                                </div>
                                <div class="form-group">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control"
                                        placeholder="Telefone do responsável pelo credor para questões legais (compliance). ">
                                </div>
                                <div class="form-group">
                                    <label for="">Cidade</label>
                                    <input type="text" class="form-control"
                                        placeholder=" Nome da cidade da empresa deste credor para questões legais (compliance). ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Meio de pagamento</label>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Login</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        placeholder="Este login dará acesso a uma área restrita desta carteira.">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">confirmar senha</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
