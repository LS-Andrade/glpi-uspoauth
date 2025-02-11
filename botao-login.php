<script>
  // Cria o botão de login com a Senha Única USP
  const btn = ' \
    <a href="glpi-uspoauth/uspoauth.php" class="btn btn-primary w-100 mb-3">\
      Senha Única USP \
    </a> \
  ';
  // Após a página carregar, insere o botão
  document.addEventListener("DOMContentLoaded", function(event) { 
    // Cabeçalho do card de login
    const el = document.querySelector(".card-header");
    // Insere o botão após o cabeçalho
    el.insertAdjacentHTML("afterend", btn);
  });
</script>