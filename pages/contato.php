<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FV Gestão - Cultura Vencedora</title>
  <link rel="stylesheet" href="../css/all.css">
  <link rel="stylesheet" href="../css/fontawesome.min.css">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/flexboxgrid.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/contato.css">
  <link rel="stylesheet" href="../css/aos.css">
</head>

<body>
  <?php include('../includes/php/header.php'); ?>

  <section class="contato">
    <div class="container">
      <div class="row block-9 descricao justify-content-center">
        <div class="col-sm-12 align-self-baseline mb-4">
          <h2 class="align-items-center justify-content-center text-center text-black header-wrapper" data-aos="fade-up" data-aos-duration="1000">
            Contato
          </h2>
          <hr class="divider shadow" data-aos="fade-up" data-aos-duration="1700">
          </hr>
        </div>
        <div class="row mb-5" style="background-color: white; border-radius: 5px;" data-aos="fade-up" data-aos-duration="2000">
          <div class="col-md-4">
            <div class="p-4">
              <p><span>Endereço:</span><br>Av. Senador Ruy Carneiro 895
                Miramar - João Pessoa - PB
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4">
              <p><span>Telefone:</span><br><a href="tel://8321078949">(83) 2107-8949</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-4">
              <p><span>Email:</span><br> <a href="mailto:contato@fvgestao.com.br">contato@fvgestao.com.br</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-last d-flex" data-aos="fade-up" data-aos-duration="2000">
          <form method="POST" action="contact-form-handler.php" class="bg-white p-5 contact-form">
            <div class="form-group">
              <input name="nome" type="text" class="form-control" placeholder="Nome" required>
            </div>
            <div class="form-group">
              <input name="email" type="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input name="assunto" type="text" class="form-control" placeholder="Assunto">
            </div>
            <div class="form-group">
              <textarea name="mensagem" id="" rows="10" cols="60" class="form-control" placeholder="Mensagem"
                required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="form-control btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
        <div class="col-md-6 d-flex mb-4" data-aos="flip-right" data-aos-duration="1000">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.0888681394345!2d-34.83817408476471!3d-7.115699794861485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd39ebb9a61f%3A0x1dcb36fb5d868bc3!2sFV%20Gest%C3%A3o!5e0!3m2!1spt-BR!2sbr!4v1585354392028!5m2!1spt-BR!2sbr"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </section>

  <?php include('../includes/php/footer.php'); ?>


</body>
<script src="../js/jquery.min.js" type="text/javascript"></script>
<script src="../js/popper.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/app.js"></script>
<script src="../js/aos.js" type="text/javascript"></script> 
   
   <script>
     AOS.init();
   </script>
</html>