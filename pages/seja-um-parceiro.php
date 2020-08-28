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
            Seja um parceiro
          </h2>
          <hr class="divider shadow" data-aos="fade-up" data-aos-duration="2000">
          </hr>
          <p class="descricao-empresa text-justify" data-aos="fade-up" data-aos-duration="2000">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente minima nemo aut beatae ipsa suscipit,
            numquam pariatur nobis mollitia nesciunt fugit Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, dicta corporis explicabo fugiat ipsam porro unde rerum repellat cumque quas consectetur, enim, exercitationem facere in incidunt expedita ex distinctio eius. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita nisi rerum quos quis, neque voluptas consectetur id?
          </p>
        </div>
        <div class="col order-md-last text-center">
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
              <textarea style="height: 150px !important;" name="mensagem" id="" cols="120" class="form-control" placeholder="Mensagem"
                required></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Enviar" class="form-control btn btn-primary py-3 px-5">
            </div>
          </form>
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