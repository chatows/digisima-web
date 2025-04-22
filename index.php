<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Digisima</title>
  <link rel="icon" href="favicon.png" type="image/png">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      line-height: 1.6;
      background-color: #fff;
      color: #333;
      scroll-behavior: smooth;
    }

    header {
      background: none;
      padding: 1rem;
      text-align: center;
    }

    header img {
      height: 200px;
      max-width: 100%;
    }

    section {
      padding: 4rem 1rem;
      max-width: 1000px;
      margin: auto;
      animation: fadeInUp 1s ease forwards;
    }

    section h2 {
      font-size: 2rem;
      color: #004f99;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .servicios {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: space-around;
    }

    .servicio {
      flex: 1 1 250px;
      background-color: #f4f4f4;
      border-left: 5px solid #ff6600;
      padding: 1.5rem;
      border-radius: 8px;
      transition: transform 0.3s ease;
    }

    .servicio:hover {
      transform: scale(1.05);
    }

    form {
      background-color: #f9f9f9;
      padding: 2rem;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    form label {
      display: block;
      margin-top: 1rem;
    }

    form input, form textarea {
      width: 100%;
      padding: 0.75rem;
      margin-top: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    form button {
      margin-top: 1.5rem;
      background-color: #004f99;
      color: white;
      padding: 0.75rem 2rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    form button:hover {
      background-color: #003366;
    }

    .testimonios, .blog {
      margin-top: 2rem;
    }

    .testimonio, .entrada-blog {
      background-color: #f2f2f2;
      padding: 1rem;
      margin-bottom: 1rem;
      border-left: 4px solid #004f99;
      border-radius: 6px;
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.8s ease forwards;
    }

    footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 1.5rem;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 600px) {
      .servicios {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <img src="logoDigisima.png" alt="Logo Digisima">
  </header>

  <?php if (isset($_GET['estado']) && $_GET['estado'] === 'exito'): ?>
    <h3 style="color: green;">Tu mensaje fue enviado correctamente. ¡Gracias por contactarnos!</h3>
  <?php elseif (isset($_GET['estado']) && $_GET['estado'] === 'error'): ?>
    <h3 style="color: red;">Ocurrió un error al enviar el mensaje. Intenta nuevamente.</h3>
  <?php endif; ?>

  <section>
    <h2>¿Quiénes somos?</h2>
    <p>
      En Digisima nos dedicamos a brindar consultoría, asesoría y capacitación especializada para la comercialización de activos digitales. Nuestro compromiso es impulsar tu crecimiento en el mundo digital con soluciones claras, profesionales y efectivas.
    </p>
  </section>

  <section>
    <h2>Servicios</h2>
    <div class="servicios">
      <div class="servicio">
        <h3>Consultoría</h3>
        <p>Te ayudamos a estructurar y optimizar tu modelo de negocio en el ecosistema digital.</p>
      </div>
      <div class="servicio">
        <h3>Asesoría</h3>
        <p>Recibe acompañamiento experto en la toma de decisiones relacionadas a activos digitales.</p>
      </div>
      <div class="servicio">
        <h3>Capacitación</h3>
        <p>Formamos a equipos y personas interesadas en aprender a operar con seguridad y eficiencia en entornos digitales.</p>
      </div>
    </div>
  </section>

  <section>
    <h2>Testimonios</h2>
    <div class="testimonios">
      <div class="testimonio">
        <strong>María G.</strong> <br>
        "Gracias a Digisima logré lanzar mi primer negocio digital con seguridad y confianza. ¡100% recomendados!"
      </div>
      <div class="testimonio">
        <strong>Carlos T.</strong> <br>
        "La capacitación fue clara, completa y muy útil. Me siento preparado para enfrentar el mundo cripto."
      </div>
    </div>
  </section>

  <section>
    <h2>Blog</h2>
    <div class="blog">
      <div class="entrada-blog">
        <strong>¿Qué son los activos digitales?</strong>
        <p>Explora una guía básica para comprender cómo funcionan y por qué están revolucionando el mercado global.</p>
      </div>
      <div class="entrada-blog">
        <strong>5 consejos para empezar a invertir en criptomonedas</strong>
        <p>Desde seguridad hasta estrategias simples para principiantes: lo que debes saber antes de empezar.</p>
      </div>
    </div>
  </section>

  

  <section>
    <h2>Contáctanos</h2>
    <form action="contacto.php" method="post">
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="correo">Correo electrónico</label>
      <input type="email" id="correo" name="correo" required>

      <label for="mensaje">Mensaje</label>
      <textarea id="mensaje" name="mensaje" rows="5" required></textarea>

      <button type="submit">Enviar mensaje</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 Digisima. Todos los derechos reservados.</p>
  </footer>
</body>
</html>
