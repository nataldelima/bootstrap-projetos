<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Projeto Dev Web</title>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Natal de Lima TI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="box">

        <section class="banner">
            <div class="overlay"></div>
            <div class="container chamada-banner">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2>Natal de Lima TI</h2>
                        <p>Empresa voltada para desenvolvimento web e marketing digital</p>

                        <a href="#">Saiba mais</a>
                    </div>
                </div>

            </div>
        </section>

        <section class="cadastro-lead">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6">
                        <h2><i class="bi bi-star-fill"></i> Entre na nossa lista</h2>
                    </div>
                    <div class="col-md-6">
                        <form method="post">
                            <input type="text" name="nome" /><input type="submit" value="Enviar" />
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="depoimento">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h2>Depoimento</h2>
                        <blockquote>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum dicta praesentium porro
                                exercitationem magni, mollitia aperiam harum aspernatur sint nemo numquam sunt,
                                accusantium, molestiae aliquam eius. Dolorum quis nemo quibusdam.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <section class="diferenciais text-center">
            <h2>Conheça nossa empresa!</h2>
            <div class="container diferenciais-container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <h2><i class="bi bi-android2"></i></h2>
                        <h3>Diferencial #1</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio rerum, tempore, facere
                            necessitatibus incidunt explicabo modi voluptatem assumenda in fuga quidem non eligendi
                            mollitia quia. Nobis aspernatur praesentium ut rem.</p>
                    </div>
                    <div class="col-md-4">
                        <h2><i class="bi bi-amazon"></i></h2>
                        <h3>Diferencial #2</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio rerum, tempore, facere
                            necessitatibus incidunt explicabo modi voluptatem assumenda in fuga quidem non eligendi
                            mollitia quia. Nobis aspernatur praesentium ut rem.</p>
                    </div>
                    <div class="col-md-4">
                        <h2><i class="bi bi-apple"></i></h2>
                        <h3>Diferencial #3</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Distinctio rerum, tempore, facere
                            necessitatibus incidunt explicabo modi voluptatem assumenda in fuga quidem non eligendi
                            mollitia quia. Nobis aspernatur praesentium ut rem.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="equipe">
            <h2>Equipe</h2>
            <div class="container equipe-container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-picture-child"></div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h3>Natal</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit sit mollitia
                                        explicabo aspernatur doloremque ullam et blanditiis soluta eos? Officia ullam
                                        dicta facere obcaecati neque debitis molestias at, blanditiis quam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="equipe-single">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="user-picture">
                                        <div class="user-picture-child"></div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <h3>Natal</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odit sit mollitia
                                        explicabo aspernatur doloremque ullam et blanditiis soluta eos? Officia ullam
                                        dicta facere obcaecati neque debitis molestias at, blanditiis quam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="final-site">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Fale conosco</h2>
                        <form>
                            <div class="mb-3 mt-3">
                                <label for="nome" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome"
                                    name="nome">
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Digite seu email"
                                    name="email">
                            </div>
                            <div class="mb-3">
                                <label for="mensagem" class="form-label">Mensagem:</label>
                                <textarea name="" id="mensagem" name="mensagem" cols="30" rows="10"
                                    class="form-control"></textarea>
                            </div>
                            <div class="form-check mb-3">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember"> Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h2>Nossos planos</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Plano</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                                <tr>
                                    <td>Mary</td>
                                    <td>Moe</td>
                                    <td>mary@example.com</td>
                                </tr>
                                <tr>
                                    <td>July</td>
                                    <td>Dooley</td>
                                    <td>july@example.com</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </section>
        <footer>
            <p>Todos os direitos reservados</p>
        </footer>

    </div>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>