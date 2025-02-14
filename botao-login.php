<script>
  // Cria o botão de login com a Senha Única USP
  const btn = ' \
    <style>.divider:after, .divider:before {content: ""; flex: 1; height: 1px; background: #eee;}</style> \
    <a href="glpi-uspoauth/uspoauth.php" class="btn btn-dark w-100 mt-2 mb-2">\
      Entrar com a Senha Única USP \
    </a> \
    <div class="divider d-flex align-items-center my-3"> \
      <p class="text-center fw-bold mx-3 mb-0">Ou</p> \
    </div> \
  ';

  // Após a página carregar, insere o botão
  document.addEventListener("DOMContentLoaded", function(event) { 
    // Cabeçalho do card de login
    const el = document.querySelector(".card-header");
    // Insere o botão após o cabeçalho
    el.insertAdjacentHTML("afterend", btn);
  });
</script>